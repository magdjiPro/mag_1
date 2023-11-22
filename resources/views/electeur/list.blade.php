@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success text-center">
        {{session('success')}}
    </div>
    @endif
    @if(session('danger'))
    <div class="alert alert-danger text-center">
        {{session('danger')}}
    </div>
    @endif
    @if(session('info'))
    <div class="alert alert-info text-center">
        {{session('info')}}
    </div>
    @endif
</div>
<div class="container p-3 card mt-3">
    <div class="card-header text-center text-bold bg-info text-white ">
      <b>Liste des Electeurs</b>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <!-- <th scope="col">Photo Profile</th> -->
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">CNI</th>
                <th scope="col">Candidat</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($electeurs as $electeur)
                    <tr>
                        <th scope="row">{{$electeur->id}}</th>
                        <!-- <th scope="row">
                            @if(!empty($electeur->photo_profile))
                              <img src="/storage/{{$electeur->photo_profile}}" style="height:50px; font-weight:50px;" >
                            @endif
                        </th> -->
                        <td>{{$electeur->prenom}}</td>
                        <td>{{$electeur->nom}}</td>
                        <td>{{$electeur->cni}}</td>
                        <td>{{$candidat->prenom}}</td>
                        <td>
                            <a href="{{route('electeur.edit',$electeur->id)}}" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('Do you wish to delete it');" href="{{route('electeur.delete',$electeur->id)}}" class="btn btn-danger">Del</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
