@extends('backend.layouts.header')
<section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Team Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('team.update',$teams->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Fullname</label>
                            <input type="text" name="fullname" class="form-control" value="{{$teams->fullname}}">                           
                        </div>
                        <div class="form-group">
                            <label for="Job">Job</label>
                            <input type="text" name="job" class="form-control" value="{{$teams->job}}">          
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" value="{{$teams->description}}">          
                        </div>
                        <div class="form-group">
                        <img src="{{asset('images/'.$teams->image) ?? ''}}" width="100" height="100">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" value="{{$teams->image}}">          
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{ ($teams->status == 0) ? 'selected' : ''  }} >Non-Active</option>
                                <option value="1" {{ ($teams->status == 1) ? 'selected' : ''  }}>Active</option>
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
