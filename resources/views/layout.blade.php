<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title','Aprende ') </title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="home">home</a></li>
            <li><a href="about">about</a></li>
            <li><a href="portafolio">portafolio</a></li>
            <li><a href="contact">contact</a></li>
        </ul>
    </nav>
   @yield('content')


</body>
</html>