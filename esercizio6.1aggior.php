<html>

<head>
    <title>Calcolatrice in php per esercitazione tecnologie web</title>

</head>

<body>
    <h1> Calcolatrice</h1>
    <h2> Esercitazione 6.1 di tecnologie web </h2>

    <form metod="get" action="<?php echo $_server['php_self'] ?>"> <!--con il metodo get vado a dire al form che deve ricevere dei dati,
            con l'action scritto cosi invece vado a dirgli che come riferimento di esecuzione ha se stesso perche gli sto dicendo 
            $serverphpself serve appunto per dire di andare a prendere riferimento in se stesso -->
            
            <p> valore 1 :<input type="text" name="valore1">
            <select name="operatori">
                <option value="+" <?php if ($_GET['operatori'] == '+') echo "selected"; ?>>+</option>
                <option value="-" <?php if ($_GET['operatori'] == '-') echo "selected"; ?>>-</option>
                <option value="x" <?php if ($_GET['operatori'] == 'x') echo "selected"; ?>>x</option>
                <option value=":" <?php if ($_GET['operatori'] == ':') echo "selected"; ?>>:</option>
               

            </select>
        </p>
        
        <p> valore 2 :<input type="text" name="valore2"> <input type="submit" value="="></p>
        <p> risultato :<input type="text" name="risultato" disabled></p>
    </form>
    
    <?php
    if (isset($_GET['valore1']) && isset($_GET['valore2'])) {
        $valore1 = $_GET['valore1'];
        $valore2 = $_GET['valore2'];
        $operatore = $_GET['operatori'];

        switch ($operatore) {
            case '+':
                $ris = $valore1 + $valore2;
                break;
            case '-':
                $ris = $valore1 - $valore2;
                break;
            case 'x':
                $ris = $valore1 * $valore2;
                break;
            case ':':
                $ris = $valore1 / $valore2;
                break;
        }
        echo
        '<script>
            document.getElementsByName("risultato")[0].value="' . $ris . '";
            document.getElementsByName("valore1")[0].value="' . $valore1 . '";
            document.getElementsByName("valore2")[0].value="' . $valore2 . '";


        </script>';
    }
    ?>

</body>


</html>