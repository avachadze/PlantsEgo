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

    <h2>{{__('messages.companyAdministrator')}}</h2>


<br>

    <form action="createCompany" method="POST">
        @CSRF
        <input type="text" name="name" placeholder="{{__('messages.companyName')}}">
        <input type="submit" value="{{__('messages.newCompany')}}" class="btn btn-primary text-center p-1 ">
    </form>
    <table class="table table-hover">

        <h2>{{__('messages.companyAdministration')}}</h2>

        <br>

        <thead>
            <tr>
                <th scope="col">{{__('messages.companyName')}}</th>
                <th scope="col">{{__('messages.modification')}}</th>
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
                    <input type="text" name="" placeholder="{{__('messages.changeName')}}" class="col-6">
                    <input type="button" value="{{__('messages.newName')}}" class="btn btn-primary ">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table class="table table-hover">
        <h2>{{__('messages.userAdministration')}}</h2>

   
  
     
        <br>

        <thead>
            <tr>
                <th scope="col">{{__('messages.user')}}</th>
                <th scope="col">{{__('messages.email')}}</th>
                <th scope="col">{{__('messages.role')}}</th>
                <th scope="col">{{__('messages.companyId')}}</th>
                <th scope="col">{{__('messages.modify')}}</th>
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