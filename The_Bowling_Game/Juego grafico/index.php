<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="game.ico"/>
    <title href="game.png">The Bowling Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="index1.css">
    <script type="text/javascript" src="bowling_game.js"></script>
  </head>
  <body>

    <section class="hero is-warning">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title is-2 grey-dark">
            The bowling game
          </h1>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="box_table">
        <div class="box">
          <div class="table">
            <table>
              <thead>
                <tr>
                  <th>Rounds</th>
                  <th>First try</th>
                  <th>Second try</th>
                  <th>Throw</th>
                  <th>Spare</th>
                  <th>Strike</th>
                  <th>Score</th>
                </tr>
              </thead>
              <tr>
                <th>1</th>
                <form class="" action="bowling_game.js" method="post">
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_1"></th>
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_2"></th>
                  <th><a class="button is-dark is-fullwidth is-outlined" onclick="normal()" name="send">Throw!</a></th>
                </form>
                <th></th>
                <th></th>
                <th><div id="1"></div></th>
              </tr>
              <tr>
                <th>2</th>
                <form class="" action="bowling_game.js" method="post">
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_3"></th>
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_4"></th>
                  <th><a class="button is-dark is-fullwidth is-outlined" onclick="normal()" name="send">Throw!</a></th>
                </form>
                <th></th>
                <th></th>
                <th><div id="2"></div></th>
              </tr>
              <tr>
                <th>3</th>
                <form class="" action="bowling_game.js" method="post">
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_5"></th>
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_6"></th>
                  <th><a class="button is-dark is-fullwidth is-outlined" onclick="normal()" name="send">Throw!</a></th>
                </form>
                <th></th>
                <th></th>
                <th><div id="3"></div></th>
              </tr>
              <tr>
                <th>4</th>
                <form class="" action="bowling_game.js" method="post">
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_7"></th>
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_8"></th>
                  <th><a class="button is-dark is-fullwidth is-outlined" onclick="normal()" name="send">Throw!</a></th>
                </form>
                <th></th>
                <th></th>
                <th><div id="4"></div></th>
              </tr>
              <tr>
                <th>5</th>
                <form class="" action="bowling_game.js" method="post">
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_9"></th>
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_10"></th>
                  <th><a class="button is-dark is-fullwidth is-outlined" onclick="normal()" name="send">Throw!</a></th>
                </form>
                <th></th>
                <th></th>
                <th><div id="5"></div></th>
              </tr>
              <tr>
                <th>6</th>
                <form class="" action="bowling_game.js" method="post">
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_11"></th>
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_12"></th>
                  <th><a class="button is-dark is-fullwidth is-outlined" onclick="normal()" name="send">Throw!</a></th>
                </form>
                <th></th>
                <th></th>
                <th><div id="6"></div></th>
              </tr>
              <tr>
                <th>7</th>
                <form class="" action="bowling_game.js" method="post">
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_13"></th>
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_14"></th>
                  <th><a class="button is-dark is-fullwidth is-outlined" onclick="normal()" name="send">Throw!</a></th>
                </form>
                <th></th>
                <th></th>
                <th><div id="7"></div></th>
              </tr>
              <tr>
                <th>8</th>
                <form class="" action="bowling_game.js" method="post">
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_15"></th>
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_16"></th>
                  <th><a class="button is-dark is-fullwidth is-outlined" onclick="normal()" name="send">Throw!</a></th>
                </form>
                <th></th>
                <th></th>
                <th><div id="8"></div></th>
              </tr>
              <tr>
                <th>9</th>
                <form class="" action="bowling_game.js" method="post">
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_17"></th>
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_18"></th>
                  <th><a class="button is-dark is-fullwidth is-outlined" onclick="normal()" name="send">Throw!</a></th>
                </form>
                <th></th>
                <th></th>
                <th><div id="9"></div></th>
              </tr>
              <tr>
                <th>10</th>
                <form class="" action="bowling_game.js" method="post">
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_19"></th>
                  <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id="1_20"></th>
                  <th><a class="button is-dark is-fullwidth is-outlined" onclick="normal()" name="send">Throw!</a></th>
                </form>
                <th></th>
                <th></th>
                <th><div id="10"></div></th>
              </tr>
              <tr>
                <th>Extra</th>
                <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id=""></th>
                <th><input class="input is-rounded is-link" type="text" placeholder="Your score here" id=""></th>
                <th><a class="button is-dark is-fullwidth is-outlined" onclick="" name="send">Throw!</a></th>
                <th></th>
                <th></th>
                <th><div id="11"></div></th>
              </tr>
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Total Score:<div id="t_score"></div></th>
                <th></th>
              </tr>
            </table>
          </div>
        </div>
      </div>

    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>Develop</strong> by <a href="https://www.facebook.com/jacinto.ortiz.98?ref=bookmarks">Jacinto Ortiz</a>.
        </p>
      </div>
    </footer>

  </body>
</html>
