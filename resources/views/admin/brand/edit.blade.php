@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit Brand</h1>
          </div>  
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <form action="" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label>Brand Name <span style="color: red;">*</span> </label>
                    <input name="name" type="text" class="form-control" placeholder="Brand Name" value="{{ old('name', $getRecord->name) }}" required>
                  </div>

                  <div class="form-group">
                    <label>Slug <span style="color: red;">*</span> </label>
                    <input name="slug" type="text" class="form-control" placeholder="Slug Ex. URL" value="{{ old('slug',$getRecord->slug) }}" required>
                    <div style="color: red;">{{ $errors->first('slug') }}</div>
                  </div>
                  
                  <div class="form-group">
                    <label>Status <span style="color: red;">*</span> </label>
                    <select name="status" class="form-control" required>
                      <option {{ (old('status',$getRecord->status) == 0) ? 'selected':'' }} value="0">Active</option>
                      <option {{ (old('status',$getRecord->status) == 1) ? 'selected':'' }} value="1">InActive</option>
                    </select>
                  </div>

                    <hr>

                    <div class="form-group">
                        <label>Meta title <span style="color: red;">*</span> </label>
                        <input name="meta_title" type="text" class="form-control" placeholder="Meta title" value="{{ old('meta_title',$getRecord->meta_title) }}" required>
                    </div>

                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" placeholder="Meta Description" class="form-control" cols="30" rows="10">{{ old('meta_description',$getRecord->meta_description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Meta Keyswords</label>
                        <input name="meta_keywords" type="text" class="form-control" placeholder="Meta Keywords" value="{{ old('meta_keywords',$getRecord->meta_keywords) }}" >
                    </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>    
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection

@section('script')
@endsection