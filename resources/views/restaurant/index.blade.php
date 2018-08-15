@extends('layout.admin-master',['page_title'=>'Manager restaurant'])
@section('content')
    <div class="row" style="margin-top: 30px">
        <div class="col-md-12 col-xs-12">

            <div id="messages"></div>

            </div>

            <a href="" class="btn btn-primary">Add Restaurant</a>

            <a href="" class="btn btn-success">View Restaurant</a>

            <br /> <br />

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Manage Restaurant</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="manageTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Restaurant Name</th>
                            <th>Address</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- col-md-12 -->
    </div>
    <!-- /.row -->

@endsection