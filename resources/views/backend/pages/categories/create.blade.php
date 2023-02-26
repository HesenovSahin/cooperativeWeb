@extends('backend.layouts.header')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Category Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
               <form action="{{route('category.store')}}" method="post">
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
                            <label for="Status">is_menu</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="is_menu">
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
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
