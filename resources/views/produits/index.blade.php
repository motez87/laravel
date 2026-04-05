@extends('layouts.app')

@section('content')
    <h1 class="mb-4">📦 Liste des Produits</h1>
    
    <a href="{{ url('/produits/create') }}" class="btn btn-primary mb-3">+ Ajouter un produit</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produits ?? [] as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nom }}</td>
                <td>{{ $p->prix }} €</td>
                <td>{{ $p->quantite }}</td>
                <td>
                    <a href="{{ url('/produits/'.$p->id) }}" class="btn btn-info btn-sm">Voir</a>
                    <a href="{{ url('/produits/'.$p->id.'/edit') }}" class="btn btn-warning btn-sm">Modifier</a>
                    <form action="{{ url('/produits/'.$p->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @empty
                <tr><td colspan="5" class="text-center">📭 Aucun produit disponible</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection