<nav class="navbar navbar-inverse m-b-25">
  <div class="navbar-fluid">
    <div class="navbar-header">
      <ul class="nav navbar-top-links navbar-right pull-right">
       <!--  <li>
            <a><i class="fa-envelope-o fa-fw" aria-hidden="true" alt="Undangan"></i> Undangan</a>
        </li> -->
        <li>
            <a><i class="fa-envelope fa-fw" aria-hidden="true" alt="Notifikasi"></i> Pemberitahuan</a>
        </li>
        <li>
            <a class="profile-pic" href="#">
                <img src="<?php echo base_url ('assets/admins/images/nicolaus-copernicus.jpeg'); ?>" alt="user-img" width="36" class="img-circle">
                <b class="hidden-xs">Hi, Nicolaus</b>
                <li><a id="myBtn">Logout</a></li>
                
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
            </a>
        </li>
      <ul>
    </div>
  </div>
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Are you sure you want to logout?<br><button><a href="<?php echo base_url ('home/login'); ?>">Yes</a></button></p>
  </div>

</div>
</nav>
