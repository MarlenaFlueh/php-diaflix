<?php include __DIR__ . "/../layout/header.php"; ?>

<body class="LandingPage">
  <header>
    <nav>
      <a href="index"><img src="../../public/img/diaflix.png" alt="diaflix" class="Nav-Brand"></a>
    </nav>
  </header>
  <main class="LandingPage">
    <div class="FullDiv">
      <div class="BorderDiv">
        <form method="POST" method="register">
          <div>
            <p class="LoginHeading">Registration</p>
          </div>
          <div class="Input">
            <input type="text" name="username" placeholder="choose username" class="InputElement">
          </div>
          <div class="Input">
            <input type="password" name="password" placeholder="password" class="InputElement">
          </div>
          <div class="Input">
            <input type="password" name="password" placeholder="repeat password" class="InputElement">
          </div>
          <div class="Input">
            <input type="radio" name="radio">
            <label for="radio">I agree with the conditions</label>
          </div>
          <div class="FinalLogin">
            <a href="registerSuccess">
              Register
            </a>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
