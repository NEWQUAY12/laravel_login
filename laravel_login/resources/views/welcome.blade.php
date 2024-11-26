<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome to Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        .welcome-section {
            text-align: center;
            padding: 100px 20px;
        }
        .welcome-section h1 {
            font-size: 4rem;
            font-weight: 700;
            color: #343a40;
            margin-bottom: 20px;
        }
        .welcome-section p {
            font-size: 1.5rem;
            color: #6c757d;
            margin-bottom: 30px;
        }
        .btn-custom, .btn-secondary {
            padding: 12px 30px;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
        }
        .btn-group {
            margin-top: 40px;
        }
        .btn-group .btn {
            margin: 0 10px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-section">
            <h1>Welcome to Laravel!</h1>
            <p>Your Laravel application is ready to start. 🚀</p>
            
            <div class="btn-group">
                <a href="{{ url('/home') }}" class="btn btn-custom">Get Started</a>
                <a href="{{ url('/login') }}" class="btn btn-secondary">Login</a>
                <a href="{{ url('/register') }}" class="btn btn-secondary">Register</a>
            </div>
        </div>
    </div>
</body>
</html>
