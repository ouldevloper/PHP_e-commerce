@extends('admin.main.main')
@section('content')
<div style="margin-top: 10px;"></div>
<div class="col-md-12">
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Read Mail</h3>

      
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="mailbox-read-info">
        <h5>{{$item->subject ?? ""}}</h5>
        <h6>From: {{$item->email ?? ""}}
          <span class="mailbox-read-time float-right"> {{$item->created_at->diffForHumans() ?? ""}}</span></h6>
      </div>
      <!-- /.mailbox-read-info -->
      <div class="mailbox-controls with-border text-center">
        <div class="btn-group">
          <a href="#" class="btn btn-default btn-sm" data-container="body" title="Delete">
            <i class="far fa-trash-alt"></i>
          </a>
          <a href="/admin/compose/{{$item->id}}" class="btn btn-default btn-sm" data-container="body" title="Reply">
            <i class="fas fa-reply"></i>
          </a>
          <a href="#" class="btn btn-default btn-sm" title="Print">
            <i class="fas fa-print"></i>
          </a>
        </div>
        <!-- /.btn-group -->
        
      </div>
      <!-- /.mailbox-controls -->
      <div class="mailbox-read-message">
        <p>{{$item->message ?? ""}}</p>
      </div>
      <!-- /.mailbox-read-message -->
    </div>
    <!-- /.card-body -->
    
    <!-- /.card-footer -->
   
    <!-- /.card-footer -->
  </div>
  <!-- /.card -->
</div>
@endsection