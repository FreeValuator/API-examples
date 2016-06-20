<?php
/**
 *  Example Twitter Username Worth call
 *  Free Valuator API
 */

// Fill in your API Key
$api_key = 'your api key here';

// Fill in your username
$username = 'your username here';

// Fill in the Twitter username where you would like to check the worth of.
$twitter = 'freevaluator';

// Set up the curl resource
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.freevaluator.com/?todo=twitterworth&format=json&username=$username&api_key=$api_key&twitter=$twitter");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute the request
$output = curl_exec($ch);

// Output the result data
$result = json_decode($output);
print_r($result);

// Close curl resource to free up system resources
curl_close($ch);
?>
