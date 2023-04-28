<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Distributor</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .box {
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 20px;
      margin: 50px auto;
      max-width: 800px;
    }
  </style>
</head>
<body>
  <?php require APPROOT . '/views/inc/header.php'; ?>
  
  <div class="box">
    <a href="<?php echo URLROOT; ?>/distributors" class="btn btn-light mb-2">Back</a>
    
    <h1><?php echo $data['distributor']->name; ?></h1>

    <p>Email: <?php echo $data ['distributor']->email; ?></p>

    <?php if($data['distributor']->number != ''){?>
      <p>Number: <?php echo $data['distributor']->number; ?></p>
    <?php } ?>
    
    <hr>
    
    <a href="<?php echo URLROOT; ?>/distributors/edit/<?php echo $data['distributor']->id; ?>" class="btn btn-dark mr-2">Edit</a>
    
    <form action="<?php echo URLROOT; ?>/distributors/delete/<?php echo $data['distributor']->id; ?>" method="post" class="d-inline-block">
      <input type="submit" value="Delete" class="btn btn-danger">
    </form>
  </div>

  <?php require APPROOT . '/views/inc/footer.php'; ?>
  
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-9exce8j/qqVeu1uF/3wbG7jW8DX5ZNmGJm5h+Hrhtldf8tn1U6dhIIU6JVD/Qo+5"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

<style>
.container {
  max-width: 800px;
  margin: 0 auto;
}

.btn {
  font-size: 1.25rem;
  padding: 0.5rem 1rem;
}

.btn-light {
  color: #333;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn:hover {
  color: #fff;
  text-decoration: none;
}

.btn-light:hover {
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-dark:hover {
  background-color:
}

</style>