@extends('admin.admins')

@section('content')
    <div class="content">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>ID COMMANDE</th>
                    <th>DATE COMMANDE</th>
                    <th>CLIENT</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <a href="{{route('order.product', $order->payment_intent_id)}}" class="text-decoration-none">
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->payment_created_at}}</td>
                            <td>{{$order->customer_name}}</td>
                        </tr>
                    </a>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection