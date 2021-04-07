@extends('layouts.backend')

@section('content')

<div class="col-md-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Data {{$tittle}}</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th width="50px">No</th>
            <th>Aset Pajak</th>
            <th width="100px">Action</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

@endsection