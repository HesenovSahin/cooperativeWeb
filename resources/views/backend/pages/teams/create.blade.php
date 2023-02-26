@extends('backend.layouts.header')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Team Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               <form action="{{route('team.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">fullname</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Enter title">
                           @error('fullname')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="job">Job</label>
                            <input type="text" name="job" class="form-control" placeholder="Enter job">
                            @error('job')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Enter description">
                            @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="Image">Image</label>
                            <input type="file" name="image" class="form-control" placeholder="Enter image">
                            @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0">Non-Active</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>
@extends('backend.layouts.footer')
