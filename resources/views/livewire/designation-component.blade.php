<div>
@include('livewire.designation.create')
@include('livewire.designation.update')
<div class="card">
    <div class="card-header">
    @if(session()->has('message'))
    <div class="alert alert-success text-center toastrDefaultSuccess"> {{ session('message') }} </div>
    @endif
    <h3 class="card-title">
        <div class="btn-group">
            <button type="button"  class="btn btn-info"  data-toggle="modal" data-target="#modal-lg-create-designation">New designation</button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>designation ID</th>
                <th>designation Name</th>
                <th>designation Details</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($designationes as $designation)
        <tr>
            <td>{{ $designation->id }}</td>
            <td>{{ $designation->name }}</td>
            <td>{{ $designation->Details }}</td>
            <td>
                <div class="btn-group content-align-center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-update-designation" wire:click.prevent="edit({{ $designation->id }})">
                        Edit
                    </button>
                    <button type="button" class="btn btn-warning">
                        InActive
                    </button>
                    <button type="button" class="btn btn-danger" wire:click.prevent="destroy({{ $designation->id }})">
                        Delete
                    </button>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>designation ID</th>
            <th>designation Name</th>
            <th>designation Details</th>
            <th>Actions</th>
        </tr>
        </tfoot>
    </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
