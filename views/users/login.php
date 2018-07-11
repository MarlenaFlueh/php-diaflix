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
            <p class="LoginHeading">Login</p>
          </div>
          <div class="Input">
            <input type="text" name="your username" placeholder="username" class="InputElement">
          </div>
          <div class="Input">
            <input type="password" name="your password" placeholder="password" class="InputElement">
          </div>
          <div class="FinalLogin">
            <a href="entries">
              Login
            </a>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
