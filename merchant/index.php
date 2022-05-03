<?php include 'include/header.php';?>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      <!-- Menu -->
      <?php include 'include/sidenav.php';?>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php include 'include/nav.php';?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper p-3">

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">



            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card" style="background-color:#B7D9CC;color:black">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title" style="color: black;font-weight:600;">Welcome William Jones</h5>
                        <p class="mb-4">Welcome to Merchant dashbaord, where you can manage orders and add items.</p>
                        <a href="javascript:;" class="btn btn-md btn-label-primary">More <i class="fa-solid fa-caret-right"></i></a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img src="assets/dash.png" height="140" alt="View Badge User">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body pb-0">
                        <span class="d-block fw-semibold mb-2">New Orders</span>
                        <h3 class="card-title">50+</h3>
                      </div>
                      <div id="orderChart" class="mb-3"></div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                      <div class="card-body pb-2">
                        <span class="d-block fw-semibold mb-2">Delivered</span>
                        <h3 class="card-title mb-2">20+</h3>
                        <div id="revenueChart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Revenue -->
              <!-- <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="row row-bordered g-0">
                    <div class="col-md-12">
                      <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                      <div id="totalRevenueChart" class="px-2"></div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!--/ Total Revenue -->
            </div>
            <div class="row mt-2">
              <div class="col-md-12">
                <h3 class="mb-0" style="color: #169256;">New Order List For Feb26.2022</h3>
                <small style="font-size: 16px;">Incoming Orders From Merchant</small>
                <!-- Ajax Sourced Server-side -->
<div class="card mt-3">
  <div class="card-datatable text-nowrap">
    <table class="datatables-basic table table-bordered" id="orders">
      <thead>
        <tr>
          <th style="color: #169256;font-weight:700">Ref #</th>
          <th style="color: #169256;font-weight:700">Name</th>
          <th style="color: #169256;font-weight:700">Item</th>
          <th style="color: #169256;font-weight:700">Payment Type</th>
          <th style="color: #169256;font-weight:700">Transfer Type</th>
          <th style="color: #169256;font-weight:700">status</th>
          <th style="color: #169256;font-weight:700">Total</th>
          <th style="color: #169256;font-weight:700">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>
            <a href="javascript:;" class="btn btn-md btn-primary px-5">Delivered</a>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>
            <a href="javascript:;" class="btn btn-md btn-primary px-5">Delivered</a>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>
            <a href="javascript:;" class="btn btn-block btn-md btn-dark px-5">View</a>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>
            <a href="javascript:;" class="btn btn-block btn-md btn-primary px-5">Delivered</a>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>Demo</td>
          <td>
            <a href="javascript:;" class="btn btn-block btn-md btn-primary px-5">Delivered</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!--/ Ajax Sourced Server-side -->
              </div>
            </div>


          </div>
          <!-- / Content -->
          <script type="text/javascript" language="javascript">
                                                $(document).ready(function () {
                                                    $('#orders').DataTable();
                                                });
                                            </script>
          <?php include 'include/footer.php';?>

