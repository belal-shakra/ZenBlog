<div class="mb-2">
    <select class="form-select border border-1 border-secondary" name="{{ $name }}">
        <option selected>Select Category</option>
        @foreach ($data as $option)
            <option value="{{ $option->id }}">{{ $option->category }}</option>
        @endforeach
    </select>
    <x-form.error :name="$name" />
</div>
