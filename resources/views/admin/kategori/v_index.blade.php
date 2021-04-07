@extends('layouts.backend')

@section('content')

<div class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Data {{$tittle}}</h3>

      <div class="card-tools">
        <a href="/kategori/add" type="button" class="btn btn-primary btn-flat btn-sm"><i class="fa fa-plus"> Add</i>
        </a>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th width="50px">No</th>
            <th>Nama Pajak</th>
            <th width="100px">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no=1; ?>
          @foreach ($kategori as $data)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $data->nama_kategori}}</td>
              <td></td>
            </tr>  
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endsection