@extends('template.index', ['page_title' => $page_title, 'title' => $title])
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-dark">About</h4>
        </div>
        <div class="card-body">
          <form action="{{ url('/about/insert') }}" method="POST">
            @csrf
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $about->description ?? '' }}</textarea>
          </div>
          <div class="form-group">
            <label for="visi">Visi</label>
            <textarea class="form-control" id="visi" name="visi" rows="3" required>{{ $about->visi ?? '' }}</textarea>
          </div>
          <div class="form-group">
            <label for="misi">Misi</label>
            <textarea class="form-control" id="misi" name="misi" rows="3" required>{{ $about->misi ?? '' }}</textarea>
          </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection