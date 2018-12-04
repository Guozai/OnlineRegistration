<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function fetch() {
        $abouts = About::find('1')->get();
        return view('about', ['abouts' => $abouts ]);
    }

    public function update(Request $request) {
        try {
            $saved = About::find('1')->update($request->all());

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
