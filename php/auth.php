<?php
require 'vendor/autoload.php';


function AuthSpotifyAPI()
{
    $session = new SpotifyWebAPI\Session(
        'YOUR_CLIENT_ID',
        'YOUR_CLIENT_SECRET',
        'YOUR_REDIRECT_URI' // This should be set in your Spotify Developer Dashboard
    );

    $api = new SpotifyWebAPI\SpotifyWebAPI();
    $session->requestCredentialsToken();
    $accessToken = $session->getAccessToken();

    $api->setAccessToken($accessToken);

    return $api;
}
