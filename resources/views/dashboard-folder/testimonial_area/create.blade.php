@extends('master-page.dashboard_master')

@section('title_bar')
    Testimonial Area
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
                    <form action="{{ route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name"  class="@error('name') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('title')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" name="photo" class="@error('photo') is-invalid @enderror form-control" style="border-color:#94a4b9;" onchange="readURL(this);">
                                    @error('photo')
                                    <span class="text-danger">{{$message}}</span><br>
                                    @enderror
                                    <img class="hidden mt-2" id="photo_viewer" style="width: 200px;height:auto;" src="#" alt="your image" /><br>
                                    <small>size:65x65</small><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea name="short_description" id="text_show" class="@error('short_description') is-invalid @enderror form-control" style="border-color:#94a4b9;"  rows="4"></textarea>
                                    @error('short_description')
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
    <script>
        //photo_viewer show code start here
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#photo_viewer').attr('src', e.target.result).width(150).height(195);
                };
                $('#photo_viewer').removeClass('hidden');
                reader.readAsDataURL(input.files[0]);
            }
        }
        //photo_viewer show code end here
    </script>
@endsection

