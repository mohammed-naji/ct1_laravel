@props(['label', 'rows' => '5', 'name', 'placeholder' => ''])
<div class="mb-3">
    @if (isset($label))
        <label>{{ $label }}</label>
    @endif
    <textarea name="{{ $name }}" placeholder="{{ $placeholder }}"
        class="form-control @error($name) is-invalid @enderror" rows="{{ $rows }}"></textarea>
    @error($name)
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
