@extends('master-page.dashboard_master')

@section('title_bar')
    Some Project
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
                    <form action="{{ route('some_project.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input id="icon_input" type="text" name="project_name" class="form-control @error('project_name') is-invalid @enderror" style="border-color:rgb(79, 74, 143)">
                                    @error('project_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Project Link</label>
                                    <input type="text" name="project_link" class="form-control @error('project_link') is-invalid @enderror" style="border-color:rgb(79, 74, 143)">
                                    @error('project_link')
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

@section('dashboard_js_code')
@endsection
