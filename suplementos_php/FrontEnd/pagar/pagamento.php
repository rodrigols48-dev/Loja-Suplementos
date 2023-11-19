<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pagamento.css">
    <title>Tela Pagamento</title>
</head>
<body>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col">
                    <h3 class="title">Endereço de cobrança</h3>
                    <div class="inputBox">
                        <span>Nome completo:</span>
                        <input type="text" placeholder="Nome completo">
                    </div>
                    <div class="inputBox">
                        <span>Email:</span>
                        <input type="email" placeholder="exemplo@gmail.com">
                    </div>
                    <div class="inputBox">
                        <span>Rua:</span>
                        <input type="text" placeholder="Rua da boa vista">
                    </div>
                    <div class="inputBox">
                        <span>Cidade:</span>
                        <input type="text" placeholder="Primavera">
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>Estado:</span>
                            <input type="text" placeholder="Pernambuco">
                        </div>
                        <div class="inputBox">
                            <span>Cep:</span>
                            <input type="text" placeholder="55510-000">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="title">Pagamento</h3>
                    <div class="inputBox">
                        <span>Cartões aceitos:</span>
                        <img src="img/card_img.png" alt="imagem cartões">
                    </div>
                    <div class="inputBox">
                        <span>Nome no cartão:</span>
                        <input type="text" placeholder="Lucas Gabriel">
                    </div>
                    <div class="inputBox">
                        <span>Número do Cartão:</span>
                        <input type="number" placeholder="3108 5623">
                    </div>
                    <div class="inputBox">
                        <span>Mês validade:</span>
                        <input type="text" placeholder="Setembro">
                    </div>
                    <div class="flex">
                        <div class="inputBox">
                            <span>Ano validade:</span>
                            <input type="number" placeholder="2023">
                        </div>
                        <div class="inputBox">
                            <span>CVV:</span>
                            <input type="text" placeholder="510">
                        </div>
                    </div>
                </div>
            </div>
            <a class="sunmit-btn" href="agradecimento.html"><input class="sunmit-btn" type="button" value="Finalizar a compra"></a>
        </form>
    </div>
</body>
</html>
