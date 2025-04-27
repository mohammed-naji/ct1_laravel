<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    function index()
    {
        return view('site1.index');
    }

    function about()
    {
        return view('site1.about');
    }

    function contact()
    {
        return view('site1.contact');
    }

    function contact_data()
    {
        return view('site1.contact_data');
    }

    function user($name, $age = null)
    {
        // return view('site1.user')->with('name', $name)->with('age', $age);
        // return view('site1.user', [
        //     'name' => $name,
        //     'age' => $age
        // ]);
        return view('site1.user', compact('name', 'age'));

        // dd(compact('name', 'age'));
    }

    function students($teacher)
    {
        $all_students = [
            'mohammed' => ['Zina', 'Ahmed', 'Ali', 'Amal', 'Sama'],
            'saad' => ['Amany', 'Mahmoud', 'Akram', 'Amal'],
            'kawthar' => ['Amany', 'Tahani', 'Taghreed', 'Sawsan']
        ];
        // $all_students = Student::all();

        $students = [];
        if (isset($all_students[$teacher])) {
            $students = $all_students[$teacher];
        }

        // dd($students);

        $text = "<p><b>Lorem ipsum</b>, dolor sit amet <i>consectetur</i> adipisicing elit. <mark>Tempora, asperiores</mark> voluptatem reiciendis dolores illum, enim placeat eos facilis reprehenderit unde praesentium eum, quis ipsam iusto porro. Quibusdam sequi asperiores quo.</p>";

        return view('site1.students', compact('teacher', 'students', 'text'));
    }
}
