@extends('layouts.app')

@section('content')
    <h1>Cadastrar Nova Moto</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('motos.store') }}" method="POST">
        @csrf
        <label>Marca: <input type="text" name="marca" value="{{ old('marca') }}"></label><br>
        <label>Modelo: <input type="text" name="modelo" value="{{ old('modelo') }}"></label><br>
        <label>Ano: <input type="text" name="ano" value="{{ old('ano') }}"></label><br>
        <label>Preço: <input type="text" name="preco" value="{{ old('preco') }}"></label><br>
        <button type="submit">Salvar</button>
    </form>

    <a href="{{ route('motos.index') }}">← Voltar</a>
@endsection
