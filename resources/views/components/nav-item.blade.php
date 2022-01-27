@if( Request::url() == $url)
    <a href="{{ $url }}" class="nav-item active">
        <span class="nav-item-text">{{ $name }}</span>
        <span class="nav-item-icon">
            @include('icons.'.$icon)
        </span>
{{--        <span class="nav-item-icon icon-{{ $icon }}">&nbsp;</span>--}}
    </a>
@else
    <a href="{{ $url }}" class="nav-item">
        <span class="nav-item-text">{{ $name }}</span>
        <span class="nav-item-icon">
            @include('icons.'.$icon)
        </span>
    </a>
@endif
