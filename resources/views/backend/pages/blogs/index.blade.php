@extends('backend.layouts.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-info"><a  href="{{route('blog.create')}}">New Blog</a></button>
                    
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>title</th>
                            <th>description</th>
                            <th>content</th>
                            <th>image</th>
                            <th>cat_id</th>
                            <th>is_monset</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->title}}</td>
                            <td>{{$blog->description}}</td>
                            <td>{{$blog->content}}</td>
                            <td><img src="{{asset('images/'.$blog->image) ?? ''}}" width="100" height="100"></td>
                            <td>{{$blog->category->title}}</td>
                            <td>{{$blog->is_monset}}</td>
                            <td>{{$blog->status}}</td>

                            
                            <td><button type="button" class="btn btn-info"><a href="{{route('blog.edit',$blog->id)}}">Edit</a> </button></td>
                            <td><form action="{{ route('blog.destroy',$blog->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $blogs->links() !!}

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- /.content -->
</div>


@extends('backend.layouts.footer')
