@extends('layouts/mainLayout')

@section('main')

<link rel="stylesheet" href="{{URL::asset('css/editing.css')}}">
<style>
    tbody {
        border-top: 0.5vh solid dodgerblue;
    }
</style>

<div class="adminPanel container mt-2">

    <ul id="menuList">
    @if(\Illuminate\Support\Facades\Auth::user()->company_id != null || \Illuminate\Support\Facades\Auth::user()->role === 'admin')
        <li id="users">User</li>
        <li id="companies">Company</li>
    @endif
        <li id="editing" type="button" data-toggle="modal" data-target="#exampleModalCenter">
            {{ Auth::user()->name }}
        </li>
    </ul>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"> {{ Auth::user()->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="userForm" action={{route('updateUser',Auth::user()->id)}}" method="POST">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <input type="text" class="p-4" id="userName" required name="name" value="{{Auth::user()->name}}">
                        <input type="email" class="p-4" id="userEmail" required name="email" value="{{Auth::user()->email}}">
                        <div class="input-group">
                            <input id="txtPassword" name="password" type="Password" Class="form-control p-4">
                            <div class="input-group-append">
                                <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()" style="height: 90%; margin-top:1vh;"> <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="userForm" class="btn btn-primary col-12">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <h2>{{__('admin.userAdministration')}}</h2>
    <div id="userAdministration" class="col-md-9" style="overflow-x: auto">
  
        <table class="table table-hover ">
            
            <thead id="tableHead">
                <tr>
                    <th scope="col">{{__('auth.user')}}</th>
                    <th scope="col">{{__('auth.email')}}</th>
                    <th scope="col">{{__('auth.role')}}</th>
                    @if(\Illuminate\Support\Facades\Auth::user()->company_id != null || \Illuminate\Support\Facades\Auth::user()->role === 'admin')
                    <th scope="col">{{__('admin.companyID')}}</th>
                    @endif
                    <th scope="col">{{__('admin.modification')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                @can('update', $user)
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
                        <a class="btn" href={{"restoreUser/".$user['id']}}><i class="restore fa fa-times-circle" aria-hidden="true"></i></a>
                        @endif
                        @endif
                    </td>
                    <td></td>
                </tr>
                @endcan
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
                @can('update', $company)
                @if($company->deleted_at === null)
                <tr>
                    @else
                <tr class="text-danger">
                    @endif
                    <th scope="row">{{$company->name}}</th>
                    <td>
                        <a tabindex="0" role="button" data-toggle="popover" data-trigger="focus" title="Confirmation" data-html="true" data-content="
                            <p>{{__('messages.deleteMsgCompany')}} <span class='text-danger'> {{$user->name}} </span> {{__('messages.permanent')}}</p>
                            <a href={{"destroyCompany/".$company['id']}} class='disableCompany btn col-12 justify-content-center btn-outline-lightWarningBorder waves-effect'>Delete</a>
                            ">
                            <i class="modificationIcons fa fa-trash"></i></a>

                        @if($company->deleted_at === null)
                        <a class="btn" href={{"deleteCompany/".$company['id']}}><i class="modificationIcons text-primary fa fa-check-square" aria-hidden="true"></i></a>
                        @else
                        <a class="btn" href={{"restoreCompany/".$company['id']}}><i class="restore fa fa-times-circle" aria-hidden="true"></i></a>
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
                @endcan
                @endforeach
            </tbody>
        </table>
        <button type="button" class="btn btn-primary col-12" data-toggle="modal" data-target="#addCompany">
            {{__('admin.addCompany')}}
        </button>
        <div class="modal fade mb-2" id="addCompany" tabindex="-1" role="dialog" aria-labelledby="addCompanyTitle" aria-hidden="true">
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

<script src="{{URL::asset('jquery/modifyValidation.js')}}"></script>
<script src="{{URL::asset('jquery/administration.js')}}"></script>
<script>
    function mostrarPassword() {
        var input = document.getElementById("txtPassword");
        if (input.type == "password") {
            input.type = "text";
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        } else {
            input.type = "password";
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    }
</script>
@endsection