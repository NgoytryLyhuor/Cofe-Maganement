@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .count{
        text-align: center;
        font-size: 20px;
    }
    .card{
        overflow: hidden;
    }
    .card img{
        transition: 0.5s;
        filter: brightness(0.7)
    }
    .card_food:hover .card img{
        transform: scale(1.1);
        filter: brightness(1)
    }
    .card-title{
        overflow: hidden;
        text-overflow: ellipsis; 
        -webkit-line-clamp: 1;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        white-space: normal;
    }
    .btn_select button{
        width: 80px;
        height: 40px;
        border: none;
        font-size: 14px;
        margin-right: 15px;
        position: relative;
        overflow: hidden;
        transition: .5s;
        z-index: 1;
        font-weight: 500;
        border-radius: 0.25rem;
    }
    .card_food button{
        border-radius: 50%;
    }
    .food_list button{
        width: 25px;
        height: 25px;
        border-radius: 50%;
        border: none;
    }
    .food_list button i{
        font-size: 17px;
        margin-left: -2px;
    }
    .bill_count{
        margin-left: 20px;
    }
    .invoice img{
        filter: brightness(1);
    }
</style>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Order List</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xl-9 p-0">
            <div class="container-fluid mb-4 btn_select">
                <button id="btn_name_all" class="text-light waves-effect waves-light bg-dark mb-2">ទាំងអស់</button>
                <button id="btn_name_food" class="text-light waves-effect waves-light bg-dark mb-2">ម្ហូប</button>
                <button id="btn_name_rice" class="text-light waves-effect waves-light bg-dark mb-2">បាយ</button>
                <button id="btn_name_small" class="text-light waves-effect waves-light bg-dark mb-2">ចានតូច</button>
                <button id="btn_name_big" class="text-light waves-effect waves-light bg-dark mb-2">ចានធំ</button>
                <button id="btn_name_coffee" class="text-light waves-effect waves-light bg-dark mb-2">កាហ្វេ</button>
                <button id="btn_name_tea" class="text-light waves-effect waves-light bg-dark mb-2">តែ</button>
                <button id="btn_name_fruit" class="text-light waves-effect waves-light bg-dark mb-2">ផ្លែឈើ</button>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @php
                        $food = App\Models\Food::Where("type","=","Food")->OrderBy('id','ASC')->get();
                    @endphp
                    @foreach ($food as $row)
                        <div class="col-md-6 col-xl-3 card_food name_food">
                            <div class="card" style="height: 240px !important">
                                <img class="card-img-top img-fluid" style="object-fit: cover;height:120px" src="{{ asset('foods/'.$row->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{ $row->name }}</h4>
                                    <h5 class="text-center">{{ $row->price }} ៛</h5>
                                    <input type="hidden" name="" class="price" value="{{ $row->price }}">
                                    <div class="container-fluid w-75 d-flex justify-content-between p-0">
                                        <button class="btn bg-light waves-effect waves-light dok d-flex align-items-center justify-content-center"><i class="ri-subtract-line"></i></button>
                                        <span class="count">0</span>
                                        <button class="btn bg-light waves-effect waves-light bok d-flex align-items-center justify-content-center"><i class="ri-add-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    @endforeach

                    {{-- ----------------------------------------- --}}
                    @php
                        $food = App\Models\Food::Where("name","LIKE","%ចានតូច%")->OrderBy('id','ASC')->get();
                    @endphp
                    @foreach ($food as $row)
                        <div class="col-md-6 col-xl-3 card_food name_small">
                            <div class="card" style="height: 240px !important">
                                <img class="card-img-top img-fluid" style="object-fit: cover;height:120px" src="{{ asset('foods/'.$row->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{ $row->name }}</h4>
                                    <h5 class="text-center">{{ $row->price }} ៛</h5>
                                    <input type="hidden" name="" class="price" value="{{ $row->price }}">
                                    <div class="container-fluid w-75 d-flex justify-content-between p-0">
                                        <button class="btn bg-light waves-effect waves-light dok d-flex align-items-center justify-content-center"><i class="ri-subtract-line"></i></button>
                                        <span class="count">0</span>
                                        <button class="btn bg-light waves-effect waves-light bok d-flex align-items-center justify-content-center"><i class="ri-add-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    @endforeach

                    @php
                        $food = App\Models\Food::Where("name","LIKE","%បាយ%")->OrderBy('id','ASC')->get();
                    @endphp
                    @foreach ($food as $row)
                        <div class="col-md-6 col-xl-3 card_food name_rice">
                            <div class="card" style="height: 240px !important">
                                <img class="card-img-top img-fluid" style="object-fit: cover;height:120px" src="{{ asset('foods/'.$row->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{ $row->name }}</h4>
                                    <h5 class="text-center">{{ $row->price }} ៛</h5>
                                    <input type="hidden" name="" class="price" value="{{ $row->price }}">
                                    <div class="container-fluid w-75 d-flex justify-content-between p-0">
                                        <button class="btn bg-light waves-effect waves-light dok d-flex align-items-center justify-content-center"><i class="ri-subtract-line"></i></button>
                                        <span class="count">0</span>
                                        <button class="btn bg-light waves-effect waves-light bok d-flex align-items-center justify-content-center"><i class="ri-add-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    @endforeach

                    @php
                        $food = App\Models\Food::Where("name","LIKE","%ចានធំ%")->OrderBy('id','ASC')->get();
                    @endphp
                    @foreach ($food as $row)
                        <div class="col-md-6 col-xl-3 card_food name_big">
                            <div class="card" style="height: 240px !important">
                                <img class="card-img-top img-fluid" style="object-fit: cover;height:120px" src="{{ asset('foods/'.$row->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{ $row->name }}</h4>
                                    <h5 class="text-center">{{ $row->price }} ៛</h5>
                                    <input type="hidden" name="" class="price" value="{{ $row->price }}">
                                    <div class="container-fluid w-75 d-flex justify-content-between p-0">
                                        <button class="btn bg-light waves-effect waves-light dok d-flex align-items-center justify-content-center"><i class="ri-subtract-line"></i></button>
                                        <span class="count">0</span>
                                        <button class="btn bg-light waves-effect waves-light bok d-flex align-items-center justify-content-center"><i class="ri-add-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    @endforeach

                    @php
                        $food = App\Models\Food::Where("name","LIKE","%កាហ្វេ%")->OrderBy('id','ASC')->get();
                    @endphp
                    @foreach ($food as $row)
                        <div class="col-md-6 col-xl-3 card_food name_coffee">
                            <div class="card" style="height: 240px !important">
                                <img class="card-img-top img-fluid" style="object-fit: cover;height:120px" src="{{ asset('foods/'.$row->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{ $row->name }}</h4>
                                    <h5 class="text-center">{{ $row->price }} ៛</h5>
                                    <input type="hidden" name="" class="price" value="{{ $row->price }}">
                                    <div class="container-fluid w-75 d-flex justify-content-between p-0">
                                        <button class="btn bg-light waves-effect waves-light dok d-flex align-items-center justify-content-center"><i class="ri-subtract-line"></i></button>
                                        <span class="count">0</span>
                                        <button class="btn bg-light waves-effect waves-light bok d-flex align-items-center justify-content-center"><i class="ri-add-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    @endforeach

                    @php
                        $food = App\Models\Food::Where("name","LIKE","%តែ%")->OrderBy('id','ASC')->get();
                    @endphp
                    @foreach ($food as $row)
                        <div class="col-md-6 col-xl-3 card_food name_tea">
                            <div class="card" style="height: 240px !important">
                                <img class="card-img-top img-fluid" style="object-fit: cover;height:120px" src="{{ asset('foods/'.$row->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{ $row->name }}</h4>
                                    <h5 class="text-center">{{ $row->price }} ៛</h5>
                                    <input type="hidden" name="" class="price" value="{{ $row->price }}">
                                    <div class="container-fluid w-75 d-flex justify-content-between p-0">
                                        <button class="btn bg-light waves-effect waves-light dok d-flex align-items-center justify-content-center"><i class="ri-subtract-line"></i></button>
                                        <span class="count">0</span>
                                        <button class="btn bg-light waves-effect waves-light bok d-flex align-items-center justify-content-center"><i class="ri-add-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    @endforeach

                    @php
                        $food = App\Models\Food::Where("name","LIKE","%.%")->OrderBy('id','ASC')->get();
                    @endphp
                    @foreach ($food as $row)
                        <div class="col-md-6 col-xl-3 card_food name_fruit">
                            <div class="card" style="height: 240px !important">
                                <img class="card-img-top img-fluid" style="object-fit: cover;height:120px" src="{{ asset('foods/'.$row->image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{ $row->name }}</h4>
                                    <h5 class="text-center">{{ $row->price }} ៛</h5>
                                    <input type="hidden" name="" class="price" value="{{ $row->price }}">
                                    <div class="container-fluid w-75 d-flex justify-content-between p-0">
                                        <button class="btn bg-light waves-effect waves-light dok d-flex align-items-center justify-content-center"><i class="ri-subtract-line"></i></button>
                                        <span class="count">0</span>
                                        <button class="btn bg-light waves-effect waves-light bok d-flex align-items-center justify-content-center"><i class="ri-add-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col-md-0 col-xl-3">
            <div class="card">
                <div class="card-body">

                    <h5 class="mb-3">Bill Details</h5>
                    <input type="number" name="" id="" class="form-control" placeholder="Customer Table Number">
                    <h6 class="mt-3">Order Details</h6>
                    <div class="container-fluid p-0 invoice">

                    </div>

                    <div class="container-fluid summary p-0">
                        <h6 class="mt-3">Order Summary</h6>
                        <div class="container-fluid pt-3 bg-dark text-light rounded">
                            <div class="container-fluid p-0 d-flex justify-content-between">
                                <b>Total</b>
                                <p><b id="total">0</b> ៛</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid p-0 mt-3 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary waves-effect waves-light print_bill" data-bs-toggle="modal" data-bs-target="#myModal">Print Bill</button>
                    </div>

                    {{-- model  --}}
                    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-body">
                                    
                                    <div class="card-body">
        
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="invoice-title">
                                                    <h4 class="float-end font-size-16"><strong>Order # 12345</strong></h4>
                                                    <h3>
                                                        <img src="{{ asset('backend/assets/images/bear_cofe.gif') }}" alt="logo-light" height="75">
                                                    </h3>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <address>
                                                            <strong>Billed To:</strong><br>
                                                            John Smith<br>
                                                            1234 Main<br>
                                                            Apt. 4B<br>
                                                            Springfield, ST 54321
                                                        </address>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <address>
                                                            <strong>Shipped To:</strong><br>
                                                            Kenny Rigdon<br>
                                                            1234 Main<br>
                                                            Apt. 4B<br>
                                                            Springfield, ST 54321
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-12">
                                                <div>
                                                    <div class="p-2">
                                                        <h3 class="font-size-16"><strong>Order summary</strong></h3>
                                                    </div>
                                                    <div class="">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <td><strong>Item</strong></td>
                                                                    <td class="text-center"><strong>Price</strong></td>
                                                                    <td class="text-center"><strong>Quantity</strong>
                                                                    </td>
                                                                    <td class="text-end"><strong>Totals</strong></td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                                <tr>
                                                                    <td>BS-200</td>
                                                                    <td class="text-center">$10.99</td>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-end">$10.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BS-400</td>
                                                                    <td class="text-center">$20.00</td>
                                                                    <td class="text-center">3</td>
                                                                    <td class="text-end">$60.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BS-1000</td>
                                                                    <td class="text-center">$600.00</td>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-end">$600.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="thick-line"></td>
                                                                    <td class="thick-line"></td>
                                                                    <td class="thick-line text-center">
                                                                        <strong>Subtotal</strong></td>
                                                                    <td class="thick-line text-end">$670.99</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                        <strong>Shipping</strong></td>
                                                                    <td class="no-line text-end">$15</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                        <strong>Total</strong></td>
                                                                    <td class="no-line text-end"><h4 class="m-0">$685.99</h4></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
        
                                                        <div class="d-print-none">
                                                            <div class="float-end">
                                                                <button data-bs-dismiss="modal" aria-label="Close" class="btn btn-danger waves-effect waves-light">Cancel</button>
                                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="ri-printer-line"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div> <!-- end row -->
        
                                    </div>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script>

    $(document).ready(function(){

        //---------------------------------------------------------------------------
        var i = 0;
        
        $(document).on('click', '.bok', function(){

            $(this).removeClass("bg-light");
            $(this).addClass("bg-primary");
            $(this).addClass("text-light");

            var name  = $(this).parents('.card_food').find("h4").text();
            var price = $(this).parents('.card_food').find(".price").val();
            var count = $(this).parents('.card_food').find(".count").text();
            var img   = $(this).parents('.card_food').find("img").attr("src");

            var qty   = parseInt(count) + 1;
            var count_food_list = $(".food_list").length;
            for(a=0 ; a<count_food_list ; a++){
                var invoice_name_food = $(".invoice").find(".food_list:eq("+a+") .food_list_name").text();
                
                if(invoice_name_food == name){
                    $(".food_list:eq("+a+")").remove();
                }
            }            
            $(".invoice").append(`
                <div class="container-fluid p-0 food_list">
                    <div class="row">
                        <div class="col-3">
                            <img width="75" height="75" style="object-fit: cover;border-radius: 8px" src="`+img+`" alt="">
                        </div>
                        <div class="col-9">
                            <div class="container d-flex justify-content-between">
                                <p class="food_list_name">`+name+`</p>
                                <button class="btn btn-default p-0 bill_delete"><i class="text-danger ri-delete-back-2-fill"></i></button>
                            </div>
                            <div class="container">
                                <div class="row m-0 p-0">
                                    <div class="container-fluid d-flex align-items-center justify-content-between p-0">
                                        <div class="col-6 d-flex align-items-center justify-content-between">
                                            <button class="invoice_dok bg-light text-dark"><i class="ri-subtract-line"></i></button>
                                            <span class="invoice_qty">`+qty+`</span>
                                            <button class="invoice_bok bg-primary text-light"><i class="ri-add-line"></i></button>
                                        </div>
                                        <div class="col-6">
                                            <span class="bill_count">`+price+`</span><span> ៛</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div> 
            `);
            $(this).parents('.card_food').find(".count").text(qty);
            
            var total = parseInt($("#total").text()) ;
            total = total + parseInt(price);
            $("#total").text(total);
        })
        
        $(document).on('click', '.dok', function(){
            var name  = $(this).parents('.card_food').find("h4").text();
            var price = $(this).parents('.card_food').find(".price").val();
            var count = $(this).parents('.card_food').find(".count").text();
            var img   = $(this).parents('.card_food').find("img").attr("src");
            var count_food_list = $(".food_list").length;
            var qty   = parseInt(count) - 1;

            for(a=0 ; a<count_food_list ; a++){
                var food_name  = $(".food_list:eq("+a+")").find(".food_list_name").text();
                var invoice_qty = $(".food_list:eq("+a+")").find(".invoice_qty").text();

                if(name == food_name){
                    if(invoice_qty > 1){
                        $(".food_list:eq("+a+")").find(".invoice_qty").text(qty);
                    }
                    else{
                        $(".food_list:eq("+a+")").remove();
                    }
                }

            }
            if(qty < 0){
                qty = 0;
            }
            if(qty == 0){
                $(this).parents(".card_food").find(".bok").removeClass("bg-primary");
                $(this).parents(".card_food").find(".bok").addClass("bg-light");
                $(this).parents(".card_food").find(".bok").removeClass("text-light");
            }
            $(this).parents('.card_food').find(".count").text(qty);

            var total = parseInt($("#total").text()) ;
            if(total > 0){
                total = total - parseInt(price);
                $("#total").text(total);
            }
            
        })

        //----------------------------- btn name all --------------------------------
        $(".name_small").hide();
        $(".name_big").hide();
        $(".name_coffee").hide();
        $(".name_tea").hide();
        $(".name_fruit").hide();
        $(".name_rice").hide();


        $("#btn_name_all").click(function(){
            $(".card_food").show();
        })
        $("#btn_name_food").click(function(){
            $(".name_food").show();
            $(".name_small").hide();
            $(".name_big").hide();
            $(".name_coffee").hide();
            $(".name_tea").hide();
            $(".name_fruit").hide();
            $(".name_rice").hide();
        })
        $("#btn_name_small").click(function(){
            $(".name_food").hide();
            $(".name_small").show();
            $(".name_big").hide();
            $(".name_coffee").hide();
            $(".name_tea").hide();
            $(".name_fruit").hide();
            $(".name_rice").hide();
        })
        $("#btn_name_big").click(function(){
            $(".name_food").hide();
            $(".name_small").hide();
            $(".name_big").show();
            $(".name_coffee").hide();
            $(".name_tea").hide();
            $(".name_fruit").hide();
            $(".name_rice").hide();
        })
        $("#btn_name_coffee").click(function(){
            $(".name_food").hide();
            $(".name_small").hide();
            $(".name_big").hide();
            $(".name_coffee").show();
            $(".name_tea").hide();
            $(".name_fruit").hide();
            $(".name_rice").hide();
        })
        $("#btn_name_tea").click(function(){
            $(".name_food").hide();
            $(".name_small").hide();
            $(".name_big").hide();
            $(".name_coffee").hide();
            $(".name_tea").show();
            $(".name_fruit").hide();
            $(".name_rice").hide();
        })
        $("#btn_name_fruit").click(function(){
            $(".name_food").hide();
            $(".name_small").hide();
            $(".name_big").hide();
            $(".name_coffee").hide();
            $(".name_tea").hide();
            $(".name_fruit").show();
            $(".name_rice").hide();
        })
        $("#btn_name_rice").click(function(){
            $(".name_food").hide();
            $(".name_small").hide();
            $(".name_big").hide();
            $(".name_coffee").hide();
            $(".name_tea").hide();
            $(".name_fruit").hide();
            $(".name_rice").show();
        })

        //------------------------------- bill qty ----------------------------------

        $(document).on('click', '.bill_delete', function(){
            $(this).parents(".food_list").remove();
        })

        $(document).on('click','.invoice_bok', function(){
            var qty = $(this).parents(".food_list").find(".invoice_qty").text();
            var name = $(this).parents(".food_list").find(".food_list_name").text();
            var price = $(this).parents(".food_list").find(".bill_count").text();
            var name_food_num_class = $(".card_food").length;
            var total_price = $("#total").text();
            total_price = parseInt(total_price) + (parseInt(price));
            $("#total").text(total_price);
            var sum_qty = parseInt(qty) + 1;

            $(this).parents(".food_list").find(".invoice_qty").text(sum_qty);
            for(i=0 ; i<= name_food_num_class ; i++){
                var main_name = $(".card_food:eq("+i+")").find("h4").text();
                if(main_name == name){
                    $(".card_food:eq("+i+")").find(".count").text(sum_qty);
                }
            }
        })

        $(document).on('click','.invoice_dok', function(){
            var qty = $(this).parents(".food_list").find(".invoice_qty").text();
            var name = $(this).parents(".food_list").find(".food_list_name").text();
            var name_food_num_class = $(".card_food").length;
            var price = $(this).parents(".food_list").find(".bill_count").text();
            var total_price = $("#total").text();
            total_price = parseInt(total_price) - (parseInt(price));
            $("#total").text(total_price);
            var sum_qty = parseInt(qty) - 1;
            $(this).parents(".food_list").find(".invoice_qty").text(sum_qty);
            for(i=0 ; i<= name_food_num_class ; i++){
                var main_name = $(".card_food:eq("+i+")").find("h4").text();
                if(sum_qty > 0){
                    if(main_name == name){
                        $(".card_food:eq("+i+")").find(".count").text(sum_qty);
                    }
                }
                else{
                    if(main_name == name){
                        $(".card_food:eq("+i+")").find(".count").text("0");
                        $(".card_food:eq("+i+")").find(".bok").removeClass("bg-primary");
                        $(".card_food:eq("+i+")").find(".bok").addClass("bg-light");
                        $(".card_food:eq("+i+")").find(".bok").addClass("text-dark");
                    }
                }
            }
            if(sum_qty == 0){
                $(this).parents(".food_list").remove();
            }
        })

        $(document).on('click','.bill_delete', function(){
            var name = $(this).parents(".food_list").find(".food_list_name").text();
            var name_food_num_class = $(".card_food").length;
            var price = $(this).parents(".food_list").find(".bill_count").text();
            var qty = $(this).parents(".food_list").find(".invoice_qty").text();
            var total_price = $("#total").text();
            total_price = parseInt(total_price) - (parseInt(price)*parseInt(qty));
            $("#total").text(total_price);
            for(i=0 ; i<= name_food_num_class ; i++){
                var main_name = $(".card_food:eq("+i+")").find("h4").text();
                if(main_name == name){
                    $(".card_food:eq("+i+")").find(".count").text("0");
                    $(".card_food:eq("+i+")").find(".bok").removeClass("bg-primary");
                    $(".card_food:eq("+i+")").find(".bok").addClass("bg-light");
                    $(".card_food:eq("+i+")").find(".bok").addClass("text-dark");
                }
            }
            $(this).parents(".food_list").remove(); 
        })

        $(document).on('click','.print_bill', function(){
            
        })

    });
</script>

@endsection