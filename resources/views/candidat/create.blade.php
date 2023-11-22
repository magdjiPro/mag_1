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
    <div class="card-header text-center text-bold bg-success ">
      <b>Ajout de Candidat</b>
    </div>
    <div class="card-body bg-info">
        <form class="row g-3" action="{{route('ajout.candidat')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-6">
              <label for="inputEmail4" class="form-label">Nom</label>
              <input type="text" class="form-control" id="inputEmail4" name="nom">
            </div>
            <div class="col-6">
              <label for="inputPassword4" class="form-label">Prenom</label>
              <input type="text" class="form-control" id="inputPassword4"name="prenom">
            </div>
            <div class="col-6">
              <label class="form-label">Photo Profile</label>
              <input type="file" class="form-control" name="photo_profile">
            </div>
            <div class="col-6">
              <label for="inputCity" class="form-label">date Naissance</label>
              <input type="date" class="form-control" id="inputCity" name="dateNaissance">
            </div>
            <div class="">
              <label for="inputState" class="form-label">parti</label>
              <select id="inputState" class="form-select" name="parti">
                <option selected>YEWWI</option>
                <option>BENNO</option>
                <option>SOPPI</option>
              </select>
            </div>
            <div class="">
              <button type="submit" class="btn btn-success">Ajouter</button>
            </div>
          </form>
    </div>
</div>
@endsection
