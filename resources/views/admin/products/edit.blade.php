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
                                <li class="breadcrumb-item"><a href=""> أللغات </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل لغة
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
                                    <h4 class="card-title" id="basic-layout-form"> update products </h4>
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
                                        <form class="form" action="{{route('admin.products.update',$product ->id)}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> products data </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> products name </label>
                                                            <input type="text" value="{{$product -> name}}" id="name"
                                                                   class="form-control"
                                                                   placeholder="product name  "
                                                                   name="name">
                                                            @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                       <label for="exampleInput title" class="form-label">ADD your image</label>
                       <input type="file" class="form-control" id="img" placeholder="ADD image" name="img">
                                                     </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> description </label>
                                                            <input type="text" value="{{$product -> description}}" id="name"
                                                                   class="form-control"
                                                                   placeholder=" description  "
                                                                   name="description">
                                                            @error('description')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                <div class="mb-3">
    <label for="product price" class="form-label">ADD price</label>
    <input type="number" class="form-control" id="price" aria-describedby="price" placeholder="ADD price" name="price" value="{{$product -> price}}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
    <div class="form-group">
        <label for="projectinput2"> categories </label>
        <select name="cat_id" class="select2 form-control">
        @isset($categories)
              @foreach($categories as $category)
               @if($category->id == $product->category->id)
                <option selected value="{{$category->id}}">{{$category->name}}</option>
                @else
              <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
            @endforeach
                  @endisset
        </select>

                                            <div class="form-group" style="width: 200px">
                                    <label for="exp_date" class="form-label">ADD product date</label>
    <input class="form-control" type="date" name="exp_date" ><br><br>
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
