@extends('forms.master')
@section('title', 'Form 1')
@section('content')
    <h1>First Form</h1>
    <form action="{{ route('forms.form1') }}" method="POST">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        {{-- {{ csrf_field() }} --}}
        @csrf
        <x-form.input type="text" label="Name" placeholder="Full Name.." name="name" />
        <x-form.input type="number" label="Age" placeholder="Your Age.." name="age" />
        <button class="btn btn-info px-5">Send</button>
    </form>
@stop
