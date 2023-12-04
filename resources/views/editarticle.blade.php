
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>bloc</title>
    <style>
      .r{
            background-color: #4169E1;  
                }
    .container {
        margin-bottom:-100px;
    border-radius: 5px;
    background: ;
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
    @if(session('success'))
            <div class="alert alert-danger">
                {{ session('success') }}
            </div>
        @endif
            <!-- Main Content -->
            <div class="container">
<form action="/updatearticle" method="POST">
@csrf

<div class="card o-hidden border-0 shadow-lg my-1">
<center><h1 class="h4 text-gray-900 mb-4">EDITER ARTICLE NUMÉRO {{$article->id}}</h1></center>

<div class="container" style="width: 50%; height:500px">
<input type="hidden" name="id" value="{{$article->id}}">

<br>
<div class="mb-3">
<label for="CodeA" class="form-label">Code</label>
<inPUt type="text" class="form-control"  name="CodeA" rows="3" value="{{$article['CodeA']}}">
<span class="text-danger">@error('CodeA'){{$message}}@enderror</span>

</div>
<div class="mb-3">
<label for="designA" class="form-label">Designation</label>
<inPUt type="text" class="form-control"  name="designA" rows="3" value="{{$article['designA']}}">
<span class="text-danger">@error('designA'){{$message}}@enderror</span>

</div>
<div class="mb-3">
<label for="PU" class="form-label">PU</label>
<inPUt type="text" class="form-control"  name="PU" rows="3" value="{{$article['PU']}}">
<span class="text-danger">@error('PU'){{$message}}@enderror</span>

</div>
<center> <button class="btn btn-primary mt-3">Enregistrer</button></center>
</div>
</form>
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