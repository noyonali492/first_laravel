@extends('admin.master')

@section('mainContent')
<h1>Manage Category</h1>
<hr>
{{ Session::get('msg')}}
<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>SI</th>
        <th>Category Name</th>
        <th>Category Description</th>
        <th>Category Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i=0;
        @endphp
        @foreach ($categories as $cetegory)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $cetegory->categoryName }}</td>
        <td>{{ $cetegory->categoryDescription }}</td>
        <td>{{ $cetegory->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</td>
        <td><a href="{{ url('/edit-category/'.$cetegory->id)}}" >Edit</a> ! Delete</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $categories->links() }}  
@endsection