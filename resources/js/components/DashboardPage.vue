<template>
  <!-- Content Wrapper. Contains page content -->
  <div class="wrapper">
    <!-- <nav-bar> </nav-bar>
    <side-bar> </side-bar> -->
    <div class="content-wrapper">

      <!-- Content Header (Page header) -->
      <div class="header bg-primary-g pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
                <div class="d-none d-md-inline-block ml-md-4 mb-md-4">
                  <h6 class="h6 text-white d-inline-block mb-0">{{title}}</h6>
                  <!-- <nav aria-label="breadcrumb" >
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark bg-transparent">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                  </nav> -->
                </div>
              </div>
              <div class="col-lg-6 col-5"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid-2 mt--8">
          <div class="card card-2">
            <div class="card-body">
              <!-- Small boxes (Stat box) -->
              <div class="row">
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>150</h3>
        
                      <p>New Orders</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>
        
                      <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>44</h3>
        
                      <p>User Registrations</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3>65</h3>
        
                      <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          
        </div><!-- /.container-fluid -->

        <div class="container-fluid-2">
          <div class="card card-2">
            <div class="card-header">
              <h3 class="card-title">Dashboard home page</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <div style="min-height: 200px;"></div>  
                </div>
              </div>
            </div>    
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
  </div>

</template>

<script>
export default {
  data(){
    return {
      title : 'Dashboard'
    }
  },
  mounted(){
    console.log('Component mounted');
  },
  
}
</script>
