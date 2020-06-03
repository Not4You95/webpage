<?php
    include('includes/head.php');
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch grid-margin">
                            <div class="row flex-grow">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Upload Code to ESP32</h4>
                                            <p class="card-description"></p>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Country</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control">
                                                        <option>America</option>
                                                        <option>Italy</option>
                                                        <option>Russia</option>
                                                        <option>Britain</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <form class="forms-sample" action="https://not4you.se/upload.php" method="post" enctype="multipart/form-data">
                                                Select file:

                                                <input  type="file" name="file" id="file">
                                                <input class="btn btn-success mr-2" type="submit" value="Upload Image" name="submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>


                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 <a href="http://www.not4you.se/" target="_blank">Not4you</a>. All rights reserved.</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="../../../assets/js/shared/off-canvas.js"></script>
    <script src="../../../assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>

<!--<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link href="text/homeStyle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1>Website Title</h1>
			<a href="https://not4you.se/profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="https://not4you.se/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			
		</div>
	</nav>
	<div class="content">
		<h2>Home Page</h2>
		<p>Welcome back,  <?= $_SESSION['name'] ?>!</p>

		<a href="https://not4you.se/blank-page.html"><i class="fas fa-user-circle"></i>Test Page</a>

	</div>

	<div>
		<form action="https://not4you.se/upload.php" method="post" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="file" id="file">
			<input type="submit" value="Upload Image" name="submit">
		</form>
	</div>

	
</body>

</html>-->