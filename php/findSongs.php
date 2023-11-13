<?php
// Set up the Spotify Web API PHP library
require 'vendor/autoload.php';
require 'auth.php';

// Authenticate with Spotify API function from auth.php
$api = AuthSpotifyAPI();

// Get the search query from the user input
$query = $_GET['q'];

// Search for tracks that match the query
$results = $api->search($query, 'track');

// Return the results in JSON format
header('Content-Type: application/json');
echo json_encode($results);
