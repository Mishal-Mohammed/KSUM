<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrations;

class StartUpController extends Controller
{

    public function dashboard(){
        $registers = registrations::all();
        return view('welcome', compact('registers'));
    }
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'startUp' => 'required|string|max:255',
            'founderName' => 'required|string|max:255',
            'email' => 'required|string|unique:registration,email',
            'phone' => 'required|min:10|max:10|regex: /^[0-9]+$/',
            'website' => 'nullable|string|max:255',
            'sector' => 'required',
            'file_path' => 'nullable',

        ],[
            'phone.regex' => 'Only contain digits',
        ]);

        $filePath = null;
        if ($request->hasFile('file_path')) {
            $filePath = $request->file('file_path')->store('uploads', 'public');
        }


        registrations::create([
            'startUp' => $request->startUp,
            'founderName' =>  $request->founderName,
            'email' =>  $request->email,
            'phone' =>  $request->phone,
            'website' =>  $request->website,
            'sector' =>  $request->sector,
            'file_path' =>  $filePath,
        ]);

        return redirect()->route('home')->with('success', 'New StartUp Register Successfully');
    }
    
}
