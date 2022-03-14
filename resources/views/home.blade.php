<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href="{{ route($link) }}"> {{ $link }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>
    <main>
        <h1>Hello world</h1>
        <p>My name is {{ $name }} and this is a test page</p>
    </main>
</body>

</html>