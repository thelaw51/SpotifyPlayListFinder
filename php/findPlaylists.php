<?php
header('Content-Type: application/json');

require 'vendor/autoload.php';
require 'auth.php';

// Authenticate with Spotify API function from auth.php
$api = AuthSpotifyAPI();

// Specify the song you want to search for
$trackName = 'Despacito';

// Use the search method to find playlists containing the specified track
$results = $api->search($trackName, 'playlist');
$playlists = $results->playlists->items;

// Display the playlists that contain the specified track
$playlistData = [];

foreach ($playlists as $playlist) {
    $playlistData[] = [
        'Playlist Name' => $playlist->name,
        'Playlist ID' => $playlist->id
    ];
}

echo json_encode($playlistData, JSON_PRETTY_PRINT);
