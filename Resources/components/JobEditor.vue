<template>
<form :action="action">
    <div class="form-group">
        <input type="text" class="form-control">
    </div>
</form>
</template>
<script>
export default {
    name: "job-editor",
    pops: ['action'],
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
