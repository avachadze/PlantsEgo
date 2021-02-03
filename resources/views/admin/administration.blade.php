@extends('layouts/mainLayout')

@section('main')

<link rel="stylesheet" href="{{URL::asset('css/editing.css')}}">
<style>
    tbody {
        border-top: 0.5vh solid dodgerblue;

    }

</style>
@can('isAdmin')
<div class="adminPanel container mt-4">

    <ul id="menuList">
        <li id="users">User</li>
        <li id="companies">Company</li>
    </ul>

    <div id="userAdministration">
        <table class="table table-hover ">
            <h2>{{__('admin.userAdministration')}}</h2>
            <thead id="tableHead">
                <tr>
                    <th scope="col">{{__('auth.user')}}</th>
                    <th scope="col">{{__('auth.email')}}</th>
                    <th scope="col">{{__('auth.role')}}</th>
                    <th scope="col">{{__('admin.companyID')}}</th>
                    <th scope="col">{{__('admin.modification')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                @if($user->deleted_at !== null)
                <tr class=" text-danger">
                    @else
                <tr>
                    @endif
                    <th scope="row">{{$user->name}}</th>
                    <td>{{$user->email}}</td>
                    @if($user->role === "admin")
                    <td class="text-success"><strong>
                            {{$user->role}}
                        </strong></td>
                    @else
                    <td class>
                        {{__('auth.user')}}
                    </td>
                    @endif
                    <td>{{$user->company_id}}</td>
                    <td>
                        @if($user->role!=="admin")
                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="Confirmation" data-html="true" data-content="         
                    <p>{{__('messages.deleteMsg')}} <span class='text-danger'> {{$user->name}} </span> {{__('messages.permanent')}}</p>
                    <a href={{"destroyUser/".$user['id']}} class='btn col-12 justify-content-center btn-outline-lightWarningBorder waves-effect'>Delete</a>
                    ">
                            <i class="modificationIcons fa fa-trash"></i></a>

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


    <div class="hidden mb-3" id="companyAdministration">

        <h2>{{__('admin.companyAdministrator')}}</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">{{__('admin.companyName') }}</th>
                    <th scope="col">{{__('admin.modification') }}</th>
                </tr>
            </thead>
            <tbody>
                @FOREACH ($companies as $company)
                @if($company->deleted_at === null)
                <tr>
                    @else
                <tr class="text-danger">
                    @endif
                    <th scope="row">{{$company->name}}</th>
                    <td>
                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="Confirmation" data-html="true" data-content="         
                    <p>{{__('messages.deleteMsgCompany')}} <span class='text-danger'> {{$user->name}} </span> {{__('messages.permanent')}}</p>
                    <a href={{"destroyCompany/".$company['id']}} class='btn col-12 justify-content-center btn-outline-lightWarningBorder waves-effect'>Delete</a>
                    ">
                            <i class="modificationIcons fa fa-trash"></i></a>

                        @if($company->deleted_at === null)
                        <a class="btn" href={{"deleteCompany/".$company['id']}}><i class="modificationIcons text-success fa fa-check-square" aria-hidden="true"></i></a>
                        @else
                        <a class="btn" href={{"restoreCompany/".$company['id']}}><i class="restore fa fa-times-circle" aria-hidden="true"></i></i></a>
                        @endif
                    </td>
                    <td>
                        @if($company->deleted_at === null)
                        <form action={{"updateCompany/".$company['id']}} method="POST">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <input type="text" name="name" id="updateCompany" placeholder="Change the name" required class="col-6" oninvalid="this.setCustomValidity('{{__('auth.error')}}')" oninput="setCustomValidity('')">
                            <button id="updateCompanyB" type="submit" class="btn btn-primary" value="Rename">{{__('admin.rename')}}</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="button" class="btn btn-primary col-12" data-toggle="modal" data-target="#addCompany">
            {{__('admin.addCompany')}}
        </button>
        <div class="modal fade" id="addCompany" tabindex="-1" role="dialog" aria-labelledby="addCompanyTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{__('admin.newCompany')}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="createCompany" method="POST" id="companyForm">
                            @CSRF
                            <input id="newCompany" type="text" name="name" placeholder="Company Name" required oninvalid="this.setCustomValidity('{{__('auth.error')}}')" oninput="setCustomValidity('')">

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('admin.close')}}</button>
                        <button type="submit" class="btn btn-primary" form="companyForm" id="newCompanyB">{{__('admin.saveChanges')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endcan
<script src="{{URL::asset('jquery/modifyValidation.js')}}"></script>
<script src="{{URL::asset('jquery/administration.js')}}"></script>
@endsection
