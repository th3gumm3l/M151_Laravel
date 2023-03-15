<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create(){
        $request = request();

        $application = new Application();
        $application->email = $request->get('email');
        $application->firstname = $request->get('firstname');
        $application->lastname = $request->get('lastname');
        $application->answer = $request->get('answer');
        $application->save();

        return redirect('/anmeldung');
    }

    public function  list(){
        $applications = Application::where('answer', 'yes');

        $declinedApplications = Application::where('answer', 'no')->count();
        dd($declinedApplications);

        return view('applications',[
                'applications'=> $applications]
        );
    }

}
