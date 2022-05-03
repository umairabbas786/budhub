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

                    <div class="row mt-2 card p-3">
                        <div class="col-md-12">
                            <div class="card mt-3">
                                <div class="card-header flex-column flex-md-row">
                                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                                        <div class="dt-buttons">
                                            <button class="dt-button create-new btn btn-primary" tabindex="0"
                                                aria-controls="DataTables_Table_0" type="button"><span><i
                                                        class="fa fa-plus me-sm-2"></i> <span
                                                        class="d-none d-sm-inline-block">Add New
                                                        </span></span></button> </div>
                                    </div>
                                </div>
                                <div class="card-datatable text-nowrap">
                                    <table class="datatables-basic table table-bordered" id="orders">
                                        <thead>
                                            <tr>
                                                <th style="color: #169256;font-weight:700">Id</th>
                                                <th style="color: #169256;font-weight:700">Name</th>
                                                <th style="color: #169256;font-weight:700">Description</th>
                                                <th style="color: #169256;font-weight:700">Categories</th>
                                                <th style="color: #169256;font-weight:700">Price</th>
                                                <th style="color: #169256;font-weight:700">Photo</th>
                                                <th style="color: #169256;font-weight:700">Out Of Stock</th>
                                                <th style="color: #169256;font-weight:700">Status</th>
                                                <th style="color: #169256;font-weight:700">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td><img src="assets/logo.svg" alt="img"></td>
                                                <td class="text-center"><input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" checked="" readonly></td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                            </tr>
                                            <tr>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td><img src="assets/logo.svg" alt="img"></td>
                                                <td class="text-center"><input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" checked="" readonly></td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                            </tr>
                                            <tr>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td><img src="assets/logo.svg" alt="img"></td>
                                                <td class="text-center"><input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" checked="" readonly></td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                            </tr>
                                            <tr>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td><img src="assets/logo.svg" alt="img"></td>
                                                <td class="text-center"><input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" checked="" readonly></td>
                                                <td>Demo</td>
                                                <td>Demo</td>
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