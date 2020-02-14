
@foreach ($pokemons as $pokemon)
    <p>
        <strong>{{ $pokemon->name }}</strong> ({{ $pokemon->type }})
    </p>
@endforeach
