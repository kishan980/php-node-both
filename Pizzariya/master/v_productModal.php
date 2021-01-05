

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/gentelella/form_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 12:55:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gentelella Alela! | </title>

	<?php require  '../AdminLayout/headerLink.php'; ?>
</head>
<body class="nav-md">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<?php require  '../AdminLayout/sidebar.php'; ?>
</div>

<div class="top_nav">
<?php require  '../AdminLayout/header.php'; ?>
</div>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Form Validation</h3>
</div>
<div class="title_right">
<div class="col-md-5 col-sm-5 form-group pull-right top_search">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search for...">
<span class="input-group-btn">
<button class="btn btn-default" type="button">Go!</button>
</span>
</div>
</div>
</div>
</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="x_panel">
<div class="x_title">
<h2>Form validation <small>sub title</small></h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item" href="#">Settings 1</a>
<a class="dropdown-item" href="#">Settings 2</a>
</div>
</li>
<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">
<form class="form-horizontal form-label-left" novalidate>
<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
</p>
<span class="section">Personal Info</span>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6">
<input id="name" class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
</div>
</div>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6">
<input type="email" id="email" name="email" required="required" class="form-control">
</div>
</div>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Confirm Email <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6">
<input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control">
</div>
</div>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="number">Number <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6">
<input type="number" id="number" name="number" required="required" data-validate-minmax="10,100" class="form-control">
</div>
</div>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="website">Website URL <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6">
<input type="url" id="website" name="website label-align" required="required" placeholder="www.website.com" class="form-control">
</div>
</div>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="occupation">Occupation <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6">
<input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control">
</div>
</div>
<div class="item form-group">
<label for="password" class="col-form-label col-md-3 label-align">Password</label>
<div class="col-md-6 col-sm-6">
<input id="password" type="password" name="password" data-validate-length="6,8" class="form-control" required="required">
</div>
</div>
<div class="item form-group">
<label for="password2" class="col-form-label col-md-3 col-sm-3 label-align ">Repeat Password</label>
<div class="col-md-6 col-sm-6">
<input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control" required="required">
</div>
</div>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="telephone">Telephone <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6">
<input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control">
</div>
</div>
<div class="item form-group">
<label class="col-form-label col-md-3 col-sm-3 label-align" for="textarea">Textarea <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6">
<textarea id="textarea" required="required" name="textarea" class="form-control"></textarea>
</div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
 <div class="col-md-6 offset-md-3">
<button type="submit" class="btn btn-primary">Cancel</button>
<button id="send" type="submit" class="btn btn-success">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<?php require  '../AdminLayout/footer.php'; ?>

</div>
</div>
<?php require  '../AdminLayout/footerLink.php'; ?></body>

<!-- Mirrored from colorlib.com/polygon/gentelella/form_validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 12:55:34 GMT -->
</html>