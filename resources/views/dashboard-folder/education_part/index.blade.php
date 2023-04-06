@extends('master-page.dashboard_master')

@section('title_bar')
    Education Part
@endsection

@section('main_content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2 style="float: left;">Data List</h2>
                    {{-- recycle bin area start here --}}
                    <button style="float: right;" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Recycle Bin</button>


                    <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Daleted Education Area</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-black table-responsive">
                                    <table id="deleted_education_table" class="table table-bordered table-inverse">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Name Of Degree</th>
                                                <th>Collage University Name</th>
                                                <th>Duration</th>
                                                <th>Short Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($education_deleted_data as $education_deleted )
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$education_deleted->name_of_degree}}</td>
                                                <td>{{$education_deleted->collage_university_name}}</td>
                                                <td>{{$education_deleted->duration}}</td>
                                                <td>{{$education_deleted->short_description}}</td>
                                                <td>
                                                    <div class="btn-group mb-2 btn-group">
                                                        <a href="{{route('education_restore',$education_deleted->id)}}" class="btn btn-success btn-square btn-xs">Restore</a>
                                                        <a href="{{route('education_force_delete',$education_deleted->id)}}" class="btn btn-danger btn-square btn-xs">Permanent Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                                <tr class="text-center text-danger">
                                                    <td colspan='50'>No data no show</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                    {{-- recycle bin area end here --}}
                </div>
                <div class="card-body table-responsive">
                    @if(session('delete_message'))
                        <div class="alert alert-success">
                            {{session('delete_message')}}
                        </div>
                    @endif
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Name Of Degree</th>
                                <th>Collage University Name</th>
                                <th>Duration</th>
                                <th>Short Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($education_data_all as $education_data )
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$education_data->name_of_degree}}</td>
                                <td>{{$education_data->collage_university_name}}</td>
                                <td>{{$education_data->duration}}</td>
                                <td>{{$education_data->short_description}}</td>
                                <td>
                                    <div class="btn-group mb-2 btn-group">
                                        <a href="{{route('educations.edit',$education_data->id)}}" class="btn text-primary btn-square"><i class="fas fa-pencil-alt "></i></a>
                                    </div>
                                    <form action="{{route('educations.destroy',$education_data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn text-danger btn-square "><i class="fas fa-trash-alt "></i></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <tr class="text-center text-danger">
                                    <td colspan='50'>No data no show</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('dashboard_js_code')
    <script>
        // datatable plugin use here
        $(document).ready( function () {
            $('#dataTable').DataTable();
        });
        // datatable plugin use here
        $(document).ready( function () {
            $('#deleted_education_table').DataTable();
        });
    </script>
@endsection
