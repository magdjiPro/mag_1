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
    <div>
        <a href="{{route('formation.ajout')}}">
            <button type="button" class="btn btn-outline-success mb-2 ">Ajouter un Participant</button>
        </a>
        <a href="{{route('formation.listPDF')}}" type="button" class="btn btn-outline-info mb-2 ">PDF</button>
        <!-- <a href="">
            <button type="button" class="btn btn-danger mb-2 ">Excel</button>
        </a> -->
    </div>
    <div class="card-header text-center text-bold bg-info text-white p-3 fs-5">
      <b>Liste de Presence <span>SAFED</span> </b>
    </div>
    <div class="card-body">
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
                @foreach($formations as $formation)
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
    </div>
</div>
@endsection
