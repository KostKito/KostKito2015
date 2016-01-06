<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kostkito - Pusat Info Kost Terlengkap ala Wong Kito </title>

    <!-- Bootstrap Core CSS -->
    <link href=<?php echo base_url() ?>asset/css/bootstrap.min.css rel="stylesheet">
    <link href=<?php echo base_url() ?>asset/css/bootstrap.css rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo base_url() ?>asset/css/shop-homepage.css rel="stylesheet">
    <link rel="stylesheet" href=<?php echo base_url() ?>asset/css/font-awesome.css>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        .wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #18BC9C;
    
}
.wizard li.active span.round-tab i{
    color: #18BC9C;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #18BC9C;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #18BC9C;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}
.step1 .row {
    margin-bottom:10px;
}
.step_21 {
    border :1px solid #eee;
    border-radius:5px;
    padding:10px;
}
.step33 {
    border:1px solid #ccc;
    border-radius:5px;
    padding-left:10px;
    margin-bottom:10px;
}
.dropselectsec {
    width: 68%;
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    outline: none;
    font-weight: normal;
}
.dropselectsec1 {
    width: 74%;
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    outline: none;
    font-weight: normal;
}
.mar_ned {
    margin-bottom:10px;
}
.wdth {
    width:25%;
}
.birthdrop {
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    width: 16%;
    outline: 0;
    font-weight: normal;
}


/* according menu */
#accordion-container {
    font-size:13px
}
.accordion-header {
    font-size:13px;
    background:#ebebeb;
    margin:5px 0 0;
    padding:7px 20px;
    cursor:pointer;
    color:#fff;
    font-weight:400;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px
}
.unselect_img{
    width:18px;
    -webkit-user-select: none;  
    -moz-user-select: none;     
    -ms-user-select: none;      
    user-select: none; 
}
.active-header {
    -moz-border-radius:5px 5px 0 0;
    -webkit-border-radius:5px 5px 0 0;
    border-radius:5px 5px 0 0;
    background:#18BC9C;
}
.active-header:after {
    content:"\f068";
    font-family:'FontAwesome';
    float:right;
    margin:5px;
    font-weight:400
}
.inactive-header {
    background:#333;
}
.inactive-header:after {
    content:"\f067";
    font-family:'FontAwesome';
    float:right;
    margin:4px 5px;
    font-weight:400
}
.accordion-content {
    display:none;
    padding:20px;
    background:#fff;
    border:1px solid #ccc;
    border-top:0;
    -moz-border-radius:0 0 5px 5px;
    -webkit-border-radius:0 0 5px 5px;
    border-radius:0 0 5px 5px
}
.accordion-content a{
    text-decoration:none;
    color:#333;
}
.accordion-content td{
    border-bottom:1px solid #dcdcdc;
}



@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<!-- All JS -->

</head>

<body>

    <!-- Navigation -->
    
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <img src=<?php echo base_url() ?>asset/logo/logo.png  width="35px" height="35px" alt="">
                    Kostkito.com</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio"><img src=<?php echo base_url() ?>asset/logo/home.png alt="" height="40px"></a>
                    </li>
                    <li class="page-scroll">
                        <a href=<?php echo base_url() ?>home/about><img src=<?php echo base_url() ?>asset/logo/kontak.png height="40px"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">
                            <img src=<?php echo base_url() ?>asset/logo/about.png height="40px;" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>    <!-- /.container -->
   <div class="col-md-12 col-lg-12">
    <div class="container">
    <div class="row">
        <section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                            <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Conform Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Mobile Number</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                            <label for="exampleInputEmail1">Email address</label>
                                <div class="row">
                                    <div class="col-md-3 col-xs-3">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="col-md-9 col-xs-9">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default next-step" style="background-color:#18BC9C;color:white;font-weight:600;">Simpan dan Lanjutkan</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="step2">
                            <div class="step_21">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> I am in INDIA
                                        </label>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> I am in ABROAD
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="step-22">
                                <h5><strong>How would you like to go Abroad ?</strong></h5>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Any How
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Migrate Visas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox">On a Migrate Visas
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Work Visas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Invest Visas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Travel Visas
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Assessment
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Other Visas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Dependent Visas
                                        </label>
                                    </div>
                                </div>
                                <h5><strong>Which country would you be interested in ?</strong></h5>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Anywhere Aboard
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Australia
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox">Canada
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Denmark
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> America
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> New Zealand
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Austria
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Norway
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> UK
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Hong Kong
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Singapore
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> France
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> South Africa
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Ireland
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Belgium
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Germany
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Philippines
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Netherlands
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Malaysia
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Switzerland
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Sweden
                                        </label>
                                    </div>
                                </div>
                                <h5><strong>How would you like to go Abroad ?</strong></h5>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> Any How
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Migrate Visas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox">On a Migrate Visas
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Work Visas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Invest Visas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Travel Visas
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Assessment
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Other Visas
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <label>
                                          <input type="checkbox"> On a Dependent Visas
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step" style="background-color:#18BC9C;color:white;font-weight:600;">Simpan dan Lanjutkan</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="step33">
                        <h5><strong>Basic Details</strong></h5>
                        <hr>
                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Visa Status</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <select name="visa_status" id="visa_status" class="dropselectsec">
                                        <option value="">Please Select Visa Status or Any Visa You Are Holding</option>
                                        <option value="2">Student Visas</option>
                                        <option value="1">Migrate Visas</option>
                                        <option value="4">Travel Visas</option>
                                        <option value="5">Work Visas</option>
                                        <option value="6">Other Visas</option>
                                        <option value="3">Settle Abroad</option>
                                        <option value="7">Invest Visas</option>
                                        <option value="8">Assessment</option>
                                        <option value="9">Dependent Visas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Date of birth</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-4 wdth">
                                            <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                <option value="">Date</option>
                                                <option value="2">1</option>
                                                <option value="1">2</option>
                                                <option value="4">3</option>
                                                <option value="5">4</option>
                                                <option value="6">5</option>
                                                <option value="3">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-xs-4 wdth">
                                            <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                <option value="">Month</option>
                                                <option value="2">Jan</option>
                                                <option value="1">Feb</option>
                                                <option value="4">Mar</option>
                                                <option value="5">Apr</option>
                                                <option value="6">May</option>
                                                <option value="3">June</option>
                                                <option value="7">July</option>
                                                <option value="8">Aug</option>
                                                <option value="9">Sept</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-xs-4 wdth">
                                            <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                <option value="">Year</option>
                                                <option value="2">1990</option>
                                                <option value="1">1991</option>
                                                <option value="4">1992</option>
                                                <option value="5">1993</option>
                                                <option value="6">1994</option>
                                                <option value="3">1995</option>
                                                <option value="7">1996</option>
                                                <option value="8">1997</option>
                                                <option value="9">1998</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Marital Status</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Single
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Married
                                    </label>
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Highest Education</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <select name="highest_qualification" id="highest_qualification" class="dropselectsec">
                                        <option value=""> Select Highest Education</option>
                                        <option value="1">Ph.D</option>
                                        <option value="2">Masters Degree</option>
                                        <option value="3">PG Diploma</option>
                                        <option value="4">Bachelors Degree</option>
                                        <option value="5">Diploma</option>
                                        <option value="6">Intermediate / (10+2)</option>
                                        <option value="7">Secondary</option>
                                        <option value="8">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Specialization</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <input type="text" name="specialization" id="specialization" placeholder="Specialization" class="dropselectsec" autocomplete="off">
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Year of Passed Out</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <select name="year_of_passedout" id="year_of_passedout" class="birthdrop">
                                        <option value="">Year</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Total Experience</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6 wdth">
                                            <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                <option value="">Month</option>
                                                <option value="2">Jan</option>
                                                <option value="1">Feb</option>
                                                <option value="4">Mar</option>
                                                <option value="5">Apr</option>
                                                <option value="6">May</option>
                                                <option value="3">June</option>
                                                <option value="7">July</option>
                                                <option value="8">Aug</option>
                                                <option value="9">Sept</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-xs-6 wdth">
                                            <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                <option value="">Month</option>
                                                <option value="2">Jan</option>
                                                <option value="1">Feb</option>
                                                <option value="4">Mar</option>
                                                <option value="5">Apr</option>
                                                <option value="6">May</option>
                                                <option value="3">June</option>
                                                <option value="7">July</option>
                                                <option value="8">Aug</option>
                                                <option value="9">Sept</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mar_ned">
                                <div class="col-md-4 col-xs-3">
                                    <p align="right"><stong>Have you taken the IETLS Exam ?</stong></p>
                                </div>
                                <div class="col-md-8 col-xs-9">
                                    <select name="ielts" id="ielts" class="dropselectsec">
                                        <option value="">Select IETLS option</option>
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                            <li><button type="button" class="btn btn-default btn-info-full next-step" style="background-color:#18BC9C;color:white;font-weight:600;">Simpan dan Lanjutkan</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <div class="step44">
                            <h4>Proses Pemesanan Berhasil</h4>
                            <hr>
                            <div id="accordion-container">
                                <h2 class="accordion-header"> Informasi Pemesanan</h2>
                                <div class="accordion-content">
                                  <a href="#">
                                    <h3>Informasi Pemesanan</h3>
                                        <table class="table">
                                            <tr>
                                                <td>Nama Pemesan</td>
                                                <td>: Budi Waseso</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Kosan</td>
                                                <td>: desan Sukabangun</td>
                                            </tr>

                                        </table>
                                    <br>
        
                                </a>
                                </div>
                                <h2 class="accordion-header"> Upload Bukti Pembayaran</h2>
                                <div class="accordion-content">
                                  <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>
<script type="text/javascript">
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


//according menu

$(document).ready(function()
{
    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');
    
    //Set The Accordion Content Width
    var contentwidth = $('.accordion-header').width();
    $('.accordion-content').css({});
    
    //Open The First Accordion Section When Page Loads
    $('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
    $('.accordion-content').first().slideDown().toggleClass('open-content');
    
    // The Accordion Effect
    $('.accordion-header').click(function () {
        if($(this).is('.inactive-header')) {
            $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
            $(this).toggleClass('active-header').toggleClass('inactive-header');
            $(this).next().slideToggle().toggleClass('open-content');
        }
        
        else {
            $(this).toggleClass('active-header').toggleClass('inactive-header');
            $(this).next().slideToggle().toggleClass('open-content');
        }
    });
    
    return false;
});
</script>       
   </div>
<div style="clear:both;"></div>
        <hr>
        <!-- Footer -->
        
                <div class="footer">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
        
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

</body> 
</html>