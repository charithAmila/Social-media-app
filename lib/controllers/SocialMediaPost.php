<?php
namespace controllers;
use models\TwitterPosts;
use models\FaceBookPosts;

/**
 * SocialMediaPost controller implements the  post to social media for TwitterPosts,FaceBookPosts models.
 */
class SocialMediaPost
{
    
    /**
     * Create a new twitter post
     * if post is success return success message
     * if post is fail return error message
     * @param type $msg
     * @return type string
     */
    public function TwitterPost($msg)
    {
        $model = new TwitterPosts();
        $model->text = $msg;
        if($model->validator())
        {
            return $model->StatusUpdate();                
        }
    }
    /**
     * Create a new facebook post
     * if post is success return success message
     * if post is fail return error message
     * @param type $msg
     * @return type string
     */
    public function FbPost($msg)
    {
        $model = new FaceBookPosts();
        $model->text = $msg;
        if($model->validator())
        {
            return $model->StatusUpdate();
        }
    }
    
}
