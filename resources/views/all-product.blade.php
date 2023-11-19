@extends('layout.main')

@section('content')
<body>
    <table class="table">
    <tr>
        <form action="{{ route('products.all') }}" >
                <tr>
                    <td colspan="2"><input class="form-control" type="number" name="id" value="{{$filters['id']}}" placeholder="ID"></td>
                    <td><input class="form-control" type="text" name="name" value="{{$filters['name']}}" placeholder="Name"></td>
                    <td colspan="2"><input class="form-control" type="text" name="category" value="{{$filters['category']}}" placeholder="Category"></td>
                    <td colspan="2"><input class="form-control" type="number" step="any" name="min_price" value="{{$filters['min_price']}}"placeholder="Min Price"></td>
                    <td colspan="2"><input class="form-control" type="number" step="any" name="max_price" value="{{$filters['max_price']}}" placeholder="Max Price"></td>
                    <td><button class="btn btn-success" type="submit">Filter</button></td>
                </tr>
            </form>
    </tr>
    </table>
    <div class="card">
        <div class="card-header">
            <h2>Products</h2>
        </div>
    </div>
    <div class="card-body">
    <table style="100%" class="table">
    <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Size</th>
                <th>Brand</th>
                <th>Color</th>
                <th>Material</th>
                <th>Description</th>  
                <th>Image1</th>
                <th>Image2</th>
                <th>Image3</th>
                <th>Image4</th>
                <th>Date added</th>
                <th>Actions</th>
            </tr>
    <form action="{{ route('products.add') }}" method="POST" enctype="multipart/form-data" >
        @csrf
        <tr>
                <td colspan="2"><input class="form-control" type="text" name="name" placeholder="Name"></td>
                <td><input class="form-control" type="text" name="category" placeholder="Category"></td>
                <td width=100px;><input class="form-control" type="number" name="price" placeholder="Price"></td>
                <td width=100px;><input class="form-control" type="number" name="size" placeholder="Size"></td>
                <td><input class="form-control" type="text" name="brand" placeholder="Brand"></td>
                <td><input class="form-control" type="text" name="color" placeholder="Color"></td>
                <td><input class="form-control" type="text" name="material" placeholder="Material"></td>
                <td><input class="form-control" type="text" name="description" placeholder="Description"></td>
                <td><input class="form-control" type="file" name="image1" placeholder="image1"></td>
                <td><input class="form-control" type="file" name="image2" placeholder="image2"></td>
                <td><input class="form-control" type="file" name="image3" placeholder="image3"></td>
                <td><input class="form-control" type="file" name="image4" placeholder="image4"></td>
                <td><button class="btn btn-success" type="submit">Add</button></td>

        </tr>
    </form>


        @foreach($products as $pr)
            <tr>
                <td>{{ $pr->id }}</td>
                <td>{{ $pr->name }}</td>
                <td>{{ $pr->category }}</td>
                <td>{{ $pr->price }}</td>
                <td>{{ $pr->size }}</td>
                <td>{{ $pr->brand }}</td>
                <td>{{ $pr->color }}</td>
                <td>{{ $pr->material }}</td>
                <td>{{ $pr->description }}</td>
                <td><img width=100px height="100px" src="storage/post/{{$pr->image1}}" alt=""></td>
                <td><img width=100px height="100px" src="storage/post/{{$pr->image2}}" alt=""></td>
                <td><img width=100px height="100px" src="storage/post/{{$pr->image3}}" alt=""></td>
                <td><img width=100px height="100px" src="storage/post/{{$pr->image4}}" alt=""></td>
                <td>{{ $pr->created_at }}</td>
                <td>
                    <form action="{{ route('products.delete') }}" method="POST">
                    @csrf
                        <input type="hidden" name="product_id" value="{{ $pr->id }}" />
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('products.edit',['id' => $pr->id]) }}" class="btn btn-primary" >Edit</a>
                </td>
            </tr>
        @endforeach
        </table>
        </form>
    </div>
</body>
@endsection