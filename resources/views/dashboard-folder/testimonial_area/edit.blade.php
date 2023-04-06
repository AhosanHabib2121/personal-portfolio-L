@extends('master-page.dashboard_master')

@section('title_bar')
    Testimonial Area
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
                    <form action="{{ route('testimonial.update',$testimonial_edit_data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{$testimonial_edit_data->name}}" class="@error('name') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{$testimonial_edit_data->title}}" class="@error('title') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>short_description</label>
                                    <textarea name="short_description" value="{{$testimonial_edit_data->short_description}}" id="text_show" class="@error('short_description') is-invalid @enderror form-control" style="border-color:#94a4b9;"  rows="4"></textarea>
                                    @error('short_description')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old Photo</label>
                                    <input type="hidden" name="old_photo" value="{{$testimonial_edit_data->photo}}"><br>
                                    <img  src="{{asset('upload-photos/tastimonial_photo')}}/{{$testimonial_edit_data->photo}}" alt="your image" style="width: 200px;height:auto;"/><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Photo</label>
                                    <input type="file" name="photo" class="@error('photo') is-invalid @enderror form-control" style="border-color:#94a4b9;" onchange="readURL(this);">
                                    @error('photo')
                                    <span class="text-danger">{{$message}}</span><br>
                                    @enderror
                                    <img class="hidden mt-2" id="photo_viewer" style="width: 200px;height:auto;" src="#" alt="your image" /><br>
                                    <small>size:65x65</small><br>
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
            var textContent="{{$testimonial_edit_data->short_description}}";
            $('#text_show').val(textContent);
        });
        // textarea text content show code end
        //photo_viewer show code start here
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#photo_viewer').attr('src', e.target.result).width(150).height(195);
                };
                $('#background_photo_update_viewer').removeClass('hidden');
                reader.readAsDataURL(input.files[0]);
            }
        }
        //photo_viewer show code end here
    </script>
@endsection
