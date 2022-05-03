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
                        <div class="col-md-6">
                            <form action="" method="POST">
                                <div class="mb-4">
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="html5-date-input" class="col-md-4 col-form-label">Start
                                                Date</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="date" value="2021-06-18"
                                                    id="html5-date-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="html5-date-input" class="col-md-4 col-form-label">End
                                                Date</label>
                                            <div class="col-md-8">
                                                <input class="form-control" type="date" value="2021-06-18"
                                                    id="html5-date-input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="html5-date-input" class="col-md-4 col-form-label">Order
                                                Status</label>
                                            <div class="col-md-8">
                                                <select name="status" class="form-select" id="">
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-md btn-primary" style="width: 100%;">Filter</button>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-md btn-dark" style="width: 100%;">Export</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- Ajax Sourced Server-side -->
                        </div>
                        <div class="col-md-12">
                            <div class="card mt-3">
                                <div class="card-datatable text-nowrap">
                                    <table class="datatables-basic table table-bordered" id="orders">
                                        <thead>
                                            <tr>
                                                <th style="color: #169256;font-weight:700">Ref #</th>
                                                <th style="color: #169256;font-weight:700">Name</th>
                                                <th style="color: #169256;font-weight:700">Item</th>
                                                <th style="color: #169256;font-weight:700">Payment Type</th>
                                                <th style="color: #169256;font-weight:700">Total</th>
                                                <th style="color: #169256;font-weight:700">Status</th>
                                                <th style="color: #169256;font-weight:700">Date</th>
                                                <th style="color: #169256;font-weight:700">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>
                                                    <p class="text-center"><span class="px-2"><a href="" class="btn btn-primary">Edit</a></span><span><a href="" class="btn btn-dark">View</a></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>
                                                    <p class="text-center"><span class="px-2"><a href="" class="btn btn-primary">Edit</a></span><span><a href="" class="btn btn-dark">View</a></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>
                                                    <p class="text-center"><span class="px-2"><a href="" class="btn btn-primary">Edit</a></span><span><a href="" class="btn btn-dark">View</a></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>
                                                    <p class="text-center"><span class="px-2"><a href="" class="btn btn-primary">Edit</a></span><span><a href="" class="btn btn-dark">View</a></span></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>Demo</td>
                                                <td>
                                                    <p class="text-center"><span class="px-2"><a href="" class="btn btn-primary">Edit</a></span><span><a href="" class="btn btn-dark">View</a></span></p>
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