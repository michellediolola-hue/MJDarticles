<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MJD Articles')</title>

    {{-- Simple Zen CSS --}}
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #e8ecf1, #f9fafb);
            color: #2e3a3f;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            padding: 1.5rem 0;
            text-align: center;
            background-color: #f5f7fa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        main {
            max-width: 900px;
            width: 100%;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            margin: 2rem 0;
        }

        footer {
            margin-top: auto;
            padding: 1rem 0;
            color: #888;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>MJD Articles</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} MJD Articles — Written with calm focus 🌿
    </footer>
</body>
</html>
