<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>
<title>Login</title>
<br><br><br>
<div class="div" >

    <form action="{{ url('client/login') }}" method="post" >
        @csrf
        <div class="imgcontainer">
            <h2>Patient Login Form</h2>
        </div>
        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <a href="{{ url('client/register') }}">Not registred?</a>
            <br><br>
            <a href="{{ url('mtp') }}">Admin login?</a>
            <br><br>
            <a href="{{ url('home') }}">Back to home</a>
            <button type="submit">Login</button>

        </div>


    </form>
</div>

</body>
</html>
