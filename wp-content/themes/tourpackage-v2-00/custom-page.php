<?php
/**
 * Template Name: Custom Page (Maqueta)
 */

?>
<?php get_header(); ?>
<style type="text/css">
  /* Commons */
  .parent {
    overflow: hidden;
  }
  .float-left {
    float: left;
  }

  /* Sidebar */
  .sb-title {
    background: blue;
    color: white;
  }

  /* Steps */
  .steps {
    overflow: hidden;
  }
  .step {
    float: left;
    padding-right: 30px;
  }
  .step .number {    
    color: white;
    background: blue;
    border-radius: 50%;
    padding: 5px 13px;  
    font-size: 14px;

    /*
    border-radius: 50%;
    behavior: url(PIE.htc);

    width: 36px;
    height: 36px;
    padding: 8px;

    background: #fff;
    border: 2px solid #666;
    color: #666;
    text-align: center;

    font: 32px Arial, sans-serif;
    */
  }
  

  /* Table */
  .table {
    border-collapse: collapse;
    display: table;
  }
  .table, .heading, .cell {
    border: 0;
  }
  .table .title {
    display: table-caption;
    text-align: center;
    font-weight: bold;
    font-size: larger;
  }
  .table .heading {
    display: table-row;
    font-weight: bold;
    text-align: center;
  }
  .table .row {
    display: table-row;
  }
  .table .cell {
    display: table-cell;
    /*border: solid;*/
    border-width: thin;
    padding-left: 5px;
    padding-right: 5px;
    text-align: center;    
  }
  .table .heading .cell {
    background: blue;
    color: white;
  }

  /* Others */
  .button {
    left: 0px !important;
  }
</style>
  <div id="primary" class="content-area">
    <main id="main" class="site-main parent" role="main">
      <div class="sidebar float-left">
        <h2>TU RESERVACION</h2>
        <div class="sidebar">
          <section class="sb-title">
            <span>SALIDA</span>
          </section>
          <section class="sb-description">
            <div class="title">Fecha de Salida:</div>
            <div class="description">20/09/2015</div>
            <div class="title">Origen:</div>
            <div class="description">GUADALAJARA</div>
            <div class="title">Destino:</div>
            <div class="description">CULIACAN</div>
            <div class="title">Horario:</div>
            <div class="description">...</div>
          </section>
        </div>
        <div class="sidebar">
          <section class="sb-title">
            <span>REGRESO</span>
          </section>
          <section class="sb-description">
            <div class="title">Fecha de Salida:</div>
            <div class="description">20/09/2015</div>
            <div class="title">Origen:</div>
            <div class="description">GUADALAJARA</div>
            <div class="title">Destino:</div>
            <div class="description">CULIACAN</div>
            <div class="title">Horario:</div>
            <div class="description">...</div>
          </section>
        </div>
        <div class="sidebar">
          <section class="title">
            <span>PASAJEROS</span>
          </section>
          <section class="description">
            <div class="title">Adultos</span>
            <span>1</span>
          </section>
        </div>
      </div>
      <div class="content float-left">
        <div class="help">
          <a href="#">¿Necesitas Ayuda? >></a>
        </div>
        <div class="steps">
          <div class="step">
            <div class="number">1</div><span class="text">Salida</span>
          </div>
          <div class="step">
            <div class="number">2</div><span class="text">Salida</span>
          </div>
          <div class="step">
            <div class="number">3</div><span class="text">Salida</span>
          </div>
          <div class="step">
            <div class="number">4</div><span class="text">Salida</span>
          </div>
          <div class="step">
            <div class="number">5</div><span class="text">Salida</span>
          </div>
          <div class="step">
            <div class="number">6</div><span class="text">Salida</span>
          </div>
          <div class="step">
            <div class="number">7</div><span class="text">Salida</span>
          </div>
        </div>
        <div>
          <div class="step-title">
            <div class="number">1</span> <span>Tu Salida</span>
          </div>
          <div>
            <div>Selecciona la hora de salida y el servicio de tu preferencia. Para ir al siguiente paso del proceso da click en continuar.</div>
            <div class="table">
              <div class="heading">
                <div class="cell">
                  <p>Salida</p>
                </div>
                <div class="cell">
                  <p>Servicio</p>
                </div>
                <div class="cell">
                  <p>Tarifa</p>
                </div>
                <div class="cell">
                  <p>Fecha de Llegada</p>
                </div>
                <div class="cell">
                  <p>Horario</p>
                </div>
                <div class="cell">
                  <p>Itinerario</p>
                </div>
                <div class="cell">
                  <p>Selecciona</p>
                </div>
              </div>
              <div class="row">
                <div class="cell">
                  <p>01:30</p>
                </div>
                <div class="cell">
                  <p>
                    <span class="icon-first-class"></span> <span>PRIMERA CLASE</span>
                  </p>
                </div>
                <div class="cell">
                  <p>17000.00</p>
                </div>
                <div class="cell">
                  <p>21/02/2015</p>
                </div>
                <div class="cell">
                  <p>07:50</p>
                </div>
                <div class="cell">
                  <p><a href="#">ver itinerario</a></p>
                </div>
                <div class="cell">
                  <p><a href="#" class="button medium blue">Seleccionar</a></p>
                </div>
              </div>
              <div class="row">
                <div class="cell">
                  <p>01:30</p>
                </div>
                <div class="cell">
                  <p>
                    <span class="icon-first-class"></span> <span>PRIMERA CLASE</span>
                  </p>
                </div>
                <div class="cell">
                  <p>17000.00</p>
                </div>
                <div class="cell">
                  <p>21/02/2015</p>
                </div>
                <div class="cell">
                  <p>07:50</p>
                </div>
                <div class="cell">
                  <p><a href="#">ver itinerario</a></p>
                </div>
                <div class="cell">
                  <p><a href="#" class="button medium blue">Seleccionar</a></p>
                </div>
              </div>
              <div class="row">
                <div class="cell">
                  <p>01:30</p>
                </div>
                <div class="cell">
                  <p>
                    <span class="icon-first-class"></span> <span>PRIMERA CLASE</span>
                  </p>
                </div>
                <div class="cell">
                  <p>17000.00</p>
                </div>
                <div class="cell">
                  <p>21/02/2015</p>
                </div>
                <div class="cell">
                  <p>07:50</p>
                </div>
                <div class="cell">
                  <p><a href="#">ver itinerario</a></p>
                </div>
                <div class="cell">
                  <p><a href="#" class="button medium blue">Seleccionar</a></p>
                </div>
              </div>
              <div class="row">
                <div class="cell">
                  <p>01:30</p>
                </div>
                <div class="cell">
                  <p>
                    <span class="icon-first-class"></span> <span>PRIMERA CLASE</span>
                  </p>
                </div>
                <div class="cell">
                  <p>17000.00</p>
                </div>
                <div class="cell">
                  <p>21/02/2015</p>
                </div>
                <div class="cell">
                  <p>07:50</p>
                </div>
                <div class="cell">
                  <p><a href="#">ver itinerario</a></p>
                </div>
                <div class="cell">
                  <p><a href="#" class="button medium blue">Seleccionar</a></p>
                </div>
              </div>
              <div class="row">
                <div class="cell">
                  <p>01:30</p>
                </div>
                <div class="cell">
                  <p>
                    <span class="icon-first-class"></span> <span>PRIMERA CLASE</span>
                  </p>
                </div>
                <div class="cell">
                  <p>17000.00</p>
                </div>
                <div class="cell">
                  <p>21/02/2015</p>
                </div>
                <div class="cell">
                  <p>07:50</p>
                </div>
                <div class="cell">
                  <p><a href="#">ver itinerario</a></p>
                </div>
                <div class="cell">
                  <p><a href="#" class="button medium blue">Seleccionar</a></p>
                </div>
              </div>
              <div class="row">
                <div class="cell">
                  <p>01:30</p>
                </div>
                <div class="cell">
                  <p>
                    <span class="icon-first-class"></span> <span>PRIMERA CLASE</span>
                  </p>
                </div>
                <div class="cell">
                  <p>17000.00</p>
                </div>
                <div class="cell">
                  <p>21/02/2015</p>
                </div>
                <div class="cell">
                  <p>07:50</p>
                </div>
                <div class="cell">
                  <p><a href="#">ver itinerario</a></p>
                </div>
                <div class="cell">
                  <p><a href="#" class="button medium blue">Seleccionar</a></p>
                </div>
              </div>
              <div class="row">
                <div class="cell">
                  <p>01:30</p>
                </div>
                <div class="cell">
                  <p>
                    <span class="icon-first-class"></span> <span>PRIMERA CLASE</span>
                  </p>
                </div>
                <div class="cell">
                  <p>17000.00</p>
                </div>
                <div class="cell">
                  <p>21/02/2015</p>
                </div>
                <div class="cell">
                  <p>07:50</p>
                </div>
                <div class="cell">
                  <p><a href="#">ver itinerario</a></p>
                </div>
                <div class="cell">
                  <p><a href="#" class="button medium blue">Seleccionar</a></p>
                </div>
              </div>
              <div class="row">
                <div class="cell">
                  <p>01:30</p>
                </div>
                <div class="cell">
                  <p>
                    <span class="icon-first-class"></span> <span>PRIMERA CLASE</span>
                  </p>
                </div>
                <div class="cell">
                  <p>17000.00</p>
                </div>
                <div class="cell">
                  <p>21/02/2015</p>
                </div>
                <div class="cell">
                  <p>07:50</p>
                </div>
                <div class="cell">
                  <p><a href="#">ver itinerario</a></p>
                </div>
                <div class="cell">
                  <p><a href="#" class="button medium blue">Seleccionar</a></p>
                </div>
              </div>
              <div class="row">
                <div class="cell">
                  <p>01:30</p>
                </div>
                <div class="cell">
                  <p>
                    <span class="icon-first-class"></span> <span>PRIMERA CLASE</span>
                  </p>
                </div>
                <div class="cell">
                  <p>17000.00</p>
                </div>
                <div class="cell">
                  <p>21/02/2015</p>
                </div>
                <div class="cell">
                  <p>07:50</p>
                </div>
                <div class="cell">
                  <p><a href="#">ver itinerario</a></p>
                </div>
                <div class="cell">
                  <p><a href="#" class="button medium blue">Seleccionar</a></p>
                </div>
              </div>
              <div class="row">
                <div class="cell">
                  <p>01:30</p>
                </div>
                <div class="cell">
                  <p>
                    <span class="icon-first-class"></span> <span>PRIMERA CLASE</span>
                  </p>
                </div>
                <div class="cell">
                  <p>17000.00</p>
                </div>
                <div class="cell">
                  <p>21/02/2015</p>
                </div>
                <div class="cell">
                  <p>07:50</p>
                </div>
                <div class="cell">
                  <p><a href="#">ver itinerario</a></p>
                </div>
                <div class="cell">
                  <p><a href="#" class="button medium blue">Seleccionar</a></p>
                </div>
              </div>
            </div>
            <a href="#" class="button large blue">Continuar >></a>
          </div>
        </div>
      </div>
    </main><!-- .site-main -->
  </div><!-- .content-area -->
<?php get_footer(); ?>