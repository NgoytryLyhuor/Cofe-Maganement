@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid ">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">HOME</h4>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card" style="height: 120px !important;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h1 style="font-family: Hanuman !important;" class="pt-3">The Classic Coffee House</h1>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div>

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <a href="{{ route('food') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">Order Food</h4>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-shopping-cart-2-line font-size-24"></i>  
                                    </span>
                                </div>
                            </div>                                            
                        </div>
                    </div><!-- end card -->
                </a>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <a href="">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">History</h4>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class=" ri-time-line font-size-24"></i>  
                                    </span>
                                </div>
                            </div>                                            
                        </div>
                    </div><!-- end card -->
                </a>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <a href="{{ route('food.insert') }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h4 class="mb-2">Insert</h4>
                                </div>
                                <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-primary rounded-3">
                                        <i class="ri-add-circle-line font-size-24"></i>  
                                    </span>
                                </div>
                            </div>                                            
                        </div>
                    </div><!-- end card -->
                </a>
            </div><!-- end col -->

        </div>

    </div>
</div>

@endsection