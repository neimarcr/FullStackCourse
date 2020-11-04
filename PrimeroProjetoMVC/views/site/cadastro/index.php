<section class="section contato mt-3">
  <h3 class="mb-3">Cadastrar usuário</h3>
  <div class="container pb-5">
    <div class="row">
      <div class="col-12 px-5">
        <form id="form-cadastro">
          <div class="row">
            <div class="col-8">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe seu nome">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Informe CPF">
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="fone">Telefone</label>
                <input type="text" class="form-control" name="fone" id="fone" placeholder="Informe seu telefone">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="email">Endereço de E-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" name="senha" id="senha" placeholder="Informe uma senha">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="confirmarSenha">Confirmação de Senha</label>
                  <input type="password" class="form-control" name="confirmarSenha" id="confirmarSenha" placeholder="Informe uma senha">
                </div>
            </div>
          </div> 
        
        </form>
        <div class="text-center">
             <button type="button" class="btn btn-secondary" id="btn-enviar-usuario">Enviar</button>
        </div>
     
      </div>
    </div>
  </div>
</section>
