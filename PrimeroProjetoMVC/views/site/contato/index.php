<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap&libraries=&v=weekly"
  defer
></script>
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/site/maps.js"></script>

<section class="section contato mt-3">
  <h3 class="mb-3">Contato</h3>
  <div class="container pb-5">
    <div class="row">
      <div class="col-6 px-5">
        <form id="form-contato">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe seu nome">
          </div>
          <div class="form-group">
            <label for="fone">Telefone</label>
            <input type="text" class="form-control" name="fone" id="fone" placeholder="Informe seu telefone">
          </div>
          <div class="form-group">
            <label for="email">Endereço de E-mail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="5"></textarea>
          </div>
        </form>
        <button type="button" class="btn btn-secondary" id="btn-enviar-contato">Enviar</button>
      </div>
      <div class="col-6 my-auto text-center">
        <div class="row">
          <div class="col-12">
             <i class="fa fa-whatsapp" aria-hidden="true"></i><p>(49) 99999-9999</p>
          </div>
          <div class="col-12 my-3">
            <i class="fa fa-telegram" aria-hidden="true"></i><p>(49) 99999-9999</p>
          </div>      
        </div>
        <p>Neimar Rech</p>
      </div>
    </div>
  </div>
  <div class="mt-5" id="map" style="height: 400px; ">
</section>
