@extends('layouts.base')

@section('title', 'Ajouter un dessinnateur')

@section('content')
<h1>Ajouter un dessinateur</h1>
<form class="row g-3 needs-validation" action="/addDesigner" method="POST">
    @csrf
    <div>
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Nom</label>
            <input type="text" class="form-control" name="name">   
        </div>
        
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Année  de naissance </label>
            <input type="number" class="form-control" name="birth_year">   
        </div>
        
        <div class="col-md-4 position-relative">
            <label for="validationTooltip01" class="form-label">Nationalité</label>
            <input type="text" class="form-control" name="nationality">   
        </div>  
        
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Ajouter</button>
        </div>
    </div>
  </form>
@endsection