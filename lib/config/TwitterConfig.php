<?php
namespace config;
/**
 * TwitterConfig class provide twitter user configuration data.
 */
class TwitterConfig
{
        /**
         * Privide User Twitter Credentials
         * @return type array
         */
        public static function configData()
        {
            return [
                        'oauth_access_token'=>'your auth access token',
                        'oauth_access_token_secret'=>'your auth access token secret',
                        'consumer_key'=>'your consumer key',
                        'consumer_secret'=>'your consumer secret',
                        'url_postStatusUpdate'=>'https://api.twitter.com/1.1/statuses/update.json'

		   ];
        }
}


