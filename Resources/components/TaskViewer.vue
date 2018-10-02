<template>
    <div class="border-top py-3">
        <div class="d-flex mb-3 row">
            <div class="col-md-3">
                <div class="d-flex">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control disabled">
                        <div class="input-group-append">
                            <div class="input-group-text">+</div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline-primary mx-3">
                        +
                    </button>

                </div>
            </div>
            <div class="col pt-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">
                        Customer Approval Date?
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <button class="btn btn-sm btn-outline-primary btn-block">Print Workorder</button>
            </div>
        </div>
        <div class="card-group">
            <div class="card col-sm-12 col-md-3 p-0">
                <div class="card-header p-2">
                    <span>Files</span>
                </div>
                <div class="card-body p-3"><br/></div>
            </div>
            <div class="card col-sm-12 col-md-3 p-0">
                <div class="card-header p-2">
                    <span>Time Cards</span>
                </div>
                <div class="card-body p-3"><br/></div>
            </div>
            <div class="card col-sm-12 col-md-3 p-0">
                <div class="card-header p-2">
                    <span>Materials</span>
                </div>
                <div class="card-body p-3"><br/></div>
            </div>
            <div class="card col-sm-12 col-md-3 p-0">
                <div class="card-header p-2">
                    <span>Equipment</span>
                </div>
                <div class="card-body p-3"><br/></div>
            </div>
        </div>
        <div class="card-group">
            <!-- <div class="card col-md-3">
                <div class="card-body">
                    <h5>Files</h5>
                </div>
            </div> -->
           <div class="card">
               <div class="card-body">
                   <h5>Foreman's Notes</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, rerum at ut ex iusto eaque similique corrupti distinctio, amet debitis alias dolor iure nesciunt, mollitia quam esse aut porro ipsam.</p>
               </div>
           </div>
           <div class="card">
               <div class="card-body">
                <h5>Manager's Notes</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, rerum at ut ex iusto eaque similique corrupti distinctio, amet debitis alias dolor iure nesciunt, mollitia quam esse aut porro ipsam.</p>
               </div>
           </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: "task-viewer",
        pops: [],
        data() {
            return {}
        }
    }
</script>
