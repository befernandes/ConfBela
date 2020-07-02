<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/bulma.min.css">

    <title>Contato</title>
</head>
<body>
    
    <header>
        <nav class="menu">
            <ul>

                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="index.php">ConfBela</a></li>
                <li><a href="contato.php">Contato</a></li>

            </ul>
        </nav>
    </header>


    
    <section class="section">
        <div class="container">
            <div class="colums is-centered">
                <div class="column is-half">
                    <h1 class="title has-text-centered"> Formulário de Contato</h1>
                    <form action="enviar.php" method ="POST">
                        <div class="field">
                            <label class="label">Nome</label>
                            <div class="control">
                            <input name="nome" class="input" type="text" placeholder="Seu nome">
                             </div>
                        </div>

                        <div class="field">
                            <label class="label">Telefone *</label>
                            <div class="control">
                            <input name="Telefone" class="input" type="text" placeholder="+244 xxx xx xx xx">
                             </div>
                        </div>

                        <div class="field">
                            <label class="label">Email *</label>
                            <div class="control">
                            <input name="email" class="input" type="email" placeholder="Seu Email">
                             </div>
                        </div>
                        <div class="field">
                            <label class="label">Assunto</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select name ="assunto">
                                        <Option> Bolos</option>
                                        <Option> Salgados</option>
                                        <Option> Doces</option>
                                    </select>
                             </div>
                        </div>
                        </div>
                        <div class="field">
                            <label class="label">Mensagem *</label>
                            <div class="control">
                                <textarea name="mensagem" class="textarea" placeholder="Faço o seu pedido aqui!" maxlength="2000"></textarea>
                               
                             </div>
                        </div>
                        
                       <div class="field is grouped">
                            <div class="control">
                                <button class="button is-link is-medium">Enviar</button>
                            </div>    

                        </div>
                </div>
            </div>

        </div>

    </section>
    
</body>
</html>