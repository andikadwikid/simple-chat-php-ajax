<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Realtime Chat App</title>
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
  </head>

  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Realtime Chat App</header>

        <form action="#">
          <div class="error-txt">Test</div>

          <div class="name-details">
            <div class="field input">
              <label>First Name</label>
              <input type="text" placeholder="First Name" />
            </div>

            <div class="field input">
              <label>Last Name</label>
              <input type="text" placeholder="Last Name" />
            </div>
          </div>

          <div class="field input">
            <label>Email address</label>
            <input type="text" placeholder="Enter your email" />
          </div>

          <div class="field input">
            <label>Password</label>
            <input type="password" placeholder="Enter new password" />
            <i class="fas fa-eye"></i>
          </div>

          <div class="field image">
            <label>Select image</label>
            <input type="file" placeholder="First Name" />
          </div>

          <div class="field button">
            <input type="submit" value="Continue to chat" />
          </div>
        </form>

        <div class="link">Already signed up ? <a href="#">Login now</a></div>
      </section>
    </div>
  </body>

  <script src="js/pass-show-hide.js"></script>
</html>
