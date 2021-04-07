@extends('layouts.backend')

@section('content')

<div class="col-md-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Add Data</h3>

      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="/kategori/insert" method="POST">
        @csrf
          <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Kategori Pajak</label>
                <input name="kategori" class="form-control" placeholder="Kategori Pajak">
                <div class="text-danger">
                  @error('kategori')
                      {{$message}}
                  @enderror
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="card-footer">
          <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
          <button type="submit" class="btn btn-warning float-right">Cancel</button>
        </div>
    </form>
    </div>
  </div>

  <!-- bs-custom-file-input -->
<script src="{{asset('AdminLTE')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>

@endsection