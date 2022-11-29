@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if ($user->role_id == 1)
                        Anda login sebagai Admin
                    @else
                        Anda login sebagai User
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop