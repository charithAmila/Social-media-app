# Social media app
Social-media-app is an application that lets users schedule and post to Social Media.

# Features
1. Post your status to selected social media (Twitter,Facebook)

# Setup
Clone this repo to your desktop and run composer update to install all the dependencies.

# Configuration
You must want to look  
lib/config/FbConfig.php,
lib/config/TwitterConfig.php

to configuration like bellow.

1. FbConfig.php
add your facebook configuration detail bellow array.
  return [
            'appId'=>'Your app id', // appId  from your facebook app
            'secret'=>'Your secrt', // secret  from your facebook app
            'accessToken'=>'your access Token', // accessToken  from your facebook app
          ];
2. TwitterConfig.php
add your twitter configuration detail bellow array.
return [
            'oauth_access_token'=>'your auth access token',
            'oauth_access_token_secret'=>'your auth access token secret',
            'consumer_key'=>'your consumer key',
            'consumer_secret'=>'your consumer secret',
            'url_postStatusUpdate'=>'https://api.twitter.com/1.1/statuses/update.json'
		   ];







