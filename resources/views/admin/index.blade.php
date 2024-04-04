@extends('admin.layouts.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
            @php 
            $liveVideoCount=DB::table('videos')->where('status',1)->count();
            $videoCount=DB::table('videos')->count();
            $usercount=DB::table('users')->where('is_admin','c')->count();
            @endphp
         
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h5>Live Videos</h5> 
                        <h3>{{ $liveVideoCount }}</h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('videos.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h5>Total Videos</h5>
                        <h3>{{ $videoCount  }} </h3>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('videos.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h5>Total Users</h5>
                        <h3>{{ $usercount }}</h3>      
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('users.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
        </div>

        
        <div class="row">
        <div class="col-1">
        </div>
        <!-- User Details-->
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h4>User Feedbacks</h4>
            </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                    <th>SN</th> 
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=1;
                        $contactus=DB::table('contactus')->get()
                    @endphp
                    @foreach($contactus as  $key=> $contact)

                    <tr>
                    <td>{{ $i++ }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }} </td>
                        <td>{{ $contact->subject }} </td>
                        <td>{{ $contact->message }}</td>
                        <td>
                        <a href="{{ route('contactDetail',$contact->id) }}"><button type="submit" class="btn btn-primary">View</button></a></td>
                    </tr>
                    @endforeach
                
                    
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        </div>
        </div>
               
          <!-- ./col -->
        </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
      <!--  -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jscharting.com/latest/jscharting.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
 
</script>

<script>
  $('#chartDiv').JSC({
  mapping: {
    referenceLayers: 'World',
    projection: false
  },
  type: 'map',
  height: 330,
  legendVisible: false,
  chartArea: {
    fill: '#FFFFFF'
  },
  defaultPointOutlineWidth: 0,
  series: [{
    defaultPoint: {
      color: 'rgba(245,106,13,0.97)'
    },
    map: 'Continent:North America'
  }, {
    defaultPoint: {
      color: 'rgba(254,210,29,0.97)'
    },
    map: 'Continent:South America'
  }, {
    defaultPoint: {
      color: 'rgba(126,177,27,0.97)'
    },
    map: 'Continent:Europe'
  }, {
    defaultPoint: {
      color: 'rgba(61,55,108,0.97)'
    },
    map: 'Continent:Asia'
  }, {
    defaultPoint: {
      color: 'rgba(50,96,182,0.97)'
    },
    map: 'Continent:Africa'
  }, {
    defaultPoint: {
      color: 'rgba(52,130,114,0.97)'
    },
    map: 'Continent:Oceania'
  }],
  toolbarVisible: false

})
</script>
<script>
$(document).ready(function(){
$("#carousel").owlCarousel({
  autoplay: true,
  rewind: true, /* use rewind if you don't want loop */
  margin: 20,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 5
    },

    1024: {
      items: 4
    },

    1366: {
      items: 5
    }
  }
});
});
</script>

  @endsection
