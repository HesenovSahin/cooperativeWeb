@extends('backend.layouts.header')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Chart Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               <form action="{{route('chart.store')}}" method="post">
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title">
                           @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Enter description">
                            @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">locations</label>
                            <input type="number" name="locations" class="form-control" placeholder="Enter locations">
                            @error('locations')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="consultants">Consultants</label>
                            <input type="number" name="consultants" class="form-control" placeholder="Enter locations">
                            @error('consultants')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="projects">Projects</label>
                            <input type="number" name="projects" class="form-control" placeholder="Enter locations">
                            @error('projects')
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
