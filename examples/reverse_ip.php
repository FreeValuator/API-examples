<?php
/**
 *  Example Reverse IP call
 *  Free Valuator API
 */

// Fill in your API Key
$api_key = 'your api key here';

// Fill in your username
$username = 'your username here';

// Fill in the domain to check
$domain = 'example.com';

// Set up the curl resource
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.freevaluator.com/?todo=reverseip&format=json&username=$username&api_key=$api_key&domain=$domain");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute the request
$output = curl_exec($ch);

// Output the result data
$result = json_decode($output);
print_r($result);

// Close curl resource to free up system resources
curl_close($ch);
?>
