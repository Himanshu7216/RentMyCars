@props([
    'logo',
    'name'
])

<div class="brand-card">

    <img src="{{ $logo }}"
         alt="{{ $name }}"
         class="brand-logo">

    <div class="brand-name">
        {{ $name }}
    </div>

</div>
{{-- @include('components.cards.brand-card',[
    'logo'=>asset('assets/images/brands/bmw.png'),
    'name'=>'BMW'
]) --}}
