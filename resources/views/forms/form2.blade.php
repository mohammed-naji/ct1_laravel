@extends('forms.master')
@section('title', 'Form 2')
@section('content')
    <h1>Second Form</h1>
    <form action="{{ route('forms.form2') }}" method="POST">
        @csrf
        <x-form.input type="text" label="Name" placeholder="Full Name.." name="name" />
        <x-form.input type="email" label="Email" placeholder="Your Email Address.." name="email" />
        <x-form.input type="number" label="Age" placeholder="Your Age.." name="age" />
        <x-form.input type="text" label="Phone" placeholder="Your Phone.." name="phone" />
        <x-form.radio label="Gender" name="gender" :options=$options />
        <x-form.input type="file" label="Image" name="image" />
        <x-form.select label="Education Level" name="education_level">
            <option value="diploma">Diploma</option>
            <option value="bachelor">Bachelor</option>
            <option value="master">Master</option>
        </x-form.select>
        <x-form.textarea label="Bio" name="bio" placeholder="Your Bio.." rows="4" />
        <button class="btn btn-info px-5">Send</button>
    </form>
@stop
