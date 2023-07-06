<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <style>
        .product-container {
            display: aline-block;
            vertical-align:middle;
            gap: 20px;
        }
        .container{
            display: flex;
            flex-wrap: wrap;
        }
        .product-box {
            width: 200px;
            height: 250px;
            border-radius: 10px;
            background-color: #ebebeb;
            padding: 20px;
        }

        .product-box img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .detail_product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .products{
         display: flex;
         flex-wrap: wrap;
         justify-content:space-around;
        }
    </style>
</head>
<body>
    @yield('product-details')
</body>
</html>
