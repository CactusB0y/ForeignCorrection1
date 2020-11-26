@extends('template.main')
@section('content')
    <div class="container">
        <form action="Couleur" method="post">
            @csrf
            <label for="colo">
                ajouter une couleur:
                <input type="text" name="couleur" id="colo">
            </label>
            <button class="btn btn-primary" type="submit">ADD</button>
        </form>
    </div>
@endsection