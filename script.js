/* jshint ignore:start */
$('#login-button').click(function () {
  $('#login-button').fadeOut("slow", function () {
    $("#container").fadeIn();
    TweenMax.from("#container", .4, { scale: 0, ease: Sine.easeInOut });
    TweenMax.to("#container", .4, { scale: 1, ease: Sine.easeInOut });
  });
});

$(".close-btn").click(function () {
  TweenMax.from("#container", .4, { scale: 1, ease: Sine.easeInOut });
  TweenMax.to("#container", .4, { left: "0px", scale: 0, ease: Sine.easeInOut });
  $("#container, #forgotten-container").fadeOut(800, function () {
    $("#login-button").fadeIn(800);
  });
});

/* Forgotten Password */
$('#forgotten').click(function () {
  $("#container").fadeOut(function () {
    $("#forgotten-container").fadeIn();
  });
});

/* jshint ignore:end */


//game
'use strict';
const field = document.querySelectorAll('.input-item'),
  newGame = document.getElementById('new-game'),
  pause = document.getElementById('pause-game'),
  check = document.getElementById('check'),
  timer = document.querySelector('[data-time]'),
  level = document.querySelector('[data-level]'),
  exitGame = document.getElementById('exit-game');


const gameTime = (elem) => {
  const start = new Date();
  setInterval(() => {
    let passed = new Date() - start;
    elem.textContent = `${(Math.floor(passed / 1000 / 60) < 10) ? "0" + Math.floor(passed / 1000 / 60) : Math.floor(passed / 1000 / 60)}:${(Math.floor(passed / 1000 % 60) < 10) ? "0" + Math.floor(passed / 1000 % 60) : Math.floor(passed / 1000 % 60)}`;
  }, 1000);
};

const transformMatrix = (elem) => {
  let matrix = [];
  elem.forEach((x,y) => matrix.push(x.children[0].value));
  let newArr = [];
  for (let i = 0; i < matrix.length; i+=9) {
    newArr.push(matrix.slice(i, i+9));
  }
  return newArr;
};

const doneOrNot = (rows) => {

  let columns = [],    
  blocks = [];
  
  for (let i = 0; i < 9; i++) {
    columns[i] = [];
    
    for (let j = 0; j < 9; j++) {
      let k = Math.floor(i / 3) + Math.floor(j / 3) * 3;
      blocks[k] = blocks[k] || [];
      
      blocks[k].push(rows[i][j]);
      columns[i].push(rows[j][i]);
    }
  }
  
  let isValidRow = (row) => row.slice(0).sort((a, b) => a - b).join('') == '123456789';
  
  let isValid = rows.every(isValidRow) && columns.every(isValidRow) && blocks.every(isValidRow);
  
  return isValid ? 'Finished!' : 'Try again!';
};


const gameBlock = {
  easy: [
    0, 8, 0, 3, 7, 5, 6, 0, 9,
    3, 6, 9, 0, 4, 0, 7, 0, 0,
    1, 0, 5, 9, 0, 2, 0, 3, 0,
    7, 9, 8, 0, 0, 6, 0, 5, 0,
    0, 0, 0, 4, 9, 7, 3, 8, 6,
    6, 0, 4, 0, 5, 1, 0, 7, 2,
    0, 4, 6, 0, 0, 2, 0, 9, 0,
    0, 9, 0, 8, 0, 1, 7, 4, 6,
    0, 0, 5, 6, 9, 0, 3, 8, 0]
};

newGame.addEventListener('click', () => {
  field.forEach((x, y) => {
    if (gameBlock.easy[y] !== 0) {
      x.children[0].value = gameBlock.easy[y];
     console.dir(x.children[0].setAttribute("disabled", "disabled"));
    }
  });
  level.textContent = Object.keys(gameBlock)[0];
  timer.textContent = "00:00";
  gameTime(timer);
});

check.addEventListener('click', () => {
  const row = transformMatrix(field);
  check.textContent = doneOrNot(row);
  setTimeout(() => {
    check.textContent = "Перевірити";
  }, 5000);
});



document.addEventListener('keydown', (e) => {
  if (e.key == "ArrowUp") {
    field.forEach((x,y) => {
      if(document.activeElement == x.children[0] && y>8){
      field[y-9].children[0].focus();
      }
    });
  }
  if (e.key == "ArrowRight") {
    for (let i = 0; i < field.length; i++) {
      if (document.activeElement == field[i].children[0]) {
        field[++i].children[0].focus();
        break;
      }
    }
  }
  if (e.key == "ArrowLeft") {
    field.forEach((x,y) => {
      if(document.activeElement == x.children[0]){
        field[--y].children[0].focus();
        }
    });
  }
  if (e.key == "ArrowDown") {
    for (let i = 0; i < field.length; i++) {
      if (document.activeElement == field[i].children[0] && i<72) {
        field[i+9].children[0].focus();
        break;
      }
    }
  }
});