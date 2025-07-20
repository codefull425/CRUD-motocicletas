@extends('layouts.app')

@section('content')
    <h1>Editar Moto</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('motos.update', $moto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Marca: <input type="text" name="marca" value="{{ $moto->marca }}"></label><br>
        <label>Modelo: <input type="text" name="modelo" value="{{ $moto->modelo }}"></label><br>
        <label>Ano: <input type="text" name="ano" value="{{ $moto->ano }}"></label><br>
        <label>Preço: <input type="text" name="preco" value="{{ $moto->preco }}"></label><br>
        <button type="submit">Atualizar</button>
    </form>

    <a href="{{ route('motos.index') }}">← Voltar</a>
@endsection
