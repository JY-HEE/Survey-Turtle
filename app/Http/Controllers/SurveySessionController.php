<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SurveySession;
use App\User;
use DB;

class SurveySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $q1a = DB::table('survey_sessions')->where('question1','1a')->count();
        $q1b = DB::table('survey_sessions')->where('question1','1b')->count();
        $q1c = DB::table('survey_sessions')->where('question1','1c')->count();
        $q1d = DB::table('survey_sessions')->where('question1','1d')->count();
        $q2a = DB::table('survey_sessions')->where('question2','2a')->count();
        $q2b = DB::table('survey_sessions')->where('question2','2b')->count();
        $q2c = DB::table('survey_sessions')->where('question2','2c')->count();
        $q2d = DB::table('survey_sessions')->where('question2','2d')->count();
        $q3a = DB::table('survey_sessions')->where('question3','3a')->count();
        $q3b = DB::table('survey_sessions')->where('question3','3b')->count();
        $q3c = DB::table('survey_sessions')->where('question3','3c')->count();
        $q3d = DB::table('survey_sessions')->where('question3','3d')->count();
        $q4a = DB::table('survey_sessions')->where('question4','4a')->count();
        $q4b = DB::table('survey_sessions')->where('question4','4b')->count();

        return view(
            'Result',
            [   'q1a' => $q1a, 
                'q1b' => $q1b,
                'q1c' => $q1c,
                'q1d' => $q1d,
                'q2a' => $q2a, 
                'q2b' => $q2b,
                'q2c' => $q2c,
                'q2d' => $q2d,
                'q3a' => $q3a, 
                'q3b' => $q3b,
                'q3c' => $q3c,
                'q3d' => $q3d,
                'q4a' => $q4a, 
                'q4b' => $q4b
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $surveysession = new SurveySession();

        return view('Homepage',['surveysession' => $surveysession]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'question4' => 'required'
        ]);

        $session = new SurveySession();
        $session->fill($request->all());
        $session->save();
        return redirect()->route('surveysession.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
