<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form3Request;
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

    function form3()
    {
        return view('forms.form3');
    }

    function form3_data(Form3Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            // 'age' => 'required|numeric',
            'age' => ['required', 'numeric'],
        ]);
        dd($request->all());
        // $name = $request->name;
        // $email = $request->email;
        // $age = $request->age;

        // $errors = [];
        // if(isset($name)) {
        //     $errors[] = 'الاسم مطلوب';
        // }

        // if(strlen($name) > 20) {
        //     $errors[] = 'حقل الاسم يجب ان يكون اقل من 20 حرف';
        // }
    }
}
