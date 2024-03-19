@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                <div class="card-body" style="text-align: center">
                    <h4>{{ __('Confirm Order for Tokyo Package?') }}  </h4>
                    <form action="/order" method="POST">
                        @csrf
                        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" id="package" name="package" value="10">
                        <input type="hidden" id="status" name="status" value="Ordered">
                        <button type="submit" class = "btn btn-primary">Order</button>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
