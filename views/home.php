<?php 



?>

<div class="container-fluid banner">
        <div class="row">
           
           
                <div class="row">
                    <div class="col-lg-12">
                        <div class="clock-container">
                            <div class="time">
                                <span class="hms"></span><span class="ampm"></span>
                            </div>
                            <div class="t-date">
                                <span class="date"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-content">
                            <h1>WELCOME <?php echo $name ?> <br> <?php echo $emailadd ?></h1>
                            <div class="d-flex flex-row justify-content-between">
                                <input type="text" class="form-control p-3 welcome-search" placeholder="SEARCH FOR RESIDENTS INFO">
                                <button class="btn-sh"><i class="fa-solid fa-magnifying-glass ps-2"></i>Search</button>
                            </div>
                            <div class="container w-50 res-num mt-2">
                                <span>5605 </span>
                                <span>TOTAL <br>RESIDENTS</span>
                                <span>100</span>
                                <span>NEW <br> RESIDENTS <br> TODAY</span>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
    
    <script src= "assets/js/custom.js"type="text/javascript"></script>
    <script type="text/javascript">
        updateTime();
    </script>