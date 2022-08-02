@extends('admin.main.main')
@section("content")

<div class="col-md-12">
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Compose New Message</h3>
    </div>
    <!-- /.card-header -->
    <form action="/admin/send" method="post" >
      @csrf
    <div class="card-body">
      <div class="form-group">
        <input class="form-control" value="{{$item->email}}" placeholder="To:" name="to">
      </div>
      <div class="form-group">
        <input class="form-control" placeholder="Subject:" name="subject">
      </div>
      <div class="form-group">
          <textarea  name="body" placeholder="Message:" id="compose-textarea" class="form-control" style="height: 600px" rows="100"></textarea>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <div class="float-right">
        <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
      </div>
    </div>
    </form>
    <!-- /.card-footer -->
  </div>
  <!-- /.card -->
</div>

@endsection