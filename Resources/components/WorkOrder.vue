<template>
<div class="card">
    <div class="card-header p-0" :id="headLabel">
        <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" :data-target="'#'+contentId"
                :aria-expanded="num==1" :aria-controls="contentId">
                {{ woTitle }}
            </button>
        </h5>
    </div>
    <div :id="contentId" :class="[{'show' : num==1}, 'collapse']" :aria-labelledby="headLabel" :data-parent="'#'+wrap">
        <div class="card-body">
            <task-viewer></task-viewer>
        </div>
    </div>
</div>
</template>
<script>
export default {
    name: "work-order",
    props: ["num", "wrap"],
    data(){
        return {
            woTitle: 'Service # '+this.num,
            headLabel: 'heading-'+this.num,
            contentId: 'collapse-'+this.num
        }
    }
}
</script>
