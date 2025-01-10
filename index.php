<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register & Login</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container" id="signUp" style="display: none">
      <h1 class="form-title">Neues Konto erstellen</h1>
      <form method="post" action="register.php">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input
            type="text"
            name="fName"
            id="fName"
            placeholder="First Name"
            required
          />
          <label for="fName">Vorname</label>
        </div>
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input
            type="text"
            name="lName"
            id="lName"
            placeholder="Last Name"
            required
          />
          <label for="lName">Nachname</label>
        </div>
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            required
          />
          <label for="password">Passwort</label>
        </div>
        <input type="submit" class="btn" value="Konto erstellen" name="signUp" />
      </form>
      <!-- <p class="or">-----------------or-----------------</p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div> -->
      <div class="links">
        <p>Hast du schon ein Konto?</p>
        <button id="signInButton">Anmelden</button>
      </div>
    </div>

    <div class="container" id="signIn">
      <h1 class="form-title">Anmeldung</h1>
      <form method="post" action="register.php">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            required
          />
          <label for="password">Passwort</label>
        </div>
        <p class="recover">
          <a href="#">Passwort vergessen?</a>
        </p>
        <input type="submit" class="btn" value="Anmelden" name="signIn" />
      </form>
      <!-- <p class="or">-----------------oder-----------------</p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i> -->
      <!-- </div> -->
      <div class="links">
        <p>Du hast noch keine Rechnung?</p>
        <button id="signUpButton">Registrieren</button>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
