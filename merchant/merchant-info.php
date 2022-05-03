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

                    <!-- Form with Tabs -->
                    <div class="row">
                        <div class="col">
                            <div class="nav-align-top mb-3">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#form-tabs-personal" role="tab"
                                            aria-selected="true">Merchant Info</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link " data-bs-toggle="tab"
                                            data-bs-target="#form-tabs-accountt" role="tab" aria-selected="false">Information</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-sociall"
                                            role="tab" aria-selected="false">Login Information</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-google-maps"
                                            role="tab" aria-selected="false">Google Maps</button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Personal Info -->
                                    <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-first-name">Status</label>
                                                            <div class="col-sm-9">
                                                            <button type="submit"
                                                                class="btn btn-primary me-sm-3 me-1">Active</button>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"></div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-first-name">Merchant Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-last-name">Merchant Phone</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-last-name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-first-name">Contact Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-last-name">Contact Phone</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-last-name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-first-name">Contact Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-country">Country</label>
                                                        <div class="col-sm-9">
                                                            <select id="formtabs-country" class="select2 form-select"
                                                                data-allow-clear="true">
                                                                <option value="">Country 1</option>
                                                                <option value="">Country 2</option>
                                                                <option value="">Country 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-first-name">Country Code</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-first-name">Street Address</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-first-name">City</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-first-name">Post Code / Zip Code</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-first-name">State/Region</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-first-name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-language">Cannabis</label>
                                                        <div class="col-sm-9">
                                                            <select id="formtabs-language" class="select2 form-select"
                                                                >
                                                                <option value="en" selected="">deliveries</option>
                                                                <option value="fr" selected="">deliveries</option>
                                                                <option value="de"></option>
                                                                <option value="pt"></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 select2-primary">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-languag">Pick up or Delivery</label>
                                                        <div class="col-sm-9">
                                                            <select id="formtabs-languag" class="select2 form-select"
                                                                >
                                                                <option value="en" selected="">deliveries</option>
                                                                <option value="fr" selected="">pick up</option>
                                                                <option value="de"></option>
                                                                <option value="pt"></option>
                                                            </select>
                                                        </div>
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
                                        </form>
                                    </div>
                                    <!-- Account Details -->
                                    <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-username">Username</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-username"
                                                                class="form-control" placeholder="john.doe">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-email">Email</label>
                                                        <div class="col-sm-9">
                                                            <div class="input-group input-group-merge">
                                                                <input type="text" id="formtabs-email"
                                                                    class="form-control" placeholder="john.doe"
                                                                    aria-label="john.doe"
                                                                    aria-describedby="formtabs-email2">
                                                                <span class="input-group-text"
                                                                    id="formtabs-email2">@example.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row form-password-toggle">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-password">Password</label>
                                                        <div class="col-sm-9">
                                                            <div class="input-group input-group-merge">
                                                                <input type="password" id="formtabs-password"
                                                                    class="form-control"
                                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                                    aria-describedby="formtabs-password2">
                                                                <span class="input-group-text cursor-pointer"
                                                                    id="formtabs-password2"><i
                                                                        class="bx bx-hide"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row form-password-toggle">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-confirm-password">Confirm</label>
                                                        <div class="col-sm-9">
                                                            <div class="input-group input-group-merge">
                                                                <input type="password" id="formtabs-confirm-password"
                                                                    class="form-control"
                                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                                    aria-describedby="formtabs-confirm-password2">
                                                                <span class="input-group-text cursor-pointer"
                                                                    id="formtabs-confirm-password2"><i
                                                                        class="bx bx-hide"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-6">
                                                    <div class="row justify-content-end">
                                                        <div class="col-sm-9">
                                                            <button type="submit"
                                                                class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                            <button type="reset"
                                                                class="btn btn-label-secondary">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Social Links -->
                                    <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-twitter">Twitter</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-twitter"
                                                                class="form-control"
                                                                placeholder="https://twitter.com/abc">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-facebook">Facebook</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-facebook"
                                                                class="form-control"
                                                                placeholder="https://facebook.com/abc">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-google">Google+</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-google" class="form-control"
                                                                placeholder="https://plus.google.com/abc">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-linkedin">Linkedin</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-linkedin"
                                                                class="form-control"
                                                                placeholder="https://linkedin.com/abc">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-instagram">Instagram</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-instagram"
                                                                class="form-control"
                                                                placeholder="https://instagram.com/abc">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label text-sm-end"
                                                            for="formtabs-quora">Quora</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" id="formtabs-quora" class="form-control"
                                                                placeholder="https://quora.com/abc">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-6">
                                                    <div class="row justify-content-end">
                                                        <div class="col-sm-9">
                                                            <button type="submit"
                                                                class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                            <button type="reset"
                                                                class="btn btn-label-secondary">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->


                <?php include 'include/footer.php';?>