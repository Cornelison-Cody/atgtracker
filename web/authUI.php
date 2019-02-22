<?php include_once'../firebase/firebaseInit.php'; ?>


<script src="js/authUI.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    updateLinks = function() {
        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                // User is signed in.
                $(document).ready(function() {
                    $.ajax({
                        data: 'uid=' + user.uid + '&dn=' + user.displayName,
                        url: 'addUser.php',
                        method: 'POST',
                    })
                });
                document.getElementById("signInMsg").style.display = "none";
                document.getElementById("firebaseui-auth-container").style.display = "none";
                document.getElementById("signedInMsg").style.display = "block";
                document.getElementById('menuItems').style.display = 'block';
            } else {
                // User is signed out.
                $(document).ready(function() {
                    $.ajax({
                        url: 'signOut.php',
                        method: 'POST',
                    })
                });
                document.getElementById("signInMsg").style.display = "block";
                document.getElementById("firebaseui-auth-container").style.display = "block";
                document.getElementById("signedInMsg").style.display = "none";
                document.getElementById('menuItems').style.display = 'none';
            }
        }, function(error) {
            console.log(error);
        });
    };
    window.addEventListener('load', function() {
        updateLinks()
    });
</script>

<style>
    form {
        border: none;
        box-shadow: none;
        margin: 0;
        padding: 0;
        background-image: none;
    }
</style>
<div id="signInMsg" class="topMessage">
    <h3>Please sign in with your Google account to continue.</h3>
</div>
<!-- The surrounding HTML is left untouched by FirebaseUI.
     Your app may use that space for branding, controls and other customizations.-->
<div id="firebaseui-auth-container"></div>