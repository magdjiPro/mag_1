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
<div>
    <a href="{{route('candidat.candidatPDF')}}" target="_blank" class="btn btn-info m-3">Telechargement</a>
</div>
<div class="container p-3 card mt-3">
    <div class="card-header text-center text-bold bg-info text-white ">
      <b>Liste des Candidat</b>
    </div>
    <div class="card-body">
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
                @foreach($candidats as $candidat)
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
                        <td>
                            <a href="{{route('edit.candidat',$candidat->id)}}" class="btn btn-info">Edit</a>
                            <a onclick="return confirm('Do you wish to delete it');" href="{{route('delete.candidat',$candidat->id)}}" class="btn btn-danger">Del</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
