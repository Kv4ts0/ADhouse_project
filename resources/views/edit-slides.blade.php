@extends('layout.main')

@section('content')
<form action="{{ route('slides.update',['id' => $slide->id]) }}" enctype="multipart/form-data"  method="POST">
@csrf
<div class="card">
    <div class="card-header">
        <h3>Edit Slides</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value=" {{ $slide->name }} "/>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" name="description" id="description" value=" {{ $slide->description }} " />
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <img width="100px" height="100px" src="/storage/slide/{{$slide->image}}" alt="">
            <td><input class="form-control" type="file" name="image" placeholder="image"></td>
        </div>
        <div class="card-footer">
            <button class="btn btn-success">Save</button>
            <button class="btn btn-danger">Cancel</button>
        </div>
    </div>
</div>
</form>

@endsection