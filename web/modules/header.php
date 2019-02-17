</head>
<body>
<?php include_once "../firebase/firebaseInit.php";?>
<script type="text/javascript">
    var currentUID;
    var currentName;
    updateLinks = function() {
        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                // User is signed in.
                currentUID = user.uid;
                currentName = user.displayName;
                document.getElementById("menuItems").style.display = "block";
                document.getElementById("signInMsg").style.display = "none";
                document.getElementById("firebaseui-auth-container").style.display = "none";
                document.getElementById("signedInMsg").style.display = "block";
            } else {
                // User is signed out.
                document.getElementById("menuItems").style.display = "none";
                document.getElementById("signInMsg").style.display = "block";
                document.getElementById("firebaseui-auth-container").style.display = "block";
                document.getElementById("signedInMsg").style.display = "none";
            }
        }, function(error) {
            console.log(error);
        });
    };
    window.addEventListener('load', function() {
        updateLinks()
    });
</script>

    <!--    Took this code from W3 Schools
    https://www.w3schools.com/howto/howto_js_mobile_navbar.asp-->
    <!-- Top Navigation Menu -->
    <div class="topnav">
        <h1 id="pageTitle">Play Tracker</h1>
        <!-- Navigation links (hidden by default) -->
        <div id="myLinks">
            <a href="myPlays.php" onclick="location.href=this.href+'?uid='+currentUID+'&dn='+currentName;return false;">View my Plays</a>
            <a href="myGames.php" onclick="location.href=this.href+'?uid='+currentUID+'&dn='+currentName;return false;">View my Games</a>
            <a href="addPlay.php" onclick="location.href=this.href+'?uid='+currentUID+'&dn='+currentName;return false;">Add a Play</a>
            <a href="addGame.php" onclick="location.href=this.href+'?uid='+currentUID+'&dn='+currentName;return false;">Add a Game</a>
            <a href="latestPlays.php">Recent Plays</a>
            <a href="index.php" onclick="firebase.auth().signOut();">Sign Out</a>
        </div>
        <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
        <a id="menuItems" href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>