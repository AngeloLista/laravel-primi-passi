<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
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
        <h1>News</h1>
        <ul>
            <li>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi mollitia voluptates animi, consequatur exercitationem, quasi quisquam quo harum atque id cupiditate, totam quos vitae soluta saepe praesentium nisi architecto explicabo.</p>
            </li>
            <li>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi mollitia voluptates animi, consequatur exercitationem, quasi quisquam quo harum atque id cupiditate, totam quos vitae soluta saepe praesentium nisi architecto explicabo.</p>
            </li>
            <li>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi mollitia voluptates animi, consequatur exercitationem, quasi quisquam quo harum atque id cupiditate, totam quos vitae soluta saepe praesentium nisi architecto explicabo.</p>
            </li>
        </ul>
    </main>
</body>
</html>