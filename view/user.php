<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
<?php echo $_COOKIE['username']; ?>
<h1>User</h1>
<button onclick="home()">Back to Home-page</button>
<script src="/components/js/user.js"></script>
</body>
</html>
