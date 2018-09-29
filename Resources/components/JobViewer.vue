<template>
    <div class="job-viewer">
        <div class="card-deck">
            <div class="card">
                <div class="card-header bg-primary">
                    Job
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary">
                    Customer
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer">

                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary">
                    Office Use
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
    pops: [],
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
