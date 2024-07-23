<div class="form-group mb-2">
    <textarea
    name="{{ $name }}"
    id="{{ $name }}"
    cols="30"
    rows="10"
    class="form-control border border-1 border-secondary"
    placeholder="{{ $placeholder }}"
    style="height: 9rem"
    >{{ $value }}</textarea>

    <x-form.error :name="$name" />
</div>
