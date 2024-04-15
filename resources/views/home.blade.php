<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Liste des pensions</title>
</head>
<body>
   <div class="container m-5" style="margin-top:15%">
        <h2 class="text-center">Recherche de retraités</h2>
        <form action="{{ route('pensions.search') }}" method="POST">
             @csrf
             <div style="margin-block:30px;  display:flex;" class="text-center">
                <input type="text" class="form-control" style="width:90%" name="matricule" placeholder="Matricule">
                <button class="btn btn-primary" type="submit">Rechercher</button>
             </div>
         </form>
        
   </div>
</body>
</html>
