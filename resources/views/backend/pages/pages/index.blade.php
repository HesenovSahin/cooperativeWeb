@extends('backend.layouts.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-info"><a  href="{{route('page.create')}}">New Page</a></button>
                    
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
                            <th>cat_id</th>
                            <th>image</th>
                            <th>content</th>
                            <th>description</th>
                            <th>is_menu</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <td>{{$page->id}}</td>
                            <td>{{$page->title}}</td>
                            <td>{{$page->category->title}}</td>
                            <td><img src="{{asset('images/'.$page->image) ?? ''}}" width="100" height="100"></td>
                            <td>{{$page->content}}</td>
                            <td>{{$page->description}}</td>  
                            <td>{{$page->is_menu}}</td>
                            <td>{{$page->status}}</td>

                            
                            <td><button type="button" class="btn btn-info"><a href="{{route('page.edit',$page->id)}}">Edit</a> </button></td>
                            <td><form action="{{ route('page.destroy',$page->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $pages->links() !!}

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- /.content -->
</div>


@extends('backend.layouts.footer')
