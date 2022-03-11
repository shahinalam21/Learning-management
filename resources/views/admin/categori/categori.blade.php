@extends('admin.layout.layout')

@section('categori')
<div class="container-fluid">

    <a class="btn btn-success mb-2" href="{{url('/categori/create')}}">Add Category</a>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>HTML</td>
                            <td>10.20.2022</td>
                            <td>
                                <a class="btn btn-success mb-2" href="#">show</a>
                                <a class="btn btn-info mb-2" href="#">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection