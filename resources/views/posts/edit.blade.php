@extends('layouts.base')

@section('content')
<div class="card">
    <div class="card-header">
        @if(session()->has('message'))
            <div class="alert alert-success text-center toastrDefaultSuccess"> {{ session('message') }} </div>
        @endif
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" href="{{route('posts.index')}}">{{ __('message.Back') }}</a>
            </div>
            <div class="btn-group">
                <a type="button"  class="btn btn-info" href="{{route('posts.index')}}">{{ __('message.Posts List') }}</a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
             {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="title">{{ __('message.Post Title') }}</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control form-control-sm" id="title" placeholder="Enter Post Title">
                    @error('title') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="file">{{ __('message.Post Image') }}</label>
                    <input type="file" name="file" value="{{$post->file}}"  class="form-control form-control-sm" id="file">
                     <img id="blah" src="#" alt="..." class="img-thumbnail">
                    @error('file') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="mb-3 text-center">
                <div class="preview img-thumbnail"></div>
               </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="files">{{ __('message.Post Images') }}</label>
                    <input type="file" name="files[]" value="{{$post->files}}" class="form-control form-control-sm"  id="multiImg" multiple>
                    @error('files') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="short_description">{{ __('message.Post Short Description') }}</label>
                    <textarea type="text" name="short_description" class="form-control  "
                        id="short_description">
                         {{$post->short_description}}
                    </textarea>
                    @error('short_description') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="long_description">{{ __('message.Post Long Description') }}</label>
                    <textarea type="text" name="long_description" class="form-control  "
                        id="compose-textarea" style="height: 300px">
                        {{$post->long_description}}
                    </textarea>
                    @error('long_description') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="category_id">{{ __('message.Post Category') }}</label>
                    <select id="category_id" class="custom-select" name="category_id" data-style="select-with-transition" title="Post Category" data-size="7">
                                @if(isset($categories))
                                <option value="">Choose ... Branch</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                @endif
                    </select>
                     @error('category_id') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="active">{{ __('message.Post Active') }}</label>
                    <input type="checkbox" name="active" value="1" class="" id="active">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="submit" class="btn btn-outline-dark bg-primary">{{ __('message.Update') }}</button>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
    $(function() {
        var imgPrev = function(input, imgPlaceholder) {

            if (input.files) {
                var allFiles = input.files.length;

                for (i = 0; i < allFiles; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $('#multiImg').on('change', function() {
            imgPrev(this, 'div.preview');
        });
    });
    </script>

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
