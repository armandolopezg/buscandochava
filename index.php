<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscando Novia</title>
</head>
<style>
    .relativeContainer {
      position:static;
      width: 1850px;
      height: 810px;
    }

    #botonQueSeMueve {
      position: absolute;
      top: 200px;
      left: 1050px;
      background-color: red;
      border: red;
      width: 100px;
      height: 50px;
      cursor: pointer;
    }
    #botonfijo{
        background-color: blue;
        border: blue;
        position: absolute;
        top: 200px;
        left: 800px;
        width: 100px;
        height: 50px;
        cursor: pointer;
    }
  </style>
</head>

<body><br>
    <center>
        <h1>¿Quieres ser mi novia?</h1>
    </center>
  <div class="relativeContainer">
    <button id="botonQueSeMueve">No</button>
    <button id="botonfijo">Si</button>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script>
    $("#botonQueSeMueve").hover(function () {
      $("#botonQueSeMueve").css("top", `${Math.random() * 810}px`);
      $("#botonQueSeMueve").css("left", `${Math.random() * 1850}px`);
    });
  </script>
</body>
</html>
