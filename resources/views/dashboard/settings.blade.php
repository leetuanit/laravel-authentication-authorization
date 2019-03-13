@extends('layouts.board')
@section('title','Config')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
          <thead>
            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 172px;" aria-sort="ascending">ID</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 280px;">Title</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 124px;">Value</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 56px;">Updated at</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 115px;">Actions</th></tr>
          </thead>
          <tfoot>
            <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Title</th><th rowspan="1" colspan="1">Value</th><th rowspan="1" colspan="1">Updated at</th><th rowspan="1" colspan="1">Actions</th></tr>
          </tfoot>
          <tbody>
            @foreach($units as $unit)
            <tr role="row" class="odd">
              <td>{{$unit['id']}}</td>
              <td>{{$unit['title']}}</td>
              <td>{{$unit['value']}}</td>
              <td>{{$unit['created_at']}}</td>
              <td>{{$unit['updated_at']}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection