<?php
namespace models;
/**
 * Model is parent for FacebookPosts and Twitter Posts
 */
class Model
{
    public $media;
    /*
     * Validate  posts
     * @return type true or false
     * if validate is pass return true
     * if not validate is pass return false
     */
    public function validator()
    {
        if(!strlen(trim($this->text)))
        {
            return false;
        }  
        else 
        {
            return true;
        }
    }
}

