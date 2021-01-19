@extends('employer.app')
@section('content')
<div class="content-wrapper-before" id="wrapper"></div>

<div class="content-body">
    <div id="user-profile" class="mb-5">
        <div class="row">
            <div class="col-sm-12 col-xl-8">
                <div class="media d-flex m-1 ">
                    <div class="align-left p-1">
                        <a href="#" class="profile-image">
                            <img src="app-assets/images/portrait/small/avatar-s-1.png" class="rounded-circle img-border height-100" alt="Card image">
                        </a>
                    </div>
                    <div class="media-body text-left  mt-1">
                        <h3 class="font-large-1 white">{{$user->name}}
                            <span class="font-medium-1 white">(Project manager)</span>
                        </h3>
                        <p class="white">
                            <i class="fas fa-map-marker-alt"></i> New York, USA
                        </p>
                        <p class="white text-bold-300 d-none d-sm-block">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Nunc sed odio risus. Integer sit amet dolor elit. Suspendisse
                            ac neque in lacus venenatis convallis. Sed eu lacus odio</p>
                        <ul class="list-inline">
                            <li class="pr-1 line-height-1">
                                <a href="#" class="font-medium-4 white ">
                                    <span class="fab fa-facebook"></span>
                                </a>
                            </li>
                            <li class="pr-1 line-height-1">
                                <a href="#" class="font-medium-4 white ">
                                    <span class="fab fa-twitter white"></span>
                                </a>
                            </li>
                            <li class="line-height-1">
                                <a href="#" class="font-medium-4 white ">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-5 col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="card-title-wrap bar-primary">
                            <div class="card-title">Work History</div>
                            <hr>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0 pt-0 pb-1">
                            <ul>
                                <li>
                                    <strong>99%</strong>
                                    Job Success
                                </li>
                                <li>
                                    <strong>4.9 stars </strong>

                                    <i class="fas fa-star yellow darken-2"></i>
                                    <i class="fas fa-star yellow darken-2"></i>
                                    <i class="fas fa-star yellow darken-2"></i>
                                    <i class="fas fa-star yellow darken-2"></i>
                                    <i class="fas fa-star yellow darken-2"></i>
                                <li>
                                    <strong>1022</strong> Hours Worked
                                </li>
                                <li>
                                    <strong>26</strong> Jobs
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="card-title-wrap bar-primary">
                            <div class="card-title">Other Details</div>
                            <hr>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body p-0 pt-0 pb-1">
                            <ul>
                                <li>
                                    <strong>Availability: </strong>
                                    10-30 hrs / week
                                </li>
                                <li>
                                    <strong>24 hours </strong> response time

                                <li>
                                    <strong>Languages: </strong> English/ Spanish
                                </li>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-9 col-lg-7 col-md-12">
                <!--Project Timeline div starts-->
                <div id="timeline">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title-wrap bar-primary">
                                <div class="card-title">Project Timeline</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <div class="timeline">
                                    <h4>Profile Grades</h4>
                                    <hr>
                                    <ul class="list-unstyled base-timeline activity-timeline mt-3">
                                        <li>
                                            <div class="timeline-icon bg-red">
                                                <!-- <i class="fas fa-meh-blank font-medium-1"></i> -->
                                                25%
                                            </div>
                                            <!-- <div class="act-time">25%</div> -->
                                            <div class="base-timeline-info">
                                                <a href="#" class="text-uppercase line-height-2" style="color:#fa626b">Incomplete
                                                    Profile</a>
                                                <span class="d-block">Complete Your Profile to Post a Job</span>
                                                <small class="text-muted">
                                                    15 days ago
                                                </small>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="timeline-icon bg-danger">
                                                <!-- <i class="far fa-meh font-medium-1"></i> -->
                                                50%
                                            </div>
                                            <!-- <div class="act-time">50%</div> -->
                                            <div class="base-timeline-info">
                                                <a href="#" class="text-danger text-uppercase  line-height-2">Contact Details</a>
                                                <span class="d-block">Verify Phone Number and Upload a Profile Photo</span>
                                                <small class="text-muted">
                                                    10 days ago
                                                </small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-icon bg-warning">
                                                <!-- <i class="far fa-smile font-medium-1"></i> -->
                                                75%
                                            </div>
                                            <!-- <div class="act-time">75%</div> -->
                                            <div class="base-timeline-info">
                                                <a href="#" class="text-warning text-uppercase  line-height-2">Personal Documents</a>
                                                <span class="d-block">Upload Your All Required Documents</span>
                                                <small class="text-muted">
                                                    5 days ago
                                                </small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-icon bg-success">
                                                <!-- <i class="far fa-grin-stars font-medium-1"></i> -->
                                                100%
                                            </div>
                                            <!-- <div class="act-time">100%</div> -->
                                            <div class="base-timeline-info">
                                                <a href="#" class="text-success text-uppercase  line-height-2">Verification...</a>
                                                <span class="d-block">Profile is Completed Please wait for the Verification</span>
                                                <small class="text-muted">
                                                    1 days ago
                                                </small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Project Timeline div ends-->
            </div>
        </div>
    </div>
</div>
<a class="btn btn-bg-gradient-x-purple-blue btn-glow white" id="fixcbtn">Complete Profile</a>

@endsection