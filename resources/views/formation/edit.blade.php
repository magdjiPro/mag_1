@extends('layouts.app')

@section('content')
<div class="container">
    
</div>
<div class="container p-3 card mt-3">
    
    <div class="mb-2">
        <a href="{{route('formation.list', $formations->id)}}" class="btn btn-warning"> << Retour a la liste</a>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

    <div class="card-header text-center text-bold bg-info p-3 fs-5">
      <b>Modifier un Candidat</b>
    </div>
    
    <div class="card-body bg-">
        <form class="row g-3" action="{{route('formation.update', $formations->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-8">
              <label for="" class="form-label">Prenom<span style="color: red;">*</span> </label>
              <input type="text" class="form-control" id="" name="prenom" value="{{$formations->prenom}}">
            </div>
            <div class="col-8">
              <label for="" class="form-label">Nom<span style="color: red;">*</span></label>
              <input type="text" class="form-control" id="" name="nom" value="{{$formations->nom}}">
            </div>
            <div class="col-8">
              <label for="" class="form-label">Telephone<span style="color: red;">*</span></label>
              <input type="text" class="form-control" id=""name="phone" value="{{$formations->phone}}">
            </div>
            <div class="col-8">
              <label for="" class="form-label">Participation<span style="color: red;">*</span></label>
              <input type="text" class="form-control" id=""name="participation" value="{{$formations->participation}}">
            </div>
            
            <div class="">
              <button type="submit" class="btn btn-success">Modifier</button>
            </div>
          </form>
    </div>
</div>
@endsection
