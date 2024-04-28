<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    .contain {
        margin-left: 25%;
        margin-right: 25%;
    }

    h1 {
        text-align: center;
    }
</style>

<body>
    <div class="contain">
        <h1>MODIFIER UN ETUDIANT</h1>

        <hr>

        <br>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <ul>
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger"> {{ $error }}</li>
            @endforeach
        </ul>

        <form action="/update/traitement" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="id" style="display: none" value="{{ $etudiants->id }}">

                <label for="Nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="Nom" name="nom" value="{{ $etudiants->nom }}">

                <label for="Prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $etudiants->prenom }}">

                <label for="Classe" class="form-label">Classe</label>
                <input type="text" class="form-control" id="Classe" name="classe" value="{{ $etudiants->classe }}">

                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" name="email" value="{{ $etudiants->email }}">

                <br>

                <a href="/modifier-etudiant-ok"><button type="submit" class="btn btn-primary">Modifier
                        etudiant</button></a>
        </form>
    </div>
    <a href="/list"><button type="submit" class="btn btn-danger">Revenir à la liste</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
