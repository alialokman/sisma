<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome to SISMA Admin Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>

<!-- Bootstrap -->

</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="photo/sisma.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>SISMA</b></h4>
    <p class="w3-text-grey">UiTM Cawangan Kelantan</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Home</a> 
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT CLUB</a> 
  <a href="#committee" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>COMMITTEE</a> 
  <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>MEMBERSHIP</a>
<a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACTIVITY</a>  
    <a href="#achievements" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ACHIEVEMENTS</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel  w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-youtube w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Society of Information System Management (SISMA) Club Administration</b></h1>

 <!-- Images of SISMA LOGO -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <p align="center"><img src="photo/logosisma.png" alt="Me" style="width:50%"></p>
    </div>
    

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4><b>About Club</b></h4>
    <p>Our academic club, established in 2022, is a vibrant community dedicated to fostering academic excellence and intellectual growth among its diverse members. Founded on principles of collaboration, critical thinking, and inclusivity of our lecturers, SISMA Club provide a supportive environment where students from the Information Management Faculty can succeed from various disciplines and engage in various academic pursuits.</p>
    <hr>	


<!-- Committee Section -->
<div class="w3-container" style="padding:128px 16px" id="committee">
  <h3 class="w3-center">COMMITTEE MEMBERS</h3>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/rifqi.jpg" alt="John" style="width:100%">
        <div class="w3-container">
          <h3>ARIF RIFQI</h3>
          <p class="w3-opacity">PRESIDENT</p>
     
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/alia.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>SITI NOR ALIA</h3>
          <p class="w3-opacity">VICE PRESIDENT</p>
     
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/amalin.jpg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>AMALIN</h3>
          <p class="w3-opacity">SECRETARY</p>

          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/ain.jpg" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>AIN SYAFIQAH</h3>
          <p class="w3-opacity">TREASURER</p>
 
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/syakira.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>SITI NURSYAKIRA</h3>
          <p class="w3-opacity">EXCO MULTIMEDIA</p>
    
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/adibah.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>ADIBAH MAISARAH</h3>
          <p class="w3-opacity">EXCO PROTOCOL</p>
    
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/syafiqah.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>NUR SYAFIQAH</h3>
          <p class="w3-opacity">EXCO COMMUNICATION</p>

          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="photo/ilyana.jpg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>ALIFAH ILYANA</h3>
          <p class="w3-opacity">EXCO ACADEMIC</p>
      
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
  </div>
</div>
</div>

<!-- Membership Section -->
    <div class="w3-container" style="padding:10px 16px" id="membership">
  <h3 class="w3-center">Membership Form</h3>
  <br>
  
</div>
  
  
    </p>
    <hr>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td>
              <a href="edit_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa fa-pencil-square fs-5 me-3"></i></a>
              <a href="delete_membership.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <br>
  <div class="w3-container" style="padding:10px 16px" id="activity">
  <h3 class="w3-center">ACTIVITY</h3>
  <p class="w3-center w3-large">Events that had been held</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="photo/imtogether.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="IM 2Gether">
    </div>
    <div class="w3-col l3 m6">
      <img src="photo/freshman.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Freshman Odyssey">
    </div>
    <div class="w3-col l3 m6">
      <img src="photo/exploringcareer.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Exploring a Career">
    </div>
    <div class="w3-col l3 m6">
      <img src="photo/lovescam.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Lovescam Event">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="photo/teambuilding.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="SISMA Team Building">
    </div>
    <div class="w3-col l3 m6">
      <img src="photo/alumnaitalk.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Alumnai Talk">
    </div>
    <div class="w3-col l3 m6">
      <img src="photo/csr1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="CSR1">
    </div>
    <div class="w3-col l3 m6">
      <img src="photo/csr2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="CSR2">
    </div>
     <div class="w3-col l3 m6">
      <img src="photo/kembarainovasi.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Kembara Inovasi">
    </div>
     <div class="w3-col l3 m6">
      <img src="photo/saf.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sukan Antara Fakulti">
    </div>
     <div class="w3-col l3 m6">
      <img src="photo/pencarian.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Pencarian AJK"
    </div>
     <div class="w3-col l3 m6">
      <img src="photo/retronight.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="PSM Appreciation Dinner"
    </div>
  </div>
</div>
</div>
  


 
 <!-- Achievements Section -->
  <div class="w3-container" style="padding:10px 16px" id="achievements">
  <h3 class="w3-center">Achievements</h3>
  <p class="w3-center w3-large">Achieved by the SISMA Club</p>
  
  
  <br>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Club Completion</th>
          <th scope="col">Date</th>
          <th scope="col">Description</th>
         
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `achievement`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["achievement_id"] ?></td>
            <td><?php echo $row["achievement_name"] ?></td>
            <td><?php echo $row["achievement_date"] ?></td>
            <td><?php echo $row["achievement_desc"] ?></td>
            
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
<br><br><br>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>sisma.uitmck@uitm.edu.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>UiTM Machang, Kelantan</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>0123456789</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>


  <!-- Footer -->
  
  <footer class="w3-center w3-black w3-padding-64">
  <a href="#about" onclick="w3_close()" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-youtube w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
<!-- End page content -->

</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
