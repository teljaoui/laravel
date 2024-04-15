<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Résultats de la recherche</title>
</head>
<body>
   <div class="container" style="margin-top:30px">
        <h2 class="text-center">Résultats de la recherche</h2>
        <table  class="table table-bordered">
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
        <a href="/home"><i class="fa-sharp fa-solid fa-arrow-left"></i> Recherche de retraités</a>
   </div>
</body>
</html>
