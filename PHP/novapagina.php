<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Nova Pagina</title>
    </head>
    <style>
        .button {
            width: 80px;
            height: 40px;
            background: #191919;
            display: block;
            margin: auto;
            border: 2px solid #2ecc71;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        .button a {
            display: block;
            padding: 10px 0;
            text-decoration: none;
            color: white;
        }
        .button:hover {
            background: #2ecc71;
        }
    </style>
    <body>
        <div
            style="
                width: 20%;
                height: 60px;
                background-color: #211b15;
                border: 2px groove #ffffff;
                display: flex;
                margin: 20% auto;
                align-items: center;
                justify-content: center;
            "
        >
            <p style="color: white; font-family: arial; font-weight: bold">
                Bem-vindo!
            </p>
        </div>

        <div class="btn">
            <button class="button"><a href="../index.php">Voltar</a></button>
        </div>
    </body>
</html>
