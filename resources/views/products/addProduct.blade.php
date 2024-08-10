@extends('admin.master')
@section('mainContent')
<h1>Add Product</h1>
<hr>
{{ Session::get('msg') }}
<hr>
    {!! Form::open(['url'=>'/save-product','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
    @csrf
        <div class="form-group">
          <label class="control-label col-sm-2" for="productName">Product Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="productName" placeholder="Enter Product Name" name="productName">
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="productCategory">Product Category:</label>
            <div class="col-sm-10">
              <select class="form-control" id="productCategory" name="productCategory">
                <option>product Category</option>
                @foreach ($categories as $Category)
                <option value="{{$Category->id}}">{{$Category->categoryName}}</option>
                @endforeach
              </select>
            </div>
          </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="productPrice">Product Price:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="productPrice" placeholder="Enter product Price" name="productPrice"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="productQuantity">Product Quantity:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="productQuantity" placeholder="Enter product Quantity" name="productQuantity"></input>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="productPicture">Product Picture:</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" name="productPicture"></input>
            </div>
          </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="productDescription">Product Description:</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="productDescription" placeholder="Enter Product description" name="productDescription"></textarea>
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="publicationStatus">Publication Status:</label>
            <div class="col-sm-10">
              <select class="form-control" id="publicationStatus" name="publicationStatus">
                <option>Select publication status</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
              </select>
            </div>
          </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
          </div>
        </div>
      {!!  Form::close()  !!}
@endsection