@extends('layouts.app')

@section('content')
    <h1>✏️ Modifier le produit</h1>

    <form action="{{ route('produits.update', $produit) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ $produit->nom }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $produit->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Prix (€)</label>
            <input type="number" name="prix" step="0.01" class="form-control" value="{{ $produit->prix }}" required>
        </div>
        <div class="mb-3">
            <label>Quantité</label>
            <input type="number" name="quantite" class="form-control" value="{{ $produit->quantite }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">💾 Mettre à jour</button>
        <a href="{{ route('produits.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection