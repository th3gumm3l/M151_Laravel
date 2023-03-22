<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create($id){
        $request = request();

        $request->validate([
            'firstname' => ['required', 'max:255'],
            'lastname' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'answer' => ['required', 'max:3', 'min:2'],
        ]);

        $application = new Application();
        $application->firstname = $request->get('firstname');
        $application->lastname = $request->get('lastname');
        $application->email = $request->get('email');
        $application->answer = $request->get('answer');
        $application->event_id = $id;
        $application->save();

        return redirect('/event/' . $id . '/applications');
    }

    public function  list($id){
        $event = Event::findOrFail($id);
        $applications = $event->applications->where('answer', 'yes');
        $declinedApplications = $event->applications->where('answer', 'no')->count();

        return view('applications', [
                'event_id' => $id,
                'applications'=> $applications,
                'declinedApplications' => $declinedApplications,
            ]
        );
    }

}
