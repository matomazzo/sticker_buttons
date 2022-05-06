<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cria botão</title>
</head>

<body>
    <style>
        .fab-container {
            position: fixed;
            bottom: 50px;
            right: 50px;
            cursor: pointer;
        }

        .whatsapp {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #4DC247;
            box-shadow: 10px 10px 5px #aaaaaa;
        }

        .whatsapp i {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: white;
        }

        .telegram {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #0088CC;
            box-shadow: 10px 10px 5px #aaaaaa;
        }

        .telegram i {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: white;
        }

        .instagram {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #F47CBF;
            box-shadow: 10px 10px 5px #aaaaaa;
            text-decoration: none;
            
        }

        .instagram i {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: white;
        }

        .twitter {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #1D9BF0;
            box-shadow: 10px 10px 5px #aaaaaa;
        }

        .twitter i {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: white;
        }

        .iconbutton {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #002677;
            box-shadow: 10px 10px 5px #aaaaaa;
        }

        .iconbutton i {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: white;
        }

        .button {
            width: 60px;
            height: 60px;
            background: #002677;
        }

        .options li {
            display: flex;
            justify-content: flex-end;
            padding: 5px;
        }

        .options {
            list-style-type: none;
            position: absolute;
            bottom: 70px;
            right: 0;
        }

        .btn-label {
            padding: 2px 5px;
            margin-right: 10px;
            align-self: center;
            user-select: none;
            background-color: black;
            color: white;
            border-radius: 3px;
            box-shadow: 10px 10px 5px #aaaaaa;
        }
    </style>

    <div class="fab-container">
        <div class="button iconbutton" ><i class="fa-solid fa-plus" id="show_buttons"></i>

            <ul class="options">
                <li><span class="btn-label">Telegram</span>
                    <div class="telegram"><a target="_blank" href="https://t.me/ekomercio"><i class="fa-brands fa-telegram"></i></a></div>
                </li>
                <li><span class="btn-label">Instagram</span>
                    <div class="instagram"><a target="_blank" href="https://www.instagram.com/ekomercio/"><i class="fa-brands fa-instagram"></i></a></div>
                </li>
                <li><span class="btn-label">Site Ekomercio</span>
                    <div class="twitter"><a target="_blank" href="https://ekomercio.com.br/"><i class="fab fa-twitter"></i></a></div>
                </li>
                <li><span class="btn-label">WhatsApp</span>
                    <div class="whatsapp"><a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B5516994369674&text=Olá, estou com uma dúvida no meu administrativo, pode me ajudar?&app_absent=0"><i class="fab fa-whatsapp"></i></a></div>
                </li>
            </ul>
        </div>
    </div>

    <!-- /GetButton.io widget -->

</body>

<script>
    //ação para esconde e mostrar os botões de whatsapp entre outros

</script>