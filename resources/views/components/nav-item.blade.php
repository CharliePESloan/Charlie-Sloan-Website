@if( Request::url() == $url)
    <a href="#" target="{{ $target }}" class="nav-item sidebar-button active">
        <span class="sidebar-button-text">{{ $name }}</span>
        <span class="sidebar-button-icon">
            @include('icons.'.$icon)
        </span>
{{--        <span class="nav-item-icon icon-{{ $icon }}">&nbsp;</span>--}}
    </a>
@else
    <a href="{{ $url }}" target="{{ $target }}" class="nav-item sidebar-button">
        <span class="sidebar-button-text">{{ $name }}</span>
        <span class="sidebar-button-icon">
            @include('icons.'.$icon)
        </span>
    </a>
@endif
