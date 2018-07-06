<?php require "../src/database.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./styles/style.css">
  <title>diaflix</title>
</head>

<body class="LandingPage">
  <header>
    <nav>
      <a href="index.php"><img src="img/diaflix.png" alt="diaflix" class="Nav-Brand"></a>
      <div class="NavigationItem">
        <a href="index.php">
          Logout
        </a>
      </div>
    </nav>
  </header>
  <main class="LandingPage">
    <div class="FullDiv">
      <div>
      <?php $entries = fetchEntries(); ?>
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
