<?php
require_once (__DIR__.'/../../vendor/autoload.php');
use controllers\SocialMediaPost;

$controller = new SocialMediaPost();
/*
* posts
*/
if(isset($_POST['s_post']))
{
    $tw = $controller->TwitterPost($_POST['s_post']);
    $fb = $controller->FbPost($_POST['s_post']);
    header('Location: ../../?tw='.$tw.'&fb='.$fb);
}  
else 
{
    header('Location: ../../');
}
