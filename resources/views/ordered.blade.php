@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (auth()->user()->id==1)
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Order Id</th>
                            <th scope="col">User Id</th>
                            <th scope="col">Package</th>
                            <th scope="col">Status</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <th scope="col">{{$order->id}}</th>
                                <th scope="col">{{$order->user_id}}</th>
                                <th scope="col">{{$order->package}}</th>
                                <th scope="col">
                                    <form action="/update" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$order->id}}">
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="status">
                                            <option @if($order->status == "Ordered") selected @endif value="Ordered">Ordered</option>
                                            <option @if($order->status == "Organizing") selected @endif value="Organizing">Organizing</option>
                                            <option @if($order->status == "Unavailable") selected @endif value="Unavailable">Unavailable</option>
                                            <option @if($order->status == "Ready") selected @endif value="Ready">Ready</option>
                                        </select>
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </form>
                                </th>
                                <th scope="col">
                                    <form action="/delete" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$order->id}}">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                      </table>   
                    @else
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Order Id</th>
                                <th scope="col">User Id</th>
                                <th scope="col">Package</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                @if($order->user_id == auth()->user()->id)
                                <tr>
                                    <th scope="col">{{$order->id}}</th>
                                    <th scope="col">{{$order->user_id}}</th>
                                    <th scope="col">{{$order->package}}</th>
                                    <th scope="col">{{$order->status}}</th>
                                    </th>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                          </table>  
                    @endif           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
