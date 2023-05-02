@extends('master-page.dashboard_master')

@section('title_bar')
    Some Project
@endsection

@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2>Edit Page</h2>
                </div>
                <div class="card-body">
                    @if(session('update_message'))
                        <div class="alert alert-success">
                            {{session('update_message')}}
                        </div>
                    @endif
                    <form action="{{ route('some_project.update',$some_project_edit)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input id="icon_input" type="text" name="project_name" value="{{$some_project_edit->project_name}}" class="form-control @error('project_name') is-invalid @enderror" style="border-color:rgb(79, 74, 143)">
                                    @error('project_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Project Link</label>
                                    <input type="text" name="project_link" value="{{$some_project_edit->project_link}}" class="form-control @error('project_link') is-invalid @enderror" style="border-color:rgb(79, 74, 143)">
                                    @error('project_link')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('dashboard_js_code')
@endsection
