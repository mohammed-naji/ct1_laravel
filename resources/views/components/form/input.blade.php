@props(['label' => '', 'type' => 'text', 'name', 'placeholder' => ''])
<div class="mb-3">
    @if (isset($label))
        <label>{{ $label }}</label>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" class="form-control" />
</div>
