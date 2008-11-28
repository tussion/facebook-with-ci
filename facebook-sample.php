<?php
// Copyright 2007 Facebook Corp.  All Rights Reserved.
//
// Application: A sample application with CodeIgniter
// File: 'index.php'
//   This is a sample skeleton for your application.
//

require_once 'facebook.php';

$appapikey = 'b54184558866eeab2c8db3acdc3eae04';
$appsecret = '2adf506bd8dcd1676afd7bea17328fc1';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();

// Greet the currently logged-in user!
echo "<p>Hello, <fb:name uid=\"$user_id\" useyou=\"false\" />!</p>";

// Print out at most 25 of the logged-in user's friends,
// using the friends.get API method
echo "<p>Friends:";
$friends = $facebook->api_client->friends_get();
$friends = array_slice($friends, 0, 25);
foreach ($friends as $friend) {
  echo "<br>$friend";
}
echo "</p>";
?>