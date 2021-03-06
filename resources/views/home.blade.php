@extends('layouts.base')

@section('title', 'Personnage')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Année de création</th>
            <th scope="col">Nom bande dessinés</th>
            <th scope="col">Dessinateur</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($characters as $character )
            <tr>
            {{-- <th scope="row">1</th> --}}
                <td>{{$character->name}}</td>
                <td>{{$character->creation_year}}</td>
                <td>{{$character->bd_name}}</td>
                <td>{{$character->designer->name}}</td>
                <td>
                    <form action="/updateCharacter" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$character->id}}">
                        <input type="submit" value="Modifier">
                    </form>
                </td>
                <td>
                    <form action="/deleteCharacter" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$character->id}}">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>
        @endforeach
      
    </tbody>
  </table>
@endsection
