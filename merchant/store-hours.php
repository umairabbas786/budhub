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
                        <h5 class="card-header">Store Day(s) Open:</h5>
                        <div class="col-md-12">
                            <div class="card mt-3">
                                <div class="card-datatable text-nowrap">
                                    <table class="datatables-basic table table-bordered" id="orders">
                                        <!-- <thead>
                                            <tr>
                                                <th style="color: #169256;font-weight:700">Item Id</th>
                                                <th style="color: #169256;font-weight:700">Item</th>
                                                <th style="color: #169256;font-weight:700">Size</th>
                                                <th style="color: #169256;font-weight:700">Price</th>
                                                <th style="color: #169256;font-weight:700">Total Qty</th>
                                                <th style="color: #169256;font-weight:700">Total Amount</th>
                                            </tr>
                                        </thead> -->
                                        <tbody>
                                            <tr>
                                                <td>*</td>
                                                <td>Monday</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>To</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>Edit</td>
                                            </tr>
                                            <tr>
                                                <td>*</td>
                                                <td>Tuesday</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>To</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>Edit</td>
                                            </tr>
                                            <tr>
                                                <td>*</td>
                                                <td>Wednesday</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>To</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>Edit</td>
                                            </tr>
                                            <tr>
                                                <td>*</td>
                                                <td>Thursday</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>To</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>Edit</td>
                                            </tr>
                                            <tr>
                                                <td>*</td>
                                                <td>Friday</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>To</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>Edit</td>
                                            </tr>
                                            <tr>
                                                <td>*</td>
                                                <td>Saturday</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>To</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>Edit</td>
                                            </tr>
                                            <tr>
                                                <td>*</td>
                                                <td>Sunday</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>To</td>
                                                <td><input type="time" class="form-control"></td>
                                                <td>Edit</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/ Ajax Sourced Server-side -->
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="row">
                                <label class="col-sm-3 col-form-label text-sm-end"
                                    for="formtabs-first-name">Close Store?</label>
                                <div class="col-sm-9 mt-1">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                        <div class="row">
                            <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-address">Close Message</label>
                            <div class="col-sm-9">
                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2" placeholder="Sorry, We are closed"></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                        <div class="row">
                            <label class="col-sm-3 col-form-label text-sm-end" for="collapsible-address">Holiday Close Message</label>
                            <div class="col-sm-9">
                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2" placeholder="Sorry, We are closed"></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <button type="submit"
                                            class="btn btn-primary me-sm-3 me-1" style="width: 50%;">Save</button>
                                    </div>
                                </div>
                            </div>
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