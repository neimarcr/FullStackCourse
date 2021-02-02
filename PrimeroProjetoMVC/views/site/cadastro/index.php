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
 
          </div>
          
          <div class="row">
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


          <div class="row">
          <div class="form-group">
            <label for="nivel">Nivel do usuário</label>
            <select name="nivel" id="nivel" class="form-control">
              <option value="admin">Admin</option>
              <option value="guest">Convidado</option>
            </select>
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
