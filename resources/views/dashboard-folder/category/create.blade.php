@extends('master-page.dashboard_master')

@section('title_bar')
    Category Part
@endsection

@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2>Create Page</h2>
                </div>
                <div class="card-body">
                    @if(session('success_message'))
                        <div class="alert alert-success">
                            {{session('success_message')}}
                        </div>
                    @endif
                    <form action="{{ route('category.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="category_name" class="@error('category_name') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('category_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
