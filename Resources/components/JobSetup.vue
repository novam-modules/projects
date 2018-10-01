<template>
    <div class="mb-3">

        <div class="serviceFields row">
                <div class="serviceField col">
                    <strong>Work Order #:</strong> <br/><span>3924</span>
                </div>
                <div class="serviceField col">
                    <strong>Condition:</strong> <br/> <span>Prepared</span>
                </div>
                <div class="serviceField col">
                    <strong>Quantity of patches on project:</strong> <br/> <span>1</span>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-6">
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th>Material</th>
                            <th>Estimated</th>
                            <th>Actual</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">
                                <div><a href="#" data-toggle="modal" data-target="#materials-modal-26245"
                                        class="no-print"><i class="icon-add-circle"></i> Material</a>
                                    <div id="materials-modal-26245" tabindex="-1" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header"><button
                                                        type="button" data-dismiss="modal" class="close"><span
                                                           >×</span></button> <span
                                                        class="modal-title"><strong>Add Material</strong></span></div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label
                                                                    for="material_26245">Material</label>
                                                                <select name="material_26245" id="material_26245"
                                                                    class="form-control">
                                                                    <option selected="selected"
                                                                        disabled="disabled">Select Material</option>
                                                                    <option data-index="0" value="2">Bumper
                                                                        Blocks</option>
                                                                    <option data-index="1" value="26">Ceramic
                                                                        Buttons</option>
                                                                    <option data-index="2" value="24">Cleaning
                                                                        Hours</option>
                                                                    <option data-index="3" value="27">Concrete</option>
                                                                    <option data-index="4" value="25">Cones/Carpet
                                                                        Pickup Hours</option>
                                                                    <option data-index="5" value="3">Corundum</option>
                                                                    <option data-index="6" value="4">Crack
                                                                        Seal</option>
                                                                    <option data-index="7" value="5">CSS</option>
                                                                    <option data-index="8" value="6">Gator
                                                                        Aid</option>
                                                                    <option data-index="9" value="7">HA5</option>
                                                                    <option data-index="10" value="8">Handicap
                                                                        Post and Signs</option>
                                                                    <option data-index="11" value="9">Notices</option>
                                                                    <option data-index="12" value="21">NuvoGap</option>
                                                                    <option data-index="13" value="29">Paint
                                                                        - Black</option>
                                                                    <option data-index="14" value="19">Paint
                                                                        - Blue</option>
                                                                    <option data-index="15" value="20">Paint
                                                                        - Green</option>
                                                                    <option data-index="16" value="18">Paint
                                                                        - Red</option>
                                                                    <option data-index="17" value="16">Paint
                                                                        - White</option>
                                                                    <option data-index="18" value="17">Paint
                                                                        - Yellow</option>
                                                                    <option data-index="19" value="10">Poly
                                                                        Oil Seal</option>
                                                                    <option data-index="20" value="23">Reflectors</option>
                                                                    <option data-index="21" value="11">Road
                                                                        Base</option>
                                                                    <option data-index="22" value="12">Sealcoat</option>
                                                                    <option data-index="23" value="28">Shuttle
                                                                        Hours</option>
                                                                    <option data-index="24" value="13">Slurry
                                                                        Aggregate TI</option>
                                                                    <option data-index="25" value="14">Slurry
                                                                        Aggregate TII</option>
                                                                    <option data-index="26" value="22">Spray
                                                                        Paint</option>
                                                                    <option data-index="27" value="15">Surface
                                                                        Armor</option>
                                                                </select></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group"><label
                                                                    for="estimated_26245">Estimated</label>
                                                                <div class="input-group"><input
                                                                        name="estimated_26245" id="estimated_26245"
                                                                        min="0" step="1" class="form-control" type="number">
                                                                    <span class="input-group-addon"></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <!---->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer"><button
                                                        type="button" class="btn btn-secondary">Cancel</button> <button
                                                        type="button" class="btn btn-primary">Add
                                                        Material</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-lg-6">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">Budgeted Crews</span>
                                        </span>
                                        <input min="0" step="1"
                                        id="3924_budgeted_crews" name="3924_budgeted_crews" class="form-control"
                                        type="number">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <!---->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label
                    for="3924_job_costing_daily_crews">Daily Crews</label> <input
                    name="3924_job_costing_daily_crews" id="3924_job_costing_daily_crews"
                    min="0" step="0.5" class="form-control" type="number">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label
                    for="3924_job_costing_days_touched">Days Touched</label> <input
                    name="3924_job_costing_days_touched" id="3924_job_costing_days_touched"
                    min="0" step="0.5" class="form-control" type="number">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label
                    for="3924_job_costing_crew_size">Crew Size</label> <input
                    name="3924_job_costing_crew_size" id="3924_job_costing_crew_size"
                    min="0" step="0.5" class="form-control" type="number">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label
                    for="3924_job_costing_other_costs">Other Costs</label> <input
                    name="3924_job_costing_other_costs" id="3924_job_costing_other_costs"
                    min="0" class="form-control" type="number">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label
                    for="3924_job_costing_rain_hours">Rain Hours</label> <input
                    name="3924_job_costing_rain_hours" id="3924_job_costing_rain_hours"
                    min="0" class="form-control" type="number">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label
                        for="3924_job_costing_equip_hours">Add'l Equip. Hours</label>
                    <input name="3924_job_costing_equip_hours" id="3924_job_costing_equip_hours"
                        min="0" class="form-control" type="number">
                </div>
            </div>
            <div class="col">
                <label for="">.</label>
                <button type="button" class="btn btn-secondary btn-block">Save</button>
            </div>
        </div>
        <div class="row workorder-header">
            <div class="col-sm-12 col"><span>Date</span>
                <a href="#"
                    class="add-task pull-right no-print">Date <i class="icon-add-circle"></i>
                </a>
            </div>
            <div class="col-sm-12 col"><span>Crew</span></div>
            <div class="col-sm-12 col"><span>Materials</span></div>
            <div class="col-sm-12 col"><span>Equipment/Vehicles</span></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "job-setup",
    props: [],
    data(){
        return {}
    }
}
</script>

<style>

</style>
