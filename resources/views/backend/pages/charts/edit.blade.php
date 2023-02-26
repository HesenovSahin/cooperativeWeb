@extends('backend.layouts.header')
<section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Chart Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('chart.update',$charts->id)}}" method="POST">
                        @method('PUT')
                        @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$charts->title}}">                           
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" value="{{$charts->description}}">          
                        </div>
                        <div class="form-group">
                            <label for="locations">Locations</label>
                            <input type="number" name="locations" class="form-control" value="{{$charts->locations}}">          
                        </div>
                        <div class="form-group">
                            <label for="consultants">Consultants</label>
                            <input type="text" name="consultants" class="form-control" value="{{$charts->consultants}}">          
                        </div>
                        <div class="form-group">
                            <label for="projects">projects</label>
                            <input type="text" name="projects" class="form-control" value="{{$charts->projects}}">          
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{ ($charts->status == 0) ? 'selected' : ''  }} >Non-Active</option>
                                <option value="1" {{ ($charts->status == 1) ? 'selected' : ''  }}>Active</option>
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
