@extends('layouts.base')

@section('title', 'Ajouter un livre')

@section('content')
<form class="row g-3 needs-validation" action="/addCharacter" method="POST">
    @csrf
    <div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name">   
        </div>
        
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Année de création</label>
            <input type="number" class="form-control" name="creation_year">   
        </div>
        
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Nom de la Bande dessinée</label>
            <input type="text" class="form-control" name="bd_name">   
        </div>  
        
        <div class="col-md-3 position-relative">
            <label for="validationTooltip04" class="form-label">Dessinateur</label>
            <select class="form-control" name="designer_id">
                @foreach ($designers as $designer )                    
                <option value="{{$designer->id}}">{{$designer->name}}</option>
                @endforeach
            </select>
        </div>
    
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Ajouter</button>
        </div>
    </div>
  </form>
@endsection