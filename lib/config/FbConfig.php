<?php
namespace config;
/**
 * FbConfig class provide facebook user configuration data.
 */
class FbConfig
{
    /**
     * Privide User Facebook Credentials
     * @return type array
     */
    public static function configData()
    {
        return [
                'appId'=>'Your app id', // appId  from your facebook app
                'secret'=>'Your secrt', // secret  from your facebook app
                'accessToken'=>'your access Token', // accessToken  from your facebook app
               ];
   }
}

