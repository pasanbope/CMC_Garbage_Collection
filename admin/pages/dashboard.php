<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>15</h3>

                <p>New Staff</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
           
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>

                <p>New Admins </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
           
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>Total (GMS) Members</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
           
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
           
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
  <div class="col-md-12">
    <section class="connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Garpage Spots
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
              <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1CKZR94j8WhQlXmfbNHmlbFWNpxaod7U&ehbc=2E312F" width="100%" height="380"></iframe>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                   
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                   
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
           
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
    </section>
  </div>
</div>
<script>
// Initialize the map
var map = am4core.create("map", am4maps.MapChart);
map.geodata = am4geodata_sriLankaLow;
map.projection = new am4maps.projections.Miller();
map.homeZoomLevel = 6;
map.homeGeoPoint = { longitude: 80.7718, latitude: 7.8731 };

// Create map polygon series
var polygonSeries = map.series.push(new am4maps.MapPolygonSeries());
polygonSeries.useGeodata = true;
polygonSeries.mapPolygons.template.fill = am4core.color("#74B266");

// Add image series for markers
var imageSeries = map.series.push(new am4maps.MapImageSeries());
var imageTemplate = imageSeries.mapImages.template;
var marker = imageTemplate.createChild(am4core.Sprite);
marker.scale = 0.6;
marker.horizontalCenter = "middle";
marker.verticalCenter = "middle";
marker.path = "M16,0C7.16,0,0,7.16,0,16c0,8.84,7.16,16,16,16c8.84,0,16-7.16,16-16C32,7.16,24.84,0,16,0z M16,24.938c-4.291,0-7.773-3.481-7.773-7.773c0-4.291,3.482-7.773,7.773-7.773s7.773,3.482,7.773,7.773C23.773,21.457,20.291,24.938,16,24.938z";
imageTemplate.propertyFields.latitude = "latitude";
imageTemplate.propertyFields.longitude = "longitude";
imageSeries.data = [
  {
    latitude: 6.9271,
    longitude: 79.8612,
    image: "https://www.amcharts.com/wp-content/uploads/2019/04/pin.png",
  },
  {
    latitude: 7.2947,
    longitude: 80.6350,
    image: "https://www.amcharts.com/wp-content/uploads/2019/04/pin.png",
  },
];
</script>