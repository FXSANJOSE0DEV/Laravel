@extends('layouts.layout')
@section('content')
<?php
session_start();

if (isset($_GET['product_id'], $_GET['product_name'], $_GET['product_price'], $_GET['quantity'])) {
    $product_id = $_GET['product_id'];
    $product_name = $_GET['product_name'];
    $product_price = $_GET['product_price'];
    $quantity = $_GET['quantity'];

    $item = [
        'product_id' => $product_id,
        'product_name' => $product_name,
        'product_price' => $product_price,
        'quantity' => $quantity
    ];

    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        // Vérifier si le produit est déjà dans le panier
        $productExists = false;
        foreach ($_SESSION['cart'] as &$cartItem) {
            if ($cartItem['product_id'] == $product_id) {
                $cartItem['quantity'] += $quantity;
                $productExists = true;
                break;
            }
        }
        unset($cartItem);

        // Ajouter le produit au panier s'il n'existe pas encore
        if (!$productExists) {
            $_SESSION['cart'][] = $item;
        }
    } else {
        // Créer un nouveau panier si aucun panier n'existe encore
        $_SESSION['cart'] = [$item];
    }
}

// Afficher le contenu du panier
function displayCart()
{
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo '<table>';
        echo '<tr><th>Produit</th><th>Prix</th><th>Quantité</th><th>Total</th></tr>';
        foreach ($_SESSION['cart'] as $cartItem) {
            $totalPrice = $cartItem['product_price'] * $cartItem['quantity'];
            echo '<tr>';
            echo '<td>' . $cartItem['product_name'] . '</td>';
            echo '<td>' . $cartItem['product_price'] . '€</td>';
            echo '<td>' . $cartItem['quantity'] . '</td>';
            echo '<td>' . $totalPrice . '€</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Le panier est vide.';
    }
}
?>

    <!DOCTYPE html>
<html>
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

<?php displayCart(); ?>
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
                    <input type="number" name="quantity_1"
                           value="<?php echo isset($_GET['quantity_1']) ? $_GET['quantity_1'] : 2; ?>" min="1"
                           onchange="this.form.submit()">
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
                    <input type="number" name="quantity_2"
                           value="<?php echo isset($_GET['quantity_2']) ? $_GET['quantity_2'] : 1; ?>" min="1"
                           onchange="this.form.submit()">
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
