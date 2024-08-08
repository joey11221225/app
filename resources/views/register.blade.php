<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <center>
        <form action="/register" method="post">
        @csrf
        <h2>Register Form</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label for="password">Password:</label>
        <input type="password" name="password" value="{{ old('password') }}"><br><br>
        @error('password')
            <p>{{ $message }}</p>
        @enderror

        <label for="conpass">Confirm Password:</label>
        <input type="password" name="conpass" value="{{ old('conpass') }}"><br><br>
        @error('conpass')
            <p>{{ $message }}</p>
        @enderror

        <input type="submit" value="Sign Up" name="signup">
        </form>
    </center>
</body>
</html>
