<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mixing languages</title>

    <!-- Lets mix HTML, CSS, Javascript and PHP in the same file ! -->
    <style>
      .right {
        color: green;
      }
      .wrong {
        color: red;
      }
      label {
        display: inline-block;
      }
      label:before {
        content: "";
        background: url("http://placehold.it/350x150") no-repeat;
        width: 30px;
        height: 30px;
        display: inline-block;
      }
      input {
        display: none;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <?php
        $language = ['HTML','CSS','Javascript'];
      ?>

        <form>
            <?php
            for ($i = 0; $i < count($language); $i++) :
            ?>
                <input type="radio" name="radio" class="choice" <?php if ($i === 0) echo 'checked'; ?> />
                <label>
                    <span><?= $language[$i] ?></span>
                </label>
                <br>
            <?php
            endfor
            ?>
        </form>
        <button id="submit_btn">submit</button>
    </div>

    <div>
      <p id="result"></p>
    </div>

    <script>
      function showFruits(event) {
        event.preventDefault();
        let radio = document.getElementsByClassName("choice");
        for (let index = 0; index < radio.length; index++) {
          if (radio[index].checked) {
            document.getElementById("result").textContent =
              radio[index].nextElementSibling.textContent;
          }
        }
      }

      let submitBtn = document.getElementById("submit_btn");
      submitBtn.addEventListener("click", showFruits);
    </script>
  </body>
</html>