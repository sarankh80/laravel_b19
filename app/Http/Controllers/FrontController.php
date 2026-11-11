<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Rules\Uppercase;
class FrontController extends Controller
{
    function index()
    {
        $user = User::all();
        // $userget = User::get();

        // $userid = User::find(1);
        // $userwhere = User::where('post_id', 1)->get();

        return view('front.home', compact('user'));
    }
    function about()
    {   
        // print_r('hello about page');exit;
        return view('front.about');
    }
    public function contact(Request $request)
    {   $names = '';
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => ['required', new Uppercase],
                // 'name' => 'required|regex:/^[a-zA-Z]+$/',
                'email' => 'required|email',
                'message' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'file' => 'required|mimes:pdf,doc,docx|max:2048',
                'phone' => 'required|regex:/^[0-9]{10}$/',
                'category' => 'required|in:option1,option2,option3',

            ]);
            $name = $request->input('name');
            $names = "Hello, " . $name;
            return view('contact', compact('names'))->with('success', 'Form submitted successfully!');
        }
        return view('contact', compact('names'));
    }
}
