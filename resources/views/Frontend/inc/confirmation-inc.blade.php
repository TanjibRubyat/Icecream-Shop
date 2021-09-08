

    <form action="{{route('confirm.orders')}}" methods="post">
        @csrf
        @foreach(App\Models\Order::cart_view() as $cart)
        <input type="hidden" name="user_id" value="{{$cart->user_id}}">
        <input type="hidden" name="product_id" value="{{$cart->product_id}}">
        <input type="hidden" name="cart_id" value="{{$cart->id}}">
        @endforeach

        @foreach(App\Models\Order::getUser() as $user)
        <input type="hidden" name="customer_name" value="{{$user->name}}">
        @endforeach

        <button class="btn btn-primary" type="submit">Confirm</button>
    </form>

