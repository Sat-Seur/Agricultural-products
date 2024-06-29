@extends('admin.blank')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Show All Product</h2>
                <a href="{{ url('/admin/product/create') }}" class="btn btn-primary btn-fw">Add New</a>
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <!-- <th>Long Name</th> -->
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->product_name }}</td>
                        <!-- <td>{{ $product->long_name }}</td> -->
                        <td>{{ $product->brand }}</td>
                        <td>{{ $product->price }}</td>
                        <td><img src="{{ asset($product->image) }}" alt="product Image"></td>
                        <td>
                            <a href="{{ url('admin/product/'.$product->id) }}" class="btn btn-inverse-primary btn-rounded">Show</a>
                            <a href="{{ url('admin/product/'.$product->id.'/edit') }}" class="btn btn-inverse-warning btn-rounded">Edit</a>
                            <form id="del_form_{{ $product->id }}" action="{{ url('/admin/product/'.$product->id) }}" method="POST" style="display:none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="#" class="btn btn-inverse-danger btn-rounded"
                               onclick="event.preventDefault(); document.getElementById('del_form_{{ $product->id }}').submit();">
                               Delete
                            </a>
                        </td>  
                    </tr>
                    @endforeach  
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
