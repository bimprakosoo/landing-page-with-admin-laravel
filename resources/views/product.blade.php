@extends('template.index', ['page_title' => $page_title, 'title' => $title])
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-dark">Daftar Product</h4>
        </div>
        <div class="card-body">
          <div>
            <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#insertProduct" style="margin-bottom: 10px;"><i
                class="fas fa-plus"></i> Tambah Product</a>
          </div>
          <div class="table-responsive-md mt-3">
            <table class="table table-bordered table-striped table-hover datatable">
              <thead>
              <tr>
                <th class="text-center">Nama</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">Foto</th>
                <th class="text-center">Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($products as $p)
                <tr>
                  <td class="text-center">{{ $p->name }}</td>
                  <td class="text-center">{{ $p->description }}</td>
                  <td class="text-center"><img src="{{ Storage::url($p->image) }}" alt="General" width="100" height="100" srcset=""></td>
                  <td class="text-center">
                    <a href="#" class="btn btn-xs btn-danger" onclick="deleteProduct('{{ $p->id }}')"
                       data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="insertProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('/product/insert') }}" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="name" required>
            </div>
            <div class="form-group">
              <label for="asal_sekolah">Deskripsi</label>
              <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="form-group">
              <label for="alamat">Upload Foto</label>
              <input type="file" class="form-control-file" id="file" name="image" required>
              @error('photo')
              <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    function deleteProduct(id) {
      Swal.fire({
        title: 'Apakah Anda Yakin ?',
        text: "Anda tidak akan bisa mengambalikan data ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
      }).then((result) => {
        if (result.value) {
          window.location.href = "{{ url('product/delete/') }}" + '/' + id;
        }
      })
    }
  </script>
@endsection