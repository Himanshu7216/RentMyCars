@props([
    'icon',
    'title',
    'description'
])

<div class="feature-card">

    <div class="feature-icon">
        <i class="{{ $icon }}"></i>
    </div>

    <h5>
        {{ $title }}
    </h5>

    <p>
        {{ $description }}
    </p>

</div>

{{-- @include('components.cards.feature-card',[
    'icon'=>'bi bi-headset',
    'title'=>'24/7 Customer Support',
    'description'=>'We are here to help anytime.'
]) --}}
