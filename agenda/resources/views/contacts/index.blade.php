@extends('layouts.app')

@section('title', 'Meus Contatos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Meus Contatos</h1>
        <a href="{{ route('contacts.create') }}" class="btn btn-primary">Adicionar Contato</a>
    </div>

    @if($contacts && $contacts->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->nome }}</td>
                        <td>{{ $contact->telefone }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->endereco }}</td>
                        <td>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Editar</a>

                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Você ainda não tem contatos cadastrados.</p>
    @endif
@endsection
