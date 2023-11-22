@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
</div>
<div class="container p-3 card mt-3">
    <div class="card-header text-center text-bold bg-outline-success ">
      <b>Ajout de Electeur</b>
    </div>
    <div class="card-body bg-info">
        <form class="row g-3" action="{{route('electeur.ajout')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-6">
              <label for="" class="form-label">Prenom</label>
              <input type="text" class="form-control" id=""name="prenom">
            </div>
            <div class="col-6">
              <label for="" class="form-label">Nom</label>
              <input type="text" class="form-control" id="" name="nom">
            </div>
            <div class="col-6">
              <label for="" class="form-label">Numéro Carte d'identité</label>
              <input type="text" class="form-control" id="" name="cni">
            </div>
            <div class="">
              <label for="" class="form-label">Candidat</label>
              <select id="" class="form-select" name="candidat">
                @foreach($candidats as $value)
                    <option value="{{$value->id}}">{{$value->prenom}}</option>
                @endforeach
              </select>
            </div>
            <div class="">
              <button type="submit" class="btn btn-success">Ajouter</button>
            </div>
          </form>
    </div>
</div>
@endsection
