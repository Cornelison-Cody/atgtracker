<?php include_once'modules/head.php'; ?>
<?php include_once'../firebase/firebaseInit.php'; ?>
<script src="js/authUI.js"></script>

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