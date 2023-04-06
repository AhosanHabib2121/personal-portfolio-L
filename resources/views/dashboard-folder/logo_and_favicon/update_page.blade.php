@extends('master-page.dashboard_master')

@section('title_bar')
    Logo and Favicon
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
                    <form action="{{ route('logo_faviocn_update.data',$logo_favicon__id->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old Logo</label>
                                    <input type="hidden" name="old_logo_image" value="{{$logo_favicon__id->logo_image}}"><br>
                                    <img  src="{{asset('upload-photos/logo')}}/{{$logo_favicon__id->logo_image}}" alt="your image" style="width: 200px;height:auto;"/><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Logo</label>
                                    <input type="file" name="logo_image" class="@error('logo_image') is-invalid @enderror form-control" style="border-color:#94a4b9;" onchange="readURL1(this);">
                                    @error('logo_image')
                                    <span class="text-danger">{{$message}}</span><br>
                                    @enderror
                                    <img class="hidden mt-2" id="logo_image_update_viewer" style="width: 200px;height:auto;" src="#" alt="your image" /><br>
                                    <small>size:119x23(png)</small><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old Favicon</label>
                                    <input type="hidden" name="old_favicon" value="{{$logo_favicon__id->favicon}}"><br>
                                    <img  src="{{asset('upload-photos/favicon')}}/{{$logo_favicon__id->favicon}}" alt="your image" style="width: 200px;height:auto;"/><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Favicon</label>
                                    <input type="file" name="favicon" class="@error('favicon') is-invalid @enderror form-control" style="border-color:#94a4b9;" onchange="readURL2(this);">
                                    @error('favicon')
                                    <span class="text-danger">{{$message}}</span><br>
                                    @enderror
                                    <img class="hidden mt-2" id="favicon_update_viewer" style="width: 200px;height:auto;" src="#" alt="your image" /><br>
                                    <small>size:16x16(png)</small><br>
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
        //logo_image_update_viewer show code start here
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#logo_image_update_viewer').attr('src', e.target.result).width(150).height(195);
                };
                $('#logo_image_update_viewer').removeClass('hidden');
                reader.readAsDataURL(input.files[0]);
            }
        }
        //logo_image_update_viewer show code end here

        //favicon_update_viewer show code start here
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#favicon_update_viewer').attr('src', e.target.result).width(150).height(195);
                };
                $('#favicon_update_viewer').removeClass('hidden');
                reader.readAsDataURL(input.files[0]);
            }
        }
        //favicon_update_viewer show code end here
    </script>
@endsection
