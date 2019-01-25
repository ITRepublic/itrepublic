<?php
 
use App\notification_model;
use App\friends_list;
use App\job_finder_model;

if (!function_exists('save_notif')) {
    /**
     * Returns a human readable file size
     *
     * @param integer $bytes
     * Bytes contains the size of the bytes to convert
     *
     * @param integer $decimals
     * Number of decimal places to be returned
     *
     * @return string a string in human readable format
     *
     * */
    function save_notif($log_message, $jf_user_id, $all_friend)
    {
        $users = friends_list::where('jf_user_id','=',$jf_user_id)
        ->get();
        if ($all_friend == null){
            $post_user = job_finder_model::where('finder_id','=',$jf_user_id)
            ->first();
            foreach($users as $user) {
                $data['read_user_id'] = $user->partner_jf_user_id;
                $data['sent_user_id'] = $jf_user_id;
                $data['log_message'] = $post_user->full_name.$log_message;
                $data['status_id'] = 'UNREAD';
                $pf = notification_model::create($data);
            }
        }else{
            $post_user = job_finder_model::where('finder_id','=',$jf_user_id)
            ->first();
            $data['read_user_id'] = $all_friend;
            $data['sent_user_id'] = $jf_user_id;
            $data['log_message'] = $post_user->full_name.$log_message;
            $data['status_id'] = 'UNREAD';
            $pf = notification_model::create($data);
        }
    }
}
 