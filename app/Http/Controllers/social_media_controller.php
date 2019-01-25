<?php

namespace App\Http\Controllers;

use App\job_finder_model;
use App\post_feeds;
use App\post_feeds_likes;
use App\post_feeds_comment;
use App\friends_list;
use App\detail_group_friends;
use App\group_friends;
use App\group_discussion;

use Illuminate\Http\Request;

class social_media_controller extends Controller
{
    public function create()
    {
        $post_feeds_shared = post_feeds::join('job_finder','post_feeds.jf_user_id','=','job_finder.finder_id')
        ->get();

        $users = job_finder_model::where('finder_id','!=',session('user_id'))
        ->get();

        $is_followed = [];
        foreach($users as $user) {
            $is_followed[$user->finder_id] = friends_list::where('partner_jf_user_id', $user->finder_id)->first();
        }

        return view('social_media_home', compact(
            'post_feeds_shared', 'users', 'is_followed'
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
            ->where('jf_user_id', session('user_id'))
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
       
        if ($request->hasFile('upload_post_image')) {
    		// will store in folder storage/app/image
    		$path = 'storage/app/'.$request->file('upload_post_image')->store('post_picture');
        }
        else{
            $path = '';
        }
        $data['post_picture_src'] = $path;
        $data['post_videos_src'] = '';
        $data['jf_user_id'] = $user_id;

        $pf = post_feeds::create($data);

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
        ->select('job_finder.profile_pict','job_finder.full_name','job_finder.university','job_finder.field_of_study')
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
}
