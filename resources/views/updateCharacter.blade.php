@extends('layouts.base')

@section('title', 'Modifier')

@section('content')
<h1>Modifier un personnage</h1>
    <form class="row g-3 needs-validation" action="/updateOneCharacter" method="post">
    @csrf
        <div>
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Nom</label>
                <input type="text" class="form-control" name="name" value="{{$character->name}}">   
            </div>
            
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Année de création</label>
                <input type="number" class="form-control" name="creation_year" value="{{$character->creation_year}}">   
            </div>
            
            <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Nom de la Bande dessinée</label>
                <input type="text" class="form-control" name="bd_name" value="{{$character->bd_name}}">   
            </div>  
            
            <div class="col-md-3 position-relative">
                <label for="validationTooltip04" class="form-label">Dessinateur</label>
                <select class="form-control" name="designer_id">
                    @foreach ($designers as $designer )
                        @if ($character === $designer->id)                
                            <option value="{{$designer->id}}"selected>{{$designer->name}}</option>
                        @else
                            <option value="{{$designer->id}}">{{$designer->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        
            <div class="col-12">
                <input type="hidden" name="id" value="{{$character->id}}">
                <button class="btn btn-primary">Modifier</button>
            </div>
        </div>
    </form>
@endsection