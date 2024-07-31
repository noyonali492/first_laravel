@extends('admin.master');
@section('mainContent')
<h1>Edit Category</h1>

{!! Form::open(['url'=>'/update-category','method'=>'post','name'=>'editForm','class'=>'form-horizontal']) !!}
@csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="categoryName">Category Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="categoryName" value="{{ $categoryById->categoryName }}" name="categoryName">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="categoryDescription">Category Description:</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="categoryDescription" name="categoryDescription">
            {{ $categoryById->categoryDescription }}
        </textarea>
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
      <input type="hidden" name="categoryId" value="{{$categoryById->id}}">
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success btn-block">Submit</button>
      </div>
    </div>

    <script>
        document.forms['editForm'].elements['publicationStatus'].value={{$categoryById->publicationStatus}}
    </script>

@endsection