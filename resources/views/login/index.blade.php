<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="img-column">
            <img src="{{ asset('/Logo.jpg') }}" style="max-width: 100%;">
        </div>
        <div class="form-column">
            <form action="/login" method="POST">
                @csrf
                <h1 class="title">Simagang BRI</h1>
                <div class="form-group">
                    <label for="username" class="input__form">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password" class="input__form">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
