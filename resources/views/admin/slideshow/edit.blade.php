@extends('admin.blank')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Create Slide</h2>
                <form action="{{ url('admin/slide/'.$slide->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Slide title</label>
                        <input type="text" name="title" class="form-control" value="{{ $slide->title }}">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset($slide->image) }}" style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <label>Re-Upload image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
