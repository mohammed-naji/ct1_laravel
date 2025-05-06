<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    function form1()
    {
        return view('forms.form1');
    }

    function form1_data(Request $request)
    {
        // $data = $_POST;
        // unset($data['_token']);
        // dd($data);

        // dd($request->all());
        // dd($request->except('_token'));
        // dd($request->only('name'));

        // $name = $request->input('name');
        $name = $request->name;
        $age = $request->age;
    }

    function form2()
    {
        $options = [
            'male' => 'Male',
            'female' => 'Female',
            'other' => 'Other',
        ];

        return view('forms.form2', compact('options'));
    }

    function form2_data(Request $request)
    {
        dd($request->except('_token'));
    }
}
