<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>e-Voting</title>
</head>

<body>
    <nav>
    <div class="navi" id="navi">
        <!-- <i class="fa fa-times" onclick="hideMenu()"></i> -->
        <ul>
            <li><h4>Vote</h4></li>
            <li><a href="front.php">Home</a></li>
            <li><a href="aboutUs.php">Know Us</a></li>
        </ul>
    </div>
    <!-- <i class="fa fa-bars" onclick="showMenu()"></i> -->
</nav>
    <div>
        <div class="banner">
            <div class="left-column">
                <img src="hands.jpg">
            </div>
            <div class="right-column">
                <h1>Login Here</h1>

                <form action="api/login.php" method="post"> 
                    
                    <div class="inputbox">
                        <input type="text" name="username"  placeholder="Username" autocomplete="off" required>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                    </div>

                    <div class="selectbox">
                        <select name="role">
                             <option value="1">Voter</option>
                             <option value="2">Candidate</option>
                             <option value="3">Admin</option>
                         </select>
                      </div>
                    <input type="submit" name="submit"  class="send-btn" value="Login">
                </form>
            </div>
        </div>
    </div>
    <!-- Javascript part for navigation -->
    <!-- <script>
         var navi= document.getElementById("navi");
        function showMenu(){
            navi.style.right="0";
        }
        function hideMenu(){
            navi.style.right="-200px";
        }
    </script> -->
</body>
</html>