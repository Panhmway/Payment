@extends('backend.layouts.app')
@section('admin-user-active','mm-active')
@section('title' , ' Create Admin User')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-users icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div> Create Admin User</div>
        </div>
    </div>
</div>


<div class="content pt-3">
        <div class="card">
            <div class="card-body">
                @include('backend.layouts.flash')
                <form action="{{route('admin.admin-user.store')}}" method="POST" id="create">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-secondary mr-2 back-btn">Cancal</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection

@section('scripts')
{!! JsValidator::formRequest('App\Http\Requests\StoreAdminUser' , '#create') !!}
    <script>
        $(document).ready(function() {


    } );
    </script>

@endsection


