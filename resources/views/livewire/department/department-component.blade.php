<div>
@include('livewire.category.create')
@include('livewire.category.update')
<div class="card">
    <div class="card-header">
    @if(session()->has('message'))
    <div class="alert alert-success text-center toastrDefaultSuccess"> {{ session('message') }} </div>
    @endif
    <h3 class="card-title">
        <div class="btn-group">
            <button type="button"  class="btn btn-info"  data-toggle="modal" data-target="#modal-lg-create-category">New Department</button>
        </div>
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
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>
            <td class="text-center"><img src="{{asset('assets/images/category')}}/{{ $category->file}}" width="80" /></td>
            <td>{{ $category->description }}</td>
            <td class="text-center">
                @if($category->active == 0)
                    <button type="button" class="btn btn-success btn-block" wire:click.prevent="active({{ $category->id }})">
                        Active
                    </button>
                    @else
                    <button type="button" class="btn btn-warning btn-block" wire:click.prevent="inActive({{ $category->id }})">
                        InActive
                    </button>
                @endif
            </td>
            <td>{{ $category->posts->count() }}</td>
            <td class="text-center">
                <div class="btn-group content-align-center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-update-category" wire:click.prevent="edit({{ $category->id }})">
                        Edit
                    </button>

                    <button type="button" class="btn btn-danger" wire:click.prevent="destroy({{ $category->id }})">
                        Delete
                    </button>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
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
</div>
