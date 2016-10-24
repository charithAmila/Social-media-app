<?php
namespace controllers;
use models\TwitterPosts;
use models\FaceBookPosts;

/**
 * SocialMediaPost controller implements the authenticate and post to social media for TwitterPosts model.
 */
class SocialMediaPost
{
    

    public function TwitterPost($msg)
    {
        $model = new TwitterPosts();
        $model->text = $msg;
        if($model->validator())
        {
            return $model->StatusUpdate();
//            if($model->StatusUpdate()){
//                header('Location: ../../?tw=success');
//            }
//            else
//            {
//                header('Location: ../../?tw=error');
//            }
                
        }
    }
    
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
