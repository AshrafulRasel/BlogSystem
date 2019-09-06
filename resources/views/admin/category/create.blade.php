@extends('layouts.backend.app')

@section('title', 'Category')

@push('css')

@endpush

@section('content')

    <div class="container-fluid">
        <div class="block-header">
            <h2></h2>
        </div>

    <!-- Vertical Layout -->
        <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Add New Category
                    </h2>
                 </div>
                <div class="body">
                    <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="email_address">Category Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name">
                            </div>
                        </div>

                        <label for="email_address">Category Image</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" name="image" id="image" class="form-control" >
                            </div>
                        </div>
                        <a class="btn btn-danger m-t-15 waves-effect" href="{{route('admin.category.index')}}">Back</a>
                         <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@push('js')

@endpush