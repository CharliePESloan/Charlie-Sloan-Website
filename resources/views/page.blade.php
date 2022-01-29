<html>
<head>

    <title>Charlie Sloan</title>

    <!-- Stylesheets -->
    <x-components.stylesheet name="page" />
    <x-components.stylesheet name="sidebar" />
    @yield('css')

    <!-- Scripts -->
    <script src="{{ asset("js/page.js") }}"></script>
    @yield('js')

</head>
<body>
    <aside class="sidebar">
        <span class="sidebar-button open-close-sidebar">
            <span class="sidebar-button-text">Navigation</span>
            <span class="sidebar-button-icon">
                @include('icons.menu')
            </span>
        </span>
        <nav>
            <x-components.nav-item name="Home" route="home" icon="home" />
            <x-components.nav-item name="About" route="about" icon="user" />
            <x-components.nav-item name="Blog" route="blog" icon="blogger" target="_blank" />
        </nav>
    </aside>
    <header>
        <h1>
            CharlieSloan.co.uk
        </h1>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
