<!DOCTYPE html>
<html>
<head>
    <title>Admin Bioskop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        form.logout {
            text-align: right;
        }
        button.logout-btn {
            background: #dc3545;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        button.logout-btn:hover {
            background: #a71d2a;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="logout" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>

        <h1>Selamat datang di Admin Bioskop</h1>
        <p>Ini adalah halaman admin setelah login.</p>
    </div>
</body>
</html>
