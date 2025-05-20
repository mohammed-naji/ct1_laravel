@props(['label', 'type' => 'text', 'name', 'placeholder' => '', 'value' => old($name)])
<div class="mb-3">
    @if (isset($label))
        <label>{{ $label }}</label>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
        class="form-control @error($name) is-invalid @enderror" value="{{ $value }}" />
    {{-- @if ($erros->has($name))

        @endif --}}
    @error($name)
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
