@extends('layouts.base')

@section('title', 'Modifier')

@section('content')
<h1>Modifier un dessinateur</h1>
    <form class="row g-3 needs-validation" action="/updateOneDesigner" method="post">
    @csrf
        <div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Nom</label>
                <input type="text" class="form-control" name="name" value="{{$designer->name}}">   
            </div>
            
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Année de naissance</label>
                <input type="number" class="form-control" name="birth_year" value="{{$designer->birth_year}}">   
            </div>
            
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">nationalité</label>
                <input type="text" class="form-control" name="nationality" value="{{$designer->nationality}}">   
            </div>
        
            <div class="col-12">
                <input type="hidden" name="id" value="{{$designer->id}}">
                <button class="btn btn-primary">Modifier</button>
            </div>
        </div>
    </form>
@endsection