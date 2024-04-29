<?php
  $Age = $_POST['years'];
  $Rating = "You can watch";
  if ($Age>=18) {
      $Rating="You can watch R Rated Movies";
  } 
  else if ($Age>=13) {
      $Rating="You can watch PG-13 movies";
  }
  else if ($Age>=10) {
      $Rating="You can watch PG movies alone";
  } 
  else {
      $Rating="You can watch G movies";
  }
  if ($Age<0||round($Age)!=$Age||$Age==null||$Age=="") {
      $Rating="Please enter a valid age";
  }
?>
<h3>Result:</h3>
<?php echo$Rating?> Thanks for verifying your age!