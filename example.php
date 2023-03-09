<?php
   //manipulação de números

   $valor = 100;
   $valor2 = 5.75;
   $valor3 = "teste";

   var_dump(is_numeric($valor2)); 

   //funções matemáticas

    $numeros = [1,10,40,5000,-20,15];
    
    echo min($numeros); // -20
    echo max($numeros); // 5000

    $var = -20;
    echo abs($var); //20

    echo sqrt(16); //4

    $num = 10.65;
    echo round($num); //11

    echo rand(1,10); // entre 1 e 10 aleatório


   // CONSTANTES
   //case sesentive
   define("exemplo", 10) // pode ser str, array, float etc..
   echo exemplo;

   define("carros", ["fusca", "uno", "gol"]);
   echo carros[0];

    //echo pi();
    
    
    //OPERADORES

    //ex: + - * / = ++ -- += &&

    /*
    1) operadores aritméticos
    2) operadores de atribuição
    3) operadores de sequência (concatenação)
    4) operador de comparação
    5) operador condicional (ternário)
    6) operadores lógicos
    */

    //3)
    $nome = "rebekah";
    $sobrenome = "veiga";

    $nome_completo = $nome . $sobrenome;

    
    // IF ELSE ELSE IF

    $hora = 12;

    if($hora < 12){
        echo "Bom dia!";
    }else if($hora <18){
        echo "Boa Tarde!";
    }else{
        echo "Boa Noite!";
    }

    //SWITCH

    $cor = "vermelho";

    switch($cor){
        case "vermelho":
            echo "a cor é vermelho";
            break;
        case "azul":
            echo "A cor é azul";
            break;
        case "rosa":
            echo "A cor é rosa";
            break;
        default:
        echo "A cor" .$cor. " não é conhecida";
    }


    // LOOPS

    //while

    $x = 1;

    while($x < = 5){
        echo "o num é: $x <br>";
        $x++;
    }

    $y = 0;

    while($y < = 100){
        echo "o num é: $y <br>";
        $y+=10;
    }

    // do...while

    $x = 1;

    do{
        echo "o num é: $x <br>";
        $x++;
    } while ($x <=5);

    //for

    for ($x = 0; $x <= 10; $x++){
        echo "o num é: $x <br>";
    }

    //foreach

    $cores = ["azul", "amarelo", "verde", "vermelho"];
    
    foreach ($cores as $valor){
        echo "A cor é $valor <br>" // a cor é azul, a cor é amarelo, 
                                   // a cor é verde, a cor é vermelho.
    }


    //FUNÇÕES functions()
    //nao sao case sensitive
    function EscreverMensagem($nome){
        echo "Olá tudo bom $nome?<br>";
    }
    //call, chamar a função
    EscreverMensagem("dimitri"); //ola tudo bom dimitri

    function soma(int $valor1, int $valor2){
        echo $valor1 + $valor2;
    }

    soma(10,50);

    function soma($valor1, $valor2){
        return $valor1 + $valor2;
    }

    echo soma(10,30);


    //ARRAYS

    $carros = array("fusca", "uno", "gol");
    $carros = ["fusca", "uno", "gol"];

    $carros[1] = "ferrari"; // mudou uno paara ferrari
    $qnt = count($carros);
    echo qnt; // 3

    echo $carros[0]; // fusca

    for ($i = 0; $i < $qnt; $i++){
        echo $carros[$i];
        echo "<br>";
    }

    foreach ($carros as $carro){
        echo $carro. "<br>";
    } // fusca, uno, gol

    //array associativo
    $idade = array("dimitri" => "30", "maria" => "15", "pedro" => "60");

    // encontrar pela chave
    echo $idade["maria"]; // 15

    //mudar valor
    $idade["dimitri"] = "teixeira";

    //pega chave e valor
    foreach ($idade as $chave => $valor){
        echo "A chave é $chave e o valor é $valor <br>";
    } // a chave é dimitri e a idade é 30 .......

    //deixar em ordem alfabetica
    sort($carros);

    //reverso
    rsort($carros);

    //para arrays associativas de acordo com o valor
    asort($carros);

    //organiza Por Chaves
    ksort($carros);




    // SUPER GLOBAIS

    //GLOBALS

    $a = 10;
    $b = 20;

    function soma(){
        //$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
        global $a, $b, $c;
        $c = $a + $b;
    }
    soma();
    echo $c;

    //_SERVER //case sensitive

    echo $_SERVER['PHP_SELF']; // mostra caminho do arquivo q estamos trabalhando
    echo "<br>"
    echo $_SERVER['SERVER_NAME']; // nome do servidor
    echo $_SERVER['HTTP_HOST']; //
    echo $_SERVER['REMOTE_ADDR']; // end de IP do servidor
    echo $_SERVER['HTTP_USER_AGENT']; //infos do cliente, navegador, bit ...

    foreach($_SERVER as $chave => $valor){
        echo "<strong> $chave</strong>: $valor <br>";
    }


    // MÉTODO $_GET

    




?>


