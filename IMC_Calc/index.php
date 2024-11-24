<?php
    $answer = '';
    function Calc_IMC($IMC_Value) {
        $IMCRange = [
            ["thinness", 0, 18.5],
            ["healthy", 18.51, 24.9],
            ["overweight", 25.0, 29.9],
            ["degree obesity I", 30.0, 34.9],
            ["degree obesity II", 35.0, 39.9],
            ["degree obesity III", 40.0, INF]
        ];
    
        foreach ($IMCRange as $range) {
            $description = $range[0];
            $inf_limit = $range[1];
            $sup_limit = $range[2];
        
            if ($IMC_Value >= $inf_limit && $IMC_Value <= $sup_limit) {
                if ($description == "Healthy") {
                    return "Attention, your IMC is " . $IMC_Value . ", and you is classified as " . $description;
                } else {
                    return "Attention, your IMC is " . $IMC_Value . ", and you is classified as " . $description;
                }
            }
        }
    
        return "range out of allowed";
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Receive the values of form (Used isset() in case of don't have value in weight or height)
        if (isset($_GET["weight"]) && isset($_GET["height"])) {
            $Weight = $_GET["weight"];
            $Height = $_GET["height"];
            
            // IMC Calculation
            $imc = $Weight / ($Height * $Height);

            // Formatting the number
            $imc = number_format($imc, 2, '.', '');
            $answer = Calc_IMC($imc);
        }
    }
?>

<!DOCTYPE html>
    <html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">
        <meta name=" viewport" content="width=device-width, initial-scale=1.0">
        <title>IMC Calculation</title>
    </head>

    <body>
        <br><br>
        <h1>Lets go calculate your IMC:</h1>
        <form action="" method="GET">
        <div class="Input">
            <input type="float" name="weight" id="weight" step="0.01" placeholder="Enter your weight">
            <input type="float" name="height" id="height" step="0.01" placeholder="Enter your height">
            <button>Calculate</button>
            <br><br>
            <?php echo $answer; ?>
        </div>
        </form>
    </body>
    </html>