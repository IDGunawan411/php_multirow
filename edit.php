<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<form action="edit_row.php" method="post">
    <div class="card container mt-5">
    <div class="card-header bg-white">Edit Multi Row</div>
    <div class="card-body">
        <?php include "koneksi.php";
        $cek = mysqli_query($koneksi,"SELECT * FROM biodata");
        $c=mysqli_fetch_array($cek);
        
        ?>
        <div><?= $c["id"] == NULL? "Data Tidak Ada" : ""; ?></div>
        <?php
        $srow = mysqli_query($koneksi,"SELECT * FROM biodata");
        $no = 1;
        $no1 = 1;
        while ($row=mysqli_fetch_array($srow)){
        ?>
            <div class="row mb-2">
                <div class="col-md-6"><span>Nama</span><input type="text" class="form-control" name="nama<?= $no++; ?>" value="<?= $row['nama'] ;?>"></div>
                <div class="col-md-6"><span>Alamat</span><input type="text" class="form-control" name="alamat<?= $no1++; ?>" value="<?= $row['alamat'] ;?>"></div>
            </div>
            <hr>
        <?php } ?>

    </div>
    <div class="card-footer bg-white">
        <input type="submit" value="Save" class="btn btn-success btn-sm">
        <a href="input.php" class="btn btn-danger btn-sm">Back</a>
    </div>
    </div>
</form>