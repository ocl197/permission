<html>
<head>
    <title>Laravel Permission Editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @livewireStyles
</head>
<body>
 
    <nav>
        <div>
            Laravel Permission Editor
        </div>
        <div>
            <a href="{{ route('permission.roles.index') }}">Roles</a>
            <a href="{{ route('permission.permissions.index') }}">Permissions</a>
        </div>
    </nav>
 
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</div>
@livewireScripts
</body>
</html>