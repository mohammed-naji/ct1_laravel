@extends('forms.master')
@section('title', 'Form 3')
@section('content')
    <h1>Third Form</h1>
    {{-- @dump($errors)
    @dump($errors->any())
    @dump($errors->all()) --}}

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('forms.form3') }}" method="post">
        @csrf
        <x-form.input name="name" placeholder="Name.." />
        <x-form.input name="email" placeholder="Email.." type="email" />
        <x-form.input name="age" type="number" placeholder="Age.." />
        <button class="btn btn-success px-5">Send</button>
    </form>
@stop

@section('js')

    <script>
        let inputs = document.querySelectorAll('form .form-control')
        inputs.forEach(el => {
            el.onkeyup = () => {
                console.log(el.value.length);
                if (el.value.length > 0) {
                    if (el.name == 'name') {
                        if (el.value.length > 2 && el.value.length <= 20) {
                            el.classList.add('is-valid');
                            el.classList.remove('is-invalid');
                        } else {
                            el.classList.add('is-invalid');
                            el.classList.remove('is-valid');
                        }
                    } else {
                        el.classList.add('is-valid');
                        el.classList.remove('is-invalid');
                    }
                } else {
                    el.classList.add('is-invalid');
                    el.classList.remove('is-valid');
                }
            }
        });
    </script>

@endsection
