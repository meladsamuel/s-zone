@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                <h3>your orders</h3>
                </div>

                @isset($orders)
                  @foreach($orders as $order)
                <div class="row">
           <div class="col-sm-6 col-md-4">
        <div class="thumbnail">

          <div class="caption">
        <h3>{{$order-> products}}</h3>
        <h3>{{$order -> payment_mode}}</h3>
        <h3>{{Auth()->user()->id}}</h3>
          </div>
            </div>
             </div>
              </div>
              @endforeach
                 @endisset
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
