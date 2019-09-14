<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact us any time</h1>

    <form action="{{route('contact.post')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Name">
        <input type="email" name="email" placeholder="Enter Your Email">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Enter Your Query"></textarea>
        <input type="submit" value="submit">


    </form>
</body>
</html>
