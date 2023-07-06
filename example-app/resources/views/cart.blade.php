@extends('layouts.layout')
@section('content')
<head>
    <title>Mon Panier</title>

    <head>
        <title>Mon Panier</title>
        <style>
            /* Styles CSS pour la mise en page */
            body {
                font-family: Arial, sans-serif;
            }
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #f2f2f2;
            }
            .total {
                font-weight: bold;
            }
            button {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: white;
                border: none;
                cursor: pointer;
            }
        </style>
    </head>
<body>
<h1>Mon Panier</h1>

<table>
    <tr>
        <th>Produit</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Total</th>
    </tr>
    <tr>
        <td>Produit 1</td>
        <td>19,99€</td>
        <td><input type="number" value="2" min="1"></td>
        <td>39,98€</td>
    </tr>
    <tr>
        <td>Produit 2</td>
        <td>9,99€</td>
        <td><input type="number" value="1" min="1"></td>
        <td>9,99€</td>
    </tr>
    <!-- Ajoutez d'autres lignes pour les autres produits dans le panier -->

    <tr>
        <td colspan="3" class="total">Total</td>
        <td class="total">49,97€</td>
    </tr>
</table>

<button>Valider la commande</button>
@endsection
</body>
