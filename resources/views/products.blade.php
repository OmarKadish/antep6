<html>
<head>

</head>
<body>
<table>
    <caption>The Products Libraries</caption>
    <thead>
    <tr>
        <th>Name of the Product</th>
        <th>Owner's Name</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    @foreach($Products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->owner}}</td>
            <td>{{$product->price}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
