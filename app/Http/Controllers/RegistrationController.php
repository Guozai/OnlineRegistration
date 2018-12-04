<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Team;

class RegistrationController extends Controller
{
    public function create() {
        $registration = new Registration;
        return view('registration.create', ['registration' => $registration]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'team_name' => 'required',
            'contact_name' => 'required',
            'contact_number' => 'required|numeric|digits_between:8,13',
            'member1_id' => 'required',
            'member2_id' => 'required',
            'member3_id' => 'required',
            'member4_id' => 'required',
            'member5_id' => 'required',
        ]);

        try {
            $allRequest = $request->all();
            $team = new Team();
            $team->team_name = $allRequest['team_name'];
            $saved_team = $team->save();

            $registration = new Registration();
            $registration->contact_name = $allRequest['contact_name'];
            $registration->contact_number = $allRequest['contact_number'];
            $registration->member1_id = $allRequest['member1_id'];
            $registration->member2_id = $allRequest['member2_id'];
            $registration->member3_id = $allRequest['member3_id'];
            $registration->member4_id = $allRequest['member4_id'];
            $registration->member5_id = $allRequest['member5_id'];
            if ($allRequest['member6_id'] != null) {
                $registration->member6_id = $allRequest['member6_id'];
            }
            if ($allRequest['member7_id'] != null) {
                $registration->member7_id = $allRequest['member7_id'];
            }
            $registration->team_id = $team->id;
            $saved_reg = $registration->save();

            if (!$saved_team || !$saved_reg) {
                return array("status" => "ERROR");
            }

            /*
             * Using sessions
             * */
            $request->session()->put('registration', $registration);
            $request->session()->put('team_name', $team->team_name);

            return redirect()->route('success');
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }
    }
}