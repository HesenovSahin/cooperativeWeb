@extends('backend.layouts.header')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-info"><a  href="{{route('chart.create')}}">New Chart</a></button>
                    
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
                            <th>Title</th>
                            <th>description</th>
                            <th>locations</th>
                            <th>consultants</th>
                            <th>projects</th>
                            <th>status</th>
                            <th>actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($charts as $chart)
                        <tr>
                            <td>{{$chart->id}}</td>
                            <td>{{$chart->title}}</td>
                            <td>{{$chart->description}}</td>
                            <td>{{$chart->locations}}</td>
                            <td>{{$chart->consultants}}</td>
                            <td>{{$chart->projects}}</td>
                            <td>{{$chart->status}}</td>

                            <td><button type="button" class="btn btn-info"><a href="{{route('chart.edit',$chart->id)}}">Edit</a> </button></td>
                            <td><form action="{{ route('chart.destroy',$chart->id) }}" method="Post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $charts->links() !!}

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- /.content -->
</div>
@extends('backend.layouts.footer')
