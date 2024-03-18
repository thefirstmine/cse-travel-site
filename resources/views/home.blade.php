@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <form action="/package/1" method="post">
                        @csrf
                        <button type="submit">1</button>
                    </form>   
                    <form action="/package/2" method="post">
                        @csrf
                        <button type="submit">2</button>
                    </form>    
                    <form action="/package/3" method="post">
                        @csrf
                        <button type="submit">3</button>
                    </form>    
                    <form action="/package/4" method="post">
                        @csrf
                        <button type="submit">4</button>
                    </form>    
                    <form action="/package/5" method="post">
                        @csrf
                        <button type="submit">5</button>
                    </form>    
                    <form action="/package/6" method="post">
                        @csrf
                        <button type="submit">6</button>
                    </form>    
                    <form action="/package/7" method="post">
                        @csrf
                        <button type="submit">7</button>
                    </form>    
                    <form action="/package/8" method="post">
                        @csrf
                        <button type="submit">8</button>
                    </form>    
                    <form action="/package/9" method="post">
                        @csrf
                        <button type="submit">9</button>
                    </form>    
                    <form action="/package/10" method="post">
                        @csrf
                        <button type="submit">10</button>
                    </form>   
                    @if(auth()->check())
                    <a href="/ordered">Ordered Packages</a>
                    @if(auth()->user()->id == 1)
                    <a href="/users">Users</a>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
