<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/main/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 03:21:42 GMT -->
    <?php  include('../Layout_Admin/HeaderLink.php'); ?>
    <body class="skin-default-dark fixed-layout">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Elegant admin</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
           <?php include('../Layout_Admin/Header.php')?>
                                            <!-- ============================================================== -->
                                            <!-- ============================================================== -->
     <?php include("../Layout_Admin/Sidebar.php");?>
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h4 class="text-themecolor">Dashboard 5</h4>
</div>
<div class="col-md-7 align-self-center text-right">
<div class="d-flex justify-content-end align-items-center">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item active">Dashboard 5</li>
</ol>
<button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row">
<!-- Column -->
<div class="col-lg-4 col-md-6">
<div class="card cc-widget">
<div class="card-body">
    <div class="d-flex no-block flex-row">
        <div class="cc-icon align-self-center"><i class="cc BTC" title="BTC"></i></div>
        <div class="m-l-10 align-self-center">
            <h4 class="m-b-0">Bitcoin BTC</h4>
            <h5 class="text-muted m-b-0">0.00000434 BTC</h5>
        </div>
    </div>
    <div class="d-flex no-block flex-row m-t-20 cc-details">
        <div class="p-10 p-l-0 border-right">
        <h6 class="font-light">Growth</h6><b class="growth">$0.07</b></div>
        <div class="p-10 border-right">
            <h6 class="font-light">Monthly</h6><b class="up">+3.45%</b>
        </div>
        <div class="p-10">
            <h6 class="font-light">Daily</h6><b class="up">+1.40%</b>
        </div>
    </div>
</div>
<div id="spark1" class="sparkchart"></div>
</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
<div class="card cc-widget">
<div class="card-body">
    <div class="d-flex no-block flex-row">
        <div class="cc-icon align-self-center"><i class="cc LTC" title="LTC"></i></div>
        <div class="m-l-10 align-self-center">
            <h4 class="m-b-0">Litecoin LTC</h4>
            <h5 class="text-muted m-b-0">0.00000434 LTC</h5>
        </div>
    </div>
    <div class="d-flex no-block flex-row m-t-20 cc-details">
        <div class="p-10 p-l-0 border-right">
        <h6 class="font-light">Growth</h6><b class="growth">$0.7</b></div>
        <div class="p-10 border-right">
            <h6 class="font-light">Monthly</h6><b class="down">-3.45%</b>
        </div>
        <div class="p-10">
            <h6 class="font-light">Daily</h6><b class="up">+1.10%</b>
        </div>
    </div>
</div>
<div id="spark2" class="sparkchart"></div>
</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
<div class="card cc-widget">
<div class="card-body">
    <div class="d-flex no-block flex-row">
        <div class="cc-icon align-self-center"><i class="cc NEO" title="NEO"></i></div>
        <div class="m-l-10 align-self-center">
            <h4 class="m-b-0">Neo NEO</h4>
            <h5 class="text-muted m-b-0">0.00000434 NEO</h5>
        </div>
    </div>
    <div class="d-flex no-block flex-row m-t-20 cc-details">
        <div class="p-10 p-l-0 border-right">
        <h6 class="font-light">Growth</h6><b class="growth">$0.2</b></div>
        <div class="p-10 border-right">
            <h6 class="font-light">Monthly</h6><b class="down">-1.45%</b>
        </div>
        <div class="p-10">
            <h6 class="font-light">Daily</h6><b class="down">-0.40%</b>
        </div>
    </div>
</div>
<div id="spark3" class="sparkchart"></div>
</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
<div class="card cc-widget">
<div class="card-body">
    <div class="d-flex no-block flex-row">
        <div class="cc-icon align-self-center"><i class="cc DASH" title="DASH"></i></div>
        <div class="m-l-10 align-self-center">
            <h4 class="m-b-0">Dash DASH</h4>
            <h5 class="text-muted m-b-0">0.00000434 DASH</h5>
        </div>
    </div>
    <div class="d-flex no-block flex-row m-t-20 cc-details">
        <div class="p-10 p-l-0 border-right">
        <h6 class="font-light">Growth</h6><b class="growth">$1.07</b></div>
        <div class="p-10 border-right">
            <h6 class="font-light">Monthly</h6><b class="up">+3.45%</b>
        </div>
        <div class="p-10">
            <h6 class="font-light">Daily</h6><b class="up">+1.40%</b>
        </div>
    </div>
</div>
<div id="spark4" class="sparkchart"></div>
</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
<div class="card cc-widget">
<div class="card-body">
    <div class="d-flex no-block flex-row">
        <div class="cc-icon align-self-center"><i class="cc ETH" title="ETH"></i></div>
        <div class="m-l-10 align-self-center">
            <h4 class="m-b-0">Ethereum ETH</h4>
            <h5 class="text-muted m-b-0">0.00000434 ETH</h5>
        </div>
    </div>
    <div class="d-flex no-block flex-row m-t-20 cc-details">
        <div class="p-10 p-l-0 border-right">
        <h6 class="font-light">Growth</h6><b class="growth">$0.87</b></div>
        <div class="p-10 border-right">
            <h6 class="font-light">Monthly</h6><b class="up">+1.45%</b>
        </div>
        <div class="p-10">
            <h6 class="font-light">Daily</h6><b class="down">-0.40%</b>
        </div>
    </div>
</div>
<div id="spark5" class="sparkchart"></div>
</div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-lg-4 col-md-6">
<div class="card cc-widget">
<div class="card-body">
    <div class="d-flex no-block flex-row">
        <div class="cc-icon align-self-center"><i class="cc XRP" title="XRP"></i></div>
        <div class="m-l-10 align-self-center">
            <h4 class="m-b-0">Ripple XRP</h4>
            <h5 class="text-muted m-b-0">0.00000434 XRP</h5>
        </div>
    </div>
    <div class="d-flex no-block flex-row m-t-20 cc-details">
        <div class="p-10 p-l-0 border-right">
        <h6 class="font-light">Growth</h6><b class="growth">$1.00</b></div>
        <div class="p-10 border-right">
            <h6 class="font-light">Monthly</h6><b class="up">+0.45%</b>
        </div>
        <div class="p-10">
            <h6 class="font-light">Daily</h6><b class="down">-0.40%</b>
        </div>
    </div>
</div>
<div id="spark6" class="sparkchart"></div>
</div>
</div>
<!-- Column -->
</div>
<div class="row">
<!-- Column -->
<div class="col-lg-7">
<div class="card">
<div class="card-body">
    <h5 class="card-title">Market Report</h5>
</div>
<div class="card-body">
    <div id="morris-area-chart2" style="height: 425px;"></div>
</div>
<div class="card-body bg-light">
    <div class="row text-center">
        <div class="col-4 border-right">
            <div id="sparkline8" class="m-b-10"></div>
            <h6>Bitcoin</h6> <b>$9422</b>
        </div>
        <div class="col-4 border-right">
            <div id="sparkline9" class="m-b-10"></div>
            <h6>Ethereum</h6> <b>$730</b>
        </div>
        <div class="col-4">
            <div id="sparkline10" class="m-b-10"></div>
            <h6>Dash</h6> <b>$522</b>
        </div>
    </div>
</div>
</div>
</div>
<!-- Column -->
<div class="col-lg-5">
<div class="row">
<!-- Column -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cryptocurrency Exchange</h5>
            <h6 class="card-subtitle">exchange currency from here</h6>
        </div>
        <div class="card-body bg-light text-center">
            <form>
                <div class="row no-gutters">
                    <div class="col-8">
                        <input class="form-control form-control-lg" type="text" value="1.02458">
                    </div>
                    <div class="col-4">
                        <select class="custom-select custom-select-lg">
                            <option value="1">BTC</option>
                            <option value="2">ETH</option>
                            <option value="3">DASH</option>
                            <option value="4">LTC</option>
                            <option value="5">NEO</option>
                            <option value="6">XRP</option>
                            <option value="7">EOS</option>
                            <option value="8">NEM</option>
                            <option value="9">ADA</option>
                        </select>
                    </div>
                </div>
                <div class="round align-self-center round-danger m-t-10 m-b-10"><i class="ti-exchange-vertical"></i></div>
                <div class="row no-gutters">
                    <div class="col-8">
                        <input class="form-control form-control-lg" type="text" value="9526.39">
                    </div>
                    <div class="col-4">
                        <select class="custom-select custom-select-lg">
                            <option value="1">USD</option>
                            <option value="2">EUR</option>
                            <option value="3">INR</option>
                            <option value="4">AUD</option>
                            <option value="5">GBP</option>
                            <option value="6">CAD</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body text-center">
            <button type="button" class="btn waves-effect waves-light btn-lg btn-dark">Exchange Now</button>
        </div>
    </div>
</div>
<!-- Column -->
<div class="col-md-6">
    <div class="card bg-info text-white text-center">
        <div class="card-body">
            <h5>Neo</h5>
            <h6>$92.51</h6>
            <div id="sparkline13" class="m-t-10"></div>
        </div>
    </div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-md-6">
    <div class="card bg-success text-white text-center">
        <div class="card-body">
            <h5>Cardano</h5>
            <h6>$0.8127</h6>
            <div id="sparkline14" class="m-t-10"></div>
        </div>
    </div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-md-6">
    <div class="card bg-danger text-white text-center">
        <div class="card-body">
            <h5>Litecoin</h5>
            <h6>$190.58</h6>
            <div id="sparkline11" class="m-t-10"></div>
        </div>
    </div>
</div>
<!-- Column -->
<!-- Column -->
<div class="col-md-6">
    <div class="card bg-dark text-white text-center">
        <div class="card-body">
            <h5>Ripple</h5>
            <h6>$0.8475</h6>
            <div id="sparkline12" class="m-t-10"></div>
        </div>
    </div>
</div>
<!-- Column -->
</div>
</div>
<!-- Column -->
</div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
    <h4 class="card-title">Crypto Market</h4>
    <div class="table-responsive m-t-20">
        <table id="cc-table" class="table table-bordered table-striped" data-page-length='10'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Currency <i class="fa fa-sort"></i></th>
                    <th class="text-right">Price <i class="fa fa-sort"></i></th>
                    <th class="text-right">Market Cap <i class="fa fa-sort-amount-desc"></i></th>
                    <th class="text-right">Volume 1D <i class="fa fa-sort"></i></th>
                    <th class="text-right">Change % (1M) <i class="fa fa-sort"></i></th>
                    <th class="text-right">Change % (1D) <i class="fa fa-sort"></i></th>
                    <th class="text-right">Change % (1W) <i class="fa fa-sort"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc XRP" title="XRP"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Ripple</a></h6>
                        <small class="text-muted">XRP</small>
                    </td>
                    <td class="text-right">
                        <p>$1.67</p>
                    </td>
                    <td class="text-right">
                        <p>$61,191,183,730</p>
                    </td>
                    <td class="text-right">
                        <p>$10,133,400,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -0.18%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 66.26%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -16.48%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc ETH" title="ETH"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);" > Ethereum</a></h6>
                        <small class="text-muted">ETH</small>
                    </td>
                    <td class="text-right">
                        <p>$1,074.39</p>
                    </td>
                    <td class="text-right">
                        <p>$103,792,495,504</p>
                    </td>
                    <td class="text-right">
                        <p>$7,764,310,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.38%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 26.18%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -11.47%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc BTC" title="BTC"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Bitcoin</a></h6>
                        <small class="text-muted">BTC</small>
                    </td>
                    <td class="text-right">
                        <p>$11,723.48</p>
                    </td>
                    <td class="text-right">
                        <p>$179,078,267,295</p>
                    </td>
                    <td class="text-right">
                        <p>$17,959,900,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.89%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 17.66%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -15.25%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc ADA" title="ADA"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Cardano</a></h6>
                        <small class="text-muted">ADA</small>
                    </td>
                    <td class="text-right">
                        <p>$0.70</p>
                    </td>
                    <td class="text-right">
                        <p>$17,633,890,043</p>
                    </td>
                    <td class="text-right">
                        <p>$1,677,430,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.43%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 40.79%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -5.81%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc LTC" title="LTC"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Litecoin</a></h6>
                        <small class="text-muted">LTC</small>
                    </td>
                    <td class="text-right">
                        <p>$198.80</p>
                    </td>
                    <td class="text-right">
                        <p>$10,901,255,520</p>
                    </td>
                    <td class="text-right">
                        <p>$1,235,380,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.59%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 26.98%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -15.44%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc XEM" title="XEM"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> NEM</a></h6>
                        <small class="text-muted">XEM</small>
                    </td>
                    <td class="text-right">
                        <p>$1.09</p>
                    </td>
                    <td class="text-right">
                        <p>$9,990,569,999</p>
                    </td>
                    <td class="text-right">
                        <p>$153,535,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.30%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 43.30%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -19.68%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc NEO" title="NEO"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> NEO</a></h6>
                        <small class="text-muted">NEO</small>
                    </td>
                    <td class="text-right">
                        <p>$149.18</p>
                    </td>
                    <td class="text-right">
                        <p>$9,644,490,000</p>
                    </td>
                    <td class="text-right">
                        <p>$1,310,130,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -4.38%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 36.98%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 31.09%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc DASH" title="DASH"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Dash</a></h6>
                        <small class="text-muted">DASH</small>
                    </td>
                    <td class="text-right">
                        <p>$865.25</p>
                    </td>
                    <td class="text-right">
                        <p>$6,778,308,110</p>
                    </td>
                    <td class="text-right">
                        <p>$193,430,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -0.99%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 30.80%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -16.40%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc EOS" title="EOS"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> EOS</a></h6>
                        <small class="text-muted">EOS</small>
                    </td>
                    <td class="text-right">
                        <p>$10.50</p>
                    </td>
                    <td class="text-right">
                        <p>$6,460,374,540</p>
                    </td>
                    <td class="text-right">
                        <p>$1,566,567,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -4.19%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 25.88%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -6.45%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc XMR" title="XMR"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Monero</a></h6>
                        <small class="text-muted">XMR</small>
                    </td>
                    <td class="text-right">
                        <p>$336.10</p>
                    </td>
                    <td class="text-right">
                        <p>$5,249,235,889</p>
                    </td>
                    <td class="text-right">
                        <p>$176,640,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.90%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 28.77%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -9.98%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc ETC" title="ETC"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Ethereum Classic</a></h6>
                        <small class="text-muted">ETC</small>
                    </td>
                    <td class="text-right">
                        <p>$31.38</p>
                    </td>
                    <td class="text-right">
                        <p>$3,189,936,842</p>
                    </td>
                    <td class="text-right">
                        <p>$550,173,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -4.09%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 24.95%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -8.36%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc QTUM" title="QTUM"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Qtum</a></h6>
                        <small class="text-muted">QTUM</small>
                    </td>
                    <td class="text-right">
                        <p>$38.28</p>
                    </td>
                    <td class="text-right">
                        <p>$2,717,991,874</p>
                    </td>
                    <td class="text-right">
                        <p>$878,043,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -3.15%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 26.85%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -21.15%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc LSK" title="LSK"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Lisk</a></h6>
                        <small class="text-muted">LSK</small>
                    </td>
                    <td class="text-right">
                        <p>$23.75</p>
                    </td>
                    <td class="text-right">
                        <p>$2,384,607,027</p>
                    </td>
                    <td class="text-right">
                        <p>$94,234,400</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.90%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 38.85%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -9.40%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc OMG" title="OMG"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> OmiseGO</a></h6>
                        <small class="text-muted">OMG</small>
                    </td>
                    <td class="text-right">
                        <p>$18.89</p>
                    </td>
                    <td class="text-right">
                        <p>$1,986,950,969</p>
                    </td>
                    <td class="text-right">
                        <p>$101,699,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.35%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 38.23%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -17.34%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc USDT" title="USDT"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Tether</a></h6>
                        <small class="text-muted">USDT</small>
                    </td>
                    <td class="text-right">
                        <p>$1.09</p>
                    </td>
                    <td class="text-right">
                        <p>$1,622,345,408</p>
                    </td>
                    <td class="text-right">
                        <p>$4,241,850,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 0.79%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 1.23%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 3.53%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc XVG" title="XVG"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Verge</a></h6>
                        <small class="text-muted">XVG</small>
                    </td>
                    <td class="text-right">
                        <p>$0.15</p>
                    </td>
                    <td class="text-right">
                        <p>$1,633,900,911</p>
                    </td>
                    <td class="text-right">
                        <p>$231,147,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -6.69%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 79.25%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -25.09%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc ZEC" title="ZEC"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Zcash</a></h6>
                        <small class="text-muted">ZEC</small>
                    </td>
                    <td class="text-right">
                        <p>$530.42</p>
                    </td>
                    <td class="text-right">
                        <p>$1,616,048,635</p>
                    </td>
                    <td class="text-right">
                        <p>$145,864,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -0.99%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 25.35%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -20.35%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc STRAT" title="STRAT"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Stratis</a></h6>
                        <small class="text-muted">STRAT</small>
                    </td>
                    <td class="text-right">
                        <p>$15.55</p>
                    </td>
                    <td class="text-right">
                        <p>$1,533,582,626</p>
                    </td>
                    <td class="text-right">
                        <p>$55,036,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.85%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 34.30%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -8.87%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc ARDR" title="ARDR"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Ardor</a></h6>
                        <small class="text-muted">ARDR</small>
                    </td>
                    <td class="text-right">
                        <p>$1.49</p>
                    </td>
                    <td class="text-right">
                        <p>$1,482,874,960</p>
                    </td>
                    <td class="text-right">
                        <p>$261,149,070</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -4.51%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 29.63%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 7.35%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc BCN" title="BCN"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Bytecoin</a></h6>
                        <small class="text-muted">BCN</small>
                    </td>
                    <td class="text-right">
                        <p>$0.05</p>
                    </td>
                    <td class="text-right">
                        <p>$1,455,618,587</p>
                    </td>
                    <td class="text-right">
                        <p>$10,801,700</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 0.65%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 54.18%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -21.18%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc STEEM" title="STEEM"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Steem</a></h6>
                        <small class="text-muted">STEEM</small>
                    </td>
                    <td class="text-right">
                        <p>$4.48</p>
                    </td>
                    <td class="text-right">
                        <p>$1,108,959,745</p>
                    </td>
                    <td class="text-right">
                        <p>$25,057,000</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.89%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 42.82%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -6.88%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc BTS" title="BTS"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> BitShares</a></h6>
                        <small class="text-muted">BTS</small>
                    </td>
                    <td class="text-right">
                        <p>$0.35</p>
                    </td>
                    <td class="text-right">
                        <p>$947,954,004</p>
                    </td>
                    <td class="text-right">
                        <p>$89,824,706</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -3.67%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 35.09%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -39.44%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc DOGE" title="DOGE"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Dogecoin</a></h6>
                        <small class="text-muted">DOGE</small>
                    </td>
                    <td class="text-right">
                        <p>$0.06</p>
                    </td>
                    <td class="text-right">
                        <p>$941,142,759</p>
                    </td>
                    <td class="text-right">
                        <p>$63,248,190</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.48%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 39.89%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -30.99%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc WAVES" title="WAVES"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Waves</a></h6>
                        <small class="text-muted">WAVES</small>
                    </td>
                    <td class="text-right">
                        <p>$8.79</p>
                    </td>
                    <td class="text-right">
                        <p>$877,976,009</p>
                    </td>
                    <td class="text-right">
                        <p>$39,506,890</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.78%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 22.66%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -23.46%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc REP" title="REP"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Augur</a></h6>
                        <small class="text-muted">REP</small>
                    </td>
                    <td class="text-right">
                        <p>$66.98</p>
                    </td>
                    <td class="text-right">
                        <p>$736,499,700</p>
                    </td>
                    <td class="text-right">
                        <p>$30,136,309</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.88%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 31.97%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -36.96%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc KMD" title="KMD"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Komodo</a></h6>
                        <small class="text-muted">KMD</small>
                    </td>
                    <td class="text-right">
                        <p>$6.91</p>
                    </td>
                    <td class="text-right">
                        <p>$708,479,055</p>
                    </td>
                    <td class="text-right">
                        <p>$13,785,890</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.48%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 48.68%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -11.30%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc DGB" title="DGB"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> DigiByte</a></h6>
                        <small class="text-muted">DGB</small>
                    </td>
                    <td class="text-right">
                        <p>$0.09</p>
                    </td>
                    <td class="text-right">
                        <p>$665,577,230</p>
                    </td>
                    <td class="text-right">
                        <p>$30,605,200</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.50%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 40.37%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -30.84%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc ARK" title="ARK"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Ark</a></h6>
                        <small class="text-muted">ARK</small>
                    </td>
                    <td class="text-right">
                        <p>$6.68</p>
                    </td>
                    <td class="text-right">
                        <p>$652,059,748</p>
                    </td>
                    <td class="text-right">
                        <p>$12,056,300</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -0.99%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 42.47%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -24.49%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc SALT" title="SALT"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> SALT</a></h6>
                        <small class="text-muted">SALT</small>
                    </td>
                    <td class="text-right">
                        <p>$8.90</p>
                    </td>
                    <td class="text-right">
                        <p>$639,566,223</p>
                    </td>
                    <td class="text-right">
                        <p>$17,684,380</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -0.50%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 35.95%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -24.29%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc BAT" title="BAT"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Basic Attention Token</a></h6>
                        <small class="text-muted">BAT</small>
                    </td>
                    <td class="text-right">
                        <p>$0.65</p>
                    </td>
                    <td class="text-right">
                        <p>$627,186,090</p>
                    </td>
                    <td class="text-right">
                        <p>$39,758,910</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -4.20%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 63.50%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -10.58%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc GNT" title="GNT"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Golem</a></h6>
                        <small class="text-muted">GNT</small>
                    </td>
                    <td class="text-right">
                        <p>$0.75</p>
                    </td>
                    <td class="text-right">
                        <p>$608,458,133</p>
                    </td>
                    <td class="text-right">
                        <p>$17,960,100</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 2.44%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 39.44%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -15.84%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc DCR" title="DCR"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Decred</a></h6>
                        <small class="text-muted">DCR</small>
                    </td>
                    <td class="text-right">
                        <p>$89.30</p>
                    </td>
                    <td class="text-right">
                        <p>$587,788,364</p>
                    </td>
                    <td class="text-right">
                        <p>$2,610,730</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.54%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 26.30%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -15.60%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc GBYTE" title="GBYTE"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Byteball Bytes</a></h6>
                        <small class="text-muted">GBYTE</small>
                    </td>
                    <td class="text-right">
                        <p>$862.48</p>
                    </td>
                    <td class="text-right">
                        <p>$569,397,493</p>
                    </td>
                    <td class="text-right">
                        <p>$2,595,740</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.00%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 54.31%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 24.76%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc PIVX" title="PIVX"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> PIVX</a></h6>
                        <small class="text-muted">PIVX</small>
                    </td>
                    <td class="text-right">
                        <p>$9.67</p>
                    </td>
                    <td class="text-right">
                        <p>$534,840,023</p>
                    </td>
                    <td class="text-right">
                        <p>$9,728,770</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.17%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 22.99%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -22.89%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc FCT" title="FCT"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Factom</a></h6>
                        <small class="text-muted">FCT</small>
                    </td>
                    <td class="text-right">
                        <p>$48.88</p>
                    </td>
                    <td class="text-right">
                        <p>$426,780,828</p>
                    </td>
                    <td class="text-right">
                        <p>$16,881,590</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.57%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 38.43%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -21.88%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc RDD" title="RDD"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> ReddCoin</a></h6>
                        <small class="text-muted">RDD</small>
                    </td>
                    <td class="text-right">
                        <p>$0.01</p>
                    </td>
                    <td class="text-right">
                        <p>$422,919,857</p>
                    </td>
                    <td class="text-right">
                        <p>$19,938,509</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -3.80%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 71.26%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -24.36%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc DGD" title="DGD"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> DigixDAO</a></h6>
                        <small class="text-muted">DGD</small>
                    </td>
                    <td class="text-right">
                        <p>$192.84</p>
                    </td>
                    <td class="text-right">
                        <p>$384,080,000</p>
                    </td>
                    <td class="text-right">
                        <p>$10,433,210</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 0.35%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 18.65%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -3.97%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc SYS" title="SYS"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Syscoin</a></h6>
                        <small class="text-muted">SYS</small>
                    </td>
                    <td class="text-right">
                        <p>$0.90</p>
                    </td>
                    <td class="text-right">
                        <p>$371,045,676</p>
                    </td>
                    <td class="text-right">
                        <p>$7,080,720</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.45%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 37.38%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -10.62%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc MONA" title="MONA"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> MonaCoin</a></h6>
                        <small class="text-muted">MONA</small>
                    </td>
                    <td class="text-right">
                        <p>$6.55</p>
                    </td>
                    <td class="text-right">
                        <p>$370,807,916</p>
                    </td>
                    <td class="text-right">
                        <p>$6,624,610</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -0.55%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 27.55%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -17.68%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc MAID" title="MAID"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> MaidSafeCoin</a></h6>
                        <small class="text-muted">MAID</small>
                    </td>
                    <td class="text-right">
                        <p>$0.78</p>
                    </td>
                    <td class="text-right">
                        <p>$342,023,814</p>
                    </td>
                    <td class="text-right">
                        <p>$6,091,280</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 0.19%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 26.45%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -21.45%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc NXT" title="NXT"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Nxt</a></h6>
                        <small class="text-muted">NXT</small>
                    </td>
                    <td class="text-right">
                        <p>$0.39</p>
                    </td>
                    <td class="text-right">
                        <p>$335,555,059</p>
                    </td>
                    <td class="text-right">
                        <p>$27,496,200</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -3.09%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 39.01%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -19.76%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc XZC" title="XZC"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> ZCoin</a></h6>
                        <small class="text-muted">XZC</small>
                    </td>
                    <td class="text-right">
                        <p>$80.18</p>
                    </td>
                    <td class="text-right">
                        <p>$312,358,936</p>
                    </td>
                    <td class="text-right">
                        <p>$6,750,890</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.85%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 27.83%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -19.29%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc GAME" title="GAME"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> GameCredits</a></h6>
                        <small class="text-muted">GAME</small>
                    </td>
                    <td class="text-right">
                        <p>$4.85</p>
                    </td>
                    <td class="text-right">
                        <p>$311,079,970</p>
                    </td>
                    <td class="text-right">
                        <p>$7,081,850</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.95%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 34.50%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -18.26%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc PART" title="PART"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Particl</a></h6>
                        <small class="text-muted">PART</small>
                    </td>
                    <td class="text-right">
                        <p>$33.87</p>
                    </td>
                    <td class="text-right">
                        <p>$299,083,213</p>
                    </td>
                    <td class="text-right">
                        <p>$972,587</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -1.60%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 32.63%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 32.65%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc GNO" title="GNO"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Gnosis</a></h6>
                        <small class="text-muted">GNO</small>
                    </td>
                    <td class="text-right">
                        <p>$254.19</p>
                    </td>
                    <td class="text-right">
                        <p>$280,753,464</p>
                    </td>
                    <td class="text-right">
                        <p>$4,359,680</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 0.98%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 53.10%</span></td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -26.90%</span></td>
                </tr>
                <tr role="row">
                    <td><span><a href="JavaScript: void(0);"><i class="cc EMC" title="EMC"></i></a></span></td>
                    <td>
                        <h6><a href="JavaScript: void(0);"> Emercoin</a></h6>
                        <small class="text-muted">EMC</small>
                    </td>
                    <td class="text-right">
                        <p>$6.22</p>
                    </td>
                    <td class="text-right">
                        <p>$269,738,319</p>
                    </td>
                    <td class="text-right">
                        <p>$4,283,630</p>
                    </td>
                    <td class="no-wrap text-right"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -2.08%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 30.50%</span></td>
                    <td class="no-wrap text-right"><span class="label label-success"><i class="fa fa-chevron-up"></i> 2.45%</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<div class="right-sidebar">
<div class="slimscrollright">
<div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
<div class="r-panel-body">
<ul id="themecolors" class="m-t-20">
    <li><b>With Light sidebar</b></li>
    <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
    <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
    <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
    <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
    <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
    <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
    <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme working">7</a></li>
    <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
    <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
    <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
    <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
    <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
</ul>
<ul class="m-t-20 chatonline">
    <li><b>Chat option</b></li>
    <li>
        <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
    </li>
    <li>
        <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
    </li>
    <li>
        <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
    </li>
    <li>
        <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
    </li>
    <li>
        <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
    </li>
    <li>
        <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
    </li>
    <li>
        <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
    </li>
    <li>
        <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
    </li>
</ul>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<?php include("../Layout_Admin/Footer.php"); ?>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<?php include("../Layout_Admin/FooterLink.php");?>
</body>

<!-- Mirrored from www.wrappixel.com/demos/admin-templates/elegant-admin/main/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Mar 2020 03:21:44 GMT -->
</html>