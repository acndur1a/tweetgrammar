<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

use Jenssegers\Mongodb\Model as Eloquent;

class User extends Eloquent {
        
    protected $connection = 'mongodb';

    // mongodb collection name associated with this model
    
    protected $collection = 'user';
    
    public static function newuser($oauth, $oauth_token_secret, $username)
    {
        $user = new User;

        $user->oauth = $oauth;
        
        $user->oauth_token_secret = $oauth_token_secret;
        
        $user->username = $username;
        
        $user->save();
        
        return $user->id;
    }
    
    public static function finduser($user_id)
    {
        $user = new User;
            
        $userdata = User::find($user_id);
        
        return $userdata;
    }
    

}
