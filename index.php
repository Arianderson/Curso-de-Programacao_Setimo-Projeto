<html>

<head>
    <title>sorteio</title>
</head>


<body>
    <!--div Geral-->
    <div style="width:400px; height:300px; background-color: #2E8B57; border-radius:10px; margin:auto;">
        <!--div de espaçamento-->
        <div style="width:400px; height:100px; background-color: transparent; margin:auto;"></div>
        <!--div amarela-->
        <div style="width:300px; height:100px; background-color: #DAA520; border-radius:10px; margin:auto; text-align:center;">
            <!--Div que coloquei o numero aleatorio-->
            <div style="width:50px; height:50px; background-color:blue; margin:auto; border-radius:50%;">
                <!--div de espaçamento-->
                <div style="width:50px; height:10px; background-color: transparent; margin:auto;"></div>

                <?php
                //Aqui estou colocando a variavel "sorteio" em atribuição com a função "rand" para sortea um numero de 1 a 5
                $sorteio = rand(1, 5);
                // Aqui estou estilizando e chamando o valor do sorteio que gerar no "rand"
                echo '<span style="font-size:25px; color:#ffffff;">' . $sorteio . '</span>';
                // Fechando a div azul redonda com o valor sorteado
                echo '</div>';
                // <br /> de separação
                echo '<br />';
                // Aqui começo com o switch colocando a variavel que eu quero testar
                switch ($sorteio):
                        // Aqui quando chamo o "case" e coloco um valor no caso 1 eu estou dizendo: "Caso seja 1; e ai embaixo coloco um echo para dizer o que tem que mostrar na tela caso seja verdade, caso não seja eu abro um default la embaixo"
                    case "1";
                        echo 'Arianderson ganhou o prêmio';
                        break;
                        // Aqui quando chamo o "case" e coloco um valor no caso 2 eu estou dizendo: "Caso seja 2; e ai embaixo coloco um echo para dizer o que tem que mostrar na tela caso seja verdade, caso não seja eu abro um default la embaixo"
                    case "2";
                        echo 'Luiz ganhou o prêmio';
                        break;
                        // Aqui quando chamo o "case" e coloco um valor no caso 3 eu estou dizendo: "Caso seja 3; e ai embaixo coloco um echo para dizer o que tem que mostrar na tela caso seja verdade, caso não seja eu abro um default la embaixo"
                    case "3";
                        echo 'Daniel ganhou o prêmio';
                        break;
                        // Aqui quando chamo o "case" e coloco um valor no caso 4 eu estou dizendo: "Caso seja 4; e ai embaixo coloco um echo para dizer o que tem que mostrar na tela caso seja verdade, caso não seja eu abro um default la embaixo"
                    case "4";
                        echo 'Douglas ganhou o prêmio';
                        break;
                        //Aqui eu coloco um default para ele pegar tudo que sair como concequencia da condição e nao for testado dizer algo na tela, o default é usado para dar um "fim" ao resultado que não queremos ou seja um contraponto
                    default:
                        echo 'Ninguem ganhou';
                        break;
                // Estou usando o endswith pois na nomeclatura ja tem o significado estou dando um fim ao processo de swith sempre é bom colocar para finalizar o processo do repetidor e continuar com outras funções ou tags no restante do codigo e não ter dores de cabeça depois com algum bug
                endswitch;
                //Fechando php
                ?>
                <!--Fechando div Geral-->
            </div>
            <!-- Fechando div de Geral-->
            </br>
            <div style="margin: auto; text-align: center">
                <?php 
                    echo '<a href="index.php"><button>Sortear</button></a>'
            
            
                ?>
            </div>
        </div>
        <!-- Fechando body-->
    </div>

</body>
<!-- Fechando html-->

</html>