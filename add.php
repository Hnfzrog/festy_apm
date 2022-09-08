<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Tambah Data
            </div>
            <div class="card-body">
              <form action="simpan-data.php" method="POST">
                
                <div class="form-group">
                  <label>Area</label>
                  <input type="text" name="area" placeholder="Masukkan Area" class="form-control">
                </div>

                <div class="form-group">
                  <label>Penilaian</label>
                  <input type="text" name="penilaian" placeholder="Masukkan Penilaian" class="form-control">
                </div>

                <div class="form-group">
                  <label>Skor</label>
                  <textarea class="form-control" name="skor" placeholder="Masukkan Skor" rows="4"></textarea>
                </div>
                
                <div class="form-group">
                  <label>Kriteria</label>
                  <textarea class="form-control" name="kriteria" placeholder="Masukkan Kriteria" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" placeholder="Masukkan Keterangan"rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Nilai</label>
                  <textarea class="form-control" name="nilai" placeholder="Masukkan Nilai"rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Evidence</label>
                  <textarea class="form-control" name="evidence" placeholder="Masukkan Evidence"rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-success">SIMPAN</button>
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