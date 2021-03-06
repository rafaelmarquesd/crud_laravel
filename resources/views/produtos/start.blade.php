<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/resources/css/app.css">
    <title>Cadastrar um novo produto</title>
</head>
<style>
  :root {
    --gap: 0,1rem;
}

.img {
    width: 100%;
    width: 36rem;
    height: 36rem;
    overflow: hidden;
}

.img img {
    transition: all 300ms ease-in-out;
}

.img img:hover {
    transform: translate(-3%, 3%) scale(1.2) rotate(5deg);
}

.grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--gap);
    counter-reset: grid-counter;
    width: 20px;
    height: 20px;
}

.body {
  min-height: 100vh;
  max-width: 100vh;
  margin: 5rem:
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Crud</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ route('principal') }}">Inicio <span
                    class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{ route('cadastro') }}">Cadastrar</a>
            <a class="nav-item nav-link" href="{{ route('lista') }}">Lista de itens</a>
        </div>
    </div>
</nav>

<body>
    <div class="grid">
        <div class="img">
          <img src="http://source.unsplash.com/random/400x400?r=1" alt="random image from unsplash" />
        </div>
        <div class="img">
          <img src="http://source.unsplash.com/random/400x400?=2" alt="random image from unsplash" />
        </div>
        <div class="img">
          <img src="http://source.unsplash.com/random/400x400?r3" alt="random image from unsplash" />
        </div>
        <div class="img">
          <img src="http://source.unsplash.com/random/400x400?s=81" alt="random image from unsplash" />
        </div>
        <div class="img">
          <img src="http://source.unsplash.com/random/400x400?t=5" alt="random image from unsplash" />
        </div>
        <div class="img">
          <img src="http://source.unsplash.com/random/400x400?v=6" alt="random image from unsplash" />
        </div>
    </div>
</body>

</html>
