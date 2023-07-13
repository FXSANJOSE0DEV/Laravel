@extends('layouts.layout')
<!-- Section 1 Navbar -->
@section('content')
    @section('title')
        Back Office
    @endsection
    <section class="">


        <h2>Ajouter un nouvel article</h2>
        <h2><a href="/BackOfficeUpdate"> Mise à jour d'un article</a></h2>
        <form method="post" action="{{ route('product.update') }}">


            @csrf
            @method('PUT')
            {{--            {{ csrf_field() }}--}}

            <label for="name">ID du produit :</label>
            <input value="{{$product->id}}" type="text" name="productId" id="pid" required><br><br>

            <label for="name">Nom :</label>
            <input value="{{$product->name}}" type="text" name="name" id="pname" required><br><br>

            <label for="description">Description :</label>
            <textarea name="description" rows="4" id="dproduct" required>{{$product->name}}</textarea><br><br>

            <label for="price">Prix :</label>
            <input type="number" name="price" step="0.01" id="price" value="{{$product->price}}" required><br><br>

            <label for="weight">Poids :</label>
            <input type="number" name="weight" step="0.01" id="wproduct" value="{{$product->weight}}" required><br><br>

            <label for="image">Image :</label>
            <input type="text" name="image" id="urlimg" value="{{$product->image}}" required><br><br>

            <label for="quantity">Quantité :</label>
            <input type="number" name="quantity" id="qproduct" value="{{$product->quantity}}" required><br><br>

            <label for="available">Disponible :</label>
            <select name="available">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select><br><br>

            <label for="categorie_id">ID de catégorie :</label>
            <input type="number" name="categorie_id" value="{{$product->categorie_id}}" required><br><br>

            <button type="submit" name="submit">Mettre à jour</button>
            {{--            <input type="submit" name="submit" value="Mettre à jour l'article">--}}
            {{--            <input type="submit" name="submit" value="Supprimer l'article">--}}
        </form>

    </section>

@endsection
