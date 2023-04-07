@extends('template.index', ['page_title' => $page_title, 'title' => $title])
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-dark">Daftar Team</h4>
        </div>
        <div class="card-body">
          <div>
            <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#insertTeam" style="margin-bottom: 10px;"><i
                class="fas fa-plus"></i> Tambah Anggota Team</a>
          </div>
          <div class="table-responsive-md mt-3">
            <table class="table table-bordered table-striped table-hover datatable">
              <thead>
              <tr>
                <th class="text-center">Nama</th>
                <th class="text-center">Posisi</th>
                <th class="text-center">Foto</th>
                <th class="text-center">Aksi</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($teams as $p)
                <tr>
                  <td class="text-center">{{ $p->name }}</td>
                  <td class="text-center">{{ $p->role }}</td>
                  <td class="text-center"><img src="{{ Storage::url($p->photo) }}" alt="General" width="100" height="100" srcset=""></td>
                  <td class="text-center">
                    <a href="#" class="btn btn-xs btn-danger" onclick="deleteSlider('{{ $p->id }}')"
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

  <!--Modal to add mahasiswa -->
  <div class="modal fade" id="insertTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Tambah Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('/team/insert') }}" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="name" required>
            </div>
            <div class="form-group">
              <label for="asal_sekolah">Position</label>
              <input type="text" class="form-control" id="position" name="role" required>
            </div>
            <div class="form-group">
              <label for="alamat">Upload Foto</label>
              <input type="file" class="form-control-file" id="file" name="photo" required>
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
@endsection