@extends('layouts.app')

@section('content')
    <h1>Lista de Motos</h1>

    <a href="{{ route('motos.create') }}">Cadastrar nova moto</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        @foreach($motos as $moto)
            <tr>
                <td>{{ $moto->id }}</td>
                <td>{{ $moto->marca }}</td>
                <td>{{ $moto->modelo }}</td>
                <td>{{ $moto->ano }}</td>
                <td>R$ {{ number_format($moto->preco, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('motos.edit', $moto->id) }}">Editar</a> |
                    <form action="{{ route('motos.destroy', $moto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Deseja realmente excluir?')">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
