<?php
/**
 *  Example Facebook Page Worth call
 *  Free Valuator API
 */

// Fill in your API Key
$api_key = 'your api key here';

// Fill in your username
$username = 'your username here';

// Fill in the Facebook page to check. 	
// Fill in the Facebook vanity url that comes after https://www.facebook.com/. For example: freevaluator for https://www.facebook.com/freevaluator (Our Facebook page).
$facebook = 'freevaluator';

// Set up the curl resource
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.freevaluator.com/?todo=facebookworth&format=json&username=$username&api_key=$api_key&facebook=$facebook");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute the request
$output = curl_exec($ch);

// Output the result data
$result = json_decode($output);
print_r($result);

// Close curl resource to free up system resources
curl_close($ch);
?>
