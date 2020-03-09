<?php 
    $conn = new mysqli('localhost', 'id11924761_keluhan', 'abc123', 'id11924761_datapkl');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
        <h2>MENDATA ASSET GAME 2D DAN PARTIKEL GAME</h2>
        <form method="GET">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Asset 2D Dan Partikel</label>
    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Asset">
    <small id="emailHelp" class="form-text text-muted">Masukan Asset Game 2D Anda</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi Asset Game 2D</label>
    <input type="text" class="form-control" name="deskripsi" id="exampleInputPassword1" placeholder=" Masukan Deskripsi Asset">
  </div>
  
  <button type="submit" class="btn btn-primary">KIRIM</button>
</form>
    <?php
    if (isset ($_GET['nama'])) {
    $url = 'https://puserejawa123.000webhostapp.com/Webservice/tugas2/rest.php?nama='.$_GET['nama']."&deskripsi=".$_GET['deskripsi'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    echo "Berhasil Dinputkan";
    curl_close($ch);
    }   
    ?>


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama </th>
      <th scope="col">Deskripsi</th>
    </tr>
  </thead>
  <tbody><?php
            $sql = "SELECT * FROM datapkl";
            $result = mysqli_query($conn,$sql);
        
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
            
                <td><?php echo $row['Nama'];?></td>
                <td><?php echo $row['Deskripsi'];?></td>
                </tr>
            <?php
            }
            } else {
            echo "0 results";
            }
            ?>
    
  </tbody>
</table>
</div>

   
  </body>
</html>