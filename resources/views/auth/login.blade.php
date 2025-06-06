<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            width: 320px;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .error {
            color: red;
            margin-bottom: 10px;
            font-size: 0.9em;
        }
        a {
            display: block;
            margin-top: 12px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        @if ($errors->has('email'))
            <p class="error">{{ $errors->first('email') }}</p>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <a href="{{ route('register') }}">Belum punya akun? Register</a>
    </div>
</body>
</html>
