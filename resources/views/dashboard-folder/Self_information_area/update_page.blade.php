@extends('master-page.dashboard_master')

@section('title_bar')
    Self Info area
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
                    <form action="{{ route('self_info_update.data',$self_info_area_id->id)}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" value="{{$self_info_area_id->name}}" class="@error('name') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="text" name="date_of_birth" value="{{$self_info_area_id->date_of_birth}}" class="@error('date_of_birth') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('date_of_birth')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="{{$self_info_area_id->email}}" class="@error('email') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email link</label>
                                    <input type="text" name="email_link" value="{{$self_info_area_id->email_link}}" class="@error('email_link') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('email_link')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Addressr</label>
                                    <input type="text" name="address" value="{{$self_info_area_id->address}}" class="@error('address') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('address')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone_number" value="{{$self_info_area_id->phone_number}}" placeholder="+880" class="@error('phone_number') is-invalid @enderror form-control" style="border-color:#94a4b9;" >
                                    @error('phone_number')
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

