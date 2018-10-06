@extends('layouts.app')

@section('content')
<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
   
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>08.00 - 22.00</h4>
                  <h6>JAM BUKA</h6>
                  <h4>{{Auth::user()->jumlah_kedai}}</h4>
                  <h6>JUMLAH TOKO</h6>
                  @foreach($penghasilanPuja as $penghasilanPuja)
                  @if (Auth::user()->id==$penghasilanPuja->user_id)
                  <h4>Rp. {{$penghasilanPuja->penghasilan_sementara}}</h4>
                  @endif
                  @endforeach
                  <h6>PENGHASILAN HARI INI</h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3>{{Auth::user()->name}}</h3>
                <h6>Main Administrator</h6>
                <p>{{ Auth::user()->deskripsi }}</p>
                <br>
                <p><!-- <button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button> --></p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="{{ url('img') }}/{{ Auth::user()->foto }}" class="img-circle"></p>
                  <p>
                <div class="col-sm-3 text-center""></div>
                <div class="col-sm-6 text-center">
                  <input type="checkbox" checked="" data-toggle="switch" />
                </div>
           

                  </p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            data Pujasera<br>
            {{Auth::user()->alamat}}<br>
            {{Auth::user()->no_hp}}<br>
            {{Auth::user()->email}}

            <form method="post" action="{{ route('pujasera.update', Auth::user()->id) }}">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="form-group">
                <label for="gambar_struk">Foto</label>
                <input type="file" name="foto">
              </div>
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat"  placeholder="Alamat"></textarea>
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi"  placeholder="Deskripsi"></textarea>
              </div>
              <div class="form-group">
                <label for="name">Jumlah Kedai</label>
                <input type="text" name="jumlah_kedai" placeholder="Jumlah Kedai">
              </div>
              <div class="form-group">
                <label for="name">Longitude</label>
                <input type="text" name="longitude" placeholder="Longitude">
              </div>
              <div class="form-group">
                <label for="name">Latitude</label>
                <input type="text" name="latitude" placeholder="Latitude">
              </div>
              <div class="form-group">
                <label for="name">Status</label>
                <input type="text" name="status" placeholder="Status">
              </div>
              <div class="form-group">
                <label for="name">Email</label>
                <input type="text" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="name">No HP</label>
                <input type="text" name="no_hp" placeholder="No HP">
              </div>
              <button type="submit" class="btn btn-success" onclick="return confirm('Yakin ingin menambah data?')">Ubah</button>
            </form>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="profile.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{ asset('lib/common-scripts.js') }}"></script>
  <!--script for this page-->
  <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE - VIEW OUR DOCUMENTATION FOR FURTHER INFORMATION -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
  <script>
    $('.contact-map').click(function() {

      //google map in tab click initialize
      function initialize() {
        var myLatlng = new google.maps.LatLng(40.6700, -73.9400);
        var mapOptions = {
          zoom: 11,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Dashio Admin Theme!'
        });
      }
      google.maps.event.addDomListener(window, 'click', initialize);
    });
  </script>
  <script src="{{ asset('lib/bootstrap-switch.js') }}"></script>
  <!--custom tagsinput-->
  <script src="{{ asset('lib/jquery.tagsinput.js') }}"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="{{ asset('lib/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/bootstrap-daterangepicker/date.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/bootstrap-inputmask/bootstrap-inputmask.min.js') }}"></script>
  <script src="{{ asset('lib/form-component.js') }}"></script>
  @endsection