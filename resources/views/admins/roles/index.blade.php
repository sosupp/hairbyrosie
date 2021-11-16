@extends('layouts.dashboard')
@section('content')
<style>
    .section-container{
        min-height: 190px;
        background-color: whitesmoke;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 15px;
    }
</style>

{{-- SECTION 1: roles list & add role --}}
<h4>Admin Roles</h4>
<div class="col-md-6">
    <div class="section-container">
        <h5>Existing Roles</h5>

        <table class="table table-responsive table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($roles as $role)
                <tr>
                    <td scope="row">{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                    <td>{{$role->created_at->isoFormat('LL')}}</td>
                    <td>{{$role->admin->name}}</td>

                    <td class="d-flex">
                        <span><a href="{{route('dashboard.admin.role.edit', $role->id)}}"
                            class="btn btn-success btn-sm">EDIT</a></span>
                        <span class="mx-1">
                            <form action="{{route('dashboard.admin.role.destroy', $role)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm ml-5">DELETE</button>
                            </form>
                        </span>
                    </td>
                </tr>
                @empty
                    <td>No roles</td>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


<div class="col-md-6">
    <div class="section-container">
        <h5>Add New Role</h5>
            <div>
                <form class="" action="{{route('dashboard.admin.role.store')}}"
                        method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="form-group">
                        <label for="name">Role Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" placeholder="Enter tag name"
                                name="name" value="{{old('name')}}"
                                required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>

                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <button class="btn btn-primary my-3" type="submit">ADD</button>
                    </div>
                </form>
            </div>
    </div>
</div>
{{-- END SECTION 1 --}}

@endsection
