<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['last_name','first_name','gender2','email','tell','address','building','detail']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['last_name','first_name','gender','email','tell','address','building','detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
