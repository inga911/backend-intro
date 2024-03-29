@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Orders</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($orders as $order)
                        <li class="list-group-item">
                            <div class="front-orders">
                                <div class="front-order">
                                    <div class="front-order-number">#{{$order->id}}</div>
                                    <div class="front-order-user">{{$order->user->name}}</div>
                                    <form action="{{route('orders-update', $order)}}" method="post">
                                        <button type="submit" name=status value="1" class="btn btn-warning">Proccesing</button>
                                        <button type="submit" name=status value="2" class="btn btn-warning">Confirmed</button>
                                        @csrf
                                        @method('put')
                                    </form>
                                    <div class="front-order-status">{{$status[$order->status]}}</div>
                                </div>
                                <div class="front-order-products">
                                    <ul class="list-group">
                                        @foreach($order->products as $product)
                                        <li class="list-group-item">
                                            <div class="front-order-products-list">
                                                <span>{{$product['title']}}</span>
                                                <i>{{$product['price']}} eur</i>
                                                X
                                                <i>{{$product['count']}}</i>
                                                <b>{{$product['total']}} eur</b>
                                            </div>
                                        </li>
                                        @endforeach
                                        <li class="list-group-item">
                                            <div class="front-order-products-list">
                                                <b>{{$order->price}} eur</b>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                            No orders
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection