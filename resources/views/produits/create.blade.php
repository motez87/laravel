@extends('layouts.app')

@section('content')
    <h1>➕ Ajouter un produit</h1>

    <form action="{{ url('/produits') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nom du produit</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label>Prix (€)</label>
            <input type="number" name="prix" step="0.01" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Quantité</label>
            <input type="number" name="quantite" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">💾 Enregistrer</button>
        <a href="{{ url('/produits') }}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection