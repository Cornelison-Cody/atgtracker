<?php
include_once "../firebase/firebaseInit.php";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            // User is signed in.
            $(document).ready(function() {
                $.ajax({
                    data: 'uid=' + user.uid + '&dn=' + user.displayName,
                    url: 'addUser.php',
                    method: 'POST',
                    success: function (response) {
                        // window.location.href = response;
                        alert(response);
                    }
                })
            });
        } else {
            // User is signed out.
        }
    }, function(error) {
        console.log(error);
    });

</script>