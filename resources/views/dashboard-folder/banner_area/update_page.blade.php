@extends('master-page.dashboard_master')

@section('title_bar')
    Banner area
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
                    <form action="{{ route('update.data',$banner_area_id->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Self Description</label>
                                    <input type="text" name="self_description" value="{{$banner_area_id->self_description}}" class="@error('self_description') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('self_description')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Self Location</label>
                                    <input type="text" name="self_location" value="{{$banner_area_id->self_location}}" class="@error('self_location') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('self_location')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old Background Photo</label>
                                    <input type="hidden" name="old_background_photo" value="{{$banner_area_id->background_photo}}"><br>
                                    <img  src="{{asset('upload-photos/banner-background-photo')}}/{{$banner_area_id->background_photo}}" alt="your image" style="width: 200px;height:auto;"/><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Background Photo</label>
                                    <input type="file" name="background_photo" class="@error('background_photo') is-invalid @enderror form-control" style="border-color:#94a4b9;" onchange="readURL1(this);">
                                    @error('background_photo')
                                    <span class="text-danger">{{$message}}</span><br>
                                    @enderror
                                    <img class="hidden mt-2" id="background_photo_update_viewer" style="width: 200px;height:auto;" src="#" alt="your image" /><br>
                                    <small>size:1600x1069</small><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old Profile Photo</label>
                                    <input type="hidden" name="old_profile_photo" value="{{$banner_area_id->profile_photo}}"><br>
                                    <img  src="{{asset('upload-photos/banner-profile-photo')}}/{{$banner_area_id->profile_photo}}" alt="your image" style="width: 200px;height:auto;"/><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Profile Photo</label>
                                    <input type="file" name="profile_photo" class="@error('profile_photo') is-invalid @enderror form-control" style="border-color:#94a4b9;" onchange="readURL2(this);">
                                    @error('profile_photo')
                                    <span class="text-danger">{{$message}}</span><br>
                                    @enderror
                                    <img class="hidden mt-2" id="profile_photo_update_viewer" style="width: 200px;height:auto;" src="#" alt="your image" /><br>
                                    <small>size: 163x162</small><br>
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
        //background_photo_update_viewer show code start here
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#background_photo_update_viewer').attr('src', e.target.result).width(150).height(195);
                };
                $('#background_photo_update_viewer').removeClass('hidden');
                reader.readAsDataURL(input.files[0]);
            }
        }
        //background_photo_update_viewer show code end here

        //profile_photo_update_viewer show code start here
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#profile_photo_update_viewer').attr('src', e.target.result).width(150).height(195);
                };
                $('#profile_photo_update_viewer').removeClass('hidden');
                reader.readAsDataURL(input.files[0]);
            }
        }
        //profile_photo_update_viewer show code end here
    </script>
@endsection
