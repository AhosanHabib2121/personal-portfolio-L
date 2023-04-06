@extends('master-page.dashboard_master')

@section('title_bar')
    CV Part
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
                    <form action="{{ route('cv_update.data',$cvdownload_id->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old CV</label>
                                    <input type="hidden" name="old_cv" value="{{$cvdownload_id->cv}}"><br>
                                    <img  src="{{asset('upload-photos/cv-download')}}/{{$cvdownload_id->cv}}" alt="your image" style="width: 300px;height:auto;"/><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New CV</label>
                                    <input type="file" name="cv" class="@error('cv') is-invalid @enderror form-control" style="border-color:#94a4b9;" onchange="readURL(this);">
                                    @error('cv')
                                    <span class="text-danger">{{$message}}</span><br>
                                    @enderror
                                    <img class="hidden mt-2" id="cv_update_viewer" style="width: 200px;height:auto;" src="#" alt="your image" /><br>
                                    <small>size: 992x1403</small><br>
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
        //cv_update_viewer show code start here
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#cv_update_viewer').attr('src', e.target.result).width(150).height(195);
                };
                $('#cv_update_viewer').removeClass('hidden');
                reader.readAsDataURL(input.files[0]);
            }
        }
        /cv_update_viewer show code end here
    </script>
@endsection
