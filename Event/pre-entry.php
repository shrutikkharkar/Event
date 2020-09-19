<!-- <?php

include_once('master.php');

?> -->

<!doctype html>
<html lang="en">
  <head>
    <title>Pre entry</title>
    <!-- Required meta tags -->
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="logic.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="page-header">
        <h1>VCET-IT Events</h1>
      </div>
  
      <!--Button-->
      <nav class="nav justify-content-center" id="home">
        <button type="button" class="btn btn-info">
          <a class="nav-link active" href="index.html" style="color: white;">Home</a>
        </button>
      </nav>
     

    <div>
      <h2>Upcoming Events</h2>
    </div>
    <br><br>

    <!--Main content end here-->
    <div class="container">
      <div class="form-row">

        
        
        <?php

        $servername="localhost";
        $username="root";
        $password="";
        $db="event"; // Database Name
        $con = new mysqli($servername,$username,$password,$db);
        if(!$con)
        {
            die('could not connect'.mysql_error());
        }

        $sql = "SELECT * FROM event_master;";
        $result = $con->query($sql);

        while($row = mysqli_fetch_array($result))
        {
          echo'<div class="col-md-6">
                  <div class="card upcoming-events">
                    <div class="card-body">
                      <h3 class="card-title">'.$row['eventName'].
                        '<button id="event'.$row['eventId'].'" onclick="nextPage(this)" class="btn btn-primary register-for-event">Register</button>
                      </h3>
                      <p class="card-text">'.$row['eventDescription'].'</p>

                        <a href="#" class="event-details-button">Event details</a>
                    </div>
                  </div>
                </div>';
        }
                
        ?>
        
          
        

        
      </div>
    </div>
  
        
   

      
    <!-- Optional JavaScript -->
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
      <script>

        function nextPage(btn)
        {
          var ButtonId = btn.id;
          var eventId = ButtonId.substring(5);
          // console.log("Button ID : " + ButtonId);
          // console.log("Event ID : " + eventId);

          window.location.href = "registration.php?event=" + eventId;
        }


      </script>
  
  </body>
</html>