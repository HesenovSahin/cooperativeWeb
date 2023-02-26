@extends('backend.layouts.header')
<section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Category Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('category.update',$categories->id)}}" method="POST">
                        @method('PUT')
                        @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$categories->title}}">                           
                        </div>

                        <div class="form-group">
                            <label for="Status">is_menu</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="is_menu">
                                <option value="0" {{ ($categories->is_menu == 0) ? 'selected' : ''  }} >0</option>
                                <option value="1" {{ ($categories->is_menu == 1) ? 'selected' : ''  }}>1</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Status">Status</label>
                            <br>
                            <select class="custom-select form-control" id="Status" name="status">
                                <option value="0" {{ ($categories->status == 0) ? 'selected' : ''  }} >Non-Active</option>
                                <option value="1" {{ ($categories->status == 1) ? 'selected' : ''  }}>Active</option>
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
