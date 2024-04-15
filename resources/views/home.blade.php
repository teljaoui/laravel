<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Liste des pensions</title>
</head>
<body>
   <div class="container m-5">
        <form action="{{ route('pensions.search') }}" method="POST">
             @csrf
             <div style="margin-block:30px; display:flex;">
                <input type="text" class="form-control" style="width:30%" name="matricule" placeholder="Matricule">
                <button class="btn btn-primary" type="submit">Rechercher</button>
             </div>
         </form>
        <h2 class="text-center">Liste des retraités</h2>
        <table border="1" class="table">
            <tr>
                <th>Matricule</th>
                <th>Numéro d'affiliation</th>
                <th>Type de pension</th>
                <th>Nom et prénom</th>
                <th>Date d'effet</th>
                <th>Mois d'envoi</th>
            </tr>
            @foreach($pensions as $pension)
                <tr>
                    <td>{{ $pension->matricule }}</td>
                    <td>{{ $pension->num_affiliation }}</td>
                    <td>{{ $pension->type_pension }}</td>
                    <td>{{ $pension->nom_et_prenom }}</td>
                    <td>{{ $pension->date_effet }}</td>
                    <td>{{ $pension->mois_envoi }}</td>
                </tr>   
            @endforeach
        </table>
   </div>
</body>
</html>
