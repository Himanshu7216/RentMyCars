@props([
    'name',
    'value'
])

<div class="form-check filter-item">

    <input class="form-check-input"
           type="checkbox"
           name="{{ $name }}"
           value="{{ $value }}">

    <label class="form-check-label">
        {{ $value }}
    </label>

</div>
