<?php

class MainController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Main Controller
	|--------------------------------------------------------------------------
	*/

	public function index()
	{
		// landing page
		return View::make('front');
	}
    
    /**
     * Login - user redirected to login with Twitter
     * 
     */
    
    function login()
    {
        // Reqest tokens
        $tokens = Twitter::oAuthRequestToken();
    
        // Redirect to twitter
        Twitter::oAuthAuthenticate(array_get($tokens, 'oauth_token'));
        
        exit;        
    }    
    
    /**
     * Twittercallback() - Redirected from Twitter API after user authorizes application
     */

    function twittercallback()
    {
        // Oauth token
        $token = Input::get('oauth_token');
    
        // Verifier token
        $verifier = Input::get('oauth_verifier');
    
        // Request access token
        $accessToken = Twitter::oAuthAccessToken($token, $verifier);
        $oauth = $accessToken['oauth_token'];
        $oauth_token_secret = $accessToken['oauth_token_secret'];
        $username = $accessToken['screen_name'];
        
        // insert into db
        $user_id = User::newuser($oauth, $oauth_token_secret, $username);  
        
        // create session
        Session::put('user', $user_id);
        
        // redirect to check grammar user area        
        return Redirect::to('user');
    }
    
    /** User() - main area where user views grammar mistakes
     * @str
     */
    
    public function user()
    {
       // if user session
       $session = Session::get('user');
       
       if(!empty($session))
       {
            // grab username using user_id used as session
            $userdata = User::finduser($session);
            $udata['username']  = $userdata->username;
            $udata['oauth_secret'] = $userdata->oauth_token_secret;
            $udata['oauth'] = $userdata->oauth;
            
            // call tweets() method
            $data = $this->tweets($udata);

            // load user area view with data and tweets
            return View::make('user')->with('data',$data);
       }    
       else
       {
           // session empty
           return Redirect::to('/');
       }     
    }    
    
    /**
     * Tweets - method to grab 20 tweets from current user profile
     */

    function tweets($udata)
    {
        // grab user access token and username
        $access_token = $udata['oauth'];
        $access_secret = $udata['oauth_secret'];
        Twitter::setOAuthToken($access_token);
        Twitter::setOAuthTokenSecret($access_secret);
    
        // call grammar checker 
        $gin = new Gin();
    
        // Get tweets
        $timeline = Twitter::statusesUserTimeline($udata['username']);
        
        // loop through each tweet
        $tweetArray = array();
        foreach ($timeline as $t)
        {
            $tw = $t['text'];  
            // remove hashtag, links and mentions as will screw up the grammar ;)
            $str1 = preg_replace('/(^|\s)#(\w*[a-zA-Z_]+\w*)/', ' (Hashtag) ', $tw);
            $str2 = preg_replace('/http:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', ' (Link) ', $str1);
            $str3 = preg_replace('/(^|\s)(@\w+)/',' (Mention) ', $str2);
            $str4 = preg_replace('/https:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', ' (Link) ', $str3);
            
            $tweetArray[] = $str4;
        }   

        return $tweetArray;
    }    
}
