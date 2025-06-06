<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        /* Styling sederhana supaya rapi dan center */
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
        input[type="text"], input[type="email"], input[type="password"] {
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
        <h2>Register</h2>

        @if ($errors->any())
            <div class="error">
                <ul style="padding-left: 20px; margin: 0;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>

        <a href="{{ route('login') }}">Sudah punya akun? Login</a>
    </div>
</body>
</html>
