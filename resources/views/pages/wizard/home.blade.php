

<h3><i class="fa fa-file"></i> {{ $user->organization->name }}</h3><div class="tablo-with-chart">
    <div class="row">
        <div class="col-sm-5 col-xxl-4">
            <div class="tablos">
                <div class="row mb-xl-2 mb-xxl-3">
                    <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                            <div class="value">
                                {{ count($user->organization->members) }}
                            </div>
                            <div class="label">
                                Mitglieder
                            </div>
                            <div class="trending trending-up-basic">
                                <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                            <div class="value">
                                12
                            </div>
                            <div class="label">
                                Closed Today
                            </div>
                            <div class="trending trending-down-basic">
                                <span>12%</span><i class="os-icon os-icon-arrow-down"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                            <div class="value">
                                52
                            </div>
                            <div class="label">
                                Agent Replies
                            </div>
                            <div class="trending trending-up-basic">
                                <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                            <div class="value">
                                7
                            </div>
                            <div class="label">
                                New Replies
                            </div>
                            <div class="trending trending-down-basic">
                                <span>12%</span><i class="os-icon os-icon-arrow-down"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-7 col-xxl-8">
            <!--START - Chart Box-->
            <div class="element-box pl-xxl-5 pr-xxl-5">
                <div class="el-tablo bigger highlight bold-label">
                    <div class="value">
                        12,537
                    </div>
                    <div class="label">
                        Unique Visitors
                    </div>
                </div>
                <div class="el-chart-w">
                    <canvas height="170px" id="lineChart" width="600px"></canvas>
                </div>
            </div>
            <!--END - Chart Box-->
        </div>
    </div>
</div>