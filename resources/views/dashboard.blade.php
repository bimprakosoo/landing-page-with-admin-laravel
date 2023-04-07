@extends('template.index', ['page_title' => $page_title, 'title' => $title])
@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-dark">Gambar Banner</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive-md mt-3">
            <table class="table table-bordered table-striped table-hover datatable">
              <thead>
              <tr>
                <th class="text-center">Gambar</th>
                <th class="text-center">Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($images as $p)
                <tr>
                  <td class="text-center">
                    <img src="{{ Storage::url($p->image) }}" alt="General" width="300" srcset="">
                  </td>
                  <td class="text-center">
                    <a href="#" class="btn btn-xs btn-danger" onclick="deleteBanner('{{ $p->id }}')"
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

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-dark">Tambah Gambar Dashboard</h4>
        </div>
        <div class="card-body">
          {!! Form::open(['url' => 'dashboard/insert', 'enctype' => 'multipart/form-data', 'id' => 'formInsertImage']) !!}
          <img id="preview" class="ml-auto mr-auto d-block" src="{{ asset('assets/images/big/img1.jpg') }}" alt="user"
               width="300">
          {!! Form::file('image', ['id' => 'image', 'style' => "display: none;"]) !!}
          <div class="row mt-2 mb-2">
            <div class="mx-auto">
              <a class="btn btn-sm btn-secondary" href="javascript:changeProfile()">Ubah</a>
              <a class="btn btn-sm btn-danger" href="javascript:removeImage()">Hapus</a>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Upload</button>
          {!! Form::close() !!}
        </div>
      </div>
    </div>

  </div>
  <script>
    function deleteSlider(id) {
      Swal.fire({
        title: 'Apakah Anda yakin?',
        text: 'Anda tidak akan dapat mengembalikan data Anda!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
      }).then((result) => {
        if (result.value) {
          window.location.href = "{{ url('slider/delete/') }}" + '/' + id;
        }
      });
    }

    function changeProfile() {
      $('#image').click();
    }

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#preview').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#image").change(function() {
      readURL(this);
    });

    function removeImage() {
      $('#image').val('');
      $('#preview').attr('src', "{{ asset('assets/images/big/img1.jpg') }}");
    }

    $('#formInsertImage').submit(function (e) {
      var slider = $('input[name="gambar"]')[0].files.length;
      if (slider == 0) {
        e.preventDefault();
        Swal.fire({
          title: 'Oops...',
          text: 'Harap masukkan data dengan benar!',
          type: 'error',
        });
      } else {
        $(this).submit();
      }
    });

    function deleteBanner(id) {
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
          window.location.href = "{{ url('dashboard/delete/') }}" + '/' + id;
        }
      })
    }
  </script>
@endsection