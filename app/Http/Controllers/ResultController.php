<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;

class ResultController extends Controller
{
    public function fetch() {
        $results = Result::with('team')->get();
        return view('result', compact('results'));
    }

    public function update(Request $request, $id) {
        try {
            $result = Result::find($id);
            if ($request->round1_score != null) {
                $result->round1_score = $request->round1_score;
            }
            if ($request->round2_score != null) {
                $result->round2_score = $request->round2_score;
            }
            if ($request->round3_score != null) {
                $result->round3_score = $request->round3_score;
            }
            if ($request->round4_score != null) {
                $result->round4_score = $request->round4_score;
            }

            $saved = $result->save();

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
