@extends('layouts.default')

@section('content')
<div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <div class="">
                        <div class="page-header-title">
                            <h4 class="page-title">Expense Data</h4>
                        </div>
                    </div>

                    <div class="page-content-wrapper ">
 @if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
                        <div class="container-fluid">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="m-b-30 m-t-0">Expenses</h4>

                                            <div class="table-responsive">
                                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                    <tr>
                                                        <th>Expense Name</th>
                                                        <th>Expense Detail</th>
                                                        <th>Expense Amount</th>
                                                        <th>Given By</th>
                                                        <th>Category</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                        @foreach($data as $dat)
                                                    <tr>
                                                        <td>{{$dat->expense_name}}</td>
                                                        <td>{{$dat->expense_detail}}</td>
                                                        <td>{{$dat->expense_amount}}</td>
                                                        <td>{{$dat->employe->employe_name}}</td>
                                                        <td>{{$dat->category->name}}</td>
                                                        <td>
                                                      <a href="edit_expense/{{$dat->id}}"><i class= "fas fa-edit"></i></a> 
                                                      <a href="delete_expense/{{$dat->id}}"><i class="fas fa-trash"></i></a> 
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div> <!-- End Row -->


                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2016 - 2018 Appzia - All Rights Reserved.
                </footer>

            </div>
            <!-- End Right content here -->
@stop

