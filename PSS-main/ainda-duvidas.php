<div class="row" id="ainda-com-duvidas">
    <h3>Ainda com dúvidas:</h3>
    <p>(41) 0000-0000</p>
</div>
<div class="row" id="contact-area">
    <div id="contato">
        <div class="container mt-5">
            <div class="col-md-12">
                <h3>Fale conosco</h3>
                <p>ENTRE EM CONTATO PARA ESCLARECER SUAS DÚVIDAS</p>
            </div>
            <form action="PSS-main/form-area-contato.php" method="POST">
                <div class="row">
                    <div class="col-6 mb-3">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required>
                    </div>
                    <div class="col-6 mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="col-6 mb-3">
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="col-6 mb-3">
                        <input type="tel" class="form-control" id="celular" name="celular" placeholder="Celular" required>
                    </div>
                    <div class="col-12 mb-3">
                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Mensagem" required></textarea>
                    </div>
                </div>
                <div id="btns">
                    <button type="submit" class="btn btn-primary btn-lg enviar-btn">Enviar</button>
                    <button type="button" class="btn btn-primary btn-lg" id="limpar-btn">Limpar</button>
                </div>
            </form>
        </div>
    </div>
</div>