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
        <form>
          <div>
            <p class="LoginHeading">Registrieren</p>
          </div>
          <div class="Input">
            <input type="text" name="prename" placeholder="prename" class="InputElement">
          </div>
          <div class="Input">
            <input type="text" name="name" placeholder="name" class="InputElement">
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
            <label for="radio">AGB akzeptieren</label>
          </div>
          <div class="FinalLogin">
            <a href="registerSuccess">
              Registrieren
            </a>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
