@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> machine products </a>
                                </li>
                                <li class="breadcrumb-item active">create products 
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">  </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
        @if (count($errors)>0)
   @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{$error}}
        </div>
   @endforeach
@endif
                                        <form class="form" action="{{route('admin.machine.store')}}" method="POST">
                                            @csrf

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> machine data </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> machine name </label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder="machine name "
                                                                   name="name">
                                                            @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="mb-3">
    <label for="ip_address" class="form-label">ip_address	</label>
    <input type="text" class="form-control" id="ip_address" aria-describedby="longitude" placeholder="ip_address" name="ip_address" style="width:240px;">
                                                </div>
                                            </div>

                                                <div class="row">

                                                <div class="mb-3">
    <label for="longitude	" class="form-label">longitude	</label>
    <input type="text" class="form-control" id="longitude" aria-describedby="longitude" placeholder="longitude" name="longitude">
                                                </div>
                                            </div>

                                            <div class="mb-3">
    <label for="latitude" class="form-label">	latitude	</label>
    <input type="text" class="form-control" id="latitude" aria-describedby="latitude" placeholder="	latitude" name="latitude" style="width:220px;">
                                                </div>
                                            </div> 

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection