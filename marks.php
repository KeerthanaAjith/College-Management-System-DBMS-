<?php 
session_start();

if (isset($_SESSION['s_id']) && isset($_SESSION['sname'])) {
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
    <style>
    .inv {
    display: none;
}
</style>
</head>
<body>
    <table id="tabletop">
        <tr>
            <td><img id="topimg" src="https://aumsblr.amrita.edu/cloud-ui/img/cloud-logo.png"></td>
            <td><table id="tabletime">
                <tr>
                    <td>Welcome <?php echo $_SESSION['s_id']; ?></td>
                </tr>
                <tr>
                    <td><span id="time"></span>&nbsp;&nbsp;<span id="DigitalCLOCK" class="clock" onload="showTime()"></span></td>
                </tr>
            </table></td>
            <td id="profileimg">
                <img id="prfl" src="C:\Users\Praneeth Reddy\Documents\DBMS\img.jpg">
            </td>
            <td>
                <div id="homeicn"><a href="#mainui.html"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a></div>
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
       <a href="attandance.php">
           <i id="staricn" class="fa fa-star fa-lg"></i>
       <span class="nav-text">View Attandance</span>
       </a>
       </li>    
       <li>                                 
       <a href="#">
           <i id="staricn"  class="fa fa-star fa-lg"></i>
       <span class="nav-text">View Marks</span>
       </a>
       </li>    
       <li>                                 
       <a href="#">
           <i  id="staricn" class="fa fa-star fa-lg"></i>
       <span class="nav-text">View Registered Course</span>
       </a>
       </li>  
       <li>                                 
        <a href="#">
            <i  id="staricn" class="fa fa-star fa-lg"></i>
        <span class="nav-text">View personal info</span>
        </a>
        </li>  
       </ul>
       </nav>
    </div>
    <div id ="mainbody"> 
       <table style="font-size: 14.5px; color: rgb(39, 38, 38);" id="mainbodytable" >
        <tr>
            <td colspan="2">
                <table style="margin-top: 10px;margin-left: 10px;padding: 5px" border="0" width=75%>
                    <tr>
                        <td style=" font-size: 17px;color: #44b6ae;font-weight: bold;margin-top: 5px;margin-left: 5px;">STUDENT PERFORMANCE REPORT</td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr></td>
                    </tr>
                    <tr style="color: rgb(30,30,30);">
                        <td>Roll No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BL.EN.U4CSE21106</td>
                        <td>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kundrapu Vineetha</td>
                        <td>Academic program:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTech 2021 CSE</td>
                    </tr>
                    <tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
    <td colspan="5">NOTE: CGPA value will be shown ONLY AFTER all the courses that the student has registered in the term has been Published from Registrar's office</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
    <td>Current CGPA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.54</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
                    <tr>
                        <td>Semeister:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select style="padding-left: 10px;padding-right: 30px;padding-top: 5px;padding-bottom: 5px;"  id="target">
                        <option value="">&nbsp;&nbsp;&nbsp;select&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                        </option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                        </td>
                    </tr>
                </table>
                <table style="margin-bottom: 60px; margin-left: 15px;">
                    <tr>
                        <td colspan="4">
                            <div id="1" class="inv"><table border="1" style="border-collapse: collapse; width: 100%;padding-left: 30px">
                                <tbody><tr class="">
                                    <td>
                            <span class="rowBG1"><b>Sem</b></span></td>
                                    <td>
                            <span class="rowBG1"><b>Course Code</b></span></td>
                                    <td>
                            <span class="rowBG1"><b>Course Name<b></b></b></span></td>
                                    <td>
                            <span class="rowBG1"><b>Academic Term Period<b></b></b></span></td>
                                    <td>
                            <span class="rowBG1"><b>Type<b></b></b></span></td>
                                    <td>
                            <span class="rowBG1"><b>Grade</b></span></td>
                            </tr>
                            <tr class="">
                                    <td>
                            <span class="rowBG1">1</span></td>
                                    <td>
                            <span class="rowBG1">19CSE100&nbsp;&nbsp;</span></td>
                                    <td>
                            <span class="rowBG1">Problem Solving and Algorithmic Thinking&nbsp;&nbsp;&nbsp;</span></td>
                                    <td>
                            <span class="rowBG1">2021-2022Odd Semester&nbsp;&nbsp;</span></td>
                                    <td>
                            <span class="rowBG1">Regular&nbsp;&nbsp;</span></td>
                                    <td>
                            <span class="rowBG1">C&nbsp;</span></td>
                            </tr>
                            <tr class="">
                                    <td>
                            <span class="rowBG1">1</span></td>
                                    <td>
                            <span class="rowBG1">19CSE101</span></td>
                                    <td>
                            <span class="rowBG1">Computer Systems Essentials</span></td>
                                    <td>
                            <span class="rowBG1">2021-2022Odd Semester</span></td>
                                    <td>
                            <span class="rowBG1">Regular</span></td>
                                    <td>
                            <span class="rowBG1">B</span></td>
                            </tr>
                            <tr class="">
                                    <td>
                            <span class="rowBG1">1</span></td>
                                    <td>
                            <span class="rowBG1">19CUL101</span></td>
                                    <td>
                            <span class="rowBG1">Cultural Education - I</span></td>
                                    <td>
                            <span class="rowBG1">2021-2022Odd Semester</span></td>
                                    <td>
                            <span class="rowBG1">Regular</span></td>
                                    <td>
                            <span class="rowBG1">C</span></td>
                            </tr>
                            <tr class="">
                                    <td>
                            <span class="rowBG1">1</span></td>
                                    <td>
                            <span class="rowBG1">19ENG111</span></td>
                                    <td>
                            <span class="rowBG1">Technical Communication</span></td>
                                    <td>
                            <span class="rowBG1">2021-2022Odd Semester</span></td>
                                    <td>
                            <span class="rowBG1">Regular</span></td>
                                    <td>
                            <span class="rowBG1">B</span></td>
                            </tr>
                            <tr class="">
                                    <td>
                            <span class="rowBG1">1</span></td>
                                    <td>
                            <span class="rowBG1">19MAT101</span></td>
                                    <td>
                            <span class="rowBG1">Single Variable Calculus</span></td>
                                    <td>
                            <span class="rowBG1">2021-2022Odd Semester</span></td>
                                    <td>
                            <span class="rowBG1">Regular</span></td>
                                    <td>
                            <span class="rowBG1">B+</span></td>
                            </tr>
                            <tr class="">
                                    <td>
                            <span class="rowBG1">1</span></td>
                                    <td>
                            <span class="rowBG1">19MAT102</span></td>
                                    <td>
                            <span class="rowBG1">Matrix Algebra</span></td>
                                    <td>
                            <span class="rowBG1">2021-2022Odd Semester</span></td>
                                    <td>
                            <span class="rowBG1">Regular</span></td>
                                    <td>
                            <span class="rowBG1">B</span></td>
                            </tr>
                            <tr class="">
                                    <td>
                            <span class="rowBG1">1</span></td>
                                    <td>
                            <span class="rowBG1">19MAT111</span></td>
                                    <td>
                            <span class="rowBG1">Multivariable  Calculus</span></td>
                                    <td>
                            <span class="rowBG1">2021-2022Odd Semester</span></td>
                                    <td>
                            <span class="rowBG1">Regular</span></td>
                                    <td>
                            <span class="rowBG1">C</span></td>
                            </tr>
                            <tr class="">
                                    <td>
                            <span class="rowBG1">1</span></td>
                                    <td>
                            <span class="rowBG1">19MEE100</span></td>
                                    <td>
                            <span class="rowBG1">Engineering Graphics - CAD</span></td>
                                    <td>
                            <span class="rowBG1">2021-2022Odd Semester</span></td>
                                    <td>
                            <span class="rowBG1">Regular</span></td>
                                    <td>
                            <span class="rowBG1">P</span></td>
                            </tr>
                            <tr class="">
                                    <td>
                            </td>
                                    <td>
                            </td>
                                    <td>
                            </td>
                                    <td>
                            </td>
                                    <td>
                            <span class="rowBG1"><b>SGPA<b></b></b></span></td>
                                    <td>
                            <span class="rowBG1">6.38</span></td>
                            </tr>
                            </tbody>
                            </table>
                                
                            </div>
                            <div id="2" class="inv"><table border="1" style="border-collapse: collapse; width: 100%;padding-left: 30px">
                            <tbody><tr class="">
		<td>
<span class="rowBG1"><b>Sem</b></span></td>
		<td>
<span class="rowBG1"><b>Course Code</b></span></td>
		<td>
<span class="rowBG1"><b>Course Name<b></b></b></span></td>
		<td>
<span class="rowBG1"><b>Academic Term Period<b></b></b></span></td>
		<td>
<span class="rowBG1"><b>Type<b></b></b></span></td>
		<td>
<span class="rowBG1"><b>Grade</b></span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19CSE102</span></td>
		<td>
<span class="rowBG1">Computer Programming</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">P</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19EEE111</span></td>
		<td>
<span class="rowBG1">Electrical and Electronics Engineering</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">F</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19MAT112</span></td>
		<td>
<span class="rowBG1">Linear Algebra</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">F</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19MAT115</span></td>
		<td>
<span class="rowBG1">Discrete Mathematics</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">F</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19PHY101</span></td>
		<td>
<span class="rowBG1">Engineering Physics - A</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">F</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19CSE103</span></td>
		<td>
<span class="rowBG1">User Interface Design</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">C</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19CSE111</span></td>
		<td>
<span class="rowBG1">Fundamentals of Data Structures</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">F</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19CUL111</span></td>
		<td>
<span class="rowBG1">Cultural Education - II</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">C</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2&nbsp;</span></td>
		<td>
<span class="rowBG1">19EEE182&nbsp;&nbsp;</span></td>
		<td>
<span class="rowBG1">Electrical and Electronics Engineering Practice&nbsp;&nbsp;&nbsp;</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester&nbsp;&nbsp;&nbsp;</span></td>
		<td>
<span class="rowBG1">Regular&nbsp;&nbsp;</span></td>
		<td>
<span class="rowBG1">A&nbsp;&nbsp;</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19MEE181</span></td>
		<td>
<span class="rowBG1">Manufacturing Practice</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">P</span></td>
</tr>
<tr class="">
		<td>
</td>
		<td>
</td>
		<td>
</td>
		<td>
</td>
		<td>
<span class="rowBG1"><b>SGPA<b></b></b></span></td>
		<td>
<span class="rowBG1">2.32</span></td>
</tr>
</tbody>
</table>

                            </div>
                            <div id="3" class="inv"><table border="1" style="border-collapse: collapse; width: 100%;padding-left: 30px">
                            <tbody><tr class="">
		<td>
<span class="rowBG1"><b>Sem</b></span></td>
		<td>
<span class="rowBG1"><b>Course Code</b></span></td>
		<td>
<span class="rowBG1"><b>Course Name<b></b></b></span></td>
		<td>
<span class="rowBG1"><b>Academic Term Period<b></b></b></span></td>
		<td>
<span class="rowBG1"><b>Type<b></b></b></span></td>
		<td>
<span class="rowBG1"><b>Grade</b></span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3</span></td>
		<td>
<span class="rowBG1">19CSE111</span></td>
		<td>
<span class="rowBG1">Fundamentals of Data Structures</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">P</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19EEE111</span></td>
		<td>
<span class="rowBG1">Electrical and Electronics Engineering</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">P</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">2</span></td>
		<td>
<span class="rowBG1">19MAT112</span></td>
		<td>
<span class="rowBG1">Linear Algebra</span></td>
		<td>
<span class="rowBG1">2021-2022Even Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">P</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3</span></td>
		<td>
<span class="rowBG1">19AVP201</span></td>
		<td>
<span class="rowBG1">Amrita Values Program-1</span></td>
		<td>
<span class="rowBG1">2022-2023Odd Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">B</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3</span></td>
		<td>
<span class="rowBG1">19CSE201</span></td>
		<td>
<span class="rowBG1">Advanced Programming</span></td>
		<td>
<span class="rowBG1">2022-2023Odd Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">F</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3</span></td>
		<td>
<span class="rowBG1">19CSE202</span></td>
		<td>
<span class="rowBG1">Database Management System</span></td>
		<td>
<span class="rowBG1">2022-2023Odd Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">C</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3</span></td>
		<td>
<span class="rowBG1">19CSE204</span></td>
		<td>
<span class="rowBG1">Object Oriented Paradigm</span></td>
		<td>
<span class="rowBG1">2022-2023Odd Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">B</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3</span></td>
		<td>
<span class="rowBG1">19CSE205</span></td>
		<td>
<span class="rowBG1">Program Reasoning</span></td>
		<td>
<span class="rowBG1">2022-2023Odd Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">P</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3</span></td>
		<td>
<span class="rowBG1">19ECE204</span></td>
		<td>
<span class="rowBG1">Digital Electronics and Systems</span></td>
		<td>
<span class="rowBG1">2022-2023Odd Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">F</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3&nbsp;&nbsp;</span></td>
		<td>
<span class="rowBG1">19ECE282&nbsp;&nbsp;</span></td>
		<td>
<span class="rowBG1">Digital Electronics and Systems Lab&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
		<td>
<span class="rowBG1">2022-2023Odd Semester&nbsp;&nbsp;</span></td>
		<td>
<span class="rowBG1">Regular&nbsp;&nbsp;&nbsp;</span></td>
		<td>
<span class="rowBG1">C&nbsp;&nbsp;</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3</span></td>
		<td>
<span class="rowBG1">19MAT201</span></td>
		<td>
<span class="rowBG1">Numerical Methods</span></td>
		<td>
<span class="rowBG1">2022-2023Odd Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">C</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3</span></td>
		<td>
<span class="rowBG1">19MAT202</span></td>
		<td>
<span class="rowBG1">Optimization Techniques</span></td>
		<td>
<span class="rowBG1">2022-2023Odd Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">P</span></td>
</tr>
<tr class="">
		<td>
<span class="rowBG1">3</span></td>
		<td>
<span class="rowBG1">19CSE180</span></td>
		<td>
<span class="rowBG1">Computer Hardware Essentials</span></td>
		<td>
<span class="rowBG1">2022-2023Odd Semester</span></td>
		<td>
<span class="rowBG1">Regular</span></td>
		<td>
<span class="rowBG1">B</span></td>
</tr>
<tr class="">
		<td>
</td>
		<td>
</td>
		<td>
</td>
		<td>
</td>
		<td>
<span class="rowBG1"><b>SGPA<b></b></b></span></td>
		<td>
<span class="rowBG1">3.9</span></td>
</tr>
</tbody>
</table>

                            </div>
                            <div id="4" class="inv"><table border="1" style="border-collapse: collapse; width: 100%;padding-left: 30px">
                            <tbody><tr class="">
		<td>
<span class="rowBG1"><b>Sem&nbsp;&nbsp;&nbsp;</b></span></td>
		<td>
<span class="rowBG1"><b>Course Code&nbsp;&nbsp;</b></span></td>
		<td>
<span class="rowBG1"><b>Course Name&nbsp;&nbsp;<b></b></b></span></td>
		<td>
<span class="rowBG1"><b>Academic Term Period&nbsp;&nbsp;&nbsp;<b></b></b></span></td>
		<td>
<span class="rowBG1"><b>Type&nbsp;&nbsp;<b></b></b></span></td>
		<td>
<span class="rowBG1"><b>Grade&nbsp;&nbsp;</b></span></td>
</tr>

                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
</table>
</div>
</body>
</html>
<script>
            document.getElementById('target').addEventListener('change', function () {'use strict';
                    var vis = document.querySelector('.vis'),   
                        target = document.getElementById(this.value);
                    if (vis !== null) {
                        vis.className = 'inv';
                    }
                    if (target !== null ) {
                        target.className = 'vis';
                    }
            });
        </script>
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