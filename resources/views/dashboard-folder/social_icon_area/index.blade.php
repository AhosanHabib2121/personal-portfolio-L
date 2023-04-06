@extends('master-page.dashboard_master')

@section('title_bar')
    Social Icons
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
                                    <h4 class="modal-title" id="myLargeModalLabel">Daleted Social Icon</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-black table-responsive">
                                    <table id="deleted_socialicon_table" class="table table-bordered table-inverse">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Social Icon</th>
                                                <th>Social Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($social_icon_deleted_data as $social_icon_deleted )
                                                <tr>
                                                    <td>{{$loop->index +1}}</td>
                                                    <td><i class="fad {{$social_icon_deleted->social_icon}} fa-2x"></i></td>
                                                    <td>{{$social_icon_deleted->social_link}}</td>
                                                    <td>
                                                        <div class="btn-group mb-2">
                                                            <a href="{{route('social_icon.restore',$social_icon_deleted->id)}}" type="button" class="btn btn-success btn-square btn-xs">Restore</a>
                                                            <a href="{{route('social_icon_force.delete',$social_icon_deleted->id)}}" type="button" class="btn btn-danger btn-square btn-xs">Permanent Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr class="text-center text-danger">
                                                    <td colspan="50">There are no icons to show</td>
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
                                <th>Social Icon</th>
                                <th>Social Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($social_icon as $icon)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td><i class="fad {{$icon->social_icon}} fa-2x"></i></td>
                                    <td>{{$icon->social_link}}</td>
                                    <td>
                                    <div class="d-flex">
                                        <a href="{{route('social_icons.edit',$icon->id)}}" class="btn text-primary btn-square"><i class="fas fa-pencil-alt "></i></a>
                                        <form action="{{route('social_icons.destroy',$icon->id)}}" method="POST">
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
            $('#deleted_socialicon_table').DataTable();
        });
    </script>
@endsection
