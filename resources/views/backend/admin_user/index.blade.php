@extends('backend.layouts.app')
@section('admin-user-active','mm-active')
@section('title' , 'Admin User')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Admin User</div>
        </div>
    </div>
</div>
<div class="content">
        <div class="card">
            <div class="card-body">
                <table  class="table table-bordered Datatable" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user )
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection

@section('scripts')

    <script>
             $(document).ready(function() {
                $('.Datatable').DataTable();
             });
    </script>

@endsection

{{-- $(document).ready(function() {
    $('.Datatable').DataTable( {
        processing : true,
        serverSide : true,
        ajax : "/admin/admin-user/datatable/ssd",
        colums:[
            {
                data:"name",
                name:"name"
            },
            {
                data:"email",
                name:"email"
            },
            {
                data:"phone",
                name:"phone"
            }
        ]
    } );
    } ); --}}
