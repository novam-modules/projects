<template>
    <form :action="jobUrl" enctype="multipart/form-data" method="post" autocomplete="off">
        <div class="row">
            <div class="col-md-4 column">
                <div class="md-form">
                    <input type="text" id="name" name="name" required="required" class="form-control">
                    <label for="name">Project Name</label>
                </div>
                <div class="md-form">
                    <input type="text" id="street1" name="street1" required="required" class="form-control">
                    <label for="street1">Street Address</label>
                </div>
                <div class="md-form">
                    <input type="text" id="street2" name="street2" class="form-control">
                    <label for="street1">Address</label>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="md-form">
                            <input type="text" id="city" name="city" required="required" class="form-control">
                            <label for="street1">City</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select name="state" id="state" required="required" class="mdb-select md-form">
                            <option value="" disabled="disabled" selected="selected">State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                            <option value="DC">Washington, DC</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="zipcode" name="zipcode" placeholder="Zipcode" required="required"
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="md-form"><input type="text" id="gatecode" name="gatecode" placeholder="Gate Code" class="form-control">
                    <div>
                        <input type="hidden" name="garbage">
                        <div class="multi-selector">

                        </div>
                        <select class="mdb-select md-form" multiple>
                            <option selected="selected" value="">Garbage Day</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                        </select>
                    </div>
                </div>
                <div class="md-form">
                    <div id="estimator_id">
                        <label for="user-search-795600">Estimator</label>
                        <input type="text" id="user-search-795600" placeholder="Search employees..." class="form-control">
                        <div class="jsonPickerContainer">
                            <!---->
                        </div> <input type="hidden" name="estimator_id" value="357">
                    </div>
                </div>
            </div>
            <div class="col-md-4 column">
                <div class="form-group">
                    <select name="category mdb-select md-form" id="category" required="required" class="form-control">
                        <option value="" selected="selected" disabled="disabled"></option>
                        <option value="1">Church</option>
                        <option value="4">Commercial</option>
                        <option value="2">HOA</option>
                        <option value="5">Municipal</option>
                        <option value="0">Other</option>
                        <option value="3">School</option>
                    </select>
                    <label for="category">Job Category</label>
                </div>
                <div class="md-form"><label for="area_id">Job Area</label> <select name="area_id" id="area_id" required="required"
                        class="form-control">
                        <option value="" selected="selected" disabled="disabled"></option>
                        <option value="11">AZ - Northern</option>
                        <option value="1">AZ - Phoenix</option>
                        <option value="2">AZ - Southern</option>
                        <option value="3">NV - Las Vegas</option>
                        <option value="4">UT - Cache Valley</option>
                        <option value="7">UT - Central</option>
                        <option value="5">UT - Eastern</option>
                        <option value="8">UT - Salt Lake - North</option>
                        <option value="6">UT - Salt Lake - South</option>
                        <option value="10">UT - Southern</option>
                        <option value="9">UT - Utah County</option>
                    </select></div>
                <div class="md-form">
                    <h4>Project Files</h4>
                    <div class="file-field">
                        <div class="btn btn-primary btn-sm float-left">
                            <span>Choose file</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload your file">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Proposal</span>
                        <input type="file" accept="application/pdf" id="estimate" name="estimate" class="form-control">
                    </div>
                    <br>
                    <div class="input-group"><span class="input-group-addon">.kmz File</span>
                        <input type="file" accept=".kmz" id="map" name="map" class="form-control"></div>
                    <br>
                    <div class="input-group"><span class="input-group-addon">Misc File</span> <input type="file" name="other[]"
                            class="form-control"></div> <br> <a href="#" onclick="App.Projects.addMiscFile(event);"><i
                            class="icon-add-circle" style="vertical-align: -1px; margin-right: 6px;"></i> Add
                        Additional File</a>
                </div> <br>
                <textarea id="notes" name="notes" placeholder="Project notes" class="form-control" style="height: 120px;"></textarea>
            </div>
            <div class="col-md-4 column">
                <div class="md-form">
                    <label for="ns_transaction_id">NetSuite ID</label>
                    <input type="text" name="ns_transaction_id" id="ns_transaction_id" class="form-control">
                </div>
                <div>
                    <input type="hidden" name="customer_id">
                    <div>
                        <label>Customer</label>
                        <div _v-09f20190="">
                            <input type="text" class="form-control">
                            <div _v-09f20190="" class="container">
                                <ul _v-09f20190="" class="form-control" style="display: none;"></ul>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 0.75em 0px;">
                        <span class="gray center"><small>-OR-</small></span>
                    </div>
                    <div>
                        <div style="text-align: center;">
                            <button type="button" data-toggle="modal" data-target="#new-customer" class="btn btn-primary">New
                                Customer</button>
                        </div>
                        <div id="new-customer" tabindex="-1" role="dialog" class="modal">
                            <div role="document" class="modal-dialog" style="width: 400px;">
                                <div class="modal-header"><button type="button" data-dismiss="modal" aria-label="Close"
                                        class="close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title">New Customer</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="md-form"><label for="customer_name">New Customer</label>
                                        <input type="text" placeholder="Name or Company" class="form-control">
                                    </div>
                                    <div class="md-form">
                                        <label for="customer_street1">Address</label>
                                        <input type="text" placeholder="Street Address" class="form-control">
                                        <input type="text" placeholder="Bldg/Suite/Apt #" class="form-control">
                                        <input type="text" placeholder="City" class="form-control">

                                        <select class="mdb-select md-form">
                                            <option selected="selected" disabled="disabled">State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                            <option value="DC">Washington, DC</option>
                                        </select> <input type="text" placeholder="Zipcode" class="form-control"></div>
                                </div>
                                <div class="modal-footer"><button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                    <button type="button" data-dismiss="modal" class="btn btn-primary">Save Customer</button></div>
                            </div>
                        </div>
                    </div> <br>
                    <div>
                        <div><label>Customer Contact</label> <select class="mdb-select md-form">
                                <option selected="selected" disabled="disabled">First select a customer...</option>
                            </select></div>
                        <div>
                            <div style="text-align: center; margin: 0.75em 0px;"><a href="#" class="btn btn-primary">New
                                    Contact</a></div>
                            <div id="toggle-newCustomerContact" tabindex="-1" role="dialog" class="modal">
                                <div role="document" class="modal-dialog">
                                    <div class="modal-header"><button type="button" data-dismiss="modal" aria-label="Close"
                                            class="close"><span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title">New Contact</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="md-form"><label>Contact</label> <input type="text"
                                                        placeholder="First Name" class="form-control"> <input type="text"
                                                        placeholder="Last Name" class="form-control"> <input type="text"
                                                        placeholder="Position/Role" class="form-control"></div>
                                                <div class="md-form"><label>Phone/Email</label> <input type="tel"
                                                        placeholder="Phone Number" class="form-control"> <input type="email"
                                                        placeholder="Email Address" class="form-control"></div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="md-form"><label for="contact_street1">Address</label>
                                                    <input type="text" placeholder="Street Address" class="form-control">
                                                    <input type="text" placeholder="Street Address Line 2" class="form-control">
                                                    <input type="text" placeholder="City" class="form-control"> <select
                                                        class="form-control">
                                                        <option value="" disabled="disabled">State</option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="CA">California</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="WV">West Virginia</option>
                                                        <option value="WI">Wisconsin</option>
                                                        <option value="WY">Wyoming</option>
                                                        <option value="DC">Washington, DC</option>
                                                    </select> <input type="text" placeholder="Zipcode" class="form-control">
                                                    <button type="button" class="btn btn-primary" style="display: block; width: 100%; margin-top: 1em;">Copy
                                                        From Customer</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button type="button" class="btn btn-secondary">Cancel</button>
                                        <button type="button" class="btn btn-primary">Save Contact</button></div>
                                </div>
                            </div>
                        </div> <br>
                        <ul class="contact-list"></ul>
                    </div>
                </div>
            </div>
            <hr class="w-100">
            <div class="col column">
                <label for="all_services">Services</label>
                <select id="all_services" class="mdb-select md-form">
                    <option selected="selected" disabled="disabled">Select a Service</option>
                    <option value="18">Bumper Block Installation</option>
                    <option value="15">Cleaning/Touch Up</option>
                    <option value="21">Concrete</option>
                    <option value="8">Concrete Joint Repair</option>
                    <option value="23">Cones &amp; Carpet</option>
                    <option value="7">Crack Repair</option>
                    <option value="17">Crack Repair &amp; Concrete Joint Repair</option>
                    <option value="2">Excavating</option>
                    <option value="16">No Service</option>
                    <option value="1">Noticing</option>
                    <option value="26">Nuvo Gap</option>
                    <option value="4">Patching - Full Depth</option>
                    <option value="3">Patching - Surface</option>
                    <option value="5">Paving - Full Depth</option>
                    <option value="22">Shuttle</option>
                    <option value="24">Shuttle Driver</option>
                    <option value="6">Speed Bumps/Humps</option>
                    <option value="14">Striping/Paint</option>
                    <option value="9">Surface Treatment - HA5</option>
                    <option value="28">Surface Treatment - HA5 CLONE</option>
                    <option value="12">Surface Treatment - Other</option>
                    <option value="27">Surface Treatment - Sealcoat (Premium)</option>
                    <option value="10">Surface Treatment - Sealcoat (Standard)</option>
                    <option value="11">Surface Treatment - Slurry I, II, or III</option>
                    <option value="13">Traffic Control</option>
                    <option value="25">Training</option>
                    <option value="20">Walk Through</option>
                    <option value="19">Yard Work</option>
                </select>
            </div>
            <div class="col-md-4 column">
                <br>
                <a :href="jobUrl" class="btn btn-secondary pull-right">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right">Create Project</button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        name: "new-job",
        props: ["job-url"],
        data() {
            return {};
        }
    };
</script>

<style>
</style>
