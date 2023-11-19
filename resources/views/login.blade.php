<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login<h1>
 <form method="POST" action="login">
 @method('POST')
 @CSRF

    <div>
        Username : <input type="text" name="username" id="">
</div>
    <div>
        Password : <input type="Password" name="password" id="">
</div>
<div class="d-grid gap-2 col-4 mx-auto">
      <button class="btn btn-primary" type="submit">Send</button>
</div>


</body>
</html>