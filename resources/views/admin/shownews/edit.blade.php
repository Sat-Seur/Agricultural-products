@extends('admin.blank')

@section('content')

<div class="row">

    <div class="col-lg-13 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Edit News</h2>
                <form action="{{ url('admin/news/'.$news->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>News title</label>
                        <input type="text" name="title" class="form-control" value="{{ $news->title }}">
                    </div>
                    <div class="form-group">
                        <label>News Content</label>
                        <input type="text" name="news_content" class="form-control" value="{{ $news->news_content }}">
                    </div>
                    <div class="form-group">
                        <img src="{{ asset($news->image) }}" style="width: 100%;">
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
