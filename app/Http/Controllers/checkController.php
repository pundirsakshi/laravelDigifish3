<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkController extends Controller
{
    public function yourControllerMethod(Request $request)
{
    // Your username and password
    $username = 'your_username';
    $password = 'your_password';

    // Combine username and password with a colon
    $credentials = $username . ':' . $password;

    // Base64 encode the combined string
    $base64Credentials = base64_encode($credentials);

    // Create the Basic Authentication header value
    $authHeader = 'Basic ' . $base64Credentials;

    // Set the Authorization header in the request
    $request->headers->set('Authorization', $authHeader);

    // Now you can use the $request object with the Authorization header in your logic
    // ...

    // For example, you can retrieve the Authorization header value later in the code
    $authorizationHeaderValue = $request->header('Authorization');
    dd( $authorizationHeaderValue);
}
}
