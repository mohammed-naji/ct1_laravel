@props(['label', 'name', 'options'])
<div class="mb-3">
    <label>{{ $label }}</label> <br>
    @foreach ($options as $key => $val)
        <label><input type="radio" name="{{ $name }}" value="{{ $key }}"> {{ $val }}</label>
        @if (!$loop->last)
            <br>
        @endif
    @endforeach
</div>
