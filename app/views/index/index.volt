<div class="page-header" align="center">
    <h1>Envio de email</h1>
</div>


<div id="contactform">
    <!– bloque confirmacion de envio oculto –>
    <div id="c_information" class="hide">
        <p>{{ content() }}</p>
    </div>
    <!– fin bloque confirmacion de envio –>

    <!– inicio formulario –>
    <form action="/envioEmail/index/send" class="" method="post">
        <!--form id="main-contact-form" name="contact-form" method="post" action="#"-->
        <div class="form-group">
            <input type="text" id="contacto_nombre" name="contacto_nombre" maxlength="50" placeholder="Nombre">                                    </div>

        <div class="form-group">
            <input type="text" id="contacto_email" name="contacto_email" maxlength="50" placeholder="Email">                                    </div>

        <div class="form-group">
            <input type="text" id="contacto_asunto" name="contacto_asunto" maxlength="50" placeholder="Asunto">                                    </div>

        <div class="form-group">
            <textarea id="contacto_mensaje" name="contacto_mensaje" maxlength="150" placeholder="Ingrese su mensaje..." rows="4" cols="40"></textarea>                                    </div>

        <input type="submit" value="enviar" class="btn btn-success btn-block">

    </form>
    <!– fin formulario –>
</div>