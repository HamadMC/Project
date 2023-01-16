<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">اربح</h1>
      <p class="lead fw-normal">للسحب على ربح نسخه مجانيه</p>
      <h3 id="count-down"></h3>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>


  <ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>


<div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>

  <div class="mb-3">
    <label for="FirstName" class="form-label">الاسم الاول</label>
    <input type="text" name="FirstName" class="form-control" id="FirstName" value="<?php echo $FirstName ?>">
    <div class="form-text error"><?php echo $Error['FirstNameError'] ?></div>
</div>

<div class="mb-3">
    <label for="LastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastname" class="form-control" id="LastName" value="<?php echo $LastName ?>">
    <div class="form-text error"><?php echo $Error['LastNameError'] ?></div>
</div>


<div class="mb-3">
    <label for="Email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="Email" value="<?php echo $Email ?>">
    <div class="form-text error"><?php echo $Error['EmailError'] ?></div>
</div>

<button type="sumbit" name="submit" class="btn btn-primary">ارسل المعلومات</button>

</form>
</div>
</div>


<button id="winner" type="button" class="btn btn-primary">الرابح</button>

   <div id="cards" class="row mb-5 pb-5">
        <?php foreach($users as $users): ?>

            <div class="col-sm-6">
                <div class="card my-2 bg-light">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($users['firstname']) . ' ' . htmlspecialchars($users['lastname']) . '<br>' . htmlspecialchars($users['email']); ?> </h5>
                        <p class="card-text"><?php htmlspecialchars($users['firstname']) . ' ' . htmlspecialchars($users['lastname']) . '<br>' . htmlspecialchars($users['email']); ?> </p>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
   </div>
      
<?php include_once './parts/footer.php'; ?>