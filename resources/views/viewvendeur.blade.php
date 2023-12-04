<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>vendeur</title>
    <style>
        .r{
            background-color:#4169E1;       
         }
    .container {
        margin-bottom:-100px;
    border-radius: 5px;
    width:60%;
  }
  </style>
  </head>
  <body class="r">
  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
<div class="card o-hidden border-0 shadow-lg my-1">
<div class="text-center">
<h1 class="h4 text-gray-900 mb-4">DETAILS DU VENDEUR {{ $vendeur->idV }}</h1>
                            </div> 
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">id: {{ $vendeur->idv }}</li>

                <li class="list-group-item">Nom: {{ $vendeur->nomv }}</li>

                <li class="list-group-item">Prenom: {{ $vendeur->prenomv }}</li>

                <li class="list-group-item">Article numéro: {{ $vendeur->article['designA'] }}</li>

                <li class="list-group-item">Ajouté il y a: {{ $vendeur->created_at->diffForHumans() }}</li>

            </ul>
        </div>
    </div>
</body>
</html>
