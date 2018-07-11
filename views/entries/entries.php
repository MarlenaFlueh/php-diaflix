<?php include __DIR__ . "/../layout/header.php"; ?>

<body class="LandingPage">
  <header>
    <nav>
      <a href="index"><img src="../img/diaflix.png" alt="diaflix" class="Nav-Brand"></a>
      <div class="NavigationItem">
        <a href="index">
          Logout
        </a>
      </div>
    </nav>
  </header>
  <main class="LandingPage">
    <div class="FullDiv">
      <div>
      <?php foreach ($entries as $entry): ?>
        <h1>
          <?php echo $entry["title"]; ?>
        </h1>
        <p>
          <?php echo $entry["entry"]; ?>
        </p>
        <br />
      <?php endforeach; ?>
      </div>
    </div>
  </main>
  <footer></footer>
</body>

</html>
