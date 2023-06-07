@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                Order items List
            </h6>
            <div class="ml-auto">

            </div>
        </div>

        

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    
                    <th>Product Code</th>
                    <th>Description</th>
                    <th>Quantity</th>
                </tr>
                </thead>
                <tbody>
                @forelse($data as $order)
                    <tr>
                        <td>{{ $order->product_code }}</td>
                        <td>{{ $order->description }}</td>
                        <td>{{ $order->quantity }}</td>
                        
                    </tr>
                @empty
                    
                @endforelse
                </tbody>
               
            </table>
        </div>
    </div>
@endsection
