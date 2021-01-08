<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sudoku</title>
  <link rel="stylesheet" href="style-main.css">
  <link rel="shortcut icon" href="img\sudoku.svg" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
  <div class="full-screen">
    <div class="user-parts">
      <div class="game">
      <h1>Sudoku</h1>
      <div class="wrap-field">
      <div class="input-item" ><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      <div class="input-item"><input type="text"></div>
      </div>
      <div class="gen-action btn" style="margin: 0 auto;  display: block;"><button id="check">Перевірити</button></div>
      </div>
    </div>
    <div class="user-parts">
    <div class="info">
    <h1>Дані</h1>
    <div class="wrap-points">
      <div class="item-points q">
        <h1>Час</h1>
        <h1 data-time></h1>
      </div>
      <div class="item-points q">
        <h1>Рівень</h1>
        <h1 data-level></h1>
      </div>
      <div class="item-points q">
        <h1>Ім'я</h1>
      </div>
    </div>
    <div class="wrap-btn">
    <div class="gen-action btn"><button id="new-game">Нова гра</button></div>
    <div class="gen-action btn"><button id="pause-game">Зареєструватись</button></div>
    <div class="gen-action btn"><button  id="exit-game">Вийти</button></div>
    </div>

    </div>
    </div>
  </div>
  <?php ?>
  <?php ?>
  <?php require "blocks/foot.php" ?>