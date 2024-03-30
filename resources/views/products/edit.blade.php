<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <!-- <div>
        @id($errors->any())
        <ul>
            @foreach($errors->all() as $error)

            @endforeach
        </ul>
    </div> -->
    <form method="post" action="{{route('products.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}"/>
        </div>
        <div
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}"/>
        </div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}"/>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}"/>
        </div>
        <div>
            <input type="submit" value="Update Product" />
        </div>
    </form>
</body>
</html>