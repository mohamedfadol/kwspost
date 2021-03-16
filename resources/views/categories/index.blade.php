@extends('layouts.base')

@section('content')
<div class="card">
    <div class="card-header">
        @if(session()->has('message'))
            <div class="alert alert-success text-center toastrDefaultSuccess"> {{ session('message') }} </div>
        @endif
        <h3 class="card-title">
            <div class="btn-group">
                <button type="button"  class="btn btn-info"  
                    data-toggle="modal" data-target="#modal-lg-create-category">New Department</button>
            </div>
        </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Active</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @if($categories->count() > 0)
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td class="text-center"><img src="{{asset('assets/images/category')}}/{{ $category->file}}" width="80" /></td>
                        <td>{{ $category->description }}</td>
                        <td class="text-center">
                            @if($category->active == 0)
                                <button type="button" class="btn btn-success btn-block" >
                                    Active
                                </button>
                                @else
                                <button type="button" class="btn btn-warning btn-block" >
                                    InActive
                                </button>
                            @endif
                        </td>
                        <td>{{ $category->posts->count() }}</td>
                        <td class="text-center">
                            <div class="btn-group content-align-center">
                                <button type="button" class="btn btn-success" 
                                    data-toggle="modal" data-target="#modal-lg-update-category" 
                                         >
                                    Edit
                                </button>
                                <a href="javascript:void(0)" class="btn btn-danger btn-sm delete" 
                                    data-toggle="modal" data-target="#modal-warning" 
                                        data-id={{ $category->id }} >{{ __('message.Delete') }} </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            @else
                <p class="text-info text-center">There's No Categories In Your Database To Show Them</p>
            @endif
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Active</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->




<div class="modal fade" id="modal-warning">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title text-white">Alert Message For Delete Row</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 
              </button>
            </div>
            <div class="modal-body">
            <form class="delete" action="{{ url('/admin/categories/destroy',$category->id) }}">
                {{ method_field('DELETE') }}
                 @csrf_field
                <input type="hidden" id="id" name="id" value="{{$category->id}}">
              <div class="bg-danger text-white text-center"> Sure Delete Row </div> 
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-dark bg-danger">Delete</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection


@section('scripts')
<script>
$(document).ready( function (){
    $(document).on('click','.delete',function(){
         let id = $(this).attr('data-id');
         $('#id').val(id);
    });
});
</script>
@endsection
