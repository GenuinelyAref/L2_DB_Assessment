<?php include("topbit.php");

      $find_sql = "SELECT * FROM `food_details`
      JOIN category ON (food_details.CategoryID = category.CategoryID)
      ";
      $find_query = mysqli_query($dbconnect, $find_sql);
      $find_rs = mysqli_fetch_assoc($find_query);
      $count = mysqli_num_rows($find_query);

?>

  <div class="box main">
    <h2>All Results</h2>

    <?php include "results.php"; ?>

  </div> <!-- / main -->

<?php include("bottombit.php") ?>
