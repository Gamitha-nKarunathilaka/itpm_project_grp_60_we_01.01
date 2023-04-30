@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h1>{{ __('Welcome') }}, {{ Auth::user()->name }}</h1>
                        <h2>{{ __('Your Notifications') }}</h2>

                        <ul>
                            @forelse ($notifications as $notification)
                                <li>
                                    {{ $notification->data['message'] }}
                                    <br>
                                    <small>{{ $notification->created_at->diffForHumans() }}</small>
                                </li>
                            @empty
                                <li>{{ __('No notifications.') }}</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
