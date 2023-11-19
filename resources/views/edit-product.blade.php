@extends('layout.main')

@section('content')
<form action="{{ route('products.update',['id' => $product->id]) }}" enctype="multipart/form-data"  method="POST">
@csrf
<div class="card">
    <div class="card-header">
        <h3>Edit Product</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value=" {{ $product->name }} "/>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" class="form-control" name="category" id="category" value=" {{ $product->category }} " />
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" value=" {{ $product->price }} " />
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" name="size" id="size" value=" {{ $product->size }} " />
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" name="brand" id="brand" value=" {{ $product->brand }} " />
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color" id="color" value=" {{ $product->color }} " />
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color" id="color" value=" {{ $product->color }} " />
        </div>
        <div class="form-group">
            <label for="material">Material</label>
            <input type="text" class="form-control" name="material" id="material" value=" {{ $product->material }} " />
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" name="description" id="description" value=" {{ $product->description }} " />
        </div>
        <div class="form-group">
            <label for="image1">Image1</label>
            <img width="100px" height="100px" src="/storage/post/{{$product->image1}}" alt="">
            <td><input class="form-control" type="file" name="image1" placeholder="image1"></td>
        </div>
        <div class="form-group">
            <label for="image2">Image2</label>
            <img width="100px" height="100px" src="/storage/post/{{$product->image2}}" alt="">
            <td><input class="form-control" type="file" name="image2" placeholder="image2"></td>
        </div>
        <div class="form-group">
            <label for="image3">Image3</label>
            <img width="100px" height="100px" src="/storage/post/{{$product->image3}}" alt="">
            <td><input class="form-control" type="file" name="image3" placeholder="image3"></td>
        </div>
        <div class="form-group">
            <label for="image4">Image4</label>
            <img width="100px" height="100px" src="/storage/post/{{$product->image4}}" alt="">
            <td><input class="form-control" type="file" name="image4" placeholder="image4"></td>
        </div>
        <div class="card-footer">
            <button class="btn btn-success">Save</button>
            <button class="btn btn-danger">Cancel</button>
        </div>
    </div>
</div>
</form>

@endsection