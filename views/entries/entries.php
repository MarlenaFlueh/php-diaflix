<?php include __DIR__ . "/../layout/header.php"; ?>

<body class="LandingPage">
  <header>
    <nav>
      <a href="index"><img src="../../public/img/diaflix.png" alt="diaflix" class="Nav-Brand"></a>
      <div class="NavigationItem">
        <a href="logout">
          Logout
        </a>
      </div>
    </nav>
  </header>
  <main class="LandingPage">
    <div class="FlexContainer">
      <form method="post" action="entries" class="FlexItem">
        <div>
          <div>
            <input type="text" name="title" class="TitleInput" placeholder="title"/>
          </div>
          <div>
            <textarea name="content" class="TextArea">
            </textarea>
          </div>
          <button type="submit" class="SubmitButton">Add</button>
        </div>
      </form>
      <?php foreach ($entries as $entry): ?>
      <div class="FlexItem">
        <h1 class="HeadingH1">
          <?php echo htmlentities($entry["title"], ENT_QUOTES, 'UTF-8'); ?>
        </h1>
        <p class="NormalFont">
          <?php echo htmlentities($entry["entry"], ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </div>
      <?php endforeach; ?>
    </div>
  </main>
  <footer></footer>
</body>

</html>
