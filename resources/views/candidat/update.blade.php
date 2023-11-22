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
      <b>Editer un Candidat</b>
    </div>
    <div class="card-body">
        <form class="row g-3" action="{{route('update.candidat', $candidat->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col">
              <label  class="form-label">Nom</label>
              <input type="text" class="form-control"  name="nom" value="{{$candidat->nom}}">
            </div>
            <div class="">
              <label  class="form-label">Prenom</label>
              <input type="text" class="form-control" name="prenom" value="{{$candidat->prenom}}">
            </div>
            <div class="">
              <label for="inputCity" class="form-label">date Naissance</label>
              <input type="date" class="form-control" id="inputCity" name="dateNaissance" value="{{$candidat->dateNaissance}}">
            </div>
            <div class="col-6">
              <label class="form-label">Photo Profile</label>
              <input type="file" class="form-control" name="photo_profile">
            </div>
            <div class="">
              <label for="inputState" class="form-label">parti</label>
              <select id="inputState" class="form-select" name="parti">
                <option {{($candidat->parti) ? 'selected' : ''}} >YEWWI</option>
                <option {{($candidat->parti) ? 'selected' : ''}} >BENNO</option>
                <option {{($candidat->parti) ? 'selected' : ''}}>SOPPI</option>
              </select>
            </div>
            <div class="">
              <button type="submit" class="btn btn-success">Modifier</button>
            </div>
          </form>
    </div>
</div>
@endsection
