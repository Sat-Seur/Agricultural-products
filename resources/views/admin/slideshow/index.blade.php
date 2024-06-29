@extends('admin.blank')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>All slideshows</h2>
                <a href="{{ url('/admin/slide/create') }}" class="btn btn-primary btn-fw">Add New</a>
                <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
                <table class="table table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Image</th>
                        <!-- <th>Created at</th>
                        <th>Updated at</th> -->
                        <th>Action</th>
                    </tr>
                    @foreach($slides as $slide)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $slide->title }}</td>
                        <td><img src="{{ asset($slide->image) }}" alt="Slide Image"></td>
                        <!-- <td>{{ $slide->created_at }}</td>
                        <td>{{ $slide->updated_at }}</td> -->
                        <td>
                            <a href="{{ url('admin/slide/'.$slide->id) }}" class="btn btn-inverse-primary btn-rounded">Show</a>
                            <a href="{{ url('admin/slide/'.$slide->id.'/edit') }}" class="btn btn-inverse-warning btn-rounded">Edit</a>
                            <form id="del_form_{{ $slide->id }}" action="{{ url('/admin/slide/'.$slide->id) }}" method="POST" style="display:none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a href="#" class="btn btn-inverse-danger btn-rounded"
                               onclick="event.preventDefault(); document.getElementById('del_form_{{ $slide->id }}').submit();">
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
