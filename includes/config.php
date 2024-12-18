<?php

session_start();
// Retrieve IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Retrieve location using IP address
$location = file_get_contents("http://ip-api.com/json/{$ip}");
$locationData = json_decode($location);

// Retrieve internet connection details
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Get the complete URL with protocol and domain
$currentFullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];



	define('PHONE', '+1-628-256-4002'); // phone
	define('PHONE_HREF', 'tel:+1-628-256-4002'); // tel: phone
	define('WEBSITE_NAME', 'The Native Publishers'); // website name
	define('ADMIN_EMAIL', 'info@thenativepublishers.com'); // website name
	define('ADDRESS', '100 Pine St Suite 1150-1151 , San Francisco, CA 94111');
	
?>
