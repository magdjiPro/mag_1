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
    <div class="mb-2">
        <a href="{{route('formation.list')}}" class="btn btn-warning"> << Retour a la liste</a>
    </div>

    <div class="card-header text-center text-bold bg-info p-3 fs-5">
      <b>Ajout de Candidat</b>
    </div>
    <div class="card-body bg-">
        <form class="row g-3" action="{{route('formation.add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-8">
              <label for="" class="form-label">Prenom<span style="color: red;">*</span> </label>
              <input type="text" class="form-control" id=""name="prenom">
            </div>
            <div class="col-8">
              <label for="" class="form-label">Nom<span style="color: red;">*</span></label>
              <input type="text" class="form-control" id="" name="nom">
            </div>
            <div class="col-8">
              <label for="" class="form-label">Telephone<span style="color: red;">*</span></label>
              <input type="text" class="form-control" id=""name="phone">
            </div>
            <div class="col-8">
              <label for="" class="form-label">Participation<span style="color: red;">*</span></label>
              <input type="text" class="form-control" id=""name="participation">
            </div>
            
            <div class="">
              <button type="submit" class="btn btn-success">Ajouter</button>
            </div>
          </form>
    </div>
</div>
@endsection
