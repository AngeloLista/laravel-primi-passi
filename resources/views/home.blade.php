<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header class="mb-5 px-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
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
            <h1 class="mb-5 text-center">Hello world</h1>
            <p class="mb-5 text-center">My name is {{ $name }} and this is a test page</p>
        </div>
    </main>
</body>

</html>