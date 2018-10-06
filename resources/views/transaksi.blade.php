@extends('layouts.app')

@section('content')
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Order Hari Ini</h3>
         <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>New Order </h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Order ID</th>
                    <th class="hidden-phone"><i class="fa fa-location"></i>Tujuan antar</th>
                    <th><i class="fa fa-money"></i>Total Harga</th>
                    <!-- <th><i class=" fa fa-bookmark"></i> Status</th> -->
                    <th><i class=" fa fa-edit"></i>Next Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($transaksinew as $transaksi)
                  @if($transaksi->status=='new')
                  <tr>
                    <td>
                      {{$transaksi->detailTransaksi_id}}
                    </td>
                    <td class="hidden-phone">{{ $transaksi->tujuan_antar }}</td>
                    <td>{{ $transaksi->total_harga }} </td>
                    <!-- <td><span class="label label-info label-mini">Buka</span></td> -->
                    <td>
                      <a href="invoice1.php"><button class="btn btn-success btn-xs"><i class="fa fa-eye">&nbsp;Detail</i></button></a>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-check"></i>&nbsp;Proses Order</button>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-times "></i>&nbsp;Cancel</button>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
         <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>On Process Order </h4>
                <hr>
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i>Order ID</th>
                    <th class="hidden-phone"><i class="fa fa-location"></i>Tujuan antar</th>
                    <th><i class="fa fa-money"></i>Total Harga</th>
                    <!-- <th><i class=" fa fa-bookmark"></i> Status</th> -->
                    <th><i class=" fa fa-edit"></i>Next Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($transaksiprocess as $transaksi)
                  @if($transaksi->status=='process')
                  <tr>
                    <td>
                      {{$transaksi->detailTransaksi_id}}
                    </td>
                    <td class="hidden-phone">{{ $transaksi->tujuan_antar }}</td>
                    <td>{{ $transaksi->total_harga }} </td>
                    <!-- <td><span class="label label-info label-mini">Buka</span></td> -->
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-eye">&nbsp;Detail</i></button>
                      <button class="btn btn-primary btn-xs"><i class="fa fa-check"></i>&nbsp;Kirim Order</button>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
                 <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>On Deliver Order </h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Order ID</th>
                    <th class="hidden-phone"><i class="fa fa-location"></i>Tujuan antar</th>
                    <th><i class="fa fa-money"></i>Total Harga</th>
                    <!-- <th><i class=" fa fa-bookmark"></i> Status</th> -->
                    <th><i class=" fa fa-user"></i>Kurir</th>
                    <th><i class=" fa fa-bookmark"></i>Detail Order</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($transaksidelivery as $transaksi)
                  @if($transaksi->status=='delivery')
                  <tr>
                    <td>
                      {{$transaksi->detailTransaksi_id}}
                    </td>
                    <td class="hidden-phone">{{ $transaksi->tujuan_antar }}</td>
                    <td>{{ $transaksi->total_harga }} </td>
                    <!-- <td><span class="label label-info label-mini">Buka</span></td> -->
                    <td>{{ $transaksi->kurir_id }} </td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-eye">&nbsp;Detail</i></button>
                    </td>
                    
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i>Finished Order</h4>
              <hr>
              <table class="table">
                  <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Order ID</th>
                    <th class="hidden-phone"><i class="fa fa-location"></i>Tujuan antar</th>
                    <th><i class="fa fa-money"></i>Total Harga</th>
                    <!-- <th><i class=" fa fa-bookmark"></i> Status</th> -->
                    <th><i class=" fa fa-user"></i>Kurir</th>
                    <th><i class=" fa fa-bookmark"></i>Detail Order</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($transaksifinished as $transaksi)
                  @if($transaksi->status=='finished')
                  <tr>
                    <td>
                      {{$transaksi->detailTransaksi_id}}
                    </td>
                    <td class="hidden-phone">{{ $transaksi->tujuan_antar }}</td>
                    <td>{{ $transaksi->total_harga }} </td>
                    <!-- <td><span class="label label-info label-mini">Buka</span></td> -->
                    <td>{{ $transaksi->kurir_id }} </td>
                    <td>
                      <button class="btn btn-success btn-xs"><i class="fa fa-eye">&nbsp;Detail</i></button>
                    </td>
                    
                  </tr>
                  @endif
                  @endforeach                  
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
          <div class="col-md-12 mt">
            <div class="content-panel">
              <table class="table table-hover">
                <h4><i class="fa fa-angle-right"></i> Canceled Order </h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Order ID</th>
                    <th class="hidden-phone"><i class="fa fa-location"></i>Tujuan antar</th>
                    <th><i class="fa fa-money"></i>Total Harga</th>
                    <!-- <th><i class=" fa fa-bookmark"></i> Status</th> -->
                    <th><i class=" fa fa-trash"></i>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach($transaksicanceled as $transaksi)
                  @if($transaksi->status=='canceled')
                  <tr>
                    <td>
                      {{$transaksi->detailTransaksi_id}}
                    </td>
                    <td class="hidden-phone">{{ $transaksi->tujuan_antar }}</td>
                    <td>{{ $transaksi->total_harga }} </td>
                    <!-- <td><span class="label label-info label-mini">Buka</span></td> -->
                    <td>
                      <td><button class="btn btn-danger btn-xs"><i class="fa fa-trash "></i>&nbsp;Delete</button></td>
                    </td>
                    
                  </tr>
                  @endif
                  @endforeach
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
          <!-- /col-md-12 -->
        </div>
       
      </section>
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
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
@endsection