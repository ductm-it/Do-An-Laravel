@extends('layouts.adminpage')
@section('main-content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">Bill Management</h4>

            <!-- Button trigger modal -->
            <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal1">Add Product
            </button>
            <table id="tableStaffs" class="table table-bordered">

                <thead>
                    <tr>

                        <th>Bill ID</th>
                        <th>Customer email</th>
                        <th>Customer phone</th>
                        <th>Customer address</th>
                        <th>Total value</th>
                        <th>Action</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach($bills as $bill)
                    <tr>
                        <td>{{$bill->id}}</td>
                        <td>{{$bill->customerEmail}}</td>
                        <td>{{$bill->customerPhone}}</td>
                        <td>{{$bill->customerAddress}}</td>
                        <td>{{$bill->totalValue}}</td>

                        <td>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Are you sure to want delete ?</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" onclick="confirmDeleteProduct()" data-dismiss="modal">Yes</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <a id='btn-view-{{$bill->id}}' onclick="viewBillDetail({{$bill->id}})" href="#custom-modal" class="btn btn-icon waves-effect waves-light btn-success m-b-5 " data-animation="door" data-plugin="custommodal" data-overlayspeed="100" data-overlaycolor="#36404a">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div> <!-- end row -->
<!-- sample modal content -->
<div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Add Product</h4>


                            <div class="row">
                                <div class="col-12">
                                    <div class="p-20">
                                        @if(count($errors)>0)
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                        @endif
                                        @if(\Session::has('success'))
                                        <div class="alert alert-success">
                                            <p>{{\Session::get('success')}}</p>

                                        </div>
                                        @endif
                                        <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="/api/admin/product">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="name" required class="form-control" placeholder="Name product...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Decription </label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="description" class="form-control" placeholder="Decription">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="categoryid" class="col-sm-3 col-form-label">Category</label>
                                                <div class="col-sm-9">
                                                    {{-- select herer --}}
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="image" class="col-sm-3 col-form-label">Image</label>
                                                <div class="col-sm-9">
                                                    <div class="custom-file mb-3">
                                                        <input type="file" class="custom-file-input" id="image" name="image">
                                                        <label class="custom-file-label" for="image">Choose file image</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">inPrice</label>
                                                <div class="col-sm-9">
                                                    <input type="number" required name="inprice" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">outPrice</label>
                                                <div class="col-sm-9">
                                                    <input type="number" required name="outprice" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">inStock</label>
                                                <div class="col-sm-9">
                                                    <input type="number" required name="instock" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-success" value="Add">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- end row -->

                        </div> <!-- end card-box -->
                    </div><!-- end col -->
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="custom-modal" class="modal-demo">
    <button type="button" class="close" onclick="Custombox.close();">
        <span>&times;</span><span class="sr-only">Close</span>
    </button>
    <h4 class="custom-modal-title">Bill detail</h4>
    <div class="custom-modal-text">
        <div class="bg-picture card-box">
            <table id="tableStaffs" class="table table-bordered">

                <thead>
                    <tr>

                        <th>ID</th>
                        <th>Product name</th>
                        <th>Amout</th>
                        <th>Total Price</th>
                    </tr>
                </thead>


                

                <tbody id="detail-body">
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection