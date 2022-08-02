@extends('admin.main.main')
@section('content')
<div class="card card-primary" style="margin: 10px;padding:10px;">
        <div class="card-header">
          <h3 class="card-title">Category</h3>
        </div>
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        <form action="/admin/category/insert" method="post">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Label</label>
              <input type="text" value="{{old('label')}}" class="form-control" id="exampleInputEmail1" placeholder="Label" name="label">
            </div>
            <div class="form-group">
              <label>Description.</label>
              <textarea class="form-control" rows="3" placeholder="Description ..." name="description"> {{old('description')}} </textarea>
            </div>
              
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary" name="insertproduct">Submit</button>
          </div>
        </form>
@endsection