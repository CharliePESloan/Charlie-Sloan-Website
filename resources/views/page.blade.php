<html>
<head>

    <title>Charlie Sloan</title>

    <!-- Stylesheets -->
    <x-components.stylesheet name="page" />

    <!-- Scripts -->
    <script src="{{ asset("js/page.js") }}"></script>

</head>
<body>
    <aside class="sidebar">
        <button>🔵</button>
        <span class="sidebar-title">Navigation</span>
        <nav>
            <x-components.nav-item name="Home" route="home" icon="home" />
            <x-components.nav-item name="About" route="about" icon="user" />
        </nav>
    </aside>
    <header>
        <h1>
            Charlie Sloan
        </h1>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
