<?php
if (isset($_POST['Submit'])) {
    $nim = $_POST['kode'];
    $nama = $_POST['nama'];
    $alamat = $_POST['sks'];
    $jk = $_POST['semester'];
    $result = mysqli_query($con, "INSERT INTO mahasiswa(kode,nama,sks,semester)
VALUES('$kode','$nama','$sks','$semester')");
    header("Location:?page=matakuliah-show");
}
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data Matakuliah</strong>
            </div>
            <div class="card-body">
                <form method="POST" action="?page=matakuliah-add" class="form-horizontal">
                    <div class="form-group">
                        <label for="kode" class="control-label">KODE</label>
                        <input type="text" class="form-control" name="kode" placeholder="Masukan KODE..." required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="ontrol-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap..." required>
                    </div>
                    <div class="form-group">
                        <label for="sks" class="control-label">SKS</label>
                        <input type="text" class="form-control" name="sks" placeholder="Masukan SKS..." required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="semester" class="control-label">Semester</label>
                            <input type="semester" class="form-control" name="semester" placeholder="Masukan semester..." required>
                        </div>
                    </div>
                    <input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </form>
            </div>
        </div>
    </div>
</div>