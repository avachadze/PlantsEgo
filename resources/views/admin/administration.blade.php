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
    <h2>Company Administrator</h2>
<br>
    <form action="createCompany" method="POST">
        @CSRF
        <input type="text" name="name" placeholder="Company Name">
        <input type="submit" value="New Company" class="btn btn-primary text-center p-1 ">
    </form>
    <table class="table table-hover">
        <h2>Company Administration</h2>
        <br>
        <thead>
            <tr>
                <th scope="col">Company Name</th>
                <th scope="col">Modification</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
            <tr>
                <th scope="row">{{$company->name}}</th>
                <td>
                    <a class="btn" href={{"destroyCompany/".$company['id']}}><i class="modificationIcons fa fa-trash" aria-hidden="true"></i></a>
                    @if($company->deleted_at === null)
                    <a class="btn" href={{"deleteCompany/".$company['id']}}><i class="modificationIcons text-success fa fa-check-square" aria-hidden="true"></i></a>
                    @else
                    <a class="btn" href={{"restoreCompany/".$company['id']}}><i class="restore fa fa-times-circle" aria-hidden="true"></i></i></a>
                    @endif
                </td>
                <td>
                    <input type="text" name="" placeholder="Change the name " class="col-6">
                    <input type="button" value="new name" class="btn btn-primary ">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   
    <table style="overflow-x:auto;" class="table table-hover col-9 bg-primary">
        <h2>User Administration</h2>
        <br>
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
                    <a class="btn" href={{"destroyUser/".$user['id']}}><i class="modificationIcons fa fa-trash" aria-hidden="true"></i></a>
                    <a class="btn" href={{"edit/".$user['id']}}><i class="modificationIcons fa fa-pencil" aria-hidden="true"></i></a>
                    @if($user->deleted_at === null)
                    <a class="btn" href={{"deleteUser/".$user['id']}}><i class="modificationIcons text-success fa fa-check-square" aria-hidden="true"></i></a>
                    @else
                    <a class="btn" href={{"restoreUser/".$user['id']}}><i class="restore fa fa-times-circle" aria-hidden="true"></i></i></a>
                    @endif
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection