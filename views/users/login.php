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
        <?php if (!empty($error)): ?>
          <p>
            <?php echo $error; ?>
          </p>
        <?php endif; ?>
        <form method="POST" method="login">
          <div>
            <p class="LoginHeading">Login</p>
          </div>
          <div class="Input">
            <input type="text" name="username" placeholder="username" class="InputElement">
          </div>
          <div class="Input">
            <input type="password" name="password" placeholder="password" class="InputElement">
          </div>
          <div class="FinalLogin">
            <button type="submit" value="login" class="SubmitButton">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>

</html>
