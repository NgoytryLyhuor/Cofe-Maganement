@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="page-content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Food</h4>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('food.update',$editData->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="url" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input value="{{ $editData->name }}" class="form-control" type="text" name="name" placeholder="Example : មាន់បំពង">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="url" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input value="{{ $editData->price }}" class="form-control" type="text" name="price" placeholder="Example : 25000">
                                </div>
                            </div>

                            @if ($editData->type == 'Food')
                                <div class="row mb-3">
                                    <label for="url" class="col-sm-2 col-form-label">Type</label>
                                    <div class="col-sm-10">
                                        <select name="type" class="form-select">
                                            <option value="Select Type of food">Select Type of food</option>
                                            <option value="Food" selected>Food</option>
                                            <option value="Drink">Drink</option>
                                        </select>
                                    </div>
                                </div>
                            @else
                                <div class="row mb-3">
                                    <label for="url" class="col-sm-2 col-form-label">Type</label>
                                    <div class="col-sm-10">
                                        <select name="type" class="form-select">
                                            <option value="Select Type of food">Select Type of food</option>
                                            <option value="Food">Food</option>
                                            <option value="Drink" selected>Drink</option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            

                            <input type="hidden" name="old_image"  value="{{ $editData->image }}">
                            <div class="row mb-3">
                                <label for="ad_image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label"></label>
                                <img id="showImage" class="card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:160px !important;" src="{{ asset('foods/'.$editData->image) }}" alt="ad_image">
                            </div>

                            <div class="row mb-3">
                                <label for="ad_image" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-info waves-effect waves-linght">Update Data</button>
                                </div>
                            </div>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){
        $("#image").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $("#showImage").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection