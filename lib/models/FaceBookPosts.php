<?php
namespace models;

use models\Model;
use Facebook;
use config\FbConfig;

class FaceBookPosts extends Model
{
    public $text;
    private $conf_array = [];
    
    public function __construct() 
    {
        
        $this->conf_array = FbConfig::configData();
    }
    public function StatusUpdate()
    {
        
        $fb = new Facebook\Facebook([
			'app_id' => $this->conf_array['appId'],
			'app_secret' => $this->conf_array['secret'],
			'default_graph_version' => 'v2.6'
		]);
		
		$linkData = [
                    'message' => $this->text,
		];
		try 
		{
			// Returns a `Facebook\FacebookResponse` object
			$response  = $fb->post('/me/feed', $linkData, $this->conf_array['accessToken']);
			$graphNode = $response->getGraphNode();
                        return 'success';
		} 
		catch(Facebook\Exceptions\FacebookResponseException $e) 
		{
                        return 'error';
                        
		} 
		catch(Facebook\Exceptions\FacebookSDKException $e)
		{
                        return 'error';
		}
                
		
		
    }
    
}