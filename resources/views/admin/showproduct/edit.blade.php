@extends('admin.blank')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Edit Product</h2>
                <form action="{{ url('admin/product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <input type="text" name="product_name" class="form-control" placeholder="Short name" required value="{{ $product->product_name }}">
                        </div>
                        <div class="col">
                            <input type="text" name="long_name" class="form-control" placeholder="Long Name" required value="{{ $product->long_name }}">
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col">
                            <input type="text" name="brand" class="form-control" placeholder="Brand" required value="{{ $product->brand }}">
                        </div>
                        <div class="col">
                            <input type="text" name="price" class="form-control" placeholder="Price" required value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <img src="{{ asset($product->image) }}" style="width: 100%;" alt="Product Image">
                    </div>
                    <div class="form-group">
                        <label>Re-Upload image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
