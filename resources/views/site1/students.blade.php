<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Page | Site1</title>
</head>

<body>
    {{-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora, asperiores voluptatem reiciendis dolores illum, enim placeat eos facilis reprehenderit unde praesentium eum, quis ipsam iusto porro. Quibusdam sequi asperiores quo.</p> --}}
    {{-- {!! $text !!} --}}
    {{ $teacher }}
    @verbatim
        {{ teacher }}
        {{ teacher }}
        {{ teacher }}
        {{ teacher }}
        {{ teacher }}
        {{ teacher }}
    @endverbatim
    <h1>Welcome {{ $teacher }}</h1>
    @if (count($students) > 0)
        <p>Your Students</p>
        <ul>
            @foreach ($students as $std)
                <li>{{ $std }}</li>
            @endforeach
        </ul>
    @else
        <p>You dont have students yet</p>
    @endif
</body>

</html>

if(!$auth) {

}
@unless ($auth)
@endunless

@auth

@endauth

@guest

@endguest
