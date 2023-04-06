@extends('master-page.dashboard_master')

@section('title_bar')
    Education Part
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
                    <form action="{{ route('educations.update',$education_edit_data->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name Of Degree</label>
                                    <input type="text" name="name_of_degree" value="{{$education_edit_data->name_of_degree}}" class="@error('name_of_degree') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('name_of_degree')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Collage University Name</label>
                                    <input type="text" name="collage_university_name" value="{{$education_edit_data->collage_university_name}}" class="@error('collage_university_name') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('collage_university_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Duration</label>
                                    <input type="text" name="duration" value="{{$education_edit_data->duration}}" class="@error('duration') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('duration')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea name="short_description" value="{{$education_edit_data->short_description}}" id="text_show" class="@error('short_description') is-invalid @enderror form-control" style="border-color:#94a4b9;"  rows="4"></textarea>
                                    @error('short_description')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('dashboard_js_code')
    <script>
        // textarea text content show code start
        $(document).ready(function(){
            var textContent="{{$education_edit_data->short_description}}";
            $('#text_show').val(textContent);
        });
        // textarea text content show code end
    </script>
@endsection
