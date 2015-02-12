<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class facebook_model extends Model{
        function facebook_model(){
                parent::Model();
        }

//get_facebook_cookie() is stolen and slightly modified from sample code provided by Facebook in their documentation. You will need to modify the values for $app_id and $application_secret to the values that you got from Facebook when you registered your site with Facebook.
        function get_facebook_cookie() {
                $app_id             = '706055549442074';
                $application_secret = '78d23945f51828c8dbb452a2566f6f9b';

                if(isset($_COOKIE['fbs_' . $app_id])){
                        $args = array();
                        parse_str(trim($_COOKIE['fbs_' . $app_id], '\\"'), $args);
                        ksort($args);
                        $payload = '';
                        foreach ($args as $key => $value) {
                                if ($key != 'sig') {
                                $payload .= $key . '=' . $value;
                                }
                        }
                        if (md5($payload . $application_secret) != $args['sig']) {
                                return null;
                        }
                        return $args;
                }
                else{
                        return null;
                }
        }

//getUser() - Gets information about the logged in user
        function getUser(){
                $cookie = $this->get_facebook_cookie();
                $user = @json_decode(file_get_contents(
                                'https://graph.facebook.com/me?access_token=' .
                                $cookie['access_token']), true);
                return $user;
        }


//getFriendIds() - Gets an array of the Facebook Id's of the friends of the logged in user. By default, it adds the logged in user's id at the end of the array.
        function getFriendIds($include_self = TRUE){
                $cookie = $this->get_facebook_cookie();
                $friends = @json_decode(file_get_contents(
                                'https://graph.facebook.com/me/friends?access_token=' .
                                $cookie['access_token']), true);
                $friend_ids = array();
                foreach($friends['data'] as $friend){
                        $friend_ids[] = $friend['id'];
                }
                if($include_self == TRUE){
                        $friend_ids[] = $cookie['uid'];
                }

                return $friend_ids;
        }

//getFriends() - Gets an array of the logged user's friends' id's and their names. The array is in the format that Facebook outputs.
        function getFriends($include_self = TRUE){
                $cookie = $this->get_facebook_cookie();
                $friends = @json_decode(file_get_contents(
                                'https://graph.facebook.com/me/friends?access_token=' .
                                $cookie['access_token']), true);

                if($include_self == TRUE){
                        $friends['data'][] = array(
                                'name'   => 'You',
                                'id' => $cookie['uid']
                        );
                }

                return $friends['data'];
        }


//getFriendsArray() - Like the above function, but the outputted array is in a more useful (in my opinion) format. The array key is the friends' user ids, and the array value is the name of the friends.
        function getFriendArray($include_self = TRUE){
                $cookie = $this->get_facebook_cookie();
                $friendlist = @json_decode(file_get_contents(
                                'https://graph.facebook.com/me/friends?access_token=' .
                                $cookie['access_token']), true);
                $friends = array();
                foreach($friendlist['data'] as $friend){
                        $friends[$friend['id']] = $friend['name'];
                }
                if($include_self == TRUE){
                        $friends[$cookie['uid']] = 'You';
                }

                return $friends;
        }
}

?>
