<?php

namespace App\Http\Controllers;

use App\job_finder_model;
use App\post_feeds;
use App\post_feeds_likes;
use App\post_feeds_comment;
use App\friends_list;
use App\detail_group_friends;
use App\group_friends;
use App\notification_model;
use DB;
use App\group_discussion;
use App\direct_message;

use Illuminate\Http\Request;

class social_media_controller extends Controller
{
    public function create()
    {
        $post_feeds_shared = DB::select(
        "SELECT Q.*,A.*,`post_feeds`.*,`job_finder`.* FROM `post_feeds` 
        left join `job_finder` on `job_finder`.`finder_id` = `post_feeds`.`jf_user_id` 
        left join 
            (SELECT COUNT(`post_feeds_likes`.`likes_id`) as `total_likes`, `post_id`,
             GROUP_CONCAT(
                 DISTINCT CONCAT(`post_feeds_likes`.`jf_user_id`) 
                 ORDER BY `post_feeds_likes`.`likes_id`
                 SEPARATOR '~') as user_likes_id 
                 FROM `post_feeds_likes`
                 GROUP BY `post_feeds_likes`.`post_id`
            )Q on `post_feeds`.`post_id` = Q.`post_id` 
        left join 
            (SELECT COUNT(`post_feeds_comment`.`comment_id`) as `total_comment`, `post_id`, 
             GROUP_CONCAT(
                DISTINCT CONCAT(`job_finder`.`profile_pict`,':',`post_feeds_comment`.`comment`) 
                ORDER BY `post_feeds_comment`.`comment_id`
                SEPARATOR '~') as user_comment_id
                    FROM `post_feeds_comment` LEFT JOIN `job_finder` ON `post_feeds_comment`.`jf_user_id` = `job_finder`.`finder_id`
                   GROUP BY `post_feeds_comment`.`post_id`
            )A on `post_feeds`.`post_id` = A.`post_id` order by `post_feeds`.`post_id` ");

        // foreach($groups_list as $list) {
        //     $post_feed_like = bookmark_resume::join('job_creator','job_creator.user_id', '=', 'bookmark_resume.jc_user_id')
        //     ->join('master_customer','job_creator.company_id', '=', 'master_customer.company_id')
        //     ->where('master_customer.company_id',$company_id)
        //     ->distinct('jf_user_id')
        //     ->count('jf_user_id');
        // }

        $user_login = job_finder_model::where('finder_id','=',session('user_id'))
        ->get()->first();

        $users = job_finder_model::where('finder_id','!=',session('user_id'))
        ->get();

        $is_followed = [];
        foreach($users as $user) {
            $is_followed[$user->finder_id] = friends_list::where('partner_jf_user_id', $user->finder_id)->first();
        }

        $connections = friends_list::where('jf_user_id', session('user_id'))->count();

        return view('social_media_home', compact(
            'post_feeds_shared', 'users', 'is_followed', 'user_login', 'connections'
        ))->withTitle('Feeds');
    }
    public function friends_connect()
    {
        $connections = friends_list::where('jf_user_id', session('user_id'))->count();

        $connections_profile = friends_list::join('job_finder','friends_list.partner_jf_user_id','=','job_finder.finder_id')
        ->select('job_finder.profile_pict','job_finder.full_name')
        ->take(3)
        ->get();

        $groups = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->count();

        $groups_image = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->select('group_friends.group_name','group_friends.group_image')
        ->take(3)
        ->get();

        $owned_groups = group_friends::where('owner', session('user_id'))->count();

        $owned_groups_image = group_friends::select('group_name','group_image')
        ->where('owner', session('user_id'))
        ->orderBy('group_friends_id','desc')
        ->take(3)
        ->get();

        $users = job_finder_model::where('finder_id','!=',session('user_id'))
        ->get();

        $is_followed = [];
        foreach($users as $user) {
            $is_followed[$user->finder_id] = friends_list::where('partner_jf_user_id', $user->finder_id)->first();
        }

        $groups_list = group_friends::orderBy('group_friends_id','desc')->get();

        $is_in_group = [];
        $total_member = [];
        $connections_join = [];
        $is_join = [];
        foreach($groups_list as $list) {
            $is_in_group[$list->group_friends_id] = detail_group_friends::where('group_friends_id',$list->group_friends_id)
            ->where('jf_user_id', session('user_id'))
            ->first();

            $total_member[$list->group_friends_id] = detail_group_friends::where('group_friends_id',$list->group_friends_id)->count();

            $friends = friends_list::where('jf_user_id', session('user_id'))->get();
            foreach($friends as $friend) {
                $connections_join[$list->group_friends_id] = detail_group_friends::where('group_friends_id',$list->group_friends_id)
                ->where('jf_user_id', $friend->partner_jf_user_id)
                ->count();
            }

            $is_join[$list->group_friends_id] = detail_group_friends::where('group_friends_id',$list->group_friends_id)
            ->where('jf_user_id', session('user_id'), null)
            ->first();
        }

        return view('friends_connect', compact(
            'connections','connections_profile',
            'groups','groups_image',
            'owned_groups','owned_groups_image',
            'users','is_followed',
            'groups_list','is_in_group','total_member','connections_join','is_join'
        ))
        ->withTitle('Friends & Connections');
    }
    public function post_feeds_submit(Request $request) 
    {
        $user_id = session()->get('user_id');
        $rules = [
            'post_feeds'  => 'required'
    	];
        $this->validate($request, $rules);

        $data['post_text'] = $request->post_feeds;
        $data['post_picture_src'] = '';
        $data['post_videos_src'] = '';
        if ($request->hasFile('upload_post_image')) {
    		// will store in folder storage/app/image
            $path = 'storage/app/'.$request->file('upload_post_image')->store('post_picture');
            $data['post_picture_src'] = $path;
        }
        elseif ($request->hasFile('upload_post_video')){
            $path = 'storage/app/'.$request->file('upload_post_video')->store('post_video');
            $data['post_videos_src'] = $path;
        }
        else{
            $path = '';
        }
        $data['jf_user_id'] = $user_id;

        $pf = post_feeds::create($data);
        $jf_user_id = $user_id;
        save_notif(' has post new feed', $jf_user_id, null);

        return back()->withSuccess("Your post has been uploaded.");

    }
    public function notification()
    {
        $notification_model = notification_model::join('job_finder','notification_model.sent_user_id','=','finder_id')
        ->where('read_user_id', session('user_id'))
        ->get();

        $user_login = job_finder_model::where('finder_id','=',session('user_id'))
        ->get()->first();

        $users = job_finder_model::where('finder_id','!=',session('user_id'))
        ->get();

        $is_followed = [];
        foreach($users as $user) {
            $is_followed[$user->finder_id] = friends_list::where('partner_jf_user_id', $user->finder_id)->first();
        }

        $connections = friends_list::where('jf_user_id', session('user_id'))->count();
        
        return view('social_media_notification', compact(
            'notification_model', 'users', 'is_followed', 'user_login', 'connections'
        ))->withTitle('Notification');
    }
    public function confirm_like(Request $request) 
    {
        $post_id = $request->post_id;
        $jf_user_id = $request->jf_user_id;
        $post_feeds_check = post_feeds::where('post_id', $post_id)->first();
        
        if($post_feeds_check != null) {
 
            $data['post_id'] = $post_id;
            $data['jf_user_id'] = $jf_user_id;

            $pfl = post_feeds_likes::create($data);
            
            save_notif(' has like your post', $jf_user_id, $post_feeds_check->jf_user_id);
            return response()->json(array(
                'message' => 'OK'
            ));
            
        }else{
            return response()->json(array(
                'message' => 'ERROR'
            ));
        }
        // return response(200);

    }
    public function confirm_unlike(Request $request) 
    {
        
        $post_id = $request->post_id;
        $jf_user_id = $request->jf_user_id;

        $post_feeds_check = post_feeds_likes::where([
            ['jf_user_id', '=', $jf_user_id],
            ['post_id', '=', $post_id]
            ])->delete();

        return response()->json(array(
            'message' => 'OK'
        ));
        // return response(200);

    }
    public function add_comment(Request $request) 
    {
        $post_id = $request->post_id;
        $jf_user_id = $request->jf_user_id;
        $comment_text = $request->comment_text;
        $post_feeds_check = post_feeds::where('post_id', $post_id)->first();
        $data['post_id'] = $post_id;
        $data['jf_user_id'] = $jf_user_id;
        $data['comment'] = $comment_text;

        $pfc = post_feeds_comment::create($data);
        save_notif(' has commented your post', $jf_user_id, $post_feeds_check->jf_user_id);
        return response()->json(array(
            'message' => 'OK'
        ));
        // return response(200);

    }
    public function share_post(Request $request) 
    {
        
        $post_id = $request->post_id;
        $post_feeds_check = post_feeds::where('post_id', $post_id)->first();
        $data['post_text'] = $post_feeds_check->post_text;
        $data['post_picture_src'] = $post_feeds_check->post_picture_src;
        $data['post_videos_src'] = $post_feeds_check->post_videos_src;
        $data['jf_user_id'] = session('user_id');

        $pf = post_feeds::create($data);
        $jf_user_id = session('user_id');
        save_notif(' has repost your feed', $jf_user_id, $jf_user_id);

        return back()->withSuccess("Your post has been uploaded.");

    }

    public function create_group() {
        $connections = friends_list::where('jf_user_id', session('user_id'))->count();

        $connections_profile = friends_list::join('job_finder','friends_list.partner_jf_user_id','=','job_finder.finder_id')
        ->select('job_finder.profile_pict','job_finder.full_name')
        ->take(3)
        ->get();

        $groups = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->count();

        $groups_image = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->select('group_friends.group_name','group_friends.group_image')
        ->take(3)
        ->get();

        $owned_groups = group_friends::where('owner', session('user_id'))->count();

        $owned_groups_image = group_friends::select('group_name','group_image')
        ->where('owner', session('user_id'))
        ->orderBy('group_friends_id','desc')
        ->take(3)
        ->get();

        $users = job_finder_model::where('finder_id','!=',session('user_id'))
        ->get();

        $is_followed = [];
        foreach($users as $user) {
            $is_followed[$user->finder_id] = friends_list::where('partner_jf_user_id', $user->finder_id)->first();
        }

        return view('create_group', compact(
            'connections', 'connections_profile', 'groups', 'groups_image', 'owned_groups', 'owned_groups_image', 'users', 'is_followed'
        ))
        ->withTitle('Groups');
    }

    public function save_create_group(Request $request) {
        $this->validate($request, [
            'group_name' => 'required|unique:group_friends,group_name',
            'group_image' => 'required|mimes:jpg,jpeg,png'
        ]);

        $path = $request->file('group_image')->store('group_image');

        $data['group_name'] = $request->group_name;
        $data['owner'] = session('user_id');
        $data['group_image'] = 'storage/app/'.$path;
        $gf = group_friends::create($data);

        $item['group_friends_id'] = $gf->id;
        $item['jf_user_id'] = session('user_id');
        $item['role'] = 'Owner';
        detail_group_friends::create($item);

        return back()->withSuccess('Group has been created.');
    }

    public function my_connections() {
        $connections = friends_list::where('jf_user_id', session('user_id'))->count();

        $connections_profile = friends_list::join('job_finder','friends_list.partner_jf_user_id','=','job_finder.finder_id')
        ->select('job_finder.profile_pict','job_finder.full_name')
        ->take(3)
        ->get();

        $groups = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->count();

        $groups_image = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->select('group_friends.group_name','group_friends.group_image')
        ->take(3)
        ->get();

        $owned_groups = group_friends::where('owner', session('user_id'))->count();

        $owned_groups_image = group_friends::select('group_name','group_image')
        ->where('owner', session('user_id'))
        ->orderBy('group_friends_id','desc')
        ->take(3)
        ->get();

        $users = job_finder_model::where('finder_id','!=',session('user_id'))
        ->get();

        $is_followed = [];
        foreach($users as $user) {
            $is_followed[$user->finder_id] = friends_list::where('partner_jf_user_id', $user->finder_id)->first();
        }

        $my_connections = friends_list::join('job_finder','friends_list.partner_jf_user_id','=','job_finder.finder_id')
        ->select('job_finder.profile_pict','job_finder.full_name','job_finder.university','job_finder.field_of_study','friends_list.partner_jf_user_id')
        ->get();


        return view('my_connections', compact(
            'connections', 'connections_profile', 'groups', 'groups_image', 'owned_groups', 'owned_groups_image', 'users', 'is_followed', 'my_connections'
        ))->withTitle('My Connections');
    }

    public function joined_groups() {
        $connections = friends_list::where('jf_user_id', session('user_id'))->count();

        $connections_profile = friends_list::join('job_finder','friends_list.partner_jf_user_id','=','job_finder.finder_id')
        ->select('job_finder.profile_pict','job_finder.full_name')
        ->take(3)
        ->get();

        $groups = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->count();

        $groups_image = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->select('group_friends.group_name','group_friends.group_image')
        ->take(3)
        ->get();

        $owned_groups = group_friends::where('owner', session('user_id'))->count();

        $owned_groups_image = group_friends::select('group_name','group_image')
        ->where('owner', session('user_id'))
        ->orderBy('group_friends_id','desc')
        ->take(3)
        ->get();

        $users = job_finder_model::where('finder_id','!=',session('user_id'))
        ->get();

        $is_followed = [];
        foreach($users as $user) {
            $is_followed[$user->finder_id] = friends_list::where('partner_jf_user_id', $user->finder_id)->first();
        }

        $groups_list = group_friends::join('detail_group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->select('group_friends.group_name','group_friends.group_image','group_friends.group_friends_id')
        ->get();

        $total_member = [];
        foreach($groups_list as $list) {
            $total_member[$list->group_friends_id] = detail_group_friends::where('group_friends_id',$list->group_friends_id)->count();
        }

        return view('joined_groups', compact(
            'connections', 'connections_profile', 'groups', 'groups_image', 'owned_groups', 'owned_groups_image', 'users', 'is_followed',
            'groups_list', 'total_member'
        ))->withTitle('Joined Groups');
    }

    public function my_groups() {
        $connections = friends_list::where('jf_user_id', session('user_id'))->count();

        $connections_profile = friends_list::join('job_finder','friends_list.partner_jf_user_id','=','job_finder.finder_id')
        ->select('job_finder.profile_pict','job_finder.full_name')
        ->take(3)
        ->get();

        $groups = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->count();

        $groups_image = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->select('group_friends.group_name','group_friends.group_image')
        ->take(3)
        ->get();

        $owned_groups = group_friends::where('owner', session('user_id'))->count();

        $owned_groups_image = group_friends::select('group_name','group_image')
        ->where('owner', session('user_id'))
        ->orderBy('group_friends_id','desc')
        ->take(3)
        ->get();

        $users = job_finder_model::where('finder_id','!=',session('user_id'))
        ->get();

        $is_followed = [];
        foreach($users as $user) {
            $is_followed[$user->finder_id] = friends_list::where('partner_jf_user_id', $user->finder_id)->first();
        }

        $groups_list = group_friends::where('owner',session('user_id'))
        ->orderBy('group_friends_id','desc')
        ->get();

        $total_member = [];
        foreach($groups_list as $list) {
            $total_member[$list->group_friends_id] = detail_group_friends::where('group_friends_id',$list->group_friends_id)->count();
        }

        return view('my_groups', compact(
            'connections', 'connections_profile', 'groups', 'groups_image', 'owned_groups', 'owned_groups_image', 'users', 'is_followed',
            'groups_list', 'total_member'
        ))->withTitle('My Groups');
    }

    public function update_my_groups(Request $request, $id) {
        $this->validate($request, [
            'group_name' => 'required',
            'group_image' => 'mimes:jpg,jpeg,png'
        ]);

        if($request->hasFile('group_image')) {
            $path = $request->file('group_image')->store('group_image');
            $data['group_image'] = 'storage/app/'.$path;
        }

        $data['group_name'] = $request->group_name;
        group_friends::where('group_friends_id', $id)->update($data);
        
        return back()->withSuccess('Group has been updated.');
    }

    public function join_group($id) {
        $group = group_friends::where('group_friends_id', $id)->first();

        $data['group_friends_id'] = $id;
        $data['jf_user_id'] = session('user_id');
        $data['role'] = 'Member';
        detail_group_friends::create($data);

        return back()->withSuccess('You just joined group '.$group->group_name);
    }

    public function follow_connection($id) {
        $user = job_finder_model::where('finder_id',$id)->first();

        $data['jf_user_id'] = session('user_id');
        $data['partner_jf_user_id'] = $id;
        friends_list::create($data);

        return back()->withSuccess('You just followed '.$user->full_name);
    }

    public function group_discussion(Request $request) {
        $connections = friends_list::where('jf_user_id', session('user_id'))->count();

        $connections_profile = friends_list::join('job_finder','friends_list.partner_jf_user_id','=','job_finder.finder_id')
        ->select('job_finder.profile_pict','job_finder.full_name')
        ->take(3)
        ->get();

        $groups = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->count();

        $groups_image = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->select('group_friends.group_name','group_friends.group_image')
        ->take(3)
        ->get();

        $owned_groups = group_friends::where('owner', session('user_id'))->count();

        $owned_groups_image = group_friends::select('group_name','group_image')
        ->where('owner', session('user_id'))
        ->orderBy('group_friends_id','desc')
        ->take(3)
        ->get();

        $users = job_finder_model::where('finder_id','!=',session('user_id'))
        ->get();

        $is_followed = [];
        foreach($users as $user) {
            $is_followed[$user->finder_id] = friends_list::where('partner_jf_user_id', $user->finder_id)->first();
        }

        $group_id = $request->group_id;
        $group = group_friends::join('job_finder','job_finder.finder_id','=','group_friends.owner')
        ->where('group_friends.group_friends_id', $group_id)
        ->select('group_friends.*','job_finder.full_name as group_owner')
        ->first();

        $discussions = group_discussion::join('job_finder','job_finder.finder_id','=','group_discussion.user_id')
        ->where('group_discussion.group_id', $group_id)
        ->select('group_discussion.*','job_finder.full_name as author','job_finder.profile_pict as author_photo')
        ->get();

        return view('group_discussion', compact(
            'connections', 'connections_profile', 'groups', 'groups_image', 'owned_groups', 'owned_groups_image', 'users', 'is_followed',
            'group', 'discussions', 'request'
        ))->withTitle('Group Discussion');
    }

    public function post_group_discussion(Request $request, $id) {
        $this->validate($request, [
            'message' => 'required|max: 160'
        ]);

        $post['user_id'] = session('user_id');
        $post['group_id'] = $id;
        $post['message'] = nl2br($request->message);
        group_discussion::create($post);

        return back();
    }

    public function direct_message(Request $request) {
        $connections = friends_list::where('jf_user_id', session('user_id'))->count();

        $connections_profile = friends_list::join('job_finder','friends_list.partner_jf_user_id','=','job_finder.finder_id')
        ->select('job_finder.profile_pict','job_finder.full_name')
        ->take(3)
        ->get();

        $groups = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->count();

        $groups_image = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
        ->where('group_friends.owner','!=',session('user_id'))
        ->select('group_friends.group_name','group_friends.group_image')
        ->take(3)
        ->get();

        $owned_groups = group_friends::where('owner', session('user_id'))->count();

        $owned_groups_image = group_friends::select('group_name','group_image')
        ->where('owner', session('user_id'))
        ->orderBy('group_friends_id','desc')
        ->take(3)
        ->get();

        $users = job_finder_model::where('finder_id','!=',session('user_id'))
        ->get();

        $is_followed = [];
        foreach($users as $user) {
            $is_followed[$user->finder_id] = friends_list::where('partner_jf_user_id', $user->finder_id)->first();
        }

        $connection_id = $request->connection_id;
        $user = job_finder_model::where('finder_id',$connection_id)->first();

        $messages = direct_message::join('job_finder','job_finder.finder_id','=','direct_message.user_id')
        ->where('direct_message.connection_id', $connection_id)
        ->select('direct_message.*','job_finder.full_name as author','job_finder.profile_pict as author_photo')
        ->get();

        return view('direct_message', compact(
            'connections', 'connections_profile', 'groups', 'groups_image', 'owned_groups', 'owned_groups_image', 'users', 'is_followed',
            'request', 'user', 'messages'
        ))->withTitle('Direct Message');
    }

    public function send_direct_message(Request $request, $id) {
        $this->validate($request, [
            'message' => 'required|max:160'
        ]);

        $post['user_id'] = session('user_id');
        $post['connection_id'] = $id;
        $post['message'] = nl2br($request->message);
        direct_message::create($post);

        return back();
    }
}
