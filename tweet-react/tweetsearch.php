<?php
	namespace kai;
	//display errors for debug
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	require_once ('../vendor/autoload.php');

	//use \TwitterAPIExchange as TwitterAPIExchange;

	$settings = array(
	    'oauth_access_token' => "3232926711-kvMvNK5mFJlUFzCdtw3ryuwZfhIbLJtPX9e8E3Y",
	    'oauth_access_token_secret' => "EYrFp0lfNajBslYV3WgAGmpHqYZvvNxP5uxxSq8Dbs1wa",
	    'consumer_key' => "VXD22AD9kcNyNgsfW6cwkWRkw",
	    'consumer_secret' => "y0k3z9Y46V0DMAKGe4Az2aDtqNt9aXjg3ssCMCldUheGBT0YL9"
	);


	/**
	 * A simple class to just search the twitter API
	 * Requires https://github.com/J7mbo/twitter-api-php
	 */
	class twitterSearch 
	{
		public $twitter;

		function __construct($settings)
		{
			# code...
			$this->twitter = new \TwitterAPIExchange($settings);
		}

		/**
		 * searchUser the twitter API
		 *
		 * @param String   $username  a username string to search
		 * 
		 * @return JSON dump
		 */ 
		public function searchTweets($username)
		{

			$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
			$getfield = '?screen_name=' . $username;
			$requestMethod = 'GET';

			$response = $this->twitter->setGetfield($getfield)
			    ->buildOauth($url, $requestMethod)
			    ->performRequest();

			echo "Request URL: " . $url . $getfield . "\n";
			var_dump(json_decode($response));
		}

		/**
		 * searchHash the twitter API
		 *
		 * @param String   $hashTag  a hashtag string to search without the #
		 * 
		 * @return JSON dump
		 */ 
		public function searchHash($hashTag)
		{
			$hashTag = ltrim($hashTag, "#");
			$url = 'https://api.twitter.com/1.1/search/tweets.json';
			$getfield = '?q=#' . $hashTag;
			$requestMethod = 'GET';

			echo "Request URL: " . $url . $getfield . "\n";
			$response = $this->twitter->setGetfield($getfield)
			    ->buildOauth($url, $requestMethod)
			    ->performRequest();

			var_dump(json_decode($response));
		}
 

		/**
		 * Returns just a sample JSON dump of the twitter API
		 *
		 * @return JSON object
		 */ 
		public function searchTweetsSample()
		{
			$file = file_get_contents('./sample.json', FILE_USE_INCLUDE_PATH);

			try {
				$json = json_decode($file);
			} catch (Exception $e) {
			    echo 'Caught exception: ',  $e->getMessage(), "\n";
			    $json = [];
			}

			return $json;

		}
	}

	//Do basic routing and "controller" here
	$twitterClass = new twitterSearch($settings);

	if ( isset( $_POST['searchuser'] ) )
	{
		$twitterClass->searchTweets($_POST['user']);
	}

	if ( isset(  $_POST['searchhash'] ) )
	{
		$twitterClass->searchHash($_POST['hash']);
	}


	if ( isset(  $_POST['getsample'] ) )
	{
		/*don't apply anything at the moment*/
		$json = $twitterClass->searchTweetsSample();
		echo json_encode($json);
	}