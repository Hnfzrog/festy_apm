<?php 
  
  include('config.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM upapm WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SISWA
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <label>Nomor</label>
                  <input type="text" name="id" value="<?php echo $row['id'] ?>" placeholder="Masukkan Nomor" class="form-control”>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Area</label>
                  <textarea class="form-control" name="area" placeholder="Masukkan Area" rows="4"><?php echo $row['area'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Penilaian</label>
                  <textarea class="form-control" name="penilaian" placeholder="Masukkan Penilaian" rows="4"><?php echo $row['penilaian'] ?></textarea>
                </div>
                
                <div class="form-group">
                  <label>skor</label>
                  <textarea class="form-control" name="skor" placeholder="Masukkan skor" rows="4"><?php echo $row['skor'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Kriteria</label>
                  <textarea class="form-control" name="kriteria" placeholder="Masukkan Kriteria" rows="4"><?php echo $row['kriteria'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" placeholder="Masukkan Keterangan" rows="4"><?php echo $row['keterangan'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Nilai</label>
                  <textarea class="form-control" name="nilai" placeholder="Masukkan Nilai" rows="4"><?php echo $row['nilai'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Evidence</label>
                  <textarea class="form-control" name="evidence" placeholder="Masukkan Evidence" rows="4"><?php echo $row['evidence'] ?></textarea>
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>