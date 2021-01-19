@extends('employer.app')
@section('content')
<div class="content-wrapper-before" id="wrapper"></div>

<div class="content-body">

    <!-- Edit Profile Form -->
    <section id="edit-pro" class="row justify-content-center mb-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="form-section mb-0">
                        <i class="fas fa-user-edit"></i> Edit Profile
                    </h4>
                    <a class="heading-elements-toggle">
                        <i class="fas fa-ellipsis-v font-medium-3"></i>
                    </a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li>
                                <a data-action="collapse">
                                    <i class="fas fa-minus"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="reload">
                                    <i class="fas fa-redo"></i>
                                </a>
                            </li>
                            <li>
                                <a data-action="close">
                                    <i class="fas fa-times"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body pt-0">
                        <form class="form">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email"> Email @php if($user->email_verified_at !=''){ @endphp <i class="far fa-check-circle success"></i>  @php }else{ } @endphp </label>
                                            <input type="eamil" id="email" class="form-control" name="email" readonly value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone"> Phone <span id="phverifymsg"><i class="fas fa-exclamation-circle warning"></i> <button type="button" class="btn btn-warning" style="padding: 2px 4px;" onclick="verifyphone()">Verify</button> <span id="vermsgbox"></span></span></label>
                                            <input type="text" id="phone" class="form-control" placeholder="eg. 9874563210" name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="companyname">Company Name</label>
                                            <input type="text" id="companyname" class="form-control" placeholder="Eg. CBitss" name="companyname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="weburl"> Website URL </label>
                                            <input type="text" id="weburl" class="form-control" placeholder="www.cbitss.com" name="weburl">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="cgstin">Upload Compnay GSTIN</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="cgstin">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="pancard">Upload Pan Card</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="pancard">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="cadd">Upload Compnay Address Proof</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="cadd">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="prodeed">Upload Proptitership Deed</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="prodeed">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label for="cofi">Upload Certificate of Incorporation</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="cofi">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="msme">Upload MSME Certificate</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="msme">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="reset" class="btn btn-danger mr-1">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-check"></i> Save
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Edit Profile From Ends  -->
</div>
@endsection