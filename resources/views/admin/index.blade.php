@extends('admin/layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-12"> REVERT BAK FOR THE GRADUATE DASHBOD WHER ITWOS,D SIDE -->
          <div class="col-sm-12">
            <h1 class="m-0 text-dark"> 

              <h2 class="text-center p-3">WELCOME TO THE GRADUATE DASHBOARD </h2>

             
          </div>
            <!-- /.col -->
          <!-- <div class="col-sm-6"> REVERT BAK FOR THE GRADUATE DASHBOD WHER ITWOS,D SIDE-->
            <!-- <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            </ol>
          </div> --><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <!-- <h3><a href="{{ route('graduates.index')}}">Graduates</a> </h3> -->
                <h3><a href="{{ route('graduates.create')}}">Graduates</a> </h3>

                <p></p>
              </div>
              <div class="icon">
                <i class=" fa fas-"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>user Group<sup style="font-size: 20px">%</sup></h3>

                <p>modify user groups </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- status card  -->
          <div href="{{ route('status.index')}}" class="col-lg-3 col-6">
          <div class="small-box bg-success">
              <div class="inner">
                <h3>Statuses<sup style="font-size: 20px"></sup></h3>

                <p>Modify graduate statuses </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('status.index') }}" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>



          <!-- Courses card  -->
          <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
              <div class="inner">
                <h3>Cousers<sup style="font-size: 20px"></sup></h3>

                <p> All the cousers at EHC </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('status.index') }}" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- departments  -->
          <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
              <div class="inner">
                <h3>Departments<sup style="font-size: 20px"></sup></h3>

                <p> All departments at EHC </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('status.index') }}" class="small-box-footer">Click Here <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Users </h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href=" {{ route('users') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Reports</h3>

                <p>20</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
   @endsection
