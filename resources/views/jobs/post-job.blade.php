@extends('employer.app')
@section('content')
<div class="content-wrapper-before" id="wrapper"></div>

<div class="content-body">
<!--  -->
<section id="validation" class="row justify-content-center mb-5">
        <!-- Post Job Form Start  -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="form-section mb-0">
                        <i class="far fa-flag"></i> Post A Job
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
                        <form action="#" class="steps-validation">
                            <!-- Step 1 -->
                            <h6>Step 1</h6>
                            <fieldset>
                                <div class="row">
                                    <!-- Company Name -->
                                    <div class="col-md-6 mb-1">
                                        <label for="company name"> Company Name <span class="danger">*</span></label>
                                        <input type="text" id="company name" class="form-control required" placeholder="Eg. CBitss" name="company name">
                                    </div>
                                    <!-- Job Title -->
                                    <div class="col-md-6 mb-1">
                                        <label for="jobtitle"> Job Title <span class="danger">*</span></label>
                                        <input type="text" id="jobtitle" class="form-control required" placeholder="Eg. Web Designer" name="jobtitle">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Location -->
                                    <div class="col-md-6 mb-1">
                                        <label for="joblocation">Job Location <span class="danger">*</span></label>
                                        <input type="text" id="joblocation" class="form-control required" placeholder="Eg. Chandigarh" name="joblocation" list="location">
                                        <datalist id="location">
                                            <option value="Chandigarh">
                                            <option value="Mohali">
                                            <option value="Zirakpur">
                                            <option value="Panchkula">
                                            <option value="Kharar">
                                        </datalist>

                                    </div>

                                    <!-- Experience -->
                                    <div class="col-md-6 mb-1">
                                        <label for="experience">Experience <span class="danger">*</span></label>
                                        <input type="text" id="experience" class="form-control required" placeholder="1 Year" name="experience">
                                    </div>
                                    <!-- Qualification -->
                                    <div class="col-md-6 mb-1">
                                        <label for="qualification"> Qualification <span class="danger">*</span></label>
                                        <input type="text" id="qualification" class="form-control required" placeholder="Eg. Graduate" name="qualification">
                                    </div>
                                    <!-- How Many Hires -->
                                    <div class="col-md-6 mb-2">
                                        <label for="hires">How Many Hires</label>
                                        <input type="text" id="hires" class="form-control" placeholder="2 Candidates" name="hires">
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 2 -->
                            <h6>Step 2</h6>
                            <fieldset>
                                <div class="row">
                                    <!-- Contract Type -->
                                    <div class="col-md-6 mb-1">
                                        <label for="contract">Contract Type</label><br>
                                        <select class="custom-select" id="contract">
                                            <option selected>Select Contract Type</option>
                                            <option value="1"> Intern </option>
                                            <option value="2"> 6 mahine </option>
                                            <option value="3"> Umar Bhar </option>
                                        </select>
                                    </div>
                                    <!-- Job Shift -->
                                    <div class="col-md-6 mb-1">
                                        <label for="jobshift">Job Shift</label><br>
                                        <select class="custom-select" id="jobshift">
                                            <option selected>Select Shift</option>
                                            <option value="1"> Day </option>
                                            <option value="2"> Night </option>
                                            <option value="3"> 24hrs </option>
                                        </select>
                                    </div>
                                    <!-- Conatct Number -->
                                    <div class="col-md-6 mb-1">
                                        <label for="phoneNumber3">Contact Number <span class="danger">*</span></label>
                                        <input type="tel" placeholder="7986574360" class="form-control required" id="phoneNumber3">
                                    </div>
                                    <!-- Job Shift -->
                                    <div class="col-md-6 mb-1">
                                        <label for="jobshift">Joining Time</label><br>
                                        <select class="custom-select" id="jobshift">
                                            <option selected>Select Time</option>
                                            <option value="1"> abhi </option>
                                            <option value="2"> Thodi der </option>
                                            <option value="3"> Kar lenge mar kyu rha hai </option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <label> Salary Range </label>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="salrange-from" class="form-control" placeholder="5000" name="phone">
                                            </div>
                                            <div class="col-1 text-center"> <label class="pt-1">To</label> </div>
                                            <div class="col">
                                                <input type="text" id="salrange-to" class="form-control" placeholder="10000" name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Benefits -->
                                    <div class="col-md-6 mb-2">
                                        <label for="benefit"> If Any Benefits Offered </label>
                                        <input type="text" id="benefit" class="form-control" placeholder="Eg. Graduate" name="benefit">
                                    </div>

                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h6>Step 3</h6>
                            <fieldset id="form-control-repeater">
                                <div class="row">
                                    <!-- Interested Area -->
                                    <div class="form-group col-lg-6 mb-2 file-repeater">
                                        <label class="w-100"> Interested Area </label>
                                        <div data-repeater-list="repeater-list">
                                            <div data-repeater-item>
                                                <div class="row mb-1">
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" placeholder="Area" name="phone">
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-repeater-create class="btn btn-primary">
                                            <i class="fas fa-plus"></i> Add Area
                                        </button>
                                    </div>
                                    <hr>
                                    <!-- Custom Questions -->
                                    <div class="form-group col-lg-6 mb-2 file-repeater">
                                        <label class="w-100"> Custom Questions </label>
                                        <div data-repeater-list="repeater-list">
                                            <div data-repeater-item>
                                                <div class="row mb-1">
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" placeholder="Area" name="phone">
                                                    </div>
                                                    <div class="col-2">
                                                        <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-repeater-create class="btn btn-primary">
                                            <i class="fas fa-plus"></i> Add Questions
                                        </button>
                                    </div>
                                </div>
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Post Job Form End  -->
</section>
<!--  -->
</div>
@endsection