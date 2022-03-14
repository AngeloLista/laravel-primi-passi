<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header class="mb-5 px-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                @foreach ($links as $link)
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route($link) }}"> {{ $link }}</a>
                    </li>
                @endforeach
              </ul>
            </div>
          </nav>
    </header>
    <main>
        <div class="container">
            <h1 class="mb-5 text-center">Posts</h1>
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
        </div>
    </main>
</body>
</html>