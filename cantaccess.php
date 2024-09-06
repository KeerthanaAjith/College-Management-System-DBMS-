<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cantaccess.css" rel="stylesheet">
    <link href="C:\Users\Praneeth Reddy\Downloads\download.png" rel="icon">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title>AUMS-Amrita Vidya</title>
</head>
<body>
    <section>
        <p id="headtxt">Can't access your account?</p>
    </section><br>
    <section id="secbox">
        <form method="post" action="cantaccess.php" id="cantaccess">
        <table id="ctab">
            <tr>
                <td>
                    <p id="ctxt">Username:</p>
                </td>
                <td>
                    <input type="text" name="userinput" id="userin">
                </td>
                <td>
                    <p id="ctxt">Email ID:</p>
                </td>
                <td>
                    <input type="email" name="mailinput" id="mailin">
                </td>
                <td>
                    <p id="ctxt">Date of Birth:</p>
                </td>
                <td>
                    <input type="text" name="dobinput" id="dobin">
                </td>
            </tr>
        </table>
        <table id="ctab1">
            <tr>
                <td>
                    <input type="submit" id="subbut" value="Submit">
                </td>
                <td></td>
                <td id="note">
                    <p>Note:User Name/Email/DOB should be correct for the password to be rest</p>
                </td>
            </tr>
        </table>
        </form>
    </section>
</body>
</html>