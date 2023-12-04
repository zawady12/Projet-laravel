<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>viewarticle</title>
    <style>
        .r{
            background-color:#4169E1;       
         }
    .container {
        margin-bottom:-100px;
    border-radius: 5px;
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
<h1 class="h4 text-gray-900 mb-4">DETAILS DE L'ARTICLE {{ $article->designA }}</h1>
                            </div> 
                            <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"> CodeA: {{ $article->CodeA }}</li>
               <br>

                <li class="list-group-item"> designA: {{ $article->designA }}</li>

               <br>
                <li class="list-group-item">  PU: {{ $article->PU}}</li>
               <br>
                <li class="list-group-item"> Ajouté il y a: {{ $article->created_at->diffForHumans() }}</li>

        </div>
    </div>
</div>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
