<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Number Comparison</title>

  <script>
    function compareNumbers() {
      var number1 = parseInt(document.getElementById('number1').value);
      var number2 = parseInt(document.getElementById('number2').value);
      var resultElement = document.getElementById('result');

        if (number1 === number2) {
        resultElement.innerHTML = "The numbers are equal.";
      } else {
        resultElement.innerHTML = "The numbers are not equal.";
      }
    }
  </script>

</head>
<body>
  <h2>Number Comparison</h2>
  <p>Enter two numbers and check if they are equal or not equal.</p>

  <label for="number1">Number 1: </label>
  <input type="number" name="number1" id="number1">

  <label for="number2">Number 2: </label>
  <input type="number" name="number2" id="number2">

  <button onclick="compareNumbers()">Check</button>
  <p id="result"></p>
</body>
</html>