@extends('master-page.dashboard_master')

@section('title_bar')
    Some Project
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
                                    <h4 class="modal-title" id="myLargeModalLabel">Daleted Some Project</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-black table-responsive">
                                    <table id="deleted_some_project_table" class="table table-bordered table-inverse">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Project Name</th>
                                                <th>Project Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($some_project_data_deleted_data as $some_project_data_deleted )
                                                <tr>
                                                    <td>{{$loop->index +1}}</td>
                                                    <td>{{$some_project_data_deleted->project_name}}</td>
                                                    <td>{{$some_project_data_deleted->project_link}}</td>
                                                    <td>
                                                        <div class="btn-group mb-2">
                                                            <a href="{{route('project_some_data.restore',$some_project_data_deleted->id)}}" type="button" class="btn btn-success btn-square btn-xs">Restore</a>
                                                            <a href="{{route('project_some_data_force.delete',$some_project_data_deleted->id)}}" type="button" class="btn btn-danger btn-square btn-xs">Permanent Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="text-center text-danger">
                                                    <td colspan="50">There are no data to show</td>
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
                                <th>Project Name</th>
                                <th>Project Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($some_project_data as $some_project)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$some_project->project_name}}</td>
                                    <td>{{$some_project->project_link}}</td>
                                    <td>
                                    <div class="d-flex">
                                        <a href="{{route('some_project.edit',$some_project->id)}}" class="btn text-primary btn-square"><i class="fas fa-pencil-alt "></i></a>
                                        <form action="{{route('some_project.destroy',$some_project->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-danger btn-square "><i class="fas fa-trash-alt "></i></button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="50" class="text-danger">No data to show</td>
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
            $('#deleted_some_project_table').DataTable();
        });
    </script>
@endsection
