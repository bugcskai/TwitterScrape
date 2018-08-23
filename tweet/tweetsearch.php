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

		public function searchTweets($username)
		{

			$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
			$getfield = '?screen_name=' . $username;
			$requestMethod = 'GET';

			$response = $this->twitter->setGetfield($getfield)
			    ->buildOauth($url, $requestMethod)
			    ->performRequest();

			var_dump(json_decode($response));
		}

		public function searchHash($hashTag)
		{
			$hashTag = ltrim("#");
			$url = 'https://api.twitter.com/1.1/search/tweets.json';
			$getfield = '?q=#' . $hashTag;
			$requestMethod = 'GET';

			$response = $this->twitter->setGetfield($getfield)
			    ->buildOauth($url, $requestMethod)
			    ->performRequest();

			var_dump(json_decode($response));
		}
	}

	$twitterClass = new twitterSearch($settings);

	if ( isset( $_POST['searchuser'] ) )
	{
		$twitterClass->searchTweets($_POST['user']);
	}

	if ( isset(  $_POST['searchhash'] ) )
	{

		$twitterClass->searchHash($_POST['hash']);
	}