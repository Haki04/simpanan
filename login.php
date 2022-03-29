<?php 
require('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>
<body>
  <div class="bglogin">
    <div class="contentlogin">
      <form class="login" action="function.php" method="post" accept-charset="utf-8">
        <tabel class="login">
          <tr>
            <td>
              <input type="text" name="username" id="username" value=""placeholder="Username" required="" autofocus=""/>
            </td>
          </tr>
          <tr>
            <td>
              <input type="password" name="password" id="password" value=""placeholder="Password" required=""/>
              </td>
          </tr><br>
          <tr>
            <td><button class="btn" type="submit" name="submitlogin">Login</button></td>
          </tr>
        </tabel>
      </form>
    </div>
  </div><!--
  <script type="text/javascript" charset="utf-8">
  let div = getElementsByClassName('login');
  let btn = getElementsByClassName('btn');
  btn.addEventListener('click',function(){
    div.innerHTML = "<h1>Tunggu Sebentar : )</h1>";
    div.style.textAlign = "center";
    div.style.fontFamily = "arial";
  });
    
  </script>-->
</body>
</html>