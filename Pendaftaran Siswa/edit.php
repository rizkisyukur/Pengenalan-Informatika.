<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Digital Talent</title>
  </head>
  <body>
    <div class="container-fluid">
    <?php 
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id'");
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
	?>
        <form action="update.php" method="post" class="mx-5 mb-5 my-5 mt-5">
            <div class="form-group">
                <label for="">NAMA</label>
                <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa'] ?>">
                <input type="text" name="nama" class="form-control " value="<?php echo $data['nama'] ?>" required>
            </div>
            <div class="form-group">
                <label for="">ALAMAT</label>    
                <textarea name="alamat" class="form-control " id="" cols="25" rows="3" required><?php echo $data['alamat'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">JENIS KELAMIN</label> 
                <input type="radio" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>" required>Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan
            </div>
            <div class="form-group">
                <label for="">AGAMA</label> 
                <select name="agama" class="form-control " required>
                    <option  value="<?php echo $data['agama'] ?>"><?php echo $data['agama'] ?></option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="konghucu">Konghucu</option>
                </select>
            </div>        
            <div class="form-group">
                <label for="">SEKOLAH ASAL</label>    
                <input type="text" name="sekolah" class="form-control " value="<?php echo $data['sekolah'] ?>" required>
            </div>
                    <td colspan="2"> <button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
                    <td colspan="2"> <button type="button" class="btn btn-secondary" onclick="history.back(-1)">Kembali</button>
        </form>
        <?php } ?>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>