<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>

<style>
    table,th,td{
        border: 1px solid black;
    }
</style>
<body>
    <form action="/addproduct" method="POST">
    @csrf
    <h2>Add Product</h2>
    <label>Product:</label>
    <input type="text" name="product"><br><br>

    <label>Quantity:</label>
    <input type="number" name="quantity"><br><br>

    <label>Price:</label>
    <input type="number" name="price"><br><br>

    <button type="submit">Add</button>
    </form>


    <center>
    <table>
        <h2>Product Table</h2>
        <thead>
            <th>Product</th>
            <th>Quantity</th>
            <th>Register Date</th>
            <th>Action</th>
            <th></th>
        </thead>

        <tbody>
        @foreach ($products as $product)
         <tr>
            <td>{{ $product->product }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->created_at }}</td>
            <td><button><a href="/editproduct/{{ $product->id }}">Edit</a></button></td>
            <td>
                <form action="/delete/{{ $product->id }}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit">Delete</button>
                </form>
            </td>
         </tr>
        @endforeach
        </tbody>
    </table>
</center>
</body>
</html>
