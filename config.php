<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('Here CLient id');//client id

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('Here client secret key');//client secret key

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('here url');//where login button show

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>