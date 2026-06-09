<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="container py-5 contato">

    <h1 class="mb-5 titulo-contato">Contato</h1>

    <div class="row">

        <div class="col-md-4">
            <p><i class="fa-brands fa-whatsapp"></i> (44) 99850-1379</p>
            <p><i class="fa-solid fa-phone"></i> (44) 1111-1111</p>
            <p><i class="fa-solid fa-envelope"></i> befit@gmail.com</p>
            <p><i class="fa-solid fa-location-dot"></i> Perimetral Tancredo Neves, 1735</p>
        </div>

        <div class="col-md-8">

            <form>

                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="Nome Compreto">
                </div>

                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control" placeholder="Digite seu email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" placeholder="(44) 99999-9999">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mensagem</label>
                    <textarea class="form-control" rows="5" placeholder="Digite sua mensagem"></textarea>
                </div>

            </form>

            <button type="submit" class="btn-enviar">
                Enviar
            </button>

        </div>

    </div>

</section>
</body>
</html>