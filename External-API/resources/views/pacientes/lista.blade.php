@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pacientes Importados</h2>
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->nome }}</td>
                    <td>{{ $paciente->cpf }}</td>
                    <td>{{ $paciente->email }}</td>
                    <td>{{ $paciente->idade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
