@extends('admin.blank')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Create New Product</h2>
                <form action="{{ url('admin/product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" name="product_name" class="form-control" placeholder="Short name" required>
                        </div>
                        <div class="col">
                            <input type="text" name="long_name" class="form-control" placeholder="Long Name" required>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col">
                            <input type="text" name="brand" class="form-control" placeholder="Brand" required>
                        </div>
                        <div class="col">
                            <input type="text" name="price" class="form-control" placeholder="Price" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
