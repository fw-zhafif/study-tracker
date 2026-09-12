<?php

namespace App\Http\Controllers;

use App\Models\StudySession;
use Illuminate\Http\Request;

class StudySessionController extends Controller
{
    public function index() 
    {
        $sessions = StudySession::all();

        return view('study-sessions.index', [
            'sessions' => $sessions
        ]);
    }

    public function create() 
    {
        return view('study-sessions.create');
    }

    public function store(Request $request) 
    {
        $data = $request->all();

        StudySession::create($data);

        return(redirect('/study-sessions'));
    }
}
