<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

<style>
  .btn-primary {
    background-color: #212529 !important;
    color: white !important;
    border-radius: 5px !important;
    padding: 10px 20px !important;
    text-decoration: none !important;
    font-weight: bold !important;
  }

  .mb-3 {
    margin-bottom: 1rem !important;
  }

  .list-group-item-action {
    color: #495057 !important;
    background-color: #fff !important;
    border-radius: 5px !important;
    padding: 10px 20px !important;
    text-decoration: none !important;
    margin-bottom: 10px !important;
  }

  .list-group-item-action:hover {
    background-color: #f2f2f2 !important;
  }

  .list-group {
    width: 50%;
    margin-top: 20px;
  }

  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;
    line-height: 60px;
    background-color: #212529;
    color: #fff;
    text-align: center;
  }

  .btn-primary:hover {
    background-color: #007bff !important;
    transform: translateY(-2px);
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
  }
</style>

<?php require APPROOT . '/views/inc/header.php'; ?>
<body>
<div style="display: flex; align-items: center; justify-content: center;">
  <div>
    <a href="<?php echo URLROOT; ?>/distributors/add" class="btn btn-primary">
     Request Help
    </a>
  </div>
</div>
<div style="display: flex; align-items: center; justify-content: center;">
  <div class="list-group mt-5">
    <?php foreach($data['distributors'] as $distributors) : ?>
      <a href="<?php echo URLROOT; ?>/distributors/show/<?php echo $distributors->id; ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        <i class="fas fa-user-circle fa-2x mr-3"></i>
        <?php echo $distributors->name?>
        <span class="badge badge-primary badge-pill">
          <i class="fas fa-arrow-right"></i>
        </span>
      </a>
    <?php endforeach; ?>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>

<div class="footer">
  Copyright &copy; 2023 - All Rights Reserved
</div>
</body>
