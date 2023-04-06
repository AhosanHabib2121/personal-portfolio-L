@extends('master-page.dashboard_master')

@section('title_bar')
    Skills Area
@endsection

@section('main_content')
    <div class="row">
        {{-- design skill area --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2 style="float: left;">Design Skill Data List</h2>
                    {{-- recycle bin area start here --}}
                    <button style="float: right;" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Recycle Bin</button>


                    <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Daleted Skills Part</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-black table-responsive">
                                    <table id="deleted_design_skill_table" class="table table-bordered table-inverse">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Skill Name</th>
                                                <th>Skill Percentage</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($design_skills_deleted_data as $design_skills_deleted )
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$design_skills_deleted->skill_name}}</td>
                                                <td>{{$design_skills_deleted->skill_percentage}}</td>
                                                <td>
                                                    <div class="btn-group mb-2 btn-group">
                                                        <a href="{{route('design_skill_restore',$design_skills_deleted->id)}}" class="btn btn-success btn-square btn-xs">Restore</a>
                                                        <a href="{{route('design_skill_force_delete',$design_skills_deleted->id)}}" class="btn btn-danger btn-square btn-xs">Permanent Delete</a>
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
                    @if(session('delete_design_skill_message'))
                        <div class="alert alert-success">
                            {{session('delete_design_skill_message')}}
                        </div>
                    @endif
                    <table class="table table-bordered" id="dataTable1">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Skill Name</th>
                                <th>Skill Percentage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($design_skills_all_data as $design_skills )
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$design_skills->skill_name}}</td>
                                <td>{{$design_skills->skill_percentage}}</td>
                                <td>
                                    <div class="btn-group mb-2 btn-group">
                                        <a href="{{route('design_skills_edit',$design_skills->id)}}" class="btn text-primary btn-square"><i class="fas fa-pencil-alt "></i></a>
                                    </div>
                                    <form action="{{route('design_skills_delete',$design_skills->id)}}" method="POST">
                                        @csrf
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

        {{-- develop skill area --}}
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h2 style="float: left;">Develop Skill Data List</h2>
                    {{-- recycle bin area start here --}}
                    <button style="float: right;" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg1">Recycle Bin</button>


                    <div class="modal fade" id="bs-example-modal-lg1" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myLargeModalLabel">Daleted Skills Part</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-black table-responsive">
                                    <table id="deleted_develop_skill_table" class="table table-bordered table-inverse">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Skill Name</th>
                                                <th>Skill Percentage</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($develop_skills_deleted_data as $develop_skills_deleted )
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$develop_skills_deleted->skill_name}}</td>
                                                <td>{{$develop_skills_deleted->skill_percentage}}</td>
                                                <td>
                                                    <div class="btn-group mb-2 btn-group">
                                                        <a href="{{route('develop_skill_restore',$develop_skills_deleted->id)}}" class="btn btn-success btn-square btn-xs">Restore</a>
                                                        <a href="{{route('develop_skill_force_delete',$develop_skills_deleted->id)}}" class="btn btn-danger btn-square btn-xs">Permanent Delete</a>
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
                    @if(session('delete_develop_skill_message'))
                        <div class="alert alert-success">
                            {{session('delete_develop_skill_message')}}
                        </div>
                    @endif
                    <table class="table table-bordered" id="dataTable2">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Skill Name</th>
                                <th>Skill Percentage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($develop_skills_all_data as $develop_skills )
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$develop_skills->skill_name}}</td>
                                <td>{{$develop_skills->skill_percentage}}</td>
                                <td>
                                    <div class="btn-group mb-2 btn-group">
                                        <a href="{{route('develop_skills_edit',$develop_skills->id)}}" class="btn text-primary btn-square"><i class="fas fa-pencil-alt "></i></a>
                                    </div>
                                    <form action="{{route('develop_skills_delete',$develop_skills->id)}}" method="POST">
                                        @csrf
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
            $('#dataTable1').DataTable();
        });
        // datatable plugin use here
        $(document).ready( function () {
            $('#deleted_design_skill_table').DataTable();
        });

        // datatable plugin use here
        $(document).ready( function () {
            $('#dataTable2').DataTable();
        });
        // datatable plugin use here
        $(document).ready( function () {
            $('#deleted_develop_skill_table').DataTable();
        });
    </script>
@endsection
