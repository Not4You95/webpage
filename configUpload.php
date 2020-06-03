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
                                    <label class="col-sm-3 col-form-label">Device</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option>ESP32</option>
                                            <option>ESP CAM</option>
                                            <option>STM32</option>
                                            <option>Arduino Uno</option>
                                        </select>
                                    </div>
                                </div>

                                <form class="forms-sample" action="https://not4you.se/upload.php" method="post" enctype="multipart/form-data">
                                    Select file:

                                    <input type="file" name="file" id="file"> <br>
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
    <?php
    include('includes/footer.php');
    ?>