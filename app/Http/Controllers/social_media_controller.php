<?php

namespace App\Http\Controllers;

use App\job_finder_model;
use App\post_feeds;
use App\post_feeds_likes;
use App\post_feeds_comment;
use App\friends_list;
use App\detail_group_friends;
use App\group_friends;

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

        $groups = detail_group_friends::where('jf_user_id', session('user_id'))->count();

        $groups_image = detail_group_friends::join('group_friends','group_friends.group_friends_id','=','detail_group_friends.group_friends_id')
        ->where('detail_group_friends.jf_user_id', session('user_id'))
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
}
