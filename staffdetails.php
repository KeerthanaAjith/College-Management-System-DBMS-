<?php 
session_start();

if (isset($_SESSION['a_id']) && isset($_SESSION['a_name'])) {
?>
<?php
 $user = 'root';
 $password = '';
 $database = 'amrita';
 $servername='localhost:3306';
 $mysqli = new mysqli($servername, $user,
                 $password, $database);
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
 $sql = " SELECT * FROM staff";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="mainui.css" rel="stylesheet">
    <link href="C:\Users\Praneeth Reddy\Downloads\download.png" rel="icon">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Welcome to Amrita Academic Management suite Home</title>
</head>
<body>
    <table id="tabletop">
        <tr>
            <td><img id="topimg" src="https://aumsblr.amrita.edu/cloud-ui/img/cloud-logo.png"></td>
            <td><table id="tabletime">
                <tr>
                    <td>Welcome <?php echo $_SESSION['a_id']; ?></td>
                </tr>
                <tr>
                    <td><span id="time"></span>&nbsp;&nbsp;<span id="DigitalCLOCK" class="clock" onload="showTime()"></span></td>
                </tr>
            </table></td>
            <td id="profileimg">
                <img id="prfl" src="C:\Users\Praneeth Reddy\Documents\DBMS\img.jpg">
            </td>
            <td>
                <div id="homeicn"><a href="#adminui.php"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></div>
            </td>
            <td>
                <div id="bellicn"><a href="#"><i class="fa fa-bell"></i></a></div>
            </td>
            <td>
                <div id="globeicn"><a href="#"><i class="fa fa-globe"></i></a></div>
            </td>
            <td><div class="dropdown">
                <button class="profileicn"><i class="fa fa-user"></i><i class="fa fa-angle-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">password</a>
                    <a href="#">personal info</a>
                    <a href="logout.php">log out</a>
                </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="sidenav">
    <nav class="main-menu"> 
        <div id="tpmrgn"></div> 
       <ul>
        <li>
            <a><i>    </i>
            <span class="nav-text"style="font-size: 19px;font-family: 'Times New Roman', Times, serif;text-decoration: underline;margin-bottom: 7px;">Students</span>
            </a>
        </li>
       <li>                                   
       <a href="studentdetails.php">
           <i id="staricn" class="fa fa-star fa-lg"></i>
       <span class="nav-text">View Students Details</span>
       </a>
       </li>    
       <li>                                 
       <a href="addstudents.php">
           <i id="staricn"  class="fa fa-star fa-lg"></i>
       <span class="nav-text">Add New Students</span>
       </a>
       </li>    
       <li>                                 
       <a href="#">
           <i  id="staricn" class="fa fa-star fa-lg"></i>
       <span class="nav-text">Delete Students Record</span>
       </a>
       </li>  
       <li>                                 
        <a href="#">
            <i  id="staricn" class="fa fa-star fa-lg"></i>
        <span class="nav-text">Edit Students Details</span>
        </a>
       </li>
       <li>
        <a><i>    </i>
        <span class="nav-text"style="font-size: 19px;font-family: 'Times New Roman', Times, serif;text-decoration: underline;margin-bottom: 7px;">Staff</span>
        </a>
    </li>
        <li>                                 
            <a href="staffdetails.php">
                <i id="staricn"  class="fa fa-star fa-lg"></i>
            <span class="nav-text">View Staff Details</span>
            </a>
            </li> 
        <li>                                 
            <a href="addstaff.php">
                <i id="staricn"  class="fa fa-star fa-lg"></i>
            <span class="nav-text">Add New Staff Members</span>
            </a>
            </li>    
            <li>                                 
            <a href="#">
                <i  id="staricn" class="fa fa-star fa-lg"></i>
            <span class="nav-text">Delete Staff Member</span>
            </a>
            </li>  
            <li>                                 
             <a href="#">
                 <i  id="staricn" class="fa fa-star fa-lg"></i>
             <span class="nav-text">Edit Staff Detail</span>
             </a>
             </li>
       </ul>
       </nav>
    </div>
    <div id ="mainbody"> 
        <table id="mainbodytable">
            <tr>
                <td style="text-align: center;font-size: 35px;margin-top: 10px;color: #2a8875;">Staff details</td>
            </tr>
            <tr>
                <td>
            <table border =1 style="width: 80%;align-items: center;text-align: center;margin-left: 80px;margin:10px;">
            <tr>
                <th>reg.no</th>
                <th>name</th>
                <th>mobile</th>
            </tr>
            <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['f_id'];?></td>
                <td><?php echo $rows['f_name'];?></td>
                <td><?php echo $rows['mobile'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
            </td>
            </tr>
        </table>
       </div>
    </div>
<script>
function showTime(){
    var date = new Date();
    var h = date.getHours(); 
    var m = date.getMinutes(); 
    var s = date.getSeconds(); 
    var session = "AM";
    if(h == 0){
        h = 12;
    }
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("DigitalCLOCK").innerText = time;
    document.getElementById("DigitalCLOCK").textContent = time; 
    setTimeout(showTime, 1000); 
}
showTime();
var datetime = new Date().toDateString();
console.log(datetime); // it will represent date in the console of developer tool
document.getElementById("time").textContent = datetime; 
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>
<?php }else{
     header("Location: admin.php");
     exit();
}
 ?>