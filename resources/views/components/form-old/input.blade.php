<div class="form-floating mb-3">
    <input class="form-control" id="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}"
        data-sb-validations="required" />
    <label for="name">{{ $placeholder }}</label>
    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
</div>
