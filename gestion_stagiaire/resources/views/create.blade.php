@extends('layout') 
@section('content')
    <form method='POST' action="{{Route('stgs.store')}}">
        @csrf
        <table>
            <tr>
                <td>        
                    <label for="prenom">Prenom</label>
                </td>
                <td>
                    <input type="text" name="prenom" >
                </td>
            </tr>
            <tr>
                <td>        
                    <label for="nom">Nom</label>
                </td>
                <td>

                    <input type="text" name="nom" >
                </td>
            </tr>
            <tr>
                <td>        
                    <label for="moy">Moyenne</label>
                </td>
                <td>

                    <input type="number" name="moy" >
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <button type="submit">Ajouter</button>
                </td>
            </tr>
        </table>

    </form>
@endsection