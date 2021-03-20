@extends('layouts.base')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            @if(session()->has('message'))
             <div class="alert alert-success text-center toastrDefaultSuccess"> {{ session('message') }} </div>
            @endif
            <form action="{{ route('webSetting.update',$Kwspost) }}" 
                method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <a href="{{ route('webSetting.index') }}" class="btn btn-primary btn-block mb-3">Back</a>
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Folders</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-trash-alt"></i> Title
                        </a>
                        <input type="text" name="title" value="{{ $Kwspost->title }}" class="form-control"/>    
                        @error('title') <span class="text-danger">{{$message}}</span>@enderror 
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="fas fa-filter"></i> E-mail
                        </a>
                        <input type="text" name="email" value="{{ $Kwspost->email }}" class="form-control"/>
                        @error('email') <span class="text-danger">{{$message}}</span>@enderror
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                        <i class="fas fa-inbox"></i> Phone Number 1 
                        </a>
                        <input type="text" name="phone1" value="{{ $Kwspost->phone1}}" class="form-control"/>
                        @error('phone1') <span class="text-danger">{{$message}}</span>@enderror
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-envelope"></i> Phone Number 2
                        </a>
                        <input type="text" name="phone2" value="{{ $Kwspost->phone2}}" class="form-control"/>
                        @error('phone2') <span class="text-danger">{{$message}}</span>@enderror
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="far fa-file-alt"></i> Phone Number 3
                        </a>
                        <input type="text" name="phone3" value="{{ $Kwspost->phone3}}" class="form-control"/>
                        @error('phone3') <span class="text-danger">{{$message}}</span>@enderror
                    </li>
                    </ul>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Compose New Message</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <div class="form-group">
                    <input type="checkbox" name="active" 
                        value="1"  {{ $Kwspost->active == 1 ? 'checked' : '' }}
                        data-bootstrap-switch  
                            data-on-color="success">
                </div>
                <div class="form-group">
                    <input name="headerContent" value="{{ $Kwspost->headerContent}}" class="form-control" placeholder="header Content">
                    @error('headerContent') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <input name="footerContent" value="{{ $Kwspost->footerContent}}" class="form-control" placeholder="footer Content">
                    @error('footerContent') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea" 
                        name="description" class="form-control"   value="{{ $Kwspost->description}}"
                            style="height: 300px">   {{ $Kwspost->description}} 
                    </textarea>
                    @error('description') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <img src="{{ URL::asset('/storage/webSetting/image/'.$Kwspost->logo) }}" width="80" 
                        class="img-thumbnail"
                    />
                </div>
                <div class="form-group">
                <div class="btn btn-primary col start btn-file">
                    <i class="fas fa-upload"></i> Attachment
                    <input type="file" name="logo"  value="{{ $Kwspost->logo}}">
                </div>
                    <p class="help-block">Max. 32MB</p>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <div class="float-right">
                    <button type="button" 
                        class="btn btn-default">
                            <i class="fas fa-pencil-alt"></i> Draft</button>
                    <button type="submit" 
                        class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                </div>
                    <button type="reset" 
                        class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
                </div>
                <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
          </form>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
