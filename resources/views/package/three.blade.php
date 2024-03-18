@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{ __('3') }}  
                    <form action="/order" method="POST">
                        @csrf
                        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" id="package" name="package" value="3">
                        <input type="hidden" id="status" name="status" value="Ordered">
                        <button type="submit">Order</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
