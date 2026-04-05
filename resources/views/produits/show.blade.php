@extends('layouts.app')

@section('content')
    <h1>📄 Détails du produit</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $produit->nom }}</h5>
            <p><strong>Description :</strong> {{ $produit->description ?: 'Aucune description' }}</p>
            <p><strong>Prix :</strong> {{ $produit->prix }} €</p>
            <p><strong>Quantité :</strong> {{ $produit->quantite }}</p>
            <p><strong>Créé le :</strong> {{ $produit->created_at }}</p>
            <a href="{{ route('produits.index') }}" class="btn btn-secondary">Retour</a>
            <a href="{{ route('produits.edit', $produit) }}" class="btn btn-warning">Modifier</a>
        </div>
    </div>
@endsection