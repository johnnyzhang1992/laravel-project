<?php
use App\User;

/**
 * Created by PhpStorm.
 * User: lufficc
 * Date: 2016/9/11
 * Time: 1:43
 */

if (!function_exists('isAdmin')) {
    function isAdmin($user)
    {
        return $user != null && $user instanceof User && $user->id == 1;
    }
}

if (!function_exists('getAdminUser')) {
    function getAdminUser()
    {
        return User::findOrFail(1);
    }
}

if (!function_exists('getMentionedUsers')) {
    function getMentionedUsers($content)
    {
        preg_match_all("/(\S*)\@([^\r\n\s]*)/i", $content, $atlist_tmp);
        $usernames = [];
        foreach ($atlist_tmp[2] as $k => $v) {
            if ($atlist_tmp[1][$k] || strlen($v) > 25) {
                continue;
            }
            $usernames[] = $v;
        }
        $users = User:: whereIn('name', array_unique($usernames))->get();
        return $users;
    }
}
