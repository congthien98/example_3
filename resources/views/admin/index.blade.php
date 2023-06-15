@extends('admin.admin_master')

@section('dashboard_content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-primary-light rounded w-60 h-60">
                        <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">New Customers</p>
                        <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i
                                    class="fa fa-caret-up"></i> +2.5%</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-warning-light rounded w-60 h-60">
                        <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Sold Cars</p>
                        <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i
                                    class="fa fa-caret-up"></i> +2.5%</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-info-light rounded w-60 h-60">
                        <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p>
                        <h3 class="text-white mb-0 font-weight-500">$1,250 <small class="text-danger"><i
                                    class="fa fa-caret-down"></i> -0.5%</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-danger-light rounded w-60 h-60">
                        <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Inbound Call</p>
                        <h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i
                                    class="fa fa-caret-up"></i> -1.5%</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-success-light rounded w-60 h-60">
                        <i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Outbound Call</p>
                        <h3 class="text-white mb-0 font-weight-500">1,700 <small class="text-success"><i
                                    class="fa fa-caret-up"></i> +0.5%</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-6">
            <div class="box overflow-hidden pull-up">
                <div class="box-body">
                    <div class="icon bg-light rounded w-60 h-60">
                        <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                    </div>
                    <div>
                        <p class="text-mute mt-20 mb-0 font-size-16">Total Revune</p>
                        <h3 class="text-white mb-0 font-weight-500">$4,500k <small class="text-success"><i
                                    class="fa fa-caret-up"></i> +2.5%</small></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">
                        Earning Summary
                    </h4>
                </div>
                <div class="box-body py-0" style="position: relative;">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="box no-shadow mb-0">
                                <div class="box-body px-0">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="position: relative;">
                                            <div id="chart41" style="min-height: 128.7px;">
                                                <div id="apexcharts5gnl8lk3"
                                                    class="apexcharts-canvas apexcharts5gnl8lk3 apexcharts-theme-light"
                                                    style="width: 150px; height: 128.7px;"><svg id="SvgjsSvg1370"
                                                        width="150" height="128.7" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG1372" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(13, 0)">
                                                            <defs id="SvgjsDefs1371">
                                                                <clipPath id="gridRectMask5gnl8lk3">
                                                                    <rect id="SvgjsRect1374" width="132" height="150"
                                                                        x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMask5gnl8lk3">
                                                                    <rect id="SvgjsRect1375" width="130" height="152"
                                                                        x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG1377" class="apexcharts-pie">
                                                                <g id="SvgjsG1378"
                                                                    transform="translate(12.599999999999994, 14.799999999999997) scale(0.8)">
                                                                    <circle id="SvgjsCircle1379" r="27.731707317073173"
                                                                        cx="63" cy="63" fill="transparent"></circle>
                                                                    <g id="SvgjsG1380" class="apexcharts-slices">
                                                                        <g id="SvgjsG1381"
                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                            seriesName="seriesx1" rel="1"
                                                                            data:realIndex="0">
                                                                            <path id="SvgjsPath1382"
                                                                                d="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 81.96960502250172 115.11856145529649 L 72.48480251125086 89.05928072764824 A 27.731707317073173 27.731707317073173 0 0 0 63 35.26829268292683 L 63 7.536585365853654 z"
                                                                                fill="rgba(0,188,139,1)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                                index="0" j="0" data:angle="160"
                                                                                data:startAngle="0" data:strokeWidth="2"
                                                                                data:value="44"
                                                                                data:pathOrig="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 81.96960502250172 115.11856145529649 L 72.48480251125086 89.05928072764824 A 27.731707317073173 27.731707317073173 0 0 0 63 35.26829268292683 L 63 7.536585365853654 z"
                                                                                stroke="#ffffff"></path>
                                                                        </g>
                                                                        <g id="SvgjsG1383"
                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                            seriesName="seriesx2" rel="2"
                                                                            data:realIndex="1">
                                                                            <path id="SvgjsPath1384"
                                                                                d="M 81.96960502250172 115.11856145529649 A 55.463414634146346 55.463414634146346 0 1 1 62.99031980805149 7.536586210609762 L 62.99515990402575 35.26829310530488 A 27.731707317073173 27.731707317073173 0 1 0 72.48480251125086 89.05928072764824 L 81.96960502250172 115.11856145529649 z"
                                                                                fill="rgba(202,255,229,1)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                                index="0" j="1" data:angle="200"
                                                                                data:startAngle="160"
                                                                                data:strokeWidth="2" data:value="55"
                                                                                data:pathOrig="M 81.96960502250172 115.11856145529649 A 55.463414634146346 55.463414634146346 0 1 1 62.99031980805149 7.536586210609762 L 62.99515990402575 35.26829310530488 A 27.731707317073173 27.731707317073173 0 1 0 72.48480251125086 89.05928072764824 L 81.96960502250172 115.11856145529649 z"
                                                                                stroke="#ffffff"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine1385" x1="0" y1="0" x2="126" y2="0"
                                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1386" x1="0" y1="0" x2="126" y2="0"
                                                                stroke-dasharray="0" stroke-width="0"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG1373" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(0, 188, 139);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(202, 255, 229);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 151px; height: 130px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>Top Order</h5>
                                            <h4 class="text-white my-0 font-weight-500">$39k</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="box no-shadow mb-0">
                                <div class="box-body px-0">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="position: relative;">
                                            <div id="chart42" style="min-height: 128.7px;">
                                                <div id="apexchartsr7u419lg"
                                                    class="apexcharts-canvas apexchartsr7u419lg apexcharts-theme-light"
                                                    style="width: 150px; height: 128.7px;"><svg id="SvgjsSvg1387"
                                                        width="150" height="128.7" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <g id="SvgjsG1389" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(13, 0)">
                                                            <defs id="SvgjsDefs1388">
                                                                <clipPath id="gridRectMaskr7u419lg">
                                                                    <rect id="SvgjsRect1391" width="132" height="150"
                                                                        x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMaskr7u419lg">
                                                                    <rect id="SvgjsRect1392" width="130" height="152"
                                                                        x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG1394" class="apexcharts-pie">
                                                                <g id="SvgjsG1395"
                                                                    transform="translate(12.599999999999994, 14.799999999999997) scale(0.8)">
                                                                    <circle id="SvgjsCircle1396" r="27.731707317073173"
                                                                        cx="63" cy="63" fill="transparent"></circle>
                                                                    <g id="SvgjsG1397" class="apexcharts-slices">
                                                                        <g id="SvgjsG1398"
                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                            seriesName="seriesx1" rel="1"
                                                                            data:realIndex="0">
                                                                            <path id="SvgjsPath1399"
                                                                                d="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 81.96960502250172 115.11856145529649 L 72.48480251125086 89.05928072764824 A 27.731707317073173 27.731707317073173 0 0 0 63 35.26829268292683 L 63 7.536585365853654 z"
                                                                                fill="rgba(15,94,247,1)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                                index="0" j="0" data:angle="160"
                                                                                data:startAngle="0" data:strokeWidth="2"
                                                                                data:value="44"
                                                                                data:pathOrig="M 63 7.536585365853654 A 55.463414634146346 55.463414634146346 0 0 1 81.96960502250172 115.11856145529649 L 72.48480251125086 89.05928072764824 A 27.731707317073173 27.731707317073173 0 0 0 63 35.26829268292683 L 63 7.536585365853654 z"
                                                                                stroke="#ffffff"></path>
                                                                        </g>
                                                                        <g id="SvgjsG1400"
                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                            seriesName="seriesx2" rel="2"
                                                                            data:realIndex="1">
                                                                            <path id="SvgjsPath1401"
                                                                                d="M 81.96960502250172 115.11856145529649 A 55.463414634146346 55.463414634146346 0 1 1 62.99031980805149 7.536586210609762 L 62.99515990402575 35.26829310530488 A 27.731707317073173 27.731707317073173 0 1 0 72.48480251125086 89.05928072764824 L 81.96960502250172 115.11856145529649 z"
                                                                                fill="rgba(225,240,255,1)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                                index="0" j="1" data:angle="200"
                                                                                data:startAngle="160"
                                                                                data:strokeWidth="2" data:value="55"
                                                                                data:pathOrig="M 81.96960502250172 115.11856145529649 A 55.463414634146346 55.463414634146346 0 1 1 62.99031980805149 7.536586210609762 L 62.99515990402575 35.26829310530488 A 27.731707317073173 27.731707317073173 0 1 0 72.48480251125086 89.05928072764824 L 81.96960502250172 115.11856145529649 z"
                                                                                stroke="#ffffff"></path>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine1402" x1="0" y1="0" x2="126" y2="0"
                                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1403" x1="0" y1="0" x2="126" y2="0"
                                                                stroke-dasharray="0" stroke-width="0"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG1390" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-legend"></div>
                                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(15, 94, 247);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(225, 240, 255);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 151px; height: 130px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>Average Order</h5>
                                            <h4 class="text-white my-0 font-weight-500">$24k</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="charts_widget_43_chart" style="min-height: 385px;">
                        <div id="apexcharts9mmj7kl" class="apexcharts-canvas apexcharts9mmj7kl apexcharts-theme-light"
                            style="width: 533px; height: 385px;"><svg id="SvgjsSvg1404" width="533" height="385"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1406" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(53.359375, 30)">
                                    <defs id="SvgjsDefs1405">
                                        <clipPath id="gridRectMask9mmj7kl">
                                            <rect id="SvgjsRect1412" width="478.640625" height="322.98003125" x="-4.5"
                                                y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMask9mmj7kl">
                                            <rect id="SvgjsRect1413" width="493.640625" height="341.98003125" x="-12"
                                                y="-12" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <line id="SvgjsLine1411" x1="0" y1="0" x2="0" y2="317.98003125" stroke="#b6b6b6"
                                        stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                        height="317.98003125" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                        stroke-width="1"></line>
                                    <g id="SvgjsG1439" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1440" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText1442"
                                                font-family="Helvetica, Arial, sans-serif" x="0" y="346.98003125"
                                                text-anchor="middle" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#bac0c7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1443">Jan</tspan>
                                                <title>Jan</title>
                                            </text><text id="SvgjsText1445" font-family="Helvetica, Arial, sans-serif"
                                                x="52.18229166666667" y="346.98003125" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1446">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText1448" font-family="Helvetica, Arial, sans-serif"
                                                x="104.36458333333333" y="346.98003125" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1449">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText1451" font-family="Helvetica, Arial, sans-serif"
                                                x="156.54687499999997" y="346.98003125" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1452">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1454" font-family="Helvetica, Arial, sans-serif"
                                                x="208.72916666666663" y="346.98003125" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1455">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1457" font-family="Helvetica, Arial, sans-serif"
                                                x="260.9114583333333" y="346.98003125" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1458">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1460" font-family="Helvetica, Arial, sans-serif"
                                                x="313.09375" y="346.98003125" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1461">Jul</tspan>
                                                <title>Jul</title>
                                            </text><text id="SvgjsText1463" font-family="Helvetica, Arial, sans-serif"
                                                x="365.2760416666667" y="346.98003125" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1464">Aug</tspan>
                                                <title>Aug</title>
                                            </text><text id="SvgjsText1466" font-family="Helvetica, Arial, sans-serif"
                                                x="417.45833333333337" y="346.98003125" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1467">Sep</tspan>
                                                <title>Sep</title>
                                            </text><text id="SvgjsText1469" font-family="Helvetica, Arial, sans-serif"
                                                x="469.64062500000006" y="346.98003125" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1470">Oct</tspan>
                                                <title>Oct</title>
                                            </text></g>
                                        <line id="SvgjsLine1471" x1="0" y1="318.98003125" x2="469.640625"
                                            y2="318.98003125" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1484" class="apexcharts-grid">
                                        <g id="SvgjsG1485" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1497" x1="0" y1="0" x2="469.640625" y2="0"
                                                stroke="#f7f7f7" stroke-dasharray="0" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1498" x1="0" y1="79.4950078125" x2="469.640625"
                                                y2="79.4950078125" stroke="#f7f7f7" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1499" x1="0" y1="158.990015625" x2="469.640625"
                                                y2="158.990015625" stroke="#f7f7f7" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1500" x1="0" y1="238.48502343750002" x2="469.640625"
                                                y2="238.48502343750002" stroke="#f7f7f7" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1501" x1="0" y1="317.98003125" x2="469.640625"
                                                y2="317.98003125" stroke="#f7f7f7" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1486" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1487" x1="0" y1="318.98003125" x2="0" y2="324.98003125"
                                            stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1488" x1="52.182291666666664" y1="318.98003125"
                                            x2="52.182291666666664" y2="324.98003125" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1489" x1="104.36458333333333" y1="318.98003125"
                                            x2="104.36458333333333" y2="324.98003125" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1490" x1="156.546875" y1="318.98003125" x2="156.546875"
                                            y2="324.98003125" stroke="#e0e0e0" stroke-dasharray="0"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1491" x1="208.72916666666666" y1="318.98003125"
                                            x2="208.72916666666666" y2="324.98003125" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1492" x1="260.9114583333333" y1="318.98003125"
                                            x2="260.9114583333333" y2="324.98003125" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1493" x1="313.09375" y1="318.98003125" x2="313.09375"
                                            y2="324.98003125" stroke="#e0e0e0" stroke-dasharray="0"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1494" x1="365.2760416666667" y1="318.98003125"
                                            x2="365.2760416666667" y2="324.98003125" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1495" x1="417.45833333333337" y1="318.98003125"
                                            x2="417.45833333333337" y2="324.98003125" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1496" x1="469.64062500000006" y1="318.98003125"
                                            x2="469.64062500000006" y2="324.98003125" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <rect id="SvgjsRect1502" width="469.640625" height="79.4950078125" x="0" y="0"
                                            rx="0" ry="0" opacity="0" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="transparent"
                                            clip-path="url(#gridRectMask9mmj7kl)" class="apexcharts-grid-row"></rect>
                                        <rect id="SvgjsRect1503" width="469.640625" height="79.4950078125" x="0"
                                            y="79.4950078125" rx="0" ry="0" opacity="0" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="transparent"
                                            clip-path="url(#gridRectMask9mmj7kl)" class="apexcharts-grid-row"></rect>
                                        <rect id="SvgjsRect1504" width="469.640625" height="79.4950078125" x="0"
                                            y="158.990015625" rx="0" ry="0" opacity="0" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="transparent"
                                            clip-path="url(#gridRectMask9mmj7kl)" class="apexcharts-grid-row"></rect>
                                        <rect id="SvgjsRect1505" width="469.640625" height="79.4950078125" x="0"
                                            y="238.48502343750002" rx="0" ry="0" opacity="0" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="transparent"
                                            clip-path="url(#gridRectMask9mmj7kl)" class="apexcharts-grid-row"></rect>
                                        <line id="SvgjsLine1507" x1="0" y1="317.98003125" x2="469.640625"
                                            y2="317.98003125" stroke="transparent" stroke-dasharray="0"></line>
                                        <line id="SvgjsLine1506" x1="0" y1="1" x2="0" y2="317.98003125"
                                            stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG1415" class="apexcharts-line-series apexcharts-plot-series">
                                        <g id="SvgjsG1416" class="apexcharts-series" seriesName="Profit"
                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                            <path id="SvgjsPath1438"
                                                d="M 0 317.98003125C 18.26380208333333 317.98003125 33.91848958333333 238.48502343750005 52.182291666666664 238.48502343750005C 70.44609374999999 238.48502343750005 86.10078125 99.36875976562501 104.36458333333333 99.36875976562501C 122.62838541666666 99.36875976562501 138.28307291666667 178.86376757812502 156.546875 178.86376757812502C 174.81067708333333 178.86376757812502 190.46536458333333 119.24251171875002 208.72916666666666 119.24251171875002C 226.99296875 119.24251171875002 242.64765624999998 198.73751953125003 260.9114583333333 198.73751953125003C 279.1752604166667 198.73751953125003 294.82994791666664 59.621255859375026 313.09375 59.621255859375026C 331.3575520833333 59.621255859375026 347.0122395833333 208.6743955078125 365.27604166666663 208.6743955078125C 383.53984375 208.6743955078125 399.19453124999995 39.74750390625002 417.4583333333333 39.74750390625002C 435.7221354166667 39.74750390625002 451.37682291666664 69.55813183593753 469.640625 69.55813183593753"
                                                fill="none" fill-opacity="1" stroke="rgba(15,94,247,0.85)"
                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-line" index="0"
                                                clip-path="url(#gridRectMask9mmj7kl)"
                                                pathTo="M 0 317.98003125C 18.26380208333333 317.98003125 33.91848958333333 238.48502343750005 52.182291666666664 238.48502343750005C 70.44609374999999 238.48502343750005 86.10078125 99.36875976562501 104.36458333333333 99.36875976562501C 122.62838541666666 99.36875976562501 138.28307291666667 178.86376757812502 156.546875 178.86376757812502C 174.81067708333333 178.86376757812502 190.46536458333333 119.24251171875002 208.72916666666666 119.24251171875002C 226.99296875 119.24251171875002 242.64765624999998 198.73751953125003 260.9114583333333 198.73751953125003C 279.1752604166667 198.73751953125003 294.82994791666664 59.621255859375026 313.09375 59.621255859375026C 331.3575520833333 59.621255859375026 347.0122395833333 208.6743955078125 365.27604166666663 208.6743955078125C 383.53984375 208.6743955078125 399.19453124999995 39.74750390625002 417.4583333333333 39.74750390625002C 435.7221354166667 39.74750390625002 451.37682291666664 69.55813183593753 469.640625 69.55813183593753"
                                                pathFrom="M -1 317.98003125L -1 317.98003125L 52.182291666666664 317.98003125L 104.36458333333333 317.98003125L 156.546875 317.98003125L 208.72916666666666 317.98003125L 260.9114583333333 317.98003125L 313.09375 317.98003125L 365.27604166666663 317.98003125L 417.4583333333333 317.98003125L 469.640625 317.98003125">
                                            </path>
                                            <g id="SvgjsG1417" class="apexcharts-series-markers-wrap"
                                                data:realIndex="0">
                                                <g id="SvgjsG1419" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask9mmj7kl)">
                                                    <circle id="SvgjsCircle1420" r="5" cx="0" cy="317.98003125"
                                                        class="apexcharts-marker no-pointer-events wleaojkw3"
                                                        stroke="#0f5ef7" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" rel="0" j="0" index="0"
                                                        default-marker-size="5"></circle>
                                                    <circle id="SvgjsCircle1421" r="5" cx="52.182291666666664"
                                                        cy="238.48502343750005"
                                                        class="apexcharts-marker no-pointer-events w7oi1jg8ug"
                                                        stroke="#0f5ef7" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" rel="1" j="1" index="0"
                                                        default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1422" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask9mmj7kl)">
                                                    <circle id="SvgjsCircle1423" r="5" cx="104.36458333333333"
                                                        cy="99.36875976562501"
                                                        class="apexcharts-marker no-pointer-events wwu0vv826"
                                                        stroke="#0f5ef7" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" rel="2" j="2" index="0"
                                                        default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1424" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask9mmj7kl)">
                                                    <circle id="SvgjsCircle1425" r="5" cx="156.546875"
                                                        cy="178.86376757812502"
                                                        class="apexcharts-marker no-pointer-events wr5uzbeweh"
                                                        stroke="#0f5ef7" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" rel="3" j="3" index="0"
                                                        default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1426" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask9mmj7kl)">
                                                    <circle id="SvgjsCircle1427" r="5" cx="208.72916666666666"
                                                        cy="119.24251171875002"
                                                        class="apexcharts-marker no-pointer-events wl1fsphv6"
                                                        stroke="#0f5ef7" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" rel="4" j="4" index="0"
                                                        default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1428" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask9mmj7kl)">
                                                    <circle id="SvgjsCircle1429" r="5" cx="260.9114583333333"
                                                        cy="198.73751953125003"
                                                        class="apexcharts-marker no-pointer-events wznatmhl9h"
                                                        stroke="#0f5ef7" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" rel="5" j="5" index="0"
                                                        default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1430" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask9mmj7kl)">
                                                    <circle id="SvgjsCircle1431" r="5" cx="313.09375"
                                                        cy="59.621255859375026"
                                                        class="apexcharts-marker no-pointer-events wfwwqospl"
                                                        stroke="#0f5ef7" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" rel="6" j="6" index="0"
                                                        default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1432" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask9mmj7kl)">
                                                    <circle id="SvgjsCircle1433" r="5" cx="365.27604166666663"
                                                        cy="208.6743955078125"
                                                        class="apexcharts-marker no-pointer-events wbc78nfei"
                                                        stroke="#0f5ef7" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" rel="7" j="7" index="0"
                                                        default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1434" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask9mmj7kl)">
                                                    <circle id="SvgjsCircle1435" r="5" cx="417.4583333333333"
                                                        cy="39.74750390625002"
                                                        class="apexcharts-marker no-pointer-events wfby6nq89"
                                                        stroke="#0f5ef7" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" rel="8" j="8" index="0"
                                                        default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1436" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMask9mmj7kl)">
                                                    <circle id="SvgjsCircle1437" r="5" cx="469.640625"
                                                        cy="69.55813183593753"
                                                        class="apexcharts-marker no-pointer-events w2r93bgphk"
                                                        stroke="#0f5ef7" fill="#ffffff" fill-opacity="1"
                                                        stroke-width="3" stroke-opacity="0.9" rel="9" j="9" index="0"
                                                        default-marker-size="5"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1418" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine1508" x1="0" y1="0" x2="469.640625" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1509" x1="0" y1="0" x2="469.640625" y2="0" stroke-dasharray="0"
                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1510" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1511" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1512" class="apexcharts-point-annotations"></g>
                                </g>
                                <rect id="SvgjsRect1410" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1"
                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG1472" class="apexcharts-yaxis" rel="0" transform="translate(23.359375, 0)">
                                    <g id="SvgjsG1473" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1474"
                                            font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end"
                                            dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1475">160K</tspan>
                                        </text><text id="SvgjsText1476" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="110.89500781250001" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#bac0c7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1477">120K</tspan>
                                        </text><text id="SvgjsText1478" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="190.39001562500002" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#bac0c7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1479">80K</tspan>
                                        </text><text id="SvgjsText1480" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="269.88502343749997" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#bac0c7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1481">40K</tspan>
                                        </text><text id="SvgjsText1482" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="349.38003125" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#bac0c7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1483">0K</tspan>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1407" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(15, 94, 247);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-label"></span><span
                                                class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                <div class="apexcharts-xaxistooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                            <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                <div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                    </svg></div>
                                <div class="apexcharts-menu">
                                    <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                    <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                    <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 575px; height: 557px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-12">
            <div class="box bg-info bg-img" style="background-image: url(../images/gallery/bg-1.png)">
                <div class="box-body text-center">
                    <img src="../images/trophy.png" class="mt-50" alt="">
                    <div class="max-w-500 mx-auto">
                        <h2 class="text-white mb-20 font-weight-500">Best Employee Johen,</h2>
                        <p class="text-white-50 mb-10 font-size-20">You've got 50.5% more sales today. You've reached
                            8th milestone, checkout author section</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="box overflow-hidden">
                        <div class="box-body pb-0">
                            <div>
                                <h2 class="text-white mb-0 font-weight-500">18.8k</h2>
                                <p class="text-mute mb-0 font-size-20">Total users</p>
                            </div>
                        </div>
                        <div class="box-body p-0" style="position: relative;">
                            <div id="revenue1" style="min-height: 150px;">
                                <div id="apexchartso2t8qffh"
                                    class="apexcharts-canvas apexchartso2t8qffh apexcharts-theme-light"
                                    style="width: 272px; height: 150px;"><svg id="SvgjsSvg1514" width="272" height="150"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1516" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 30)">
                                            <defs id="SvgjsDefs1515">
                                                <clipPath id="gridRectMasko2t8qffh">
                                                    <rect id="SvgjsRect1521" width="280" height="129" x="-4" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMasko2t8qffh">
                                                    <rect id="SvgjsRect1522" width="276" height="129" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1528" x1="0" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop1529" stop-opacity="0.65"
                                                        stop-color="rgba(122,21,247,0.65)" offset="0"></stop>
                                                    <stop id="SvgjsStop1530" stop-opacity="0.5"
                                                        stop-color="rgba(189,138,251,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1531" stop-opacity="0.5"
                                                        stop-color="rgba(189,138,251,0.5)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1520" x1="0" y1="0" x2="0" y2="125" stroke="#b6b6b6"
                                                stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="125" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                stroke-width="1"></line>
                                            <g id="SvgjsG1534" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1535" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG1538" class="apexcharts-grid">
                                                <g id="SvgjsG1539" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine1541" x1="0" y1="0" x2="272" y2="0"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1542" x1="0" y1="25" x2="272" y2="25"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1543" x1="0" y1="50" x2="272" y2="50"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1544" x1="0" y1="75" x2="272" y2="75"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1545" x1="0" y1="100" x2="272" y2="100"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1546" x1="0" y1="125" x2="272" y2="125"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1540" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1548" x1="0" y1="125" x2="272" y2="125"
                                                    stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1547" x1="0" y1="1" x2="0" y2="125"
                                                    stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1524" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1525" class="apexcharts-series" seriesName="Revenue"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1532"
                                                        d="M 0 125L 0 108.33333333333331H 54.4V 77.77777777777777H 108.8V 66.66666666666666H 163.2V 22.2222222222222H 217.6V 52.77777777777777H 272V 80.55555555555554L 272 125M 272 80.55555555555554z"
                                                        fill="url(#SvgjsLinearGradient1528)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMasko2t8qffh)"
                                                        pathTo="M 0 125L 0 108.33333333333331H 54.4V 77.77777777777777H 108.8V 66.66666666666666H 163.2V 22.2222222222222H 217.6V 52.77777777777777H 272V 80.55555555555554L 272 125M 272 80.55555555555554z"
                                                        pathFrom="M -1 275L -1 275L 54.4 275L 108.8 275L 163.2 275L 217.6 275L 272 275">
                                                    </path>
                                                    <path id="SvgjsPath1533"
                                                        d="M 0 108.33333333333331H 54.4V 77.77777777777777H 108.8V 66.66666666666666H 163.2V 22.2222222222222H 217.6V 52.77777777777777H 272V 80.55555555555554"
                                                        fill="none" fill-opacity="1" stroke="#7a15f7" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="4" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMasko2t8qffh)"
                                                        pathTo="M 0 108.33333333333331H 54.4V 77.77777777777777H 108.8V 66.66666666666666H 163.2V 22.2222222222222H 217.6V 52.77777777777777H 272V 80.55555555555554"
                                                        pathFrom="M -1 275L -1 275L 54.4 275L 108.8 275L 163.2 275L 217.6 275L 272 275">
                                                    </path>
                                                    <g id="SvgjsG1526" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1554" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker wamf2y1dcf no-pointer-events"
                                                                stroke="#ffffff" fill="#7a15f7" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1527" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1549" x1="0" y1="0" x2="272" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1550" x1="0" y1="0" x2="272" y2="0" stroke-dasharray="0"
                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1551" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1552" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1553" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect1519" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe"></rect>
                                        <g id="SvgjsG1536" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-8, 0)">
                                            <g id="SvgjsG1537" class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g id="SvgjsG1517" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(122, 21, 247);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 273px; height: 151px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="box overflow-hidden">
                        <div class="box-body pb-0">
                            <div>
                                <h2 class="text-white mb-0 font-weight-500">35.8k</h2>
                                <p class="text-mute mb-0 font-size-20">Average reach per post</p>
                            </div>
                        </div>
                        <div class="box-body p-0" style="position: relative;">
                            <div id="revenue2" style="min-height: 150px;">
                                <div id="apexchartswzibrqwh"
                                    class="apexcharts-canvas apexchartswzibrqwh apexcharts-theme-light"
                                    style="width: 272px; height: 150px;"><svg id="SvgjsSvg1556" width="272" height="150"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                        style="background: transparent;">
                                        <g id="SvgjsG1558" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 30)">
                                            <defs id="SvgjsDefs1557">
                                                <clipPath id="gridRectMaskwzibrqwh">
                                                    <rect id="SvgjsRect1563" width="280" height="129" x="-4" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="gridRectMarkerMaskwzibrqwh">
                                                    <rect id="SvgjsRect1564" width="276" height="129" x="-2" y="-2"
                                                        rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1570" x1="0" y1="0" x2="0"
                                                    y2="1">
                                                    <stop id="SvgjsStop1571" stop-opacity="0.65"
                                                        stop-color="rgba(255,184,0,0.65)" offset="0"></stop>
                                                    <stop id="SvgjsStop1572" stop-opacity="0.5"
                                                        stop-color="rgba(255,220,128,0.5)" offset="1"></stop>
                                                    <stop id="SvgjsStop1573" stop-opacity="0.5"
                                                        stop-color="rgba(255,220,128,0.5)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1562" x1="0" y1="0" x2="0" y2="125" stroke="#b6b6b6"
                                                stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0"
                                                width="1" height="125" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                stroke-width="1"></line>
                                            <g id="SvgjsG1576" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1577" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"></g>
                                            </g>
                                            <g id="SvgjsG1580" class="apexcharts-grid">
                                                <g id="SvgjsG1581" class="apexcharts-gridlines-horizontal"
                                                    style="display: none;">
                                                    <line id="SvgjsLine1583" x1="0" y1="0" x2="272" y2="0"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1584" x1="0" y1="25" x2="272" y2="25"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1585" x1="0" y1="50" x2="272" y2="50"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1586" x1="0" y1="75" x2="272" y2="75"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1587" x1="0" y1="100" x2="272" y2="100"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1588" x1="0" y1="125" x2="272" y2="125"
                                                        stroke="#e0e0e0" stroke-dasharray="0"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1582" class="apexcharts-gridlines-vertical"
                                                    style="display: none;"></g>
                                                <line id="SvgjsLine1590" x1="0" y1="125" x2="272" y2="125"
                                                    stroke="transparent" stroke-dasharray="0"></line>
                                                <line id="SvgjsLine1589" x1="0" y1="1" x2="0" y2="125"
                                                    stroke="transparent" stroke-dasharray="0"></line>
                                            </g>
                                            <g id="SvgjsG1566" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1567" class="apexcharts-series" seriesName="Revenue"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1574"
                                                        d="M 0 125L 0 22.2222222222222H 54.4V 52.77777777777777H 108.8V 80.55555555555554H 163.2V 108.33333333333331H 217.6V 77.77777777777777H 272V 66.66666666666666L 272 125M 272 66.66666666666666z"
                                                        fill="url(#SvgjsLinearGradient1570)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskwzibrqwh)"
                                                        pathTo="M 0 125L 0 22.2222222222222H 54.4V 52.77777777777777H 108.8V 80.55555555555554H 163.2V 108.33333333333331H 217.6V 77.77777777777777H 272V 66.66666666666666L 272 125M 272 66.66666666666666z"
                                                        pathFrom="M -1 275L -1 275L 54.4 275L 108.8 275L 163.2 275L 217.6 275L 272 275">
                                                    </path>
                                                    <path id="SvgjsPath1575"
                                                        d="M 0 22.2222222222222H 54.4V 52.77777777777777H 108.8V 80.55555555555554H 163.2V 108.33333333333331H 217.6V 77.77777777777777H 272V 66.66666666666666"
                                                        fill="none" fill-opacity="1" stroke="#ffb800" stroke-opacity="1"
                                                        stroke-linecap="butt" stroke-width="4" stroke-dasharray="0"
                                                        class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskwzibrqwh)"
                                                        pathTo="M 0 22.2222222222222H 54.4V 52.77777777777777H 108.8V 80.55555555555554H 163.2V 108.33333333333331H 217.6V 77.77777777777777H 272V 66.66666666666666"
                                                        pathFrom="M -1 275L -1 275L 54.4 275L 108.8 275L 163.2 275L 217.6 275L 272 275">
                                                    </path>
                                                    <g id="SvgjsG1568" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g class="apexcharts-series-markers">
                                                            <circle id="SvgjsCircle1596" r="0" cx="0" cy="0"
                                                                class="apexcharts-marker wxvc6auna no-pointer-events"
                                                                stroke="#ffffff" fill="#ffb800" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9"
                                                                default-marker-size="0"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1569" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1591" x1="0" y1="0" x2="272" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1592" x1="0" y1="0" x2="272" y2="0" stroke-dasharray="0"
                                                stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1593" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1594" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1595" class="apexcharts-point-annotations"></g>
                                        </g>
                                        <rect id="SvgjsRect1561" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                            fill="#fefefe"></rect>
                                        <g id="SvgjsG1578" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-8, 0)">
                                            <g id="SvgjsG1579" class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g id="SvgjsG1559" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(255, 184, 0);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-label"></span><span
                                                        class="apexcharts-tooltip-text-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 273px; height: 151px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxxl-5 col-xl-6 col-12">
            <div class="box overflow-hidden">
                <div class="box-body p-0">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-12">
                            <div class="box no-shadow mb-0 rounded-0">
                                <div class="box-header no-border">
                                    <h4 class="box-title mb-0">
                                        Last Posts
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover">
                                        <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                                <h5>Meet Craftwork. Thoroghly Handpicked UI Freebies</h5>
                                            </div>
                                        </a>
                                        <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                                <h5>Cook Design Right!</h5>
                                            </div>
                                        </a>
                                        <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                                <h5>5 Reasons to Start Own Bussines</h5>
                                            </div>
                                        </a>
                                        <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                                <h5>How to Make Interface</h5>
                                            </div>
                                        </a>
                                        <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                                <h5>Show Me Your Design</h5>
                                            </div>
                                        </a>
                                        <a class="media media-single hover-white" href="#">
                                            <div class="media-body">
                                                <h5>She gave my mother such a turn, that I have always bee...</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="box no-shadow mb-0 bg-img rounded-0" data-overlay="5"
                                style="background-image: url(../images/gallery/landscape7.jpg)">
                                <div class="box-header no-border">
                                    <h4 class="box-title mb-0">
                                        <span class="avatar avatar-lg bg-success">DK</span>
                                    </h4>
                                    <ul class="box-controls">
                                        <li><a href="javascript:void(0)"><i class="ti-reload text-white"></i></a></li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="text-right mt-100 pt-20">
                                        <h3 class="text-white"><small class="mr-10"><i
                                                    class="fa fa-commenting"></i></small> 3</h3>
                                        <h2 class="text-white"><small class="mr-10"><i class="fa fa-heart"></i></small>
                                            23</h2>
                                        <h1 class="text-white"><small class="mr-10"><i class="fa fa-eye"></i></small>
                                            189</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxxl-7 col-xl-6 col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Recent Stats</h4>
                </div>
                <div class="box-body" style="position: relative;">
                    <div id="recent_trend" style="min-height: 290px;">
                        <div id="apexcharts2964uawj" class="apexcharts-canvas apexcharts2964uawj apexcharts-theme-light"
                            style="width: 533px; height: 290px;"><svg id="SvgjsSvg1597" width="533" height="290"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1599" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(45.640625, 30)">
                                    <defs id="SvgjsDefs1598">
                                        <linearGradient id="SvgjsLinearGradient1603" x1="0" y1="0" x2="0" y2="1">
                                            <stop id="SvgjsStop1604" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1605" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1606" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMask2964uawj">
                                            <rect id="SvgjsRect1608" width="483.359375" height="224.98003125000002"
                                                x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMask2964uawj">
                                            <rect id="SvgjsRect1609" width="481.359375" height="226.98003125000002"
                                                x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1607" width="10.229129464285714" height="222.98003125000002"
                                        x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                        fill="url(#SvgjsLinearGradient1603)" class="apexcharts-xcrosshairs"
                                        y2="222.98003125000002" filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1630" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1631" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText1633"
                                                font-family="Helvetica, Arial, sans-serif" x="34.097098214285715"
                                                y="251.98003125000002" text-anchor="middle" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#bac0c7"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1634">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText1636" font-family="Helvetica, Arial, sans-serif"
                                                x="102.29129464285714" y="251.98003125000002" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1637">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText1639" font-family="Helvetica, Arial, sans-serif"
                                                x="170.48549107142856" y="251.98003125000002" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1640">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1642" font-family="Helvetica, Arial, sans-serif"
                                                x="238.6796875" y="251.98003125000002" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1643">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1645" font-family="Helvetica, Arial, sans-serif"
                                                x="306.87388392857144" y="251.98003125000002" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1646">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1648" font-family="Helvetica, Arial, sans-serif"
                                                x="375.0680803571429" y="251.98003125000002" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1649">Jul</tspan>
                                                <title>Jul</title>
                                            </text><text id="SvgjsText1651" font-family="Helvetica, Arial, sans-serif"
                                                x="443.26227678571433" y="251.98003125000002" text-anchor="middle"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#bac0c7" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1652">Aug</tspan>
                                                <title>Aug</title>
                                            </text></g>
                                        <line id="SvgjsLine1653" x1="0" y1="223.98003125000002" x2="477.359375"
                                            y2="223.98003125000002" stroke="#e0e0e0" stroke-dasharray="0"
                                            stroke-width="1"></line>
                                    </g>
                                    <g id="SvgjsG1666" class="apexcharts-grid">
                                        <g id="SvgjsG1667" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1677" x1="0" y1="0" x2="477.359375" y2="0"
                                                stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1678" x1="0" y1="55.745007812500006" x2="477.359375"
                                                y2="55.745007812500006" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1679" x1="0" y1="111.49001562500001" x2="477.359375"
                                                y2="111.49001562500001" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1680" x1="0" y1="167.23502343750002" x2="477.359375"
                                                y2="167.23502343750002" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1681" x1="0" y1="222.98003125000002" x2="477.359375"
                                                y2="222.98003125000002" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1668" class="apexcharts-gridlines-vertical"></g>
                                        <line id="SvgjsLine1669" x1="0" y1="223.98003125000002" x2="0"
                                            y2="229.98003125000002" stroke="#e0e0e0" stroke-dasharray="0"
                                            class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1670" x1="68.19419642857143" y1="223.98003125000002"
                                            x2="68.19419642857143" y2="229.98003125000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1671" x1="136.38839285714286" y1="223.98003125000002"
                                            x2="136.38839285714286" y2="229.98003125000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1672" x1="204.58258928571428" y1="223.98003125000002"
                                            x2="204.58258928571428" y2="229.98003125000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1673" x1="272.7767857142857" y1="223.98003125000002"
                                            x2="272.7767857142857" y2="229.98003125000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1674" x1="340.97098214285717" y1="223.98003125000002"
                                            x2="340.97098214285717" y2="229.98003125000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1675" x1="409.1651785714286" y1="223.98003125000002"
                                            x2="409.1651785714286" y2="229.98003125000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1676" x1="477.35937500000006" y1="223.98003125000002"
                                            x2="477.35937500000006" y2="229.98003125000002" stroke="#e0e0e0"
                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                        <line id="SvgjsLine1683" x1="0" y1="222.98003125000002" x2="477.359375"
                                            y2="222.98003125000002" stroke="transparent" stroke-dasharray="0"></line>
                                        <line id="SvgjsLine1682" x1="0" y1="1" x2="0" y2="222.98003125000002"
                                            stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG1611" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1612" class="apexcharts-series" rel="1" seriesName="NetxProfit"
                                            data:realIndex="0">
                                            <path id="SvgjsPath1614"
                                                d="M 23.867968750000003 222.98003125000002L 23.867968750000003 142.77796882440478Q 27.98253348214286 139.6634040922619 32.097098214285715 142.77796882440478L 32.097098214285715 142.77796882440478L 32.097098214285715 222.98003125000002L 32.097098214285715 222.98003125000002z"
                                                fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 23.867968750000003 222.98003125000002L 23.867968750000003 142.77796882440478Q 27.98253348214286 139.6634040922619 32.097098214285715 142.77796882440478L 32.097098214285715 142.77796882440478L 32.097098214285715 222.98003125000002L 32.097098214285715 222.98003125000002z"
                                                pathFrom="M 23.867968750000003 222.98003125000002L 23.867968750000003 222.98003125000002L 32.097098214285715 222.98003125000002L 32.097098214285715 222.98003125000002L 32.097098214285715 222.98003125000002L 23.867968750000003 222.98003125000002"
                                                cy="141.22068645833335" cx="91.06216517857143" j="0" val="44"
                                                barHeight="81.75934479166668" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1615"
                                                d="M 92.06216517857143 222.98003125000002L 92.06216517857143 122.33813262648812Q 96.17672991071429 119.22356789434527 100.29129464285715 122.33813262648812L 100.29129464285715 122.33813262648812L 100.29129464285715 222.98003125000002L 100.29129464285715 222.98003125000002z"
                                                fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 92.06216517857143 222.98003125000002L 92.06216517857143 122.33813262648812Q 96.17672991071429 119.22356789434527 100.29129464285715 122.33813262648812L 100.29129464285715 122.33813262648812L 100.29129464285715 222.98003125000002L 100.29129464285715 222.98003125000002z"
                                                pathFrom="M 92.06216517857143 222.98003125000002L 92.06216517857143 222.98003125000002L 100.29129464285715 222.98003125000002L 100.29129464285715 222.98003125000002L 100.29129464285715 222.98003125000002L 92.06216517857143 222.98003125000002"
                                                cy="120.78085026041668" cx="159.25636160714288" j="1" val="55"
                                                barHeight="102.19918098958334" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1616"
                                                d="M 160.25636160714288 222.98003125000002L 160.25636160714288 118.62179877232144Q 164.37092633928575 115.50723404017859 168.48549107142858 118.62179877232144L 168.48549107142858 118.62179877232144L 168.48549107142858 222.98003125000002L 168.48549107142858 222.98003125000002z"
                                                fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 160.25636160714288 222.98003125000002L 160.25636160714288 118.62179877232144Q 164.37092633928575 115.50723404017859 168.48549107142858 118.62179877232144L 168.48549107142858 118.62179877232144L 168.48549107142858 222.98003125000002L 168.48549107142858 222.98003125000002z"
                                                pathFrom="M 160.25636160714288 222.98003125000002L 160.25636160714288 222.98003125000002L 168.48549107142858 222.98003125000002L 168.48549107142858 222.98003125000002L 168.48549107142858 222.98003125000002L 160.25636160714288 222.98003125000002"
                                                cy="117.06451640625001" cx="227.45055803571432" j="2" val="57"
                                                barHeight="105.91551484375002" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1617"
                                                d="M 228.45055803571432 222.98003125000002L 228.45055803571432 120.47996569940477Q 232.5651227678572 117.36540096726192 236.67968750000003 120.47996569940477L 236.67968750000003 120.47996569940477L 236.67968750000003 222.98003125000002L 236.67968750000003 222.98003125000002z"
                                                fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 228.45055803571432 222.98003125000002L 228.45055803571432 120.47996569940477Q 232.5651227678572 117.36540096726192 236.67968750000003 120.47996569940477L 236.67968750000003 120.47996569940477L 236.67968750000003 222.98003125000002L 236.67968750000003 222.98003125000002z"
                                                pathFrom="M 228.45055803571432 222.98003125000002L 228.45055803571432 222.98003125000002L 236.67968750000003 222.98003125000002L 236.67968750000003 222.98003125000002L 236.67968750000003 222.98003125000002L 228.45055803571432 222.98003125000002"
                                                cy="118.92268333333334" cx="295.64475446428577" j="3" val="56"
                                                barHeight="104.05734791666669" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1618"
                                                d="M 296.64475446428577 222.98003125000002L 296.64475446428577 111.18913106398811Q 300.75931919642863 108.07456633184526 304.8738839285715 111.18913106398811L 304.8738839285715 111.18913106398811L 304.8738839285715 222.98003125000002L 304.8738839285715 222.98003125000002z"
                                                fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 296.64475446428577 222.98003125000002L 296.64475446428577 111.18913106398811Q 300.75931919642863 108.07456633184526 304.8738839285715 111.18913106398811L 304.8738839285715 111.18913106398811L 304.8738839285715 222.98003125000002L 304.8738839285715 222.98003125000002z"
                                                pathFrom="M 296.64475446428577 222.98003125000002L 296.64475446428577 222.98003125000002L 304.8738839285715 222.98003125000002L 304.8738839285715 222.98003125000002L 304.8738839285715 222.98003125000002L 296.64475446428577 222.98003125000002"
                                                cy="109.63184869791668" cx="363.8389508928572" j="4" val="61"
                                                barHeight="113.34818255208334" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1619"
                                                d="M 364.8389508928572 222.98003125000002L 364.8389508928572 116.76363184523811Q 368.9535156250001 113.64906711309526 373.06808035714295 116.76363184523811L 373.06808035714295 116.76363184523811L 373.06808035714295 222.98003125000002L 373.06808035714295 222.98003125000002z"
                                                fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 364.8389508928572 222.98003125000002L 364.8389508928572 116.76363184523811Q 368.9535156250001 113.64906711309526 373.06808035714295 116.76363184523811L 373.06808035714295 116.76363184523811L 373.06808035714295 222.98003125000002L 373.06808035714295 222.98003125000002z"
                                                pathFrom="M 364.8389508928572 222.98003125000002L 364.8389508928572 222.98003125000002L 373.06808035714295 222.98003125000002L 373.06808035714295 222.98003125000002L 373.06808035714295 222.98003125000002L 364.8389508928572 222.98003125000002"
                                                cy="115.20634947916668" cx="432.03314732142866" j="5" val="58"
                                                barHeight="107.77368177083335" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1620"
                                                d="M 433.03314732142866 222.98003125000002L 433.03314732142866 107.47279720982145Q 437.1477120535715 104.3582324776786 441.2622767857144 107.47279720982145L 441.2622767857144 107.47279720982145L 441.2622767857144 222.98003125000002L 441.2622767857144 222.98003125000002z"
                                                fill="rgba(239,55,55,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 433.03314732142866 222.98003125000002L 433.03314732142866 107.47279720982145Q 437.1477120535715 104.3582324776786 441.2622767857144 107.47279720982145L 441.2622767857144 107.47279720982145L 441.2622767857144 222.98003125000002L 441.2622767857144 222.98003125000002z"
                                                pathFrom="M 433.03314732142866 222.98003125000002L 433.03314732142866 222.98003125000002L 441.2622767857144 222.98003125000002L 441.2622767857144 222.98003125000002L 441.2622767857144 222.98003125000002L 433.03314732142866 222.98003125000002"
                                                cy="105.91551484375002" cx="500.2273437500001" j="6" val="63"
                                                barHeight="117.06451640625001" barWidth="10.229129464285714"></path>
                                        </g>
                                        <g id="SvgjsG1621" class="apexcharts-series" rel="2" seriesName="Revenue"
                                            data:realIndex="1">
                                            <path id="SvgjsPath1623"
                                                d="M 34.097098214285715 222.98003125000002L 34.097098214285715 83.31662715773811Q 38.211662946428575 80.20206242559526 42.32622767857143 83.31662715773811L 42.32622767857143 83.31662715773811L 42.32622767857143 222.98003125000002L 42.32622767857143 222.98003125000002z"
                                                fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 34.097098214285715 222.98003125000002L 34.097098214285715 83.31662715773811Q 38.211662946428575 80.20206242559526 42.32622767857143 83.31662715773811L 42.32622767857143 83.31662715773811L 42.32622767857143 222.98003125000002L 42.32622767857143 222.98003125000002z"
                                                pathFrom="M 34.097098214285715 222.98003125000002L 34.097098214285715 222.98003125000002L 42.32622767857143 222.98003125000002L 42.32622767857143 222.98003125000002L 42.32622767857143 222.98003125000002L 34.097098214285715 222.98003125000002"
                                                cy="81.75934479166668" cx="101.29129464285715" j="0" val="76"
                                                barHeight="141.22068645833335" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1624"
                                                d="M 102.29129464285715 222.98003125000002L 102.29129464285715 66.59312481398811Q 106.405859375 63.47856008184525 110.52042410714287 66.59312481398811L 110.52042410714287 66.59312481398811L 110.52042410714287 222.98003125000002L 110.52042410714287 222.98003125000002z"
                                                fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 102.29129464285715 222.98003125000002L 102.29129464285715 66.59312481398811Q 106.405859375 63.47856008184525 110.52042410714287 66.59312481398811L 110.52042410714287 66.59312481398811L 110.52042410714287 222.98003125000002L 110.52042410714287 222.98003125000002z"
                                                pathFrom="M 102.29129464285715 222.98003125000002L 102.29129464285715 222.98003125000002L 110.52042410714287 222.98003125000002L 110.52042410714287 222.98003125000002L 110.52042410714287 222.98003125000002L 102.29129464285715 222.98003125000002"
                                                cy="65.03584244791668" cx="169.48549107142858" j="1" val="85"
                                                barHeight="157.94418880208335" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1625"
                                                d="M 170.48549107142858 222.98003125000002L 170.48549107142858 36.86245398065477Q 174.60005580357145 33.74788924851191 178.7146205357143 36.86245398065477L 178.7146205357143 36.86245398065477L 178.7146205357143 222.98003125000002L 178.7146205357143 222.98003125000002z"
                                                fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 170.48549107142858 222.98003125000002L 170.48549107142858 36.86245398065477Q 174.60005580357145 33.74788924851191 178.7146205357143 36.86245398065477L 178.7146205357143 36.86245398065477L 178.7146205357143 222.98003125000002L 178.7146205357143 222.98003125000002z"
                                                pathFrom="M 170.48549107142858 222.98003125000002L 170.48549107142858 222.98003125000002L 178.7146205357143 222.98003125000002L 178.7146205357143 222.98003125000002L 178.7146205357143 222.98003125000002L 170.48549107142858 222.98003125000002"
                                                cy="35.305171614583344" cx="237.67968750000003" j="2" val="101"
                                                barHeight="187.67485963541668" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1626"
                                                d="M 238.67968750000003 222.98003125000002L 238.67968750000003 42.43695476190475Q 242.7942522321429 39.32239002976189 246.90881696428573 42.43695476190475L 246.90881696428573 42.43695476190475L 246.90881696428573 222.98003125000002L 246.90881696428573 222.98003125000002z"
                                                fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 238.67968750000003 222.98003125000002L 238.67968750000003 42.43695476190475Q 242.7942522321429 39.32239002976189 246.90881696428573 42.43695476190475L 246.90881696428573 42.43695476190475L 246.90881696428573 222.98003125000002L 246.90881696428573 222.98003125000002z"
                                                pathFrom="M 238.67968750000003 222.98003125000002L 238.67968750000003 222.98003125000002L 246.90881696428573 222.98003125000002L 246.90881696428573 222.98003125000002L 246.90881696428573 222.98003125000002L 238.67968750000003 222.98003125000002"
                                                cy="40.879672395833325" cx="305.8738839285715" j="3" val="98"
                                                barHeight="182.1003588541667" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1627"
                                                d="M 306.8738839285715 222.98003125000002L 306.8738839285715 62.87679095982144Q 310.98844866071437 59.76222622767858 315.10301339285724 62.87679095982144L 315.10301339285724 62.87679095982144L 315.10301339285724 222.98003125000002L 315.10301339285724 222.98003125000002z"
                                                fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 306.8738839285715 222.98003125000002L 306.8738839285715 62.87679095982144Q 310.98844866071437 59.76222622767858 315.10301339285724 62.87679095982144L 315.10301339285724 62.87679095982144L 315.10301339285724 222.98003125000002L 315.10301339285724 222.98003125000002z"
                                                pathFrom="M 306.8738839285715 222.98003125000002L 306.8738839285715 222.98003125000002L 315.10301339285724 222.98003125000002L 315.10301339285724 222.98003125000002L 315.10301339285724 222.98003125000002L 306.8738839285715 222.98003125000002"
                                                cy="61.319508593750015" cx="374.06808035714295" j="4" val="87"
                                                barHeight="161.66052265625" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1628"
                                                d="M 375.06808035714295 222.98003125000002L 375.06808035714295 29.42978627232142Q 379.1826450892858 26.315221540178563 383.2972098214287 29.42978627232142L 383.2972098214287 29.42978627232142L 383.2972098214287 222.98003125000002L 383.2972098214287 222.98003125000002z"
                                                fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 375.06808035714295 222.98003125000002L 375.06808035714295 29.42978627232142Q 379.1826450892858 26.315221540178563 383.2972098214287 29.42978627232142L 383.2972098214287 29.42978627232142L 383.2972098214287 222.98003125000002L 383.2972098214287 222.98003125000002z"
                                                pathFrom="M 375.06808035714295 222.98003125000002L 375.06808035714295 222.98003125000002L 383.2972098214287 222.98003125000002L 383.2972098214287 222.98003125000002L 383.2972098214287 222.98003125000002L 375.06808035714295 222.98003125000002"
                                                cy="27.87250390624999" cx="442.2622767857144" j="5" val="105"
                                                barHeight="195.10752734375004" barWidth="10.229129464285714"></path>
                                            <path id="SvgjsPath1629"
                                                d="M 443.2622767857144 222.98003125000002L 443.2622767857144 55.44412325148809Q 447.37684151785726 52.32955851934523 451.4914062500001 55.44412325148809L 451.4914062500001 55.44412325148809L 451.4914062500001 222.98003125000002L 451.4914062500001 222.98003125000002z"
                                                fill="rgba(15,94,247,1)" fill-opacity="1" stroke="transparent"
                                                stroke-opacity="1" stroke-linecap="square" stroke-width="2"
                                                stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                clip-path="url(#gridRectMask2964uawj)"
                                                pathTo="M 443.2622767857144 222.98003125000002L 443.2622767857144 55.44412325148809Q 447.37684151785726 52.32955851934523 451.4914062500001 55.44412325148809L 451.4914062500001 55.44412325148809L 451.4914062500001 222.98003125000002L 451.4914062500001 222.98003125000002z"
                                                pathFrom="M 443.2622767857144 222.98003125000002L 443.2622767857144 222.98003125000002L 451.4914062500001 222.98003125000002L 451.4914062500001 222.98003125000002L 451.4914062500001 222.98003125000002L 443.2622767857144 222.98003125000002"
                                                cy="53.88684088541666" cx="510.45647321428584" j="6" val="91"
                                                barHeight="169.09319036458336" barWidth="10.229129464285714"></path>
                                            <g id="SvgjsG1622" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <g id="SvgjsG1613" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine1684" x1="0" y1="0" x2="477.359375" y2="0" stroke="#b6b6b6"
                                        stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1685" x1="0" y1="0" x2="477.359375" y2="0" stroke-dasharray="0"
                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1686" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1687" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1688" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG1654" class="apexcharts-yaxis" rel="0" transform="translate(15.640625, 0)">
                                    <g id="SvgjsG1655" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1656"
                                            font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end"
                                            dominant-baseline="auto" font-size="11px" font-weight="400" fill="#bac0c7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1657">120</tspan>
                                        </text><text id="SvgjsText1658" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="87.14500781250001" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#bac0c7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1659">90</tspan>
                                        </text><text id="SvgjsText1660" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="142.89001562500002" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#bac0c7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1661">60</tspan>
                                        </text><text id="SvgjsText1662" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="198.63502343750002" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#bac0c7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1663">30</tspan>
                                        </text><text id="SvgjsText1664" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="254.38003125000003" text-anchor="end" dominant-baseline="auto"
                                            font-size="11px" font-weight="400" fill="#bac0c7"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1665">0</tspan>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1600" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(239, 55, 55);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-label"></span><span
                                                class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(15, 94, 247);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-label"></span><span
                                                class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 575px; height: 333px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title align-items-start flex-column">
                        New Arrivals
                        <small class="subtitle">More than 400+ new members</small>
                    </h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-border">
                            <thead>
                                <tr class="text-uppercase bg-lightest">
                                    <th style="min-width: 250px"><span class="text-white">products</span></th>
                                    <th style="min-width: 100px"><span class="text-fade">pruce</span></th>
                                    <th style="min-width: 100px"><span class="text-fade">deposit</span></th>
                                    <th style="min-width: 150px"><span class="text-fade">agent</span></th>
                                    <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                    <th style="min-width: 120px"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 mr-20">
                                                <div class="bg-img h-50 w-50"
                                                    style="background-image: url(../images/gallery/creative/img-1.jpg)">
                                                </div>
                                            </div>

                                            <div>
                                                <a href="#"
                                                    class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                    consectetur</a>
                                                <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Paid
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            $45,800k
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Paid
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            $45k
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Sophia
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            Pharetra
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary-light badge-lg">Approved</span>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                class="mdi mdi-bookmark-plus"></span></a>
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                class="mdi mdi-arrow-right"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 mr-20">
                                                <div class="bg-img h-50 w-50"
                                                    style="background-image: url(../images/gallery/creative/img-2.jpg)">
                                                </div>
                                            </div>

                                            <div>
                                                <a href="#"
                                                    class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                    consectetur</a>
                                                <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Paid
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            $45,800k
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Paid
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            $45k
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Sophia
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            Pharetra
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning-light badge-lg">In Progress</span>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                class="mdi mdi-bookmark-plus"></span></a>
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                class="mdi mdi-arrow-right"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 mr-20">
                                                <div class="bg-img h-50 w-50"
                                                    style="background-image: url(../images/gallery/creative/img-3.jpg)">
                                                </div>
                                            </div>

                                            <div>
                                                <a href="#"
                                                    class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                    consectetur</a>
                                                <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Paid
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            $45,800k
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Paid
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            $45k
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Sophia
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            Pharetra
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-success-light badge-lg">Success</span>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                class="mdi mdi-bookmark-plus"></span></a>
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                class="mdi mdi-arrow-right"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 mr-20">
                                                <div class="bg-img h-50 w-50"
                                                    style="background-image: url(../images/gallery/creative/img-4.jpg)">
                                                </div>
                                            </div>

                                            <div>
                                                <a href="#"
                                                    class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                    consectetur</a>
                                                <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Paid
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            $45,800k
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Paid
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            $45k
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Sophia
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            Pharetra
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-danger-light badge-lg">Rejected</span>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                class="mdi mdi-bookmark-plus"></span></a>
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                class="mdi mdi-arrow-right"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 py-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 mr-20">
                                                <div class="bg-img h-50 w-50"
                                                    style="background-image: url(../images/gallery/creative/img-5.jpg)">
                                                </div>
                                            </div>

                                            <div>
                                                <a href="#"
                                                    class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                    consectetur</a>
                                                <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Paid
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            $45,800k
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Paid
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            $45k
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                            Sophia
                                        </span>
                                        <span class="text-white font-weight-600 d-block font-size-16">
                                            Pharetra
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning-light badge-lg">In Progress</span>
                                    </td>
                                    <td class="text-right">
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                class="mdi mdi-bookmark-plus"></span></a>
                                        <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                class="mdi mdi-arrow-right"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection