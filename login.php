<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet">
    <link href="C:\Users\Praneeth Reddy\Downloads\download.png" rel="icon">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title>AUMS-Amrita Vidya</title>
</head>
<body>
    <img id="logo" src="https://aumsblr.amrita.edu/cas/images/logo.png">
    <form method="post" action="loginconnect.php" id="logform">
        <?php if (isset($_GET['error'])) { ?>
        <section id="hiddenn">
            <table id="hiddentable"> 
                <tr>
                    <td>
                        <img src="https://aumsblr.amrita.edu/cas/images/error.png" id="invalidimg">
                    </td>
                    <td>
                        <p id="invalidtxt"><?php echo $_GET['error'];?></p>
                    </td>
                </tr>
            </table>
        </section><?php }?>
        <p id="t1">Sign In</p><br>
        <input type="text" placeholder="Username" name="uname" id="iuser"><br>
        <input type="password" placeholder="Password" name="password" id="ipass"><br>
        <table id="ltable">
            <tr>
                <td id="rcol"><input type="submit" id="login" value="LOGIN"></td>
                <td id="lcol"><p id="cant"><a href="https://aumsblr.amrita.edu/opac/biblio/opacSearch?searchYN=N">OPAC Search</a></p></td>
            </tr>
            <tr>
                <td></td>
                <td id="lcol"><p id="cant"><a href="cantaccess.php">Can't access your account?</a></p></td>
            </tr>
        </table>
    </form>
    <p id="cpywrt">Copyright © 2020 Amrita Technologies.</p>
</body>
</html>