<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>

<body style="background: #eee; padding: 20px; font-family: Arial, Helvetica, sans-serif">
    <div style="width: 600px;margin: 0 auto; background: #fff;border: 2px solid #aaa;padding: 20px">
        <h1>Dear Admin,</h1>
        <p>There is a new message with the following information</p>
        <br>
        <p>Name: {{ $data['name'] }}</p>
        <p>Email: {{ $data['email'] }}</p>
        <p>Phone: {{ $data['phone'] }}</p>
        <p>Subject: {{ $data['subject'] }}</p>
        <p>Message: {{ $data['message'] }}</p>
        <br>
        <p>Best Regards.</p>
    </div>
</body>

</html>
