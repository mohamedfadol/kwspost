@extends('layouts.base')

@section('content')
<div class="card">
            @if(session()->has('success'))
            <div class="alert alert-success text-center toastrDefaultSuccess"> {{ session('success') }} </div>
        @endif
    <div class="card-header">
        <h3 class="card-title">
            <div class="btn-group">
                <a type="button"  class="btn btn-success" href="{{route('posts.create')}}">
                    {{ __('message.New Post') }}</a>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>{{ __('message.ID') }}</th>
                    <th>{{ __('message.Post Title') }}</th>
                    <th>{{ __('message.Image') }}</th>
                    <th>{{ __('message.Post Category') }}</th>
                    <th>{{ __('message.Post Active') }}</th>
                    <th>{{ __('message.Post Date') }}</th>
                    <th>{{ __('message.Actions') }}</th>
                </tr>
            </thead>
            @if($posts->count() > 0)
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>
                        <a type="button" class="btn btn-info btn-block"
                            href="{{route('posts.show',$post->id)}}">
                                {{ $post->title }}
                        </a>
                        </td>
                        <td class="text-center">
                            <img class="img-thumbnail"
                                src="{{ URL::asset('/storage/post/image/'.$post->file) }}"
                                    width="80" />
                        </td>
                        <td>{{ $post->category->title }}</td>

                        <td class="text-center">
                            @if($post->active == 0)
                                <a type="button" class="btn btn-success btn-block"
                                    href="{{route('post.activePost',$post->id)}}">
                                    {{ __('message.Active') }}
                                </a>
                                @else
                                <a type="button" class="btn btn-warning btn-block"
                                    href="{{route('post.inActivePost',$post->id)}}">
                                    {{ __('message.InActive') }}
                                </a>
                            @endif
                        </td>
                        <td>{{ $post->created_at }}</td>
                        <td class="text-center">
                            <div class="btn-group content-align-center">
                                <a type="button" class="btn btn-success"
                                    href="{{route('posts.edit',$post->id)}}">
                                    {{ __('message.Edit') }}
                                </a>
                                <a href="javascript:void(0)" class="btn btn-danger btn-sm delete"
                                    data-toggle="modal" data-target="#modal-warning"
                                        data-id={{ $post->id }} >{{ __('message.Delete') }} </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            @else
                <p class="text-info text-center">{{ __('message.Theres No Posts In Your Database To Show Them') }}</p>
            @endif
            <tfoot>
                <tr>
                    <th>{{ __('message.ID') }}</th>
                    <th>{{ __('message.Post Title') }}</th>
                    <th>{{ __('message.Image') }}</th>
                    <th>{{ __('message.Post Category') }}</th>
                    <th>{{ __('message.Post Active') }}</th>
                    <th>{{ __('message.Post Date') }}</th>
                    <th>{{ __('message.Actions') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->


 <!-- start /.modal delete -->
<div class="modal fade delete" id="modal-warning">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title text-white">{{ __('message.For Comfirm Delete Post') }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

              </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('posts.destroy',$post->id)}}" method="post">
                {{ method_field('delete') }}
                 {{ csrf_field() }}
            <div class="bg-danger text-white text-center">{{ __('message.Sure Delete Post') }}</div>
            <input type="hidden" id="id" name="id" value="">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">{{ __('message.Not Delete') }}</button>
              <button type="submit" class="btn btn-outline-dark bg-danger">{{ __('message.Yes ! Delete') }}</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- end /.modal delete -->
@endsection
