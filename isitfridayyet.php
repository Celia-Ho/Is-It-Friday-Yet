<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Is It Friday Yet?</title>
    <style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: black;
    }
    #main-content {
      margin: 30px;
      text-align: center;
      color: skyblue;
    }
    #main-content h1 {
      font: 40px Arial, Helvetica, sans-serif;
    }
    #main-content p {
      font: 24px "Times New Roman", Times, Georgia, serif;
    }
    #main-content p strong {
      font-size: 70px;
      color: white;
    }
  	</style>
  </head>
  <body>
    <div id="main-content">
      <h1>Is It Friday Yet?</h1>
      
      <p>
        <?php date_default_timezone_set("America/New_York"); ?>

        <!-- date("l") displays full name of the day of the week -->
        <!-- <?php echo date("l"); ?><br />  -->
        <!-- date("D") displays short version of the day of the week -->
        <!-- <?php echo date("D"); ?><br /> -->
        <!-- date("N") displays numeric representation of the day of the week -->
        <!-- <?php echo date("N"); ?><br /> -->

        <!-- getdate() returns an array of keys.\ -->
        <!-- <pre>
          <?php print_r(getdate())?>
        <pre> -->

        <!-- getdate()['weekday'] displays full name of the day of the week -->
        <!-- <?php echo getdate()['weekday']; ?><br />  -->
        <!-- getdate()['wday'] displays numerical version of the day of the week -->
        <!-- <?php echo getdate()['wday']; ?><br /> -->

        <!-- strftime("%A") displays full name of the day of the week -->
        <!-- <?php echo strftime("%A"); ?><br />  -->
        <!-- strftime("%a") displays short version of the day of the week -->
        <!-- <?php echo strftime("%a"); ?><br />  -->
        <!-- strftime("%u") displays numerical day of the week with Sunday as 7 -->
        <!-- <?php echo strftime("%u"); ?><br /> -->
        <!-- strftime("%w") displays numerical day of the week with Sunday as 0 -->
        <!-- <?php echo strftime("%a"); ?><br /> -->

        <?php
        if(date('D') == 'Fri') {
          echo "Woo Hoo! It is Friday!!!";
        } else {
          echo "Sorry, it is not Friday yet.<br />";
          $remaining = 5 - date('N');
          if($remaining < 0) {$remaining += 7;}
          echo "Only {$remaining} more days to go.";
        }
          
        ?>
      </p>
      
    </div>
    
  </body>
</html>
