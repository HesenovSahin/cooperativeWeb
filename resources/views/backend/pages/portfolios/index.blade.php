@extends('backend.layouts.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-info"><a  href="{{route('portfolio.create')}}">New Portfolio</a></button>
                    
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
                        @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{$portfolio->id}}</td>
                            <td>{{$portfolio->title}}</td>
                            <td>{{$portfolio->category->title}}</td>
                            <td><img src="{{asset('images/'.$portfolio->image) ?? ''}}" width="100" height="100"></td>
                            <td>{{$portfolio->content}}</td>
                            <td>{{$portfolio->description}}</td>  
                            <td>{{$portfolio->is_menu}}</td>
                            <td>{{$portfolio->status}}</td>

                            
                            <td><button type="button" class="btn btn-info"><a href="{{route('portfolio.edit',$portfolio->id)}}">Edit</a> </button></td>
                            <td><form action="{{ route('portfolio.destroy',$portfolio->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $portfolios->links() !!}

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- /.content -->
</div>


@extends('backend.layouts.footer')
