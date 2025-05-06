@props(['label' => '', 'name', 'options'])
<div class="mb-3">
    @if (isset($label))
        <label>{{ $label }}</label>
    @endif
    <select class="form-select" name="{{ $name }}">
        {{ $slot }}
    </select>
</div>
