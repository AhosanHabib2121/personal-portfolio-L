@extends('master-page.dashboard_master')

@section('title_bar')
    Hire Text Area
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
                    <form action="{{ route('hire_update.data',$hire_text_id->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Hire Me (message)</label>
                                    <input type="text" name="hire_text" value="{{$hire_text_id->hire_text}}" class="@error('hire_text') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('hire_text')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old Background Photo</label>
                                    <input type="hidden" name="old_bg_photo" value="{{$hire_text_id->bg_photo}}"><br>
                                    <img  src="{{asset('upload-photos/hire-background-photo')}}/{{$hire_text_id->bg_photo}}" alt="your image" style="width: 200px;height:auto;"/><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Background Photo</label>
                                    <input type="file" name="bg_photo" class="@error('bg_photo') is-invalid @enderror form-control" style="border-color:#94a4b9;" onchange="readURL(this);">
                                    @error('bg_photo')
                                    <span class="text-danger">{{$message}}</span><br>
                                    @enderror
                                    <img class="hidden mt-2" id="bg_photo_update_viewer" style="width: 200px;height:auto;" src="#" alt="your image" /><br>
                                    <small>size: 1600x1066</small><br>
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
        //bg_photo_update_viewer show code start here
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#bg_photo_update_viewer').attr('src', e.target.result).width(150).height(195);
                };
                $('#bg_photo_update_viewer').removeClass('hidden');
                reader.readAsDataURL(input.files[0]);
            }
        }
        //background_photo_update_viewer show code end here
    </script>
@endsection
