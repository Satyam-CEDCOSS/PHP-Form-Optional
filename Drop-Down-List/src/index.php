<form action="./check.php" method="post">
  <div>
    <select name="nothing">
      <?php
      $products = array("Mobile", "Laptop", "Tablet", "Camera");
      foreach ($products as $value) {
        $txt .= "<option>".$value."</option>";
      }
      echo $txt;
      ?>
    </select>
  </div>
</form>