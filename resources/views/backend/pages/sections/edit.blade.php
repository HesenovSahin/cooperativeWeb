@extends('backend.layouts.header')
<section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Section Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('section.update',$sections->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" class="form-control" value="{{$sections->title}}">                           
                        </div>
                        <div class="form-group">
                        <img src="{{asset('logos/'.$sections->logo) ?? ''}}" width="100" height="100">
                            <label for="logo">Logo</label>
                            <input type="file" name="logo" class="form-control" value="{{$sections->logo}}">          
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" name="description" class="form-control" value="{{$sections->description}}">          
                        </div>
                        <div class="form-group">
                            <label for="content">content</label>
                            <input type="text" name="content" class="form-control" value="{{$sections->content}}">          
                        </div>
                        <div class="form-group">
                        <img src="{{asset('images/'.$sections->image) ?? ''}}" width="100" height="100">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" value="{{$sections->image}}">          
                        </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{ ($sections->status == 0) ? 'selected' : ''  }} >Non-Active</option>
                                <option value="1" {{ ($sections->status == 1) ? 'selected' : ''  }}>Active</option>
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
