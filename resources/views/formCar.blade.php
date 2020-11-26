@extends('template.main')
@section('content')
<div class="container">
    <form action="/Voiture" method="post">
        @csrf
        <label for="car">
            ajouter une voiture:
            <input type="text" name="marque" id="car">
        </label>
        <label for="creation">
            ajouter une année:
            <input type="number" name="creation" id="creation">
        </label>
        <label for="couleur_id">
            ajouter une couleur:
            <select name="couleur_id" id="couleur_id">
                @foreach ($couleur as $item)
                    <option value="{{$item->id}}">{{$item->couleur}}</option>
                @endforeach
            </select>
        </label>
        <button class="btn btn-primary" type="submit">ADD</button>
    </form>
    <div class="container">
        <div class="row">
            @foreach ($couleur as $item)
                <section>
                    <h1>{{$item->couleur}}</h1>
                    @foreach ($voiture as $vroum)  
                        @if ($item->couleur == $vroum->couleur->couleur)
                            <p>{{$vroum->marque}}</p>
                            <p>{{$vroum->creation}}</p>
                            <p>{{$vroum->couleur->couleur}}</p>
                        @endif
                    @endforeach
                </section>
            @endforeach
        </div>
    </div>
</div>
@endsection