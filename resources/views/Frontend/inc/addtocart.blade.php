
<form action="{{route('cart.store',$product->id)}}" method="post">
@csrf
    <input type="hidden" name="product_id" value="{{$product->id}}">   
    <input type="hidden" name="product_price" value="{{$product->price}}">
  <button type="submit" class="btn btn-light">Add to cart</button>
  
</form>
