<?php include_once'modules/head.php'; ?>
<?php include_once'../firebase/firebaseInit.php'; ?>
<script src="js/authUI.js"></script>

<div class="topMessage">
    <h3>Please sign in with your Google account to continue.</h3>
</div>
<!-- The surrounding HTML is left untouched by FirebaseUI.
     Your app may use that space for branding, controls and other customizations.-->
<div id="firebaseui-auth-container"></div>