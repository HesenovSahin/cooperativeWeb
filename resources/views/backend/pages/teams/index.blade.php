@extends('backend.layouts.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-info"><a  href="{{route('team.create')}}">New Team</a></button>
                    
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
                            <th>fullname</th>
                            <th>job</th>
                            <th>description</th>
                            <th>image</th>
                            <th>status</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $team)
                        <tr>
                            <td>{{$team->id}}</td>
                            <td>{{$team->fullname}}</td>
                            <td>{{$team->job}}</td>
                            <td>{{$team->description}}</td>
                            <td><img src="{{asset('images/'.$team->image) ?? ''}}" width="100" height="100"></td>
                            <td>{{$team->status}}</td>

                            
                            <td><button type="button" class="btn btn-info"><a href="{{route('team.edit',$team->id)}}">Edit</a> </button></td>
                            <td><form action="{{ route('team.destroy',$team->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $teams->links() !!}

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- /.content -->
</div>
@extends('backend.layouts.footer')
