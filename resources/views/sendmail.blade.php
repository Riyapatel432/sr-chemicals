<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div>
<p>Name:- {{ $name }}</p>
<p>Email:- {{ $email }}</p>
<p>Message:- {{ $msg }}</p>
 
 <p>Thank you</p>
    </div>
</body>
</html>