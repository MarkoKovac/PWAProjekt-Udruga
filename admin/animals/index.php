<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/animals.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Životinje</title>
  <link rel="shortcut icon" href="assets/images/favicon.ico"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Font awesome ikone-->
  <script src="https://kit.fontawesome.com/1c5108fa97.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../assets/css/admin.css">
  <script src="assets/js/script.js" defer></script>
</head>

<body>
    <!--Header-->
  <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

  <div class="container-fluid">
    <div class="row">
      <!--SideBar-->
      <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
          <a href="index.php" class="btn btn-success" role="button">Lista životinja</a>
          <a href="create.php" class="btn btn-primary" role="button">Dodaj životinju</a>
        </div>
        <h2 class="text-center">Lista svih životinja</h2>

        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
              <th scope="col">Broj</th>
                <th scope="col">Naziv</th>
                <th scope="col">Akcija</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($animals as $key => $animal):?>
              <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $animal['title'] ?></td>
                <td><a href="edit.php?id=<?php echo $animal['id'];?>">edit</a></td>
                <td><a href="edit.php?delete_id=<?php echo $animal['id'];?>">delete</a></td>
                <?php if ($animal['published']): ?>
                  <td><a href="edit.php?published=0&p_id=<?php echo $animal['id'] ?>" class="unpublish">unpublish</a></td>
                <?php else:?>
                  <td><a href="edit.php?published=1&p_id=<?php echo $animal['id'] ?>" class="publish">publish</a></td>
                <?php endif; ?>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>