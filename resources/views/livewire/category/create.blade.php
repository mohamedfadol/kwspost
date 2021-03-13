<div wire:ignore.self class="modal fade" id="modal-lg-create-category" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Create New Category</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Back</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<form method="POST" enctype="multipart/form-data">
<div class="card-body">
    <div class="form-group">
        <label for="title">Category Title</label>
        <input type="text" name="title" wire:model="title" class="form-control form-control-sm" id="title" placeholder="Enter Category Title">
        @error('title') <span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        <label for="file">Category Image</label>
        <input type="file" name="file" wire:model="file" class="form-control form-control-sm" id="file">
        @if($file)
            <img src="{{$file->temporaryUrl()}}" width="120" class="">
        @endif
        @error('file') <span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        <label for="files">Category Images</label>
        <input type="file" name="files[]" wire:model="files" class="form-control form-control-sm" id="files" multiple>
        @error('files') <span class="text-danger">{{$message}}</span>@enderror
    </div>
    <div class="form-group">
        <label for="description">Category Description</label>
        <textarea type="text" name="description" wire:model="description" class="form-control form-control-sm" id="description" placeholder="Enter Designation Details"></textarea>
        @error('description') <span class="text-danger">{{$message}}</span>@enderror
    </div>

    <div class="form-group">
        <label for="active">Category Active</label>
        <input type="checkbox" name="active" wire:model="active" value="1" class="" id="active">
    </div>
</div>
<!-- /.card-body -->
</form>
</div>
<!-- /.card -->

</div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" wire:click.prevent="store()" class="btn btn-primary">Save changes</button>
    </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
