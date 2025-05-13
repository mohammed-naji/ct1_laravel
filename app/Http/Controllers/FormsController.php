<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form3Request;
use App\Mail\ContactUsMail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    function form4()
    {
        return view('forms.form4');
    }

    function form4_data(Request $request)
    {
        // dd($request->all());

        // 1. validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'subject' => 'required',
            'media' => 'nullable|mimes:png,jpeg',
            'message' => 'required'
        ]);



        // dd($request->all());
        // $path = $request->file('media')->store('uploads'); // storage/private/uploads
        // $path = $request->file('media')->store('uploads', 'custom'); // storage/public/uploads , php artisan storage:link
        $path = $request->file('media')->store('uploads', 'custom'); // top toppppp

        // dd($request->file('media'));
        // $name =  $request->file('media')->getClientOriginalName();
        // $ex = $request->file('media')->getClientOriginalExtension();
        // $new_name = rand(000000000000, 999999999999) . '_' . rand(000000000000, 999999999999) . '_' . rand(000000000000, 999999999999) . '.' . $ex;
        // 4654564456545_6546544654_5646546464.png
        // return time();
        // $name = rand(00000, 99999) . time() . $name;
        // $request->file('media')->move(public_path('/uploads'), $name);

        // return $path;

        // 2. store files

        // 3. save in database
        $data = $request->except('_token', 'media');
        $data['media'] = $path;
        // dd($data);
        // 4. redirect to view

        // Mail::to('admin@gmail.com')->send(new TestMail());
        Mail::to('malqumbuz@gmail.com')->send(new ContactUsMail($data));
    }
}
