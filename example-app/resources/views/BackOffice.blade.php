@extends('layouts.layout')
<!-- Section 1 Navbar -->
@section('content')
    @section('title')
        Back Office
    @endsection
    <section class="">


        <h2>Ajouter un nouvel article</h2>
        <form method="post" action=Models/Product>
            @csrf
            <label for="name">Nom :</label>
            <input type="text" name="name" required><br><br>

            <label for="description">Description :</label>
            <textarea name="description" rows="4" required></textarea><br><br>

            <label for="price">Prix :</label>
            <input type="number" name="price" step="0.01" required><br><br>

            <label for="weight">Poids :</label>
            <input type="number" name="weight" step="0.01" required><br><br>

            <label for="image">Image :</label>
            <input type="text" name="image" required><br><br>

            <label for="quantity">Quantité :</label>
            <input type="number" name="quantity" required><br><br>

            <label for="available">Disponible :</label>
            <select name="available">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select><br><br>

            <label for="categorie_id">ID de catégorie :</label>
            <input type="number" name="categorie_id" required><br><br>

            <input type="submit" name="submit" value="Ajouter l'article">
            <input type="submit" name="submit" value="Mettre à jour l'article">
            <input type="submit" name="submit" value="Supprimer l'article">
        </form>

    </section>

@endsection
