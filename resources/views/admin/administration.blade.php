@extends('layouts/mainLayout')

@section('main')
<style>
    footer {
        position: relative;
        bottom: 0px;
        width: 100%;
    }
</style>
<div class="container mt-4">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">User</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">company_id</th>
                <th scope="col">modify</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->name}}</th>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->company_id}}</td>
                <td>
                    @if($user->role!=="admin")
                    <a class="btn" href={{"destroy/".$user['id']}}><i class="modificationIcons fa fa-trash" aria-hidden="true"></i></a>
                    <a class="btn" href={{"edit/".$user['id']}}><i class="modificationIcons fa fa-pencil" aria-hidden="true"></i></a>
                    @if($user->deleted_at === null)
                    <a class="btn" href={{"delete/".$user['id']}}><i class="modificationIcons text-success fa fa-check-square" aria-hidden="true"></i></a>
                    @else
                    <a class="btn" href={{"restore/".$user['id']}}><i class="restore fa fa-times-circle" aria-hidden="true"></i></i></a>
                    @endif
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection