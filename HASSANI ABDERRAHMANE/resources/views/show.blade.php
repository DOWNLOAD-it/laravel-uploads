@extends('layouts.base') @section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  
  <div class="uper">
  
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
  
    <div class="form-group">
      <h3>Prenom du stagiaire :</h3>
      <p>{{ $stagiaire->Fname }}</p>
    </div>

    <div class="form-group">
      <h3>Nom du stagiaire :</h3>
      <p>{{ $stagiaire->Lname }}</p>
    </div>

    <div class="form-group">
        <h3>age :</h3>
        <p>{{ $stagiaire->age }}</p>
    </div>

    <div class="form-group">
      <h3>classe du stagiaire :</h3>
      <p>{{ $stagiaire->class }}</p>
    </div>
    <a href="{{ route('stagiaires.index')}}" class="btn btn-primary">Retour</a>
  <div>
@endsection