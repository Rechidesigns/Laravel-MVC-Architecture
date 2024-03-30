<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @id($errors->any())
        <ul>
            @foreach($errors->all() as $error)

            @endforeach  
        </ul>
    </div>
    <form method="post" action="{{route('products.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" />
        </div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" />
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" />
        </div>
        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>
</body>
</html>