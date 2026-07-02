@props([
    'text' => 'Button',
    'href' => '#',
    'type' => 'link',
    'icon' => null,
    'class' => ''
])

@if($type == 'submit')
<button type="submit" class="dl-btn {{ $class }}">
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $text }}
</button>
@else
<a href="{{ $href }}" class="dl-btn {{ $class }}">
    @if($icon)
        <i class="{{ $icon }}"></i>
    @endif
    {{ $text }}
</a>
@endif

{{-- @include('components.buttons.primary-button',[
    'text'=>'Search Cars'
])

@include('components.buttons.primary-button',[
    'text'=>'Register'
])

@include('components.buttons.primary-button',[
    'text'=>'Book Now'
]) --}}
