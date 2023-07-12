@extends('layouts.layout')
<!-- Section 1 Navbar -->
@section('content')
    @section('title')
        Back Office
    @endsection
    <section class="">


        <h2>Ajouter un nouvel article</h2>
        <form method="post" action="{{ route('product.store') }}">
            @csrf
            {{--            {{ csrf_field() }}--}}
            <label for="name">Nom :</label>
            <input type="text" name="name" id="pname" required><br><br>

            <label for="description">Description :</label>
            <textarea name="description" rows="4" id="dproduct" required></textarea><br><br>

            <label for="price">Prix :</label>
            <input type="number" name="price" step="0.01" id="pprice" required><br><br>

            <label for="weight">Poids :</label>
            <input type="number" name="weight" step="0.01" id="wproduct" required><br><br>

            <label for="image">Image :</label>
            <input type="text" name="image" id="urlimg" required><br><br>

            <label for="quantity">Quantité :</label>
            <input type="number" name="quantity" id="qproduct" required><br><br>

            <label for="available">Disponible :</label>
            <select name="available">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select><br><br>

            <label for="categorie_id">ID de catégorie :</label>
            <input type="number" name="categorie_id" required><br><br>

            <button type="submit" name="submit">Ajouter l'article</button>
            {{--            <input type="submit" name="submit" value="Mettre à jour l'article">--}}
            {{--            <input type="submit" name="submit" value="Supprimer l'article">--}}
        </form>

    </section>

@endsection
