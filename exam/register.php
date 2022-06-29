<?php include 'inc/header.php'; ?>
<div class="main">
  <link rel="stylesheet" href="user.css">
  <h1>Online Exam System - User Registration</h1>
  <div style="display: flex;">
    <div class="segment" style="margin:auto 20px; width:40%">
      <img src="img/regi.png" style="margin: auto;" />
    </div>
    <div class="segment" style="margin-left: 5%; width: 45%">
      <form action="./index.php" method="post">
        <table>
          <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="name"></td>
          </tr>
          <tr>
            <td>Username</td>
            <td><input name="username" type="text" id="username"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password"></td>
          </tr>

          <tr>
            <td>E-mail</td>
            <td><input name="email" type="text" id="email"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" id="regsubmit" value="Signup">
            </td>
          </tr>
        </table>
      </form>
      <p>Already Registered ? <a href="index.php">Login</a> Here</p>

      <span id="state"></span>
    </div>

  </div>

</div>
<?php include 'inc/footer.php'; ?>
