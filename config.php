<?php

//start session on web page

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('863915440820-6hr3e9n3gefr17fkad4h7ljcpt8kk69q.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('PE8lr0Bxi0LMQniLDMk9LjxB');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/proj_final/login.php');

// to get the email and profile
$google_client->addScope('email');

$google_client->addScope('profile');

?>
