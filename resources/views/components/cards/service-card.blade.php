@props([
    'image',
    'title',
    'subtitle'
])

<div class="service-card">

    <div class="service-image">
        <img src="{{ $image }}"
             class="img-fluid"
             alt="">
    </div>

    <h5>
        {{ $title }}
    </h5>

    <p>
        {{ $subtitle }}
    </p>

</div>

{{-- @include('components.cards.service-card',[
    'image'=>asset('assets/images/services/long-drive.png'),
    'title'=>'Long Drives',
    'subtitle'=>'Outstation Trips'
]) --}}
