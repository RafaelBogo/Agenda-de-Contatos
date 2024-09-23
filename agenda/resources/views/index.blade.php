@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="mb-4">Bem-vindo à Agenda de Contatos</h1>
    <p class="lead mb-5">Por favor, escolha uma opção para continuar.</p>

    <div class="d-flex justify-content-center">
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg mx-2">Fazer Login</a>
        <a href="{{ route('register') }}" class="btn btn-success btn-lg mx-2">Registrar-se</a>
    </div>
</div>
@endsection
