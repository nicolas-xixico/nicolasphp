<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Data e Hora em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background: linear-gradient(to right, #4facfe, #00f2fe); /* fundo colorido */
            color: #fff;
        }
        .box {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }
        h1 {
            color: #ffd; /* título dourado */
        }
        h2 {
            color #ff32; /* rosa para destaque */
        }
        p {
            font-size: 20px;
            color: #00fcc;
        }
        .btn {
            display: block;          
            margin: 10px auto;      
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background: #ff4;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
            width: 200px;           
        }
        .btn:hover {
            background: #ff7689;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Nicolas Canuto Logica de programaçao</h1>
        <p>
            <?php
                date_default_timezone_set('America/Sao_Paulo');
                echo "Hoje é <strong>" . date("d/m/Y") . "</strong><br>";
                echo "Agora são <strong>" . date("H:i:s") . "</strong>";
            ?>
        </p>
        <h2>Lógica de Programação</h2>
        <p><strong>1 JOD</strong></p>
		<!-- Outros Sites php -->
		<a href="concatenacao.php" class="btn">concatenacao</a>
        <a href="index.php" class="btn">index</a>
        <a href="variaveis.php" class="btn">variaveis</a>
        <a href="hello.php" class="btn">hello</a>
        <a href="operacoes.php" class="btn">operacoes</a>
        <a href="loop.php" class="btn">loop</a>
        <a href="condicao.php" class="btn">condicao</a>
        <a href="entprocsaida.php" class="btn">entprocsaida</a>

    </div>
</body>
</html>
