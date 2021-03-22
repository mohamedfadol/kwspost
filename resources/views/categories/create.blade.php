@extends('layouts.base')

@section('content')
<div class="card">
    <div class="card-header">
        @if(session()->has('message'))
            <div class="alert alert-success text-center toastrDefaultSuccess"> {{ session('message') }} </div>
        @endif
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" href="{{route('categories.index')}}">{{ __('message.Back') }}</a> 
            </div>
            <div class="btn-group">
                <a type="button"  class="btn btn-info" href="{{route('categories.index')}}">{{ __('message.Categories List') }}</a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
             {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="title">{{ __('message.Category Title') }}</label>
                    <input type="text" name="title" class="form-control form-control-sm" id="title" placeholder="Enter Category Title">
                    @error('title') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="file">{{ __('message.Category Image') }}</label>
                    <input type="file" name="file"  class="form-control form-control-sm" id="file">
                     <img id="blah" src="#" alt="..." class="img-thumbnail">
                    @error('file') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="files">{{ __('message.Category Images') }}</label>
                    <input type="file" name="files[]" class="form-control form-control-sm" id="files" multiple>
                    @error('files') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="description">{{ __('message.Category Description') }}</label>
                    <textarea name="description" class="form-control form-control-sm" id="compose-textarea" placeholder="Enter Designation Details">

                    </textarea>
                    @error('description') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="active">{{ __('message.Category Active') }}</label>
                    <input type="checkbox" name="active" value="1" class="" id="active">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-dark bg-primary">{{ __('message.Add New') }}</button>
            </div>
            <!-- /.card-body -->
        </form>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

@endsection
@section('scripts')
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote();
  })
</script>
@stop

@section('scripts')
<script>
    /* function for perview image*/
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#file").change(function(){
        readURL(this);
    });
    /* function for perview image*/    
</script>

@endsection
