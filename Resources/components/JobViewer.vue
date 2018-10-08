<template>
    <div class="job-viewer">
        <div class="card-deck mb-3">
            <div class="card">
                <div class="card-header bg-primary">
                    Job
                    <a href="#edit-job" class="float-right material-icons text-white">settings</a>
                </div>
                <div class="card-body">
                    <h4 class="h5">WCSD - Enterprise High School 2017</h4>
                    <hr class="my-1">
                    <address>
                        565 S 200 E<br/>
                        Enterprise, UT 84725<br/>
                    </address>
                </div>
                <div class="card-footer">
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary">
                    Customer
                </div>
                <div class="card-body p-0 text-compact">
                    <div class="col">
                        <h4 class="h5 mt-3">
                            <select class="filled-form" disabled hidden>
                                <option value="">Paul Properties Inc</option>
                            </select>
                            <span>Paul Properties Inc</span>
                        </h4>
                        <h6 class="">
                            <small>Dave Paul (Owner--Community Manager)</small>
                        </h6>
                    </div>
                    <hr>
                    <div class="card-group">
                        <div class="card border-0">
                            1224 S. River Road<br/>
                            St. George, UT<br/>
                            84790
                        </div>
                        <div class="card border-0">
                            435-467-3444 (Work)<br/>
                            dave@paulpropertiesinc.com
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary">
                    Office Use
                </div>
                <div class="card-body text-compact">
                    <p>NetSuite ID:</p>
                    <p>Area Region: UT - Southern</p>
                    <p>Category: HOA</p>
                    <p>Estimator: Jeffrey Poulton</p>
                    <p>Project Manager: </p>
                    <p>Teresa Ortiz </p>
                    <p>Garbage Days: 	</p>
                    <p>Gate Code:</p>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
        <div class="card-group mb-3">
            <div class="card col-md-4">
                <div class="card-header row bg-primary">
                    Documents
                </div>
                <div class="card-body row">
                    <div class="mx-3">
                        2017-enterprise-high-school.pdf,
                        3233_017.pdf,
                        2017-enterprise-high-school.pdf,
                        3233_017.pdf,
                        2017-enterprise-high-school.pdf,
                        3233_017.pdf
                    </div>
                </div>
                <div class="card-footer row">
                    <div class="mx-3"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary">
                    Project Notes
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "job-viewer",
    pops: ["job-id", "default-job"],
    data(){
        return {
            job: {},
            files: {},
            customer: {},
            official: {}
        }
    }
}
</script>
