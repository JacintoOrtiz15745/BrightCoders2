<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agenda CRUD</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>

    <?php require_once 'process.php'; ?>

    <section class="hero is-info">
      <div class="hero-body">
        <div class="container">
          <h1 class="title has-text-centered">
            Agenda CRUD
          </h1>
        </div>
      </div>
    </section>

    <?php

    if (isset($_SESSION['message'])):?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">

      <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
       ?>
    </div>

    <?php endif ?>

      <div class="container">
    <?php
      $mysqli = new mysqli('localhost','root','','agenda_crud') or die(mysqli_error($mysqli));
      $result = $mysqli->query("SELECT * FROM data ") or die($mysqli->error);
      //pre_r($result);
      ?>

      <div class="row justify-content-center">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Number</th>
              <th>Mail</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <?php
            while($row = $result->fetch_assoc()):
           ?>
           <tr>
             <td><?php echo $row['name']?></td>
             <td><?php echo $row['num']?></td>
             <td><?php echo $row['mail']?></td>
             <td>
              <a href="index.php?edit=<?php echo $row['id'];?>"
                class="btn btn-info">Edit</a>
              <a href="process.php?delete=<?php echo $row['id'];?>"
                class="btn btn-danger">Delete</a>
             </td>
           </tr>
         <?php endwhile; ?>
        </table>
      </div>

    <?php
      function pre_r($array)
      {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
      }

    ?>
    <div class="row justify-content-center">
      <form action="process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control"
            value="<?php echo $name; ?>" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label>Cell phone number</label>
          <input type="text" name="num" class="form-control"
            value="<?php echo $num; ?>" placeholder="Enter your number">
        </div>
        <div class="form-group">
          <label>Mail</label>
          <input type="text" name="mail" class="form-control"
            value="<?php echo $mail; ?>" placeholder="Enter your mail">
        </div>
        <div class="form-group">
          <?php
            if($update == true):
           ?>
           <button type="submit" class="btn btn-info" name="update">Update</button>
         <?php else: ?>
          <button type="submit" class="btn btn-primary" name="save">Save</button>
        <?php endif;?>
        </div>
      </form>
    </div>
  </div>

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Develop</strong> by <a href="https://www.facebook.com/jacinto.ortiz.98?ref=bookmarks">Jacinto Ortiz</a>.
      </p>
    </div>
  </footer>
  </body>
</html>
