@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $evento->nome }}</h1>

    @foreach ($perguntas as $pergunta)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $pergunta->user->name ?? 'Anônimo' }}
                </h5>

                <p class="card-text">
                    {{ $pergunta->pergunta }}
                </p>
            </div>
        </div>
    @endforeach

    {{ $perguntas->links() }}
</div>
@endsection