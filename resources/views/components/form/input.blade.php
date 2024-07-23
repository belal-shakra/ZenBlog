<div class="form-group mb-3">
    <input
    id="{{ $name }}"
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ $value }}"
    placeholder="{{ $placeholder }}"
    class="form-control border border-1 border-secondary"
    >
    <x-form.error :name="$name" />
</div>
