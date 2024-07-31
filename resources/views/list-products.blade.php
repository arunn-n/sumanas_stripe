<h1>Products list</h1>
<div style="width: 100%">
@foreach($products as $product)

<form action="{{ route('stripe') }}" method="post">
<div style="width: 22%;float:left;margin: 10px;"><b>{{$product->Product_name}}</b> <br>
Price: ${{$product->price}}<br><br>
<button type="submit">Buy</button>

@csrf
        <input type="hidden" name="price" value="{{$product->price}}">
        <input type="hidden" name="product_name" value="{{$product->Product_name}}">
        <input type="hidden" name="quantity" value="1">

</div>
</form>

@endforeach
</div>