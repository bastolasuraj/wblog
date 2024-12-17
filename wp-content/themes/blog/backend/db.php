<?php
require '../vendor/autoload.php'; // Include Composer autoloader

// MongoDB connection details
$uri = "mongodb+srv://bastolasuraj:2rybcbwpLjSlM2xY@boilerplate.blmkt.mongodb.net/?retryWrites=true&w=majority";
$client = new MongoDB\Client($uri);

// Select the database
$db = $client->boilerplate;

// Return the database instance
return $db;
?>
