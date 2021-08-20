@extends('layouts.base')

@section('title', 'Dessinateur')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">année de naissance</th>
            <th scope="col">Nationalité</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($designers as $designer )
            <tr>
            {{-- <th scope="row">1</th> --}}
                <td>{{$designer->name}}</td>
                <td>{{$designer->birth_year}}</td>
                <td>{{$designer->nationality}}</td>
                <td>
                    <form action="/updateDesigner" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$designer->id}}">
                        <input type="submit" value="Modifier">
                    </form>
                </td>
                <td>
                    <form action="/deleteCharacter" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$designer->id}}">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>
        @endforeach
      
    </tbody>
  </table>
  @endsection