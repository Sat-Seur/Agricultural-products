@extends('admin.blank')
@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h1>Create News</h1>
                <form action="{{ url('admin/news') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>News title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>News Content</label>
                        <input type="text" name="news_content" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Upload image</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

