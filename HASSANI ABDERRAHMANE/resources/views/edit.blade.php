@extends('layouts.base') @section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  
  <div class="card uper">
    <div class="card-header">
      Modifier la voiture
    </div>
  
    <div class="card-body">
  
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
  
        <form method="post" action="{{ route('stagiaires.update', $stagiaire->id ) }}">
            <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="Fname">Prenom du stagiaire :</label>
              <input type="text" class="form-control" name="Fname" value="{{ $stagiaire->Fname }}"/>
            </div>

            <div class="form-group">
              <label for="Lname">Nom du stagiaire :</label>
              <input type="text" class="form-control" name="Lname" value="{{ $stagiaire->Lname }}"/>
            </div>

            <div class="form-group">
                <label for="age">age :</label>
                <input type="number" class="form-control" name="age" value="{{ $stagiaire->age }}"/>
            </div>

            <div class="form-group">
              <label for="class">classe du stagiaire :</label>
              <input type="text" class="form-control" name="class" value="{{ $stagiaire->class }}"/>
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
  </div>
  <br>
  <a href="{{ route('stagiaires.index')}}" class="btn btn-primary">Retour</a>
@endsection