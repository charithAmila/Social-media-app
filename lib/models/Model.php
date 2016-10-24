<?php
namespace models;

class Model
{
    public $media;
    public function __construct() 
    {
        
    }
    
    public function validator()
    {
        if(!strlen(trim($this->text)))
        {
            return false;
        }  else 
        {
            return true;
        }
    }
}

