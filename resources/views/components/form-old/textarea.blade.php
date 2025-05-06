@props(['name' => '', 'placeholder' => '', 'rows' => 10])

<div class="form-floating mb-3">
    <textarea style="height: unset" class="form-control" id="{{ $name }}" placeholder="{{ $placeholder }}"
        rows="{{ $rows }}" data-sb-validations="required"></textarea>
    <label for="message">{{ $placeholder }}</label>
    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
    </div>
</div>
