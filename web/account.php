<!DOCTYPE html>
<html>
<head>
    <?php include'../firebase/firebaseInit.php'?>
    <meta charset="UTF-8">
    <title>Sample FirebaseUI App</title>
    <script type="text/javascript">
        initApp = function() {
            firebase.auth().onAuthStateChanged(function(user) {
                if (user) {
                    // User is signed in.
                    var displayName = user.displayName;
                    var uid = user.uid;
                    user.getIdToken().then(function(accessToken) {
                        document.getElementById('sign-in-status').textContent = 'Signed in';
                        document.getElementById('sign-in').textContent = 'Sign out';
                        document.getElementById('account-details').textContent = JSON.stringify({
                            displayName: displayName,
                            uid: uid,
                        }, null, '  ');
                    });
                } else {
                    // User is signed out.
                    document.getElementById('sign-in-status').textContent = 'Signed out';
                    document.getElementById('sign-in').textContent = 'Sign in';
                    document.getElementById('account-details').textContent = 'null';
                }
            }, function(error) {
                console.log(error);
            });
        };

        window.addEventListener('load', function() {
            initApp()
        });
    </script>
</head>
<body>
<h1>Welcome to My Awesome App</h1>
<div id="sign-in-status"></div>
<div id="sign-in"></div>
<div id="account-details"></div>
<br><br>
<div id="uid"></div>
</body>
</html>