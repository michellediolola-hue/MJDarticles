<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
    <style>
        body {
            margin: 0;
            background: linear-gradient(135deg, #f2f4f1, #e6ebe9);
            font-family: 'Helvetica Neue', sans-serif;
            color: #333;
        }
        a {
            color: #5c7c6d;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        header {
            background: #f8faf8;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            color: #5c7c6d;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>
    <header>🌿 Mindful Articles</header>
    @yield('content')
</body>
</html>
