@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex space-between">
            <div>
                <h6 class="m-0 font-weight-bold text-primary">
                    Products
                </h6>
            </div>
            <div class="productForm">
            <form action="{{ route('admin.products.import') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data" class="importProductsForm">
                        @csrf
                        <input type="file" name="file"  id="FileUploadControl" class="form-control fileUpload" required>
                        <br>
                        <button class="btn btn-primary" id="importproductbtn" >Import Products</button>
            </form>
            </div>
            <!-- <div class="ml-auto"> -->
                @can('create_category')
                    <!-- <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                        <span class="text">New product</span>
                    </a> -->
                    
                @endcan
                    
            <!-- </div> -->
           
        </div>

        @include('partials.backend.filter', ['model' => route('admin.products.index')])

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Image</th>

                    <th>Code</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>SubCategory</th>
                    <!-- <th>Feature</th> -->
                    <!-- <th>Quantity</th> -->
                    <th>Customer Price</th>
                    <th>Premium Customer Price</th>
                    <!-- <th>Tags</th> -->
                    
                    <!-- <th>Status</th>
                    <th>Created at</th> -->
                    <th class="text-center" style="width: 30px;">Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <!-- <td>{{ $product->id }}</td> -->
                        <!-- <td>
                            @if($product->firstMedia)
                            <img src="{{ asset('storage/images/products/' . $product->firstMedia->file_name) }}"
                                 width="60" height="60" alt="{{ $product->name }}">
                            @else
                                <img src="{{ asset('img/no-img.png') }}" width="60" height="60" alt="{{ $product->name }}">
                            @endif
                        </td> -->
                        <td>
                            @if($product->product_import_url)
                            <img src="{{ $product->product_import_url }}"
                                 width="60" height="60" alt="{{ $product->name }}">
                            @else
                                <img src="{{ asset('img/no-img.png') }}" width="60" height="60" alt="{{ $product->name }}">
                            @endif
                        </td>
                        <td>{{ $product->code }}</td>
                        <td>{!! $product->name !!}</td>
                        <td>{{ $product->category ? $product->category->name : NULL }}</td>
                        <td>{{ $product->subCategory ? $product->subCategory->name : NULL }}</td>
                        <!-- <td>{{ $product->featured }}</td> -->
                        <!-- <td>{{ $product->quantity }}</td> -->
                        <td>£{{ $product->price }}</td>
                        <td>£{{ $product->premium_price }}</td>
                        <!-- <td class="text-danger">{{ $product->tags->pluck('name')->join(', ') }}</td> -->
                        
                        <!-- <td>{{ $product->status }}</td>
                        <td>{{ $product->created_at }}</td> -->
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="javascript:void(0);"
                                   onclick="if (confirm('Are you sure to delete this record?'))
                                       {document.getElementById('delete-product-{{ $product->id }}').submit();} else {return false;}"
                                   class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                            <form action="{{ route('admin.products.destroy', $product) }}"
                                  method="POST"
                                  id="delete-product-{{ $product->id }}" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="10">No products found.</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="10">
                        <div class="float-right">
                            {!! $products->appends(request()->all())->links() !!}
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
