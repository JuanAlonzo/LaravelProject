<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('principal.about-us');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:forms'
        ]);


        $form = new Form;

        $form->name = $request->name;
        $form->email = $request->email;
        $form->save();

        return redirect()->back()->with('status', 'form-added');
    }
}
