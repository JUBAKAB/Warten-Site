<?php


$consumer_key="alJJ5anDRjQqmXqxcrxyBV8pr";
$consumer_secret="r52stO6kdeL4PwcaaKYbmPBuV2b0PYAGziXyYvxAa29nfnuSmC";
$accesToken ="2391433982-aFqHzy2aiJXdkClb9EyTZ3XSjFBbTi2S5RGPry0";
$accesToken_secret="KUdO4RGzSGsM7bZjAvhuEpSCxToLnuTBfjOyUOurP7aSm";

require "autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$connection= new TwitterOAuth($consumer_key,$consumer_secret,$accesToken,$accesToken_secret);

$user = $connection->get("account/verify_credentials");


echo' Hey ' .$user->screen_name.'<br>';
// Create tweet 

//$new_status = $connection->post("statuses/update",["status" => "This tweet sent via the twitter API"]);

$tweets = $connection->get("statuses/user_timeline",["count" => 200 , "exclude_replies" => true , 'screen_name' => 'ElNelyo']);

$totalTweets[] = $tweets;
$page = 0;


for($count = 200; $count<500;$count+=200){
	$max = count($totalTweets[$page]) -1;
	$tweets = $connection->get("statuses/user_timeline",["count" => 200 , "exclude_replies" => true ,'max_id'=>$totalTweets[$page][$max]->id_str, 'screen_name' => 'ElNelyo']);
	$totalTweets[] = $tweets;
	$page += 1;

}


$start = 1;

foreach ($totalTweets as $page) {
	foreach ($page as $key ) {
		echo $start.':'.$key->text .'<br>';
		$start ++;
	}
	# code...
}








