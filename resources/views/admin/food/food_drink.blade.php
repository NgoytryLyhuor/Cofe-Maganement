@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Food</h4>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($allData as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>
                                            <img style="object-fit: cover" width="120px" height="80px" src="{{ asset("foods/".$row->image) }}" alt="">
                                        </td>
                                        <td>{{ $row->price }} ៛</td>
                                        <td>{{ $row->type }}</td>
                                        <td>
                                            <a class="btn btn-info waves-effect waves-linght" href="{{ route('food.edit',$row->id) }}">Update</a>
                                            <a class="btn btn-danger waves-effect waves-linght" onclick="return confirm('Are you sure?')" href="{{ route('food.delete',$row->id) }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->

        </div> <!-- end row -->
    </div>
</div>

{{-- <script>

    $(document).ready(function(){
        $(".btn_delete").click(function(){
            alert(123)
        });
    });

</script> --}}
@endsection

