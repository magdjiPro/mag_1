<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>candidat</title>
</head>
<body>
    <style>
        .h1 {
            background-color: aquamarine;
        }
    </style>
    <h1 class="h1">Liste des candidats</h1>
    @foreach($data['users'] as $donnes)
        <p>prenom: {{$donnes->prenom}}</p>

    @endforeach
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Photo Profile</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">date Naissance</th>
            <th scope="col">Parti</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['users'] as $candidat)
                <tr>
                    <th scope="row">{{$candidat->id}}</th>
                    <th scope="row">
                        @if(!empty($candidat->photo_profile))
                          <img src="/storage/{{$candidat->photo_profile}}" style="height:50px; font-weight:50px;" >
                        @endif
                    </th>
                    <td>{{$candidat->nom}}</td>
                    <td>{{$candidat->prenom}}</td>
                    <td>{{$candidat->dateNaissance}}</td>
                    <td>{{$candidat->parti}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>