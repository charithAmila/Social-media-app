<?php
namespace models;

use models\Model;
use TwitterAPIExchange;
use config\TwitterConfig;


class TwitterPosts extends Model
{
    public $text;
    public $conf_array = [];


    public function __construct()
    {
        $this->conf_array = TwitterConfig::configData();
    }


    public function StatusUpdate()
    {
        $data = [];
        $settings = array('oauth_access_token' => $this->conf_array['oauth_access_token'],
		'oauth_access_token_secret' => $this->conf_array['oauth_access_token_secret'],
		'consumer_key' => $this->conf_array['consumer_key'],
		'consumer_secret' => $this->conf_array['consumer_secret']
		);
		
		$url = $this->conf_array['url_postStatusUpdate'];
		try
		{
			$twitter = new TwitterAPIExchange($settings);
		
			$requestMethod 	= 'POST';
			$postfields 	= array('status' => $this->text); 
		
			$twitter->buildOauth($url, $requestMethod)
			->setPostfields($postfields)
			->performRequest();
                        return 'sucess';
		}
		catch(Exception $e)
		{
                        return 'error';
		}
		
		
	}
    }
    
    
    
