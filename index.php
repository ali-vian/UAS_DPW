<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi | Login</title>
    <link rel="stylesheet" href="styleIdx.css" />
  </head>
  <body>
    <div class="luar">
      <div class="countainer">
        <img src="logo.png" alt="logo" />
        <h2>Sistem Informasi Pemerintah Daerah</h2>
      </div>
      <div class="countainer2">
        <h3>Silahkan Login Terlebih Dahulu !</h3>
        <form action="dashbord.php" method="post">

          <table cellspacing="25">
            <tr>
            <td>
              <label for="username">Username</label>
            </td>
            <td>
              <input
                type="text"
                id="username"
                placeholder="Masukkan Username"
                name="username"
                required
              />
            </td>
          </tr>
          <tr>
            <td>
              <label for="password">Password</label>
            </td>
            <td>
              <input type="password" 
              id="password" 
              placeholder="********" 
              name="password" 
              required/>
            </td>
          </tr>
          <tr >
            <td colspan="2">
              <font color="red" size="2px">
                <?php if(isset($_GET["erorr"])):?>
                  <?="Username atau password salah";?>
                  <?php endif ?>
              </font>
            </td>
          </tr>
        </table>
        <div class="button">
          <button >Daftar</button>
          <button type="submit">Login</button>
        </div>
      </form>
      </div>
    </div>
  </body>
</html>
