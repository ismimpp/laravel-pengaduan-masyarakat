<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login petugas<h1>
<form method="POST" action="{{url('/petugas/login_petugas')}}">
 @method('POST')
 @CSRF

    <div>
        Username : <input type="text" name="Username" id="">
</div>
    <div>
        Password : <input type="Password" name="Password" id="">
</div>
<div class="d-grid gap-2 col-4 mx-auto">
      <a link href = "{{('home_petugas')}}"><button type="submit" name="login" class="btn-input">Login</button>
      <div class="button">
</div>
</form>

</body>
</html>