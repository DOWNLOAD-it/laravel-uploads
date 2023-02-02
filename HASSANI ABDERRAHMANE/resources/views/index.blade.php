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
  
    <table class="table table-striped">
  
      <thead>
          <tr>
            <td>ID</td>
            <td>Prénom</td>
            <td>Nom</td>
            <td>age</td>
            <td>classe</td>
            <td colspan="2">Action</td>
          </tr>
      </thead>
  
      <tbody>
          @foreach($stagiaires as $stagiaire)
          <tr>
              <td>{{$stagiaire->id}}</td>
              <td>{{$stagiaire->Fname}}</td>
              <td>{{$stagiaire->Lname}}</td>
              <td>{{$stagiaire->age}}</td>
              <td>{{$stagiaire->class}}</td>
              <td><a href="{{ route('stagiaires.show', $stagiaire->id)}}" class="btn btn-outline-primary">Afficher</a></td>
              <td><a href="{{ route('stagiaires.edit', $stagiaire->id)}}" class="btn btn-outline-primary">Modifier</a></td>
              <td>
                  <form action="{{ route('stagiaires.destroy', $stagiaire->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger" type="submit">Supprimer</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <a href="{{ route('stagiaires.create')}}" class="btn btn-primary">ajouter un nouveau stagiaire</a>
  <div>
@endsection