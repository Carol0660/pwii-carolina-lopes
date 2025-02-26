<!DOCTYPE html>
<html>
    <style>
        .cor{
            color:orange;
            background-color:blue;
            font-size:50px;
        }

    </style>
    <body>
        <p class="cor">
            <?php
                ECHO "Hello World!<br>";
                echo "Hello World!<br>";
                EcHo "Hello World!<br>";

                $nome = "Carol";
                $sobrenome = "Candela";
                $numero = 9;

                echo $nome . " linda";
                echo "${nome} <h1> ${sobrenome} </h1>";
                echo $numero . "<p> " . $nome .
                " " . $sobrenome . "</p>";
            ?>
        </p>
    </body>
</html>