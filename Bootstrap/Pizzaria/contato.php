<?php include("cabecalho.php")?>
<?php include("menu.php")?>

<main class="bg-light row pe-3 ps-3">
    <div>
        <h1>Entre em contato</h1>
        <hr>
        <div class="row">
            <form class="col">
                <div class="mb-3">
                    <input type="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
                </div>
                <div class="mb-3">
                    <input type="assunto" class="form-control" id="exampleFormControlInput1" placeholder="Assunto">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Menssagem" rows="4"></textarea>
                </div>
                <div class="col-auto">
                <button type="submit" class="float-sm-end btn btn-primary mb-3">Enviar</button>
                </div>
            </form>
            <div class="col ">
                <iframe class="float-sm-end" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.3286620681233!2d-47.331674289095!3d-22.753181132313383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8998174c896b9%3A0x739b7f99b3323574!2sSenac%20Americana!5e0!3m2!1spt-BR!2sbr!4v1712019072428!5m2!1spt-BR!2sbr" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</main>

<?php include("rodape.php")?>