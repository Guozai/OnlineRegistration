<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;

class AnnouncementController extends Controller
{
    public function fetch() {
        $announcements = Announcement::find('1')->get();
        return view('announcement', ['announcements' => $announcements ]);
    }

    public function update(Request $request) {
        try {
            $saved = Announcement::find('1')->update($request->all());

            if(!$saved){
                return array("status" => "ERROR");
            }
        }
        catch(Exception $e) {
            return array("status" => "ERROR");
        }

        return array("status" => "SUCCESS");
    }
}
