<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<form action="post_row.php" method="post">
    <div class="card container mt-5">
    <div class="card-header bg-white">Input Multi Row</div>
    <div class="card-body">
        <div class="row">
            <table class="table table-bordered">
            <tr><th>Nama</th><th>Alamat</th></tr>
            <?php
                include "koneksi.php";
                $sb = mysqli_query($koneksi,"SELECT * FROM biodata");
                while ($b=mysqli_fetch_array($sb)){ ?>
                <tr><td><?= $b['nama'] ?></td><td><?= $b['alamat'] ?></td></tr>
            <?php } ?>
            </table>
        </div>
        
        <?php
        include "koneksi.php";
        $srow = mysqli_query($koneksi,"SELECT * FROM row");
        while ($row=mysqli_fetch_array($srow)){ ?>
            <div class="row">
                <div class="col-md-6"><?= $row['nama_row'] ?><?= $row['isi_row'] ?></div>
                <div class="col-md-6"><?= $row['nama_row2'] ?><?= $row['isi_row2'] ?></div>
            </div>
        <?php } ?>

    </div>
    <div class="card-footer bg-white">
        <input type="submit" value="Save" class="btn btn-success btn-sm">
        <a href="tambah_row.php" class="btn btn-primary btn-sm">Tambah Row</a>
        <a href="hapus_row.php" class="btn btn-danger btn-sm">Hapus Row</a>
        <a href="edit.php" class="btn btn-info btn-sm">Edit All</a>
        <a href="hapus.php" class="btn btn-warning text-white btn-sm">Hapus All</a>
    </div>
    </div>
</form>