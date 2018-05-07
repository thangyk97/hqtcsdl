<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Candidate;
use App\Skill;
use App\Experience;
use App\Education;
use App\WithWork;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store',]]);
    }

    public function updateWithWork(Request $request)
    {
        WithWork::update_($request);
        return redirect('/candidate/profile');
    }

    public function updateSkill(Request $request)
    {
        Skill::update_($request);
        return redirect('/candidate/profile');
    }

    public function updateExperience(Request $request)
    {
        Experience::update_($request);
        return redirect('/candidate/profile');
    }

    public function updateEducation(Request $request)
    {
        Education::update_($request);
        return redirect('/candidate/profile');
    }

    public function showWithWork () 
    {
        $wish_work = WithWork::where('id_candidate', Auth::id())->first();

        return view('pages/candidate/with_work', compact('wish_work'));
    }

    public function showSkill () 
    {
        $skill = Skill::where('id_candidate', Auth::id())->first();

        return view('pages/candidate/skill', compact('skill'));
    }

    public function showExperience () 
    {
        $experience = Experience::where('id_candidate', Auth::id())->first();

        return view('pages/candidate/experience', compact('experience'));
    }

    public function showEducation () 
    {
        $education = Education::where('id_candidate', Auth::id())->first();

        return view('pages/candidate/education', compact('education'));
    }

    public function profile()
    {
        $id = Auth::id();
        return redirect('/candidate/education');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.candidate.candidate_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Candidate::store($request);
        return redirect('/login');
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
