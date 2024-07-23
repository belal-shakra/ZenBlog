<div class="mb-2">
    <select class="form-select border border-1 border-secondary" name="{{ $name }}">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <x-form.error :name="$name" />
</div>
