@extends('forms.master')
@section('title', 'Form 4')
@section('content')
    <h1>Contact Us</h1>
    <form action="{{ route('forms.form4') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <x-form.input name="name" placeholder="Name.." />
            </div>
            <div class="col-md-6">
                <x-form.input name="email" placeholder="Email.." type="email" />
            </div>
            <div class="col-md-6">
                <x-form.input name="phone" placeholder="Phone.." />
            </div>
            <div class="col-md-6">
                <x-form.input name="subject" placeholder="Subject.." />
            </div>
            <div class="col-md-12">
                <x-form.input type="file" name="media" label="Invoice File" />
            </div>
            <div class="col-md-12">
                <x-form.textarea name="message" placeholder="Subject.." />
            </div>
        </div>


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
