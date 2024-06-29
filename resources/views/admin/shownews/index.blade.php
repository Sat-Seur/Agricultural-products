@extends('admin.blank')
@section('content')
<div class="row">
    <div class="col-lg-13 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>Show All News</h2>
                <a href="{{ url('/admin/news/create') }}" class="btn btn-primary btn-fw">Add New</a>
                <style>
               img {
                   max-width: 100px;
                max-height: 100px;
               }
              </style>
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>News Content</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    @foreach($newss as $news)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->news_content }}</td>
                        <td><img src="{{ asset($news->image) }}" alt="News Image"></td>
                        <!-- <td>{{ $news->image }}</td>
                        <td><img src="{{ $news->image }}" alt="Slide Image"></th> -->
                        <td>{{ $news->date }}</td>
                        <td>
                            <a href="{{ url('admin/news/'.$news->id) }}" class="btn btn-inverse-primary btn-rounded">Show</a>
                            <a href="{{ url('admin/news/'.$news->id.'/edit') }}" class="btn btn-inverse-warning btn-rounded">Edit</a>
                            <form id="del_form_{{ $news->id }}" action="{{ url('/admin/news/'.$news->id) }}" method="POST" style="display:none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="#" class="btn btn-inverse-danger btn-rounded"
                               onclick="event.preventDefault(); document.getElementById('del_form_{{ $news->id }}').submit();">
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
