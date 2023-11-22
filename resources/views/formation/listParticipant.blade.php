<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <!-- <th scope="col">Photo Profile</th> -->
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Participation</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data['users'] as $formation)
                    <tr>
                        <th scope="row">{{$formation->id}}</th>
                        <td>{{$formation->nom}}</td>
                        <td>{{$formation->prenom}}</td>
                        <td>{{$formation->phone}}</td>
                        <td>{{$formation->participation}}</td>
                        <td>
                            <a href="{{route('formation.edit',$formation->id)}}" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('Do you wish to delete it');" href="{{route('formation.delete',$formation->id)}}" class="btn btn-danger">Del</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</body>
</html>