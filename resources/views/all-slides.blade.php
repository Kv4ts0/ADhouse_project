@extends('layout.main')

@section('content')

<body>
    <div class="card">
        <div class="card-header">
            <h2>Slides</h2>
        </div>
    </div>
    <div class="card-body">
    <table class="table">
    <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>  
                <th>Image</th>
                <th>Date added</th>
                <th>Actions</th>
            </tr>
    <form action="{{ route('slides.add') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <tr>
                <td colspan="2"><input class="form-control" type="text" name="name" placeholder="Name"></td>
                <td><input class="form-control" type="text" name="description" placeholder="Description"></td>
                <td><input class="form-control" type="file" name="image" placeholder="Image"></td>
                <td><button class="btn btn-success" type="submit">Add</button></td>

        </tr>
    </form>


        @foreach($slides as $sl)
            <tr>
                <td>{{ $sl->id }}</td>
                <td>{{ $sl->name }}</td>
                <td><p>{{ $sl->description }}</p></td>
                <td><img width=100px height="100px" src="storage/slide/{{$sl->image}}" alt=""></td>
                <td>{{ $sl->created_at }}</td>
                <td>
                    <form action="{{ route('slides.delete') }}" method="POST">
                    @csrf
                        <input type="hidden" name="slide_id" value="{{ $sl->id }}" />
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('slides.edit',['id' => $sl->id]) }}" class="btn btn-primary" >Edit</a>
                </td>
            </tr>
        @endforeach
        
        </table>
        </form>
    </div>
</body>
@endsection
