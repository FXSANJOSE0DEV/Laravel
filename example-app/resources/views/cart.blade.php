@extends('layouts.layout')
@section('content')
<head>
    <title>Mon Panier</title>

    <head>
        <title>Mon Panier</title>
        <style>

        </style>
        <?php
        function calculateTotalPrice($quantity, $price)
        {
            return $quantity * $price;
        }
        ?>
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
        <td>
            <form method="get" action="">
                <input type="number" name="quantity_1" value="<?php echo isset($_GET['quantity_1']) ? $_GET['quantity_1'] : 2; ?>" min="1" onchange="this.form.submit()">
            </form>
        </td>
        <td>
            <?php
            $quantity_1 = isset($_GET['quantity_1']) ? $_GET['quantity_1'] : 2;
            $price_1 = 19.99;
            $totalPrice_1 = calculateTotalPrice($quantity_1, $price_1);
            echo $totalPrice_1 . '€';
            ?>
        </td>
    </tr>
    <tr>
        <td>Produit 2</td>
        <td>9,99€</td>
        <td>
            <form method="get" action="">
                <input type="number" name="quantity_2" value="<?php echo isset($_GET['quantity_2']) ? $_GET['quantity_2'] : 1; ?>" min="1" onchange="this.form.submit()">
            </form>
        </td>
        <td>
            <?php
            $quantity_2 = isset($_GET['quantity_2']) ? $_GET['quantity_2'] : 1;
            $price_2 = 9.99;
            $totalPrice_2 = calculateTotalPrice($quantity_2, $price_2);
            echo $totalPrice_2 . '€';
            ?>
        </td>
    </tr>
    <!-- Ajoutez d'autres lignes pour les autres produits dans le panier -->

    <tr>
        <td colspan="3" class="total">Total</td>
        <td class="total">
            <?php
            $totalPrice = $totalPrice_1 + $totalPrice_2; // Ajoutez d'autres variables de prix total si nécessaire
            echo $totalPrice . '€';
            ?>
        </td>
    </tr>
</table>

<button>Valider la commande</button>
@endsection
</body>
