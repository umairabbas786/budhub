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
                        <h5 class="card-header">Enabled Alert Settings</h5>
                        <div class="col-md-6 mt-3">
                            <div class="row">
                                <label class="col-sm-4 col-form-label text-sm-start"
                                    for="formtabs-first-name">Disabled Email Alert Notification?</label>
                                <div class="col-sm-8 mt-1">
                                    <input type="checkbox" class="form-check-input mt-1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="row">
                                <label class="col-sm-4 col-form-label text-sm-start"
                                    for="formtabs-first-name">Email Address</label>
                                <div class="col-sm-8">
                                    <input type="text" id="formtabs-first-name"
                                        class="form-control" placeholder="example@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-1">
                            <p>Email address of the person who will recive if there is new order multiple email must be separrated by comma.</p>
                        </div>
                        <div class="col-md-6 mt-3">
                        <div class="row">
                            <label class="col-sm-4 col-form-label text-sm-start" for="collapsible-address">Disable Sound Alert?</label>
                            <div class="col-sm-8">
                                <input type="checkbox" class="form-check-input mt-1">
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p>Play Alert Sound  when there is new order.</p>
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