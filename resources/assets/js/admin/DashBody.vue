<template>
    <div class="row">

    <div class="col-xl-8 mb-5 mb-xl-0">
        <div class="card bg-gradient-default shadow">
        <div class="card-header bg-transparent">
            <div class="row align-items-center">
            <div class="col">
                <h6 class="text-uppercase text-light ls-1 mb-1">Revenue Income</h6>
                <h2 class="text-white mb-0">From Tutors</h2>
            </div>
            <div class="col">
                <ul class="nav nav-pills justify-content-end">
                <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" 
                data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}" 
                data-prefix="$" data-suffix="k">
                    <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                    <span class="d-none d-md-block">Month</span>
                    <span class="d-md-none">M</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="chart" data-target="#chart-sales" 
                data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}" 
                data-prefix="$" data-suffix="k">
                    <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                    <span class="d-none d-md-block">Year</span>
                    <span class="d-md-none">Y</span>
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        <div class="card-body">
            <!-- Chart -->
            <div class="chart">
            <div class="chartjs-size-monitor" 
                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div class="chartjs-size-monitor-expand" 
                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                    </div>
                </div>
                <div class="chartjs-size-monitor-shrink" 
                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                    </div>
                </div>
            </div>
            
            <!-- Chart wrapper -->
            <canvas id="chart-sales" class="chart-canvas chartjs-render-monitor" width="621" height="350" 
                style="display: block; width: 621px; height: 350px;">
            </canvas>
            </div>
        </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card shadow">
        <div class="card-header bg-transparent">
            <div class="row align-items-center">
            <div class="col">
                <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                <h2 class="mb-0">Total Tutors</h2>
            </div>
            </div>
        </div>
        <div class="card-body">
            <!-- Chart -->
            <div class="chart"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <canvas id="chart-orders" class="chart-canvas chartjs-render-monitor" 
            style="display: block; width: 270px; height: 350px;" width="270" height="350">
            </canvas>
            </div>
        </div>
        </div>
    </div>
    
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Dashboard Charts mounted.')
        }
    }
</script>
