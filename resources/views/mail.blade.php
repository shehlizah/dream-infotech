<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Message</h1>
    <p>Name:{{ $body['name'] }}</p>
    <p>Email:{{ $body['email'] }}</p>
    <p>Phone No:{{ $body['phone'] }}</p>
    <p>Company:{{ $body['company'] }}</p>
    <p>Message:{{ $body['message'] }}</p>

    <p>Thank you</p>
</body>
</html>
