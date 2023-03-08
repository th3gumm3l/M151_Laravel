<?php

use App\Models\Application;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anmeldung', function () {
    return view('anmeldung');
});

Route::post('/anmeldung', function(){
    $request = request();

    $application = new Application();
    $application->email = $request->get('email');
    $application->firstname = $request->get('firstname');
    $application->lastname = $request->get('lastname');
    $application->answer = $request->get('answer');
    $application->save();

    return redirect('/anmeldung');
});

Route::get('/anmeldung/applications', function(){

    $applications = Application::where('answer', 'yes');

    $declinedApplications = Application::where('answer', 'no')->count();
    dd($declinedApplications);

    return view('applications',[
        'applications'=> $applications]
    );
});
