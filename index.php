<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Dashboard</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA APM KEADILAN NEGERI YOGYAKARTA
            </div>
            <div class="card-body">
              <a href="add.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Area</th>
                    <th scope="col">Penilaian</th>
                    <th scope="col">Skor</th>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Evidence</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                      include('config.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM upapm");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['area'] ?></td>
                      <td><?php echo $row['penilaian'] ?></td>
                      <td><?php echo $row['skor'] ?></td>
                      <td><?php echo $row['kriteria'] ?></td>
                      <td><?php echo $row['keterangan'] ?></td>
                      <td><?php echo $row['nilai'] ?></td>
                      <td><?php echo $row['evidence'] ?></td>
                      <td class="text-center">
                        <a href="edit-data.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-data.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>