@extends('layouts.app')

@section('content')

    @if (Auth::check())
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    @if (Auth::id() == $user->id)
                        @include('users.show', ['user' => Auth::user()])
                    @endif
                    @if (count($microposts) > 0)
                        @include('microposts.microposts', ['microposts' => $microposts])
                    @endif
                </div>
            </div>
        </div>
    @endif
    
@endsection