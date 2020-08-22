<h1>Login Form</h1>

<form action="userController" method="post">

<input type="text" name="email" placeholder="enter your email"/><br>
@error('email')
<span>{{$message}}</span>
@enderror
<br>
<br>
<input type="password" name="password" placeholder="enter your password"/><br>
@error('password')
<span >{{$message}}</span>
@enderror

<br>
<br>
{{@csrf_field()}}
<button type="submit">submit post request</button>
</form>