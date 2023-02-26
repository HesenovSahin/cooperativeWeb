@extends('backend.layouts.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-info"><a  href="{{route('section.create')}}">New Section</a></button>
                    
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
                            <th>logo</th>
                            <th>description</th>
                            <th>content</th>
                            <th>image</th>
                            <th>status</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sections as $section)
                        <tr>
                            <td>{{$section->id}}</td>
                            <td>{{$section->title}}</td>
                            <td><img src="{{asset('logos/'.$section->logo) ?? ''}}" width="100" height="100"></td>
                            <td>{{$section->description}}</td>
                            <td>{{$section->content}}</td>
                            <td><img src="{{asset('images/'.$section->image) ?? ''}}" width="100" height="100"></td>
                            <td>{{$section->status}}</td>

                            
                            <td><button type="button" class="btn btn-info"><a href="{{route('section.edit',$section->id)}}">Edit</a> </button></td>
                            <td><form action="{{ route('section.destroy',$section->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $sections->links() !!}

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- /.content -->
</div>
@extends('backend.layouts.footer')
