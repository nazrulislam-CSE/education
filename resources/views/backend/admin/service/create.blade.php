@extends('layouts.backend')
@section('content')
<!-- Content Wrapper -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
       <div class="row mb-2">
          <div class="col-sm-6">
             <h1>Services</h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Service</li>
             </ol>
          </div>
       </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row offset-1">
        <div class="col-10">
          <div class="card card-primary card-outline shadow-lg">
            <div class="card-header">
               <div class="row">
                  <div class="col-sm-6">
                     <h3 class="card-title">
                        Add New Service
                     </h3>
                  </div>
                  <div class="col-sm-6 text-right">
                     <a href="{{ route('service.index') }}" class="btn btn-danger">
                     <i class="fas fa-long-arrow-alt-left"></i>
                     Back to List
                     </a>
                  </div>
               </div>
            </div>
            <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="row m-4">
                    <div class="col-md-12">
                        <div class="form-group">
                           <label for="slider_image">Service Image <span class="text-danger">(Size:800,534):</span></label>
                           <span class="text-danger">*</span>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input icon image" name="icon" id="slider_img">
                                 <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text">Upload</span>
                              </div>
                           </div>
                           @error('image')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                           <div class="mb-2 mt-3">
                              <img id="showImage" class="rounded avatar-lg showImage" src="{{ (!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg') }}" alt="No Image" width="100px" height="80px;">
                           </div>
                        </div>
                     </div>

                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="title">Service Title: <span class="text-danger">*</span></label>
                        <input type="text" name="title" title="title" value="{{ old('title') }}" id="title" class="form-control" placeholder="Write service title">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="description">Service Description:
                        <span class="text-danger">*</span>
                        </label>
                        <textarea class="summernote_content" id="description" name="description"></textarea>
                     </div>
                     @error('description')
                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="status">Status:</label>
                        <span class="text-danger">*</span>
                        <select name="status" id="status" class="form-control">
                           <option value="1">Active</option>
                           <option value="0">Disable</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12 text-right">
                     <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                     </div>
                  </div>
               </div>
            </form>
          </div><!-- /.card -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
