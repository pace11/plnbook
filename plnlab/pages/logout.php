<div class="container-fluid">      
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
            <?php
                session_destroy();
                echo"Logout Success";
                echo"<meta http-equiv='refresh' content='1;
                    url=login.php'>";
            ?>
            </div>
        </div>  
    </div>
</div>