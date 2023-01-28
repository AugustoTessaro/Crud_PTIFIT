<x-layout title="Treinos" :user="$user">

    @foreach($treinos as $treino)
    <div>
        <h1>{{$treino->name}}</h1>

        <p>{{$treino->description}}</p>
    </div>

    <a href="{{route('treino.show', $treino->id)}}">ver treino</a>
    @endforeach
</x-layout>
    