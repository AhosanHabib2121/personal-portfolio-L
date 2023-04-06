@extends('master-page.dashboard_master')

@section('title_bar')
    About area
@endsection

@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2>Update Page</h2>
                </div>
                <div class="card-body">
                    @if(session('update_message'))
                        <div class="alert alert-success">
                            {{session('update_message')}}
                        </div>
                    @endif
                    <form action="{{ route('about_update.data',$about_area_id->id)}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Simple Text (Hi,I'm or Hello,I'm)</label>
                                    <input type="text" name="simple_text" value="{{$about_area_id->simple_text}}" class="@error('simple_text') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('simple_text')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{$about_area_id->name}}" class="@error('name') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="text_show" value="{{$about_area_id->description}}" class="@error('description') is-invalid @enderror form-control" style="border-color:#94a4b9;"  rows="4"></textarea>
                                    @error('description')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Experiance Number</label>
                                    <input type="number" name="experiance_number" value="{{$about_area_id->experiance_number}}" class="@error('experiance_number') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('experiance_number')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Month Or Year</label>
                                    <input type="text" name="month_year" value="{{$about_area_id->month_year}}" class="@error('month_year') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('month_year')
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
        // textarea text_show code start here
        $(document).ready(function(){
            var text_content="{{$about_area_id->description}}";
            $('#text_show').val(text_content);
        });
        // textarea text_show code end here
    </script>
@endsection



