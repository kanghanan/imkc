<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url ('assets/logo/favicon.png');?>">
  <title>Ta'aruf Online Indonesia</title>

  <!-- ------------------------------------------------ -->
  <!--      CSS                                         -->
  <!-- ------------------------------------------------ -->
  <style>
     /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 500;
    top: 500;
    width: 50%; /* Full width */
    height: 50%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
} 
</style>
<script>
    // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 
</script> 
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url ('assets/ample-admin-lite/html/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Menu CSS -->
  <link href="<?php echo base_url ('assets/ample-admin-lite/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css'); ?>" rel="stylesheet">
  <!-- toast CSS -->
  <link href="<?php echo base_url ('assets/ample-admin-lite/plugins/bower_components/toast-master/css/jquery.toast.css'); ?>" rel="stylesheet">
  <!-- morris CSS -->
  <link href="<?php echo base_url ('assets/ample-admin-lite/plugins/bower_components/morrisjs/morris.css'); ?>" rel="stylesheet">
  <!-- chartist CSS -->
  <link href="<?php echo base_url ('assets/ample-admin-lite/plugins/bower_components/chartist-js/dist/chartist.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url ('assets/ample-admin-lite/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css'); ?>" rel="stylesheet">
  <!-- animation CSS -->
  <link href="<?php echo base_url ('assets/ample-admin-lite/html/css/animate.css'); ?>" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo base_url ('assets/ample-admin-lite/html/css/style.css'); ?>" rel="stylesheet">
  <!-- color CSS -->
  <link href="<?php echo base_url ('assets/ample-admin-lite/html/css/colors/default.css'); ?>" id="theme" rel="stylesheet">
  <!-- Datepicker cSS -->
  <link href="<?php echo base_url ('assets/admin-lte/plugins/datepicker/datepicker3.css'); ?>" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="wrapper" style="min-height: 100vh">