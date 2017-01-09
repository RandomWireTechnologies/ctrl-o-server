@extends('layouts.app')
@section('title', 'Users')

@section('content')
<!-- Start Contain Section -->
<div class="main-content">
    @include('partials.page-header')
    <div class="page-content container-fluid">
        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Users</h1>
            {!! link_to_route('users.create', 'Add New', [], ['class' => 'btn btn-primary pull-right', 'style' => 'margin-top: 25px']) !!}
        </div>

        <div class="row">
        @if($users->isEmpty())
            <div class="well text-center">No Users found.</div>
        @else
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Company</th>
                    <th class="text-right">Action</th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{!! $user->name !!}</td>
                        <td>{!! $user->email !!}</td>
                        <td>{!! $user->level !!}</td>
                        <td>{!! $user->company !!}</td>
                        <td>
                            {!! Form::open([
                                'route' => ['users.destroy', $user->id],
                                'method' => 'DELETE',
                                'onSubmit' => "return confirm('Are you sure wants to delete this User?')",
                            ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger pull-right', 'style' => 'margin-left:10px']) !!}
                            {!! Form::close() !!}
                            {!! link_to_route('users.edit', 'Edit', [$user->id], ['class' => 'btn btn-primary pull-right']) !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        @endif
        </div>

        <div class="row pull-right">
            {{ $users->links('partials.paginate') }}
        </div>     
    </div>
</div>
<!-- End Contain Section -->
@endsection