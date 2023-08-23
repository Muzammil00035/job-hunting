<div class="wt-admin-right-page-header clearfix">
    <h2>{{ Auth::guard('Company')->user()->name }} (Company)</h2>
    <div class="breadcrumbs"><a href="#">Home</a><span>Dasboard</span></div>
</div>

<div class="twm-dash-b-blocks mb-5">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
            <div class="panel panel-default">
                <div class="panel-body wt-panel-body gradi-1 dashboard-card ">
                    <div class="wt-card-wrap">
                        <div class="wt-card-icon"><i class="far fa-address-book"></i></div>
                        <div class="wt-card-right wt-total-active-listing counter ">25</div>
                        <div class="wt-card-bottom ">
                            <h4 class="m-b0">Posted Jobs</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
            <div class="panel panel-default">
                <div class="panel-body wt-panel-body gradi-2 dashboard-card ">
                    <div class="wt-card-wrap">
                        <div class="wt-card-icon"><i class="far fa-file-alt"></i></div>
                        <div class="wt-card-right  wt-total-listing-view counter ">435</div>
                        <div class="wt-card-bottom">
                            <h4 class="m-b0">Total Applications</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
            <div class="panel panel-default">
                <div class="panel-body wt-panel-body gradi-3 dashboard-card ">
                    <div class="wt-card-wrap">
                        <div class="wt-card-icon"><i class="far fa-envelope"></i></div>
                        <div class="wt-card-right wt-total-listing-review counter ">28</div>
                        <div class="wt-card-bottom">
                            <h4 class="m-b0">Messages</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
            <div class="panel panel-default">
                <div class="panel-body wt-panel-body gradi-4 dashboard-card ">
                    <div class="wt-card-wrap">
                        <div class="wt-card-icon"><i class="far fa-bell"></i></div>
                        <div class="wt-card-right wt-total-listing-bookmarked counter ">18</div>
                        <div class="wt-card-bottom">
                            <h4 class="m-b0">Notifications</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login Section End -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
    integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('Success!'))
    <script>
        toastr.success("{!! Session::get('Success!') !!}");
    </script>
@endif
