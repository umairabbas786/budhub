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
                        <!-- <h5 class="card-header">Enabled Alert Settings</h5> -->
                        <div class="col-md-6 mt-3">
                            <div class="row">
                                <label class="col-sm-4 col-form-label text-sm-start"
                                    for="formtabs-first-name">Enabled SMS  Alert </label>
                                <div class="col-sm-8 mt-1">
                                    <input type="checkbox" checked class="form-check-input mt-1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="row">
                                <label class="col-sm-4 col-form-label text-sm-start"
                                    for="formtabs-first-name">Notify Mobile Number</label>
                                <div class="col-sm-8">
                                    <input type="tel" id="formtabs-first-name"
                                        class="form-control" placeholder="+1 234 567 876">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <p>Mobile number that will recive notification when there is a new multiple numbers must be separated by comma.Mobile number include</p>
                        </div>
                        <div class="col-md-8 mt-3">
                        <div class="row">
                            <label class="col-sm-4 col-form-label text-sm-start" for="collapsible-address">SMS Notification Message to Merchant</label>
                            <div class="col-sm-8">
                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="3" placeholder="You have a new order from bud hub ..."></textarea>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <h6>Available Tags</h6>
                        </div>
                        <div class="col-md-6 mt-3">
                            <p>(Custom name)+client name</p>
                            <p>(orderno)=ordernumber</p>
                            <p>(Customermobile)=Customermobile</p>
                            <p>(Customeraddress)=Customeraddress</p>
                            <p>(amount)=totalamount ordered</p>
                            <p>(website address)=websiteaddress</p>
                            <p>(payment type)</p>
                            <p>(transaction type)</p>
                            <p>(delivery instruction)</p>
                            <p>(delivery date)</p>
                        </div>
                        <div class="col-md-8 mt-3">
                        <div class="row">
                            <label class="col-sm-4 col-form-label text-sm-start" for="collapsible-address">SMS Notification Message to 
Customer <br><br> Leave empty to if you dont want to send smsto customer?</label>
                            <div class="col-sm-8">
                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="4"></textarea>
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