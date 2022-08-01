@extends('admin.main.main')
@section('content')



<div class="col-md-12" style="margin-top: 20px;">
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">Inbox</h3>

     
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="mailbox-controls">
        <!-- Check all button -->
       
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm">
            <i class="far fa-trash-alt"></i>
          </button>
         
        </div>
        <!-- /.btn-group -->
        <button type="button" class="btn btn-default btn-sm">
          <i class="fas fa-sync-alt"></i>
        </button>
        <div class="float-right">
          
          <!-- /.btn-group -->
        </div>
        <!-- /.float-right -->
      </div>
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <tbody>
            @foreach ($items as $item)
              <tr>
                <td>
                  <div class="icheck-primary">
                    <input type="checkbox" value="{{$item->id}}" id="check{{$item->id}}">
                    <label for="check{{$item->id}}"></label>
                  </div>
                </td>
                <td class="mailbox-name"       ><a href="/admin/mail/{{$item->id}}">{{$item->name}}</a></td>
                <td class="mailbox-subject text-center"    ><b>{{$item->subject}}    </b>{{substr($item->message,0,100)}} ...</td>
                <td class="mailbox-attachment" ></td>
                <td class="mailbox-date text-right"       >{{$item->created_at->diffForHumans()}}</td>
              </tr>
            @endforeach
          
          </tbody>
        </table>
        <!-- /.table -->
      </div>
      <!-- /.mail-box-messages -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer p-0">
      
    </div>
  </div>
  <!-- /.card -->
</div>

@endsection