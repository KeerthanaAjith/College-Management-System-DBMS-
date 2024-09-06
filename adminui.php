<?php 
session_start();

if (isset($_SESSION['a_id']) && isset($_SESSION['a_name'])) {
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
                <div id="homeicn"><a href="admin.html"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></div>
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
       <a href="deletestudent.php">
           <i  id="staricn" class="fa fa-star fa-lg"></i>
       <span class="nav-text">Delete Students Record</span>
       </a>
       </li>  
       <li>                                 
        <a href="editstudent.php">
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
            <a href="#">
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
                <td colspan="2">
                    <div style="text-align: center;font-size: 35px;margin-top: 10px;color: #2a8875;">Welcome Back <?php echo $_SESSION['a_name']; ?></div>
                </td>
            </tr>
            <tr>
                <td colspan="2"align="center">
                    <table>
                        <tr>
                            <td>
                                <div style="font-size: 25px;color: #2a8875;text-decoration: underline;margin-left: 10px;">Students:</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td><a href="studentdetails.php"><div id="coursemem"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;<span class="coursemen-text">View Students Details</span></div></a></td>
                                        <td><a href="addstudents.php"><div id="coursemem"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;<span class="coursemen-text">Add New Student</span></div></a></td>
                                        <td><a href="deletestudent.php"><div id="coursemem"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;<span class="coursemen-text">Delete Student's Record</span></div></a></td>
                                        <td><a href="editstudent.php"><div id="coursemem"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;<span class="coursemen-text">Edit Student's Details</span></div></a></td>
                                        <td><a href="#"><div id="coursemem"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;<span class="coursemen-text">View Registered Course</span></div></a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <table>
                        <tr>
                            <td>
                                <div style="font-size: 25px;color: #2a8875;text-decoration: underline;margin-left: 10px;">Staff</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td><a href="staffdetails.php"><div id="coursemem"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;<span class="coursemen-text">View Staff Details</span></div></a></td>
                                        <td><a href="#"><div id="coursemem"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;<span class="coursemen-text">Add New Staff Members</span></div></a></td>
                                        <td><a href="#"><div id="coursemem"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;<span class="coursemen-text">Delete Staff Member record</span></div></a></td>
                                        <td><a href="#"><div id="coursemem"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;<span class="coursemen-text">Edit Staff Details</span></div></a></td>
                                        <td><a href="#"><div id="coursemem"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;<span class="coursemen-text">View Course Assigned</span></div></a></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table id="quote">
                        <tr>
                            <td>
                                <div id="quotehead">
                                    Message Of The Day:
                                </div>
                            </td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td>
                                <div style="color: brown;font-style: italic;font-weight: bold;text-align: center;">
                                    Om Amriteswaryai Namah
                                </div>
                            </td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td>
                                <div style="color:#ff00ff;font-weight: bold;text-align: center;">
                                    "Pray: May all reach the shore of peace, spreading the sweet holy fragrance of Love and vibrations of unity and harmony."
                                </div>
                            </td>
                        </tr>
                        <tr><td><br></td></tr>
                        <tr><td><br></td></tr>
                        <tr><td><br></td></tr>
                        <tr>
                            <td>
                                <div style="color: brown;font-weight: bold;text-align:left;margin-left: 20px;">
                                    Chancellor,
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="color: brown;font-weight: bold;text-align:left;margin-left: 20px;margin-bottom: 40px;">
                                    Sri Mata Amritanandamayi Deyi
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 50%;">
                    <table id="notifytab">
                       <tr>
                           <td>
                               <div id="noticequote">Recent Announcements</div>
                           </td>
                       </tr>
                       <tr><td><br></td></tr>
                       <tr><td><br></td></tr>
                       <tr>
                           <td>
                               <div style="font-size:28px;margin-left: 30px;color: #2a8875;">No New Announcements</div>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <div style="color: rgb(52, 51, 51);margin-left: 32px;">(viewing Announcements from the last 10 days)</div>
                           </td>
                       </tr>
                       <tr><td><br></td></tr>
                       <tr><td><br></td></tr>
                       <tr><td><br></td></tr>
                       <tr><td><br></td></tr>
                       <tr><td><br></td></tr>
                       <tr><td><br></td></tr>
                       <tr><td><br></td></tr>
                       <tr><td><br></td></tr>
                       <tr><td><br></td></tr>
                       
   
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
     header("Location: login.php");
     exit();
}
 ?>