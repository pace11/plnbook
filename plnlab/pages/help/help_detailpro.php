<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info alert-dismissible">
            <i class="fa fa-flash"></i> <b>PLN</b> LAB | Help
        </div>
    </div>  
</div>

<div class="card">
    <div class="card-body login-card-body">

        <?php

        $id         = $_POST['id'];
        $isi        = addslashes($_POST['isi']);
        $date       = date("Y-m-d");

            $input = mysqli_query($koneksi, "INSERT INTO tbl_help SET
                        id_category     ='$id',
                        isi_saran       ='$isi',
                        tgl_masuk       ='$date'");

        if ($input) {
        ?>
            <div class="social-auth-links mb-3">
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fa fa-check"></i> Alert!</h5>
                    Sending Success
                </div>
            </div>
        <?php
        echo"<meta http-equiv='refresh' content='1;
        url=?page=help'>";
        } else { ?>

            <div class="social-auth-links mb-3">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fa fa-remove"></i> Alert!</h5>
                    Sending failed
                </div>
            </div>
        <?php } ?>
    </div>
</div>