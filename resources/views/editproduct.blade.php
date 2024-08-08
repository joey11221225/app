<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="/edit/{{ $product->id }}" method="post">
    @csrf
    @method("PUT")
    <h2>Edit</h2>
    <label>Product:</label>
    <input type="text" name="product" value="{{ $product->product }}"><br><br>
{{ $product->product }}
    <label>Quantity:</label>
    <input type="number" name="quantity" value="{{ $product->quantity }}"><br><br>

    <label>Price:</label>
    <input type="number" name="price" value="{{ $product->price }}"><br><br>

    <button type="submit">Edit</button>
    </form>
</body>
</html>