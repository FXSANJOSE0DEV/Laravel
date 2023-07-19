

<h2>{{ $categories->name }}</h2>
<ul>
    @foreach ($categories->products as $product)
    <li>{{ $product->name }}</li>
    @endforeach
</ul>

