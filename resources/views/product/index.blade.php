@extends('layouts.admin')

@section('content')
    @include('product.filter')
    <div class="row mt-25">
        <!--Manage Product List Start-->
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-vertical-middle">
                    <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Photo</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Sales</th>
                        <th>In Stock</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>#MSP40022</td>
                        <td><img src="assets/images/product/list-product-1.jpg" alt="" class="product-image rounded-circle"></td>
                        <td><a href="#">Spro 4 Laptop</a></td>
                        <td>$600.00</td>
                        <td>03</td>
                        <td>12</td>
                        <td>13 Feb 2018</td>
                        <td><span class="badge badge-danger">Out of stock</span></td>
                        <td>
                            <div class="table-action-buttons">
                                <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#MSP40023</td>
                        <td><img src="assets/images/product/list-product-2.jpg" alt="" class="product-image rounded-circle"></td>
                        <td><a href="#">Spro 4 Laptop</a></td>
                        <td>$600.00</td>
                        <td>03</td>
                        <td>12</td>
                        <td>13 Feb 2018</td>
                        <td><span class="badge badge-success">Published</span></td>
                        <td>
                            <div class="table-action-buttons">
                                <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#MSP40024</td>
                        <td><img src="assets/images/product/list-product-3.jpg" alt="" class="product-image rounded-circle"></td>
                        <td><a href="#">Spro 4 Laptop</a></td>
                        <td>$600.00</td>
                        <td>03</td>
                        <td>12</td>
                        <td>13 Feb 2018</td>
                        <td><span class="badge badge-danger">Out of stock</span></td>
                        <td>
                            <div class="table-action-buttons">
                                <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#MSP40025</td>
                        <td><img src="assets/images/product/list-product-4.jpg" alt="" class="product-image rounded-circle"></td>
                        <td><a href="#">Spro 4 Laptop</a></td>
                        <td>$600.00</td>
                        <td>03</td>
                        <td>12</td>
                        <td>13 Feb 2018</td>
                        <td><span class="badge badge-success">Published</span></td>
                        <td>
                            <div class="table-action-buttons">
                                <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>#MSP40026</td>
                        <td><img src="assets/images/product/list-product-5.jpg" alt="" class="product-image rounded-circle"></td>
                        <td><a href="#">Spro 4 Laptop</a></td>
                        <td>$600.00</td>
                        <td>03</td>
                        <td>12</td>
                        <td>13 Feb 2018</td>
                        <td><span class="badge badge-success">Published</span></td>
                        <td>
                            <div class="table-action-buttons">
                                <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--Manage Product List End-->

    </div>
@endsection()