@extends('master-page.dashboard_master')

@section('title_bar')
    Portfolio Area
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
                                    <h4 class="modal-title" id="myLargeModalLabel">Daleted Portfolio Area</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-black table-responsive">
                                    <table id="deleted_portfolio_table" class="table table-bordered table-inverse">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Category Name</th>
                                                <th>Title</th>
                                                <th>Subtitle</th>
                                                <th>Icon</th>
                                                <th>Thumbnail Photo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($portfolio_deleted_data as $portfolio_deleted )
                                            <tr>
                                                <td>{{$loop->index+1}}</td>
                                                <td>{{$portfolio_deleted->relationTocategory->category_name}}</td>
                                                <td>{{$portfolio_deleted->title}}</td>
                                                <td>{{$portfolio_deleted->subtitle}}</td>
                                                <td><i class="fad {{$portfolio_deleted->icon}} fa-2x"></i></td>
                                                <td>
                                                    <img src="{{asset('upload-photos/portfolio_photo')}}/{{$portfolio_deleted->thumbnail_photo}}" width="150" alt="not found">
                                                </td>
                                                <td>
                                                    <div class="btn-group mb-2 btn-group">
                                                        <a href="{{route('portfolio_restore',$portfolio_deleted->id)}}" class="btn btn-success btn-square btn-xs">Restore</a>
                                                        <a href="{{route('portfolio_force_delete',$portfolio_deleted->id)}}" class="btn btn-danger btn-square btn-xs">Permanent Delete</a>
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
                                <th>Category Name</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Icon</th>
                                <th>Thumbnail Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($portfolio_data_all as $portfolio_data )
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$portfolio_data->relationTocategory->category_name}}</td>
                                <td>{{$portfolio_data->title}}</td>
                                <td>{{$portfolio_data->subtitle}}</td>
                                <td><i class="fad {{$portfolio_data->icon}} fa-2x"></i></td>
                                <td>
                                    <img src="{{asset('upload-photos/portfolio_photo')}}/{{$portfolio_data->thumbnail_photo}}" width="150" alt="not found">
                                </td>
                                <td>
                                    <div class="btn-group mb-2 btn-group">
                                        <a href="{{route('potfolio.edit',$portfolio_data->id)}}" class="btn text-primary btn-square"><i class="fas fa-pencil-alt "></i></a>
                                    </div>
                                    <form action="{{route('potfolio.destroy',$portfolio_data->id)}}" method="POST">
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
            $('#deleted_portfolio_table').DataTable();
        });
    </script>
@endsection
