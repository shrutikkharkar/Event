<!doctype html>
<html lang="en">
  <head>
    <title>Event 1</title>
    <!-- Required meta tags -->
    <script src="logic.js"></script>

    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      
    </div>
    <div class="page-header">
      <h1>VCET-IT Events</h1>
    </div>

    <!--Button-->
    <div>
      <nav class="nav justify-content-center" id="home">
        <button type="button" class="btn btn-info home" >
          <a class="nav-link active" href="index.html" style="color: white;">Home</a>
        </button>

        <button type="button" class="btn btn-info back" >
          <a class="nav-link active" href="pre-entry.php" style="color: white;">Back</a>
        </button>

      </nav>
    </div>

  <!--Form-->
  <div class="container form-box">

    <div class="row">
      
      <div class="col-md-12">

        <!-- <div>

          <h2 id="event2">Register for event 1</h2>
          <br>

          
          <input type="text" name="dept" required>
  
        </div> -->
  
        <form action="connect.php" method="post">

          <div>

            <label for="Event_name">Event:</label>
            <select name="Event_name" id="Event_name">
              <option selected value="base">Select Event</option>
              <?php
                $servername="localhost";
                $username="root";
                $password="";
                $db="event";
                $con = new mysqli($servername,$username,$password,$db);
              
              $sql = "SELECT * FROM event_master";
              $result = $con->query($sql);
              while($row = $result->fetch_array())
              {
                  echo "<option value ='".$row['eventId']."'>".$row['eventName']."</option>";
              }
          ?>


            </select>
          </div>
        
          <div>
          
              <label for="fname">Full name:</label>
              <input type="text" name="fname" required>
          
          </div>
  
          <div>
          
              <label for="Stud_id">College_id:</label>
              <input type="text" name="Stud_id">
          
          </div>
  
          <div>
          
              <label for="email_id">Email id:</label>
              <input type="text" name="email_id" required>
          
          </div>
  
          <div>
          
              <label for="contact_no">Contact number:</label>
              <input type="text" name="contact_no" required>
          
          </div>
  
          <div>
          
              <label for="Year">Year:</label>
              <!-- <input type="text" name="Year" required> -->
              <!--Trial dropdown-->
              <select id="Year" name="Year">
                <option selected value="base">Select Year</option>
                <option value="FE">FE</option>
                <option value="SE">SE</option>
                <option value="TE">TE</option>
                <option value="BE">BE</option>
              </select>
              <!--Trial dropdown-->
          
          </div>
  
          <div>
          
              <label for="dept">Department:</label>
              <!-- <input type="text" name="dept" required> -->
              <select name="dept" id="dept">
                <option selected value="base">Select Department</option>
                <option value="COMPS">COMPS</option>
                <option value="IT">IT</option>
                <option value="MECH">MECH</option>
                <option value="CIVIL">CIVIL</option>
                <option value="EXTC">EXTC</option>
                <option value="INSTRU">INSTRU</option>


              </select>
          
          </div>
  
          <button type="submit" class="register-button">Register</button>
  
  
          
        
        
        
        
        
        
        </form>


        
      </div>
    </div>
      
      


  </div>



  
      
    <!-- Optional JavaScript -->

    <script>
      const urlParams = new URLSearchParams(window.location.search);
      var Event = urlParams.get('event');//eg.Event = 1

       

      var select_Events = document.getElementById("Event_name");
      var options_Events = select_Events.options;
      for(var j=0,option; option=options_Events[j];j++){
        if(option.value == Event){
          select_Events.selectedIndex = j;
        }
      }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>