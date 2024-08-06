<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Banner</title>
    <style>
        .cookie-banner {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #000;
            color: #fff;
            text-align: center;
            padding: 10px;
            z-index: 1000;
        }
        .cookie-banner button, .cookie-banner a {
            margin-left: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border: none;
            border-radius: 3px;
        }
        .cookie-banner a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="cookie-banner">
        This website uses cookies to ensure you get the best experience on our website.
        <form action="{{ route('accept-cookies') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Accept</button>
        </form>
        <a href="{{ url('auth/google') }}" class="btn btn-primary">Login with Google</a>
    </div>
</body>
</html>
