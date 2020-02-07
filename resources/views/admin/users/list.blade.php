@extends('layouts.master')
@section('page-name','User')
@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $key => $user)
                    <tr>
                        <th>{{++$key}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="6">No data</th>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <div class="col-6 float-left">

            </div>
            <div class="col-6 float-left">
                <div class="pagination float-right mr-4">

                </div>
            </div>
        </div>
    </div>
    @endsection
