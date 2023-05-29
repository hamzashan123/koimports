@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                Customer Orders
            </h6>
            <div class="ml-auto">

            </div>
        </div>

        

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Code</th>
                    <th>Description</th>
                    <th>Customer Email</th>
                    
                </tr>
                </thead>
                <tbody>
                @forelse($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->id }}</td>
                        <td>
                            <a href="javascript:void(0);"
                               onclick="if (confirm('Are you sure to delete this record?'))
                                   {document.getElementById('delete-order-{{ $order->id }}').submit();} else {return false;}"
                               class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                            <form action="{{ route('admin.orders.destroy', $order) }}"
                                  method="POST"
                                  id="delete-order-{{ $order->id }}" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
                </tbody>
               
            </table>
        </div>
    </div>
@endsection
