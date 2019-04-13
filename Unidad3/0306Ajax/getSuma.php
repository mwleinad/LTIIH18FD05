<!DOCTYPE HTML>
<html>
    <head>
        <title>Ejemplo Metodo AJAX</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
    </head>
    <body>
        <form id="sumForm">
          <input name='number1' type='number' value='number1' placeholder='Numero 1' />
          <input name='number2' type='number' value='number2' placeholder='Numero 2' />
          <input name='doSuma' type='button' value='Suma AJAX' />
        </form>  
        <div id='response'></div>
    </body>
</html>
<script src='suma.js'></script>