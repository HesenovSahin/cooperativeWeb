@extends('backend.layouts.header')
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Portfolio Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('portfolio.update',$portfolios->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" name="title" class="form-control" value="{{$portfolios->title}}">
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="cat_id">Category</label>
                            <select class="form-control" id="cat_id" name="cat_id">
                                @foreach($categories as $category)
                                @if($category->id == $portfolios->cat_id)
                                <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                                @else
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <img src="{{asset('images/'.$portfolios->image) ?? ''}}" width="100" height="100">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" value="{{$portfolios->image}}">

                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="content">content</label>
                            <input type="text" name="content" class="form-control" value="{{$portfolios->content}}">
                            @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="description">description</label>
                                <input type="text" name="description" class="form-control" value="{{$portfolios->description}}">
                                @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Status">is_menu</label>
                                <br>
                                <select class="custom-select form-control" id="Status" name="is_menu">
                                    <option value="0" {{ ($portfolios->is_menu == 0) ? 'selected' : ''  }}>Non-Active</option>
                                    <option value="1" {{ ($portfolios->is_menu == 1) ? 'selected' : ''  }}>Active</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Status">Status</label>
                                <br>
                                <select class="custom-select form-control" id="Status" name="status">
                                    <option value="0" {{ ($portfolios->status == 0) ? 'selected' : ''  }}>Non-Active</option>
                                    <option value="1" {{ ($portfolios->status == 1) ? 'selected' : ''  }}>Active</option>
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