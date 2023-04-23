<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Illuminate\Support\Facades\DB;








/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/', function () {
    return view('home');
});

$router->get("aboutus", function () {
    return view('aboutus');
});

$router->get('contactus', function () {
    return view('contactus');
});

$router->post('contactus', function () {
    // code to add data to database
    $user_name = request('user_name');
    $user_email = request("user_email");
    $feedback_subject = request('feedback_subject');
    $feedback_message = request('feedback_message');

    DB::table('feedbacks')->insert([
        'name' => $user_name,
        'email' => $user_email,
        'subject' => $feedback_subject,
        'message' => $feedback_message
    ]);
    return response()->json(['msg' => 'Thank you for contacting with us...']);
});


$router->get('signup', function () {
    return view('signup_talkgpt');
});

$router->post('signup', function () {
    $email_id = request('email');
    $username = request('username');
    $password = request('password');

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into database
    DB::table('users')->insert([
        'email_id' => $email_id,
        'username' => $username,
        'password' => $password_hash,
    ]);
    return response()->json(['msg' => 'ok']);
});


$router->get('signin', function () {
    return view('signin_talkgpt');
});

$router->post('signin', function (\Illuminate\Http\Request $request) {
    $email = request('email');
    $psd = request('psd');
    // Store a value in the session
    $request->session()->put('user', $email);

    // Retrieve the user with the given email from the database
    $user = DB::table('users')->where('email_id', $email)->first();

    // Check if the user exists and the password is correct
    if ($user && password_verify($psd, $user->password)) {
        // User authentication successful
        return response()->json(['message' => 'http://localhost:8000/conversation']);
        /* return redirect('/conversation'); */
    } else {
        // User authentication failed
        return response()->json(['message' => 'http://localhost:8000/signup']);
    }
});

$router->get('conversation', function (\Illuminate\Http\Request $request) {
    if ($request->session()->get('user') != null) {
        return view('conversation');
    } else {
        return redirect('signin');
    }
});

$router->post('conversation', function (\Illuminate\Http\Request $request) {

    if ($request->session()->get('user') != null) {
        $query = request('query');
        $data = json_encode(array("query" => $query));


        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://chatgpt-api7.p.rapidapi.com/ask",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: chatgpt-api7.p.rapidapi.com",
                "X-RapidAPI-Key: 36c760c943msh54bb49a0d0bc726p1fedccjsn1fc39ca84a67",
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;
        }
        // echo gettype($response);
        return response()->json(['res' => $response]);
    }



});

$router->get('logout', function (\Illuminate\Http\Request $request) {
    $request->session()->flush();
    return redirect('signin');
});