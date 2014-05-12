<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class facturacion extends CI_Controller {

    function __construct() {
        parent::__construct();
    }


    function sendemail_fact()
    {
        $from = $this->ion_auth->user()->row()->email; 
      

        $html = '<!DOCTYPE html>
        <html>
        <head>
            <style>

            </style>
        </head>
        <body>
            <section class="content invoice" id="resumen_venta">                    
                            <!-- title row -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2 class="page-header">
                                        <i class="fa fa-globe"></i> CLM Developers SAC
                                        <small class="pull-right">Fecha: 12/05/2014</small>
                                    </h2>                            
                                </div><!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    De
                                    <address>
                                        <b>RUC:</b> 20559603563<br>
                                        <strong>CLM Developers, SAC.</strong><br>
                                        Bernardo Alcedo 187<br>
                                        Urb. San Fernando, Trujillo<br>
                                        <i class="fa fa-phone"></i> +51 999494821 / +51 044 612874<br>
                                        <i class="fa fa-envelope"></i> contacto@clmdevelopers.com
                                    </address>
                                </div><!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Cliente:</b>
                                    <address>
                                        <strong id="clienteR"> EMPRESA EDITORA MULTIMEDIA S.A.C. </strong><br>
                                        CAL. ELEAZAR GUZMAN Y BARRON 2520 URB. ELIO 2DA ETAPA (2DA ETAPA) LIMA LIMA LIMA<br>
                                    </address>
                                    <b>Ruc:</b>
                                    <address>
                                        <strong id="rucR">20101475817</strong><br>
                                    </address>
                                </div><!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Tipo Comprobante</b> <br>
                                    <address>
                                            <strong id="tipdocR">Factura</strong><br>
                                    </address>
                                    <b>Serie - Numero</b> <br>
                                    <address>
                                            0001 - 7<strong id="sercomR"></strong><br>
                                    </address>
                                    <b>Fec. Emisión:</b>12/05/2014<br>
                                    <b>Vendedor:</b>Richard Buddy Oruna Rodriguez<br>
                                    <b>Tipo Pago:</b>Contado<br><br>
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                            <!-- TABLA DE PRODUCTOS POR COMPRAR aqui -->
                            <!-- Table row -->
                            <div class="row">
                                <div class="col-xs-12 table-responsive">
                                    <table class="table table-striped" id="tabla_resumen_productos">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Producto</th>
                                                <th>Cantidad</th>
                                                <th>Precio</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                        <tr>
                                                <td>
                                                    107957907122</td>
                                                <td>
                                                    producto 75  Bata Acrílico</td>
                                                <td>
                                                    1</td>
                                                <td>
                                                    0.00</td>
                                            </tr>
                                            </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                            <br>
                            <!-- END TABLA DE PRODUCTOS -->
                            <div class="row">
                                <div class="col-xs-6 col-lg-6"></div>
                                <div class="col-xs-6 col-lg-6">
                                    <table class="table">
                                        <tbody><tr>
                                            <td>
                                                <strong>Subtotal</strong>
                                            </td>
                                            <td>
                                                10.51</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Descuento</strong>
                                                </td>
                                                <td>
                                                    0.0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>IGV</strong>
                                                </td>
                                                <td>
                                                    18.0%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Total</strong>
                                                </td>
                                                <td>
                                                    12.40</td>
                                            </tr>
                                    </tbody></table>
                                </div>
                            </div>
                        </section>
        </body>
        </html>';

        $para           =  "avilasauna@gmail.com";
        $subject        =  "Pruebaaasss";
        $msg            =   $html;                            
        $mainheaders    =  'Content-type: text/html; charset=utf-8' . "\r\n";
        $mainheaders    .=  'From: SIRAD <'.$from.'>' . "\r\n";
        
        
             
      
        $resultado = mail ($para, $subject, $msg, $mainheaders, "-f ".$from);

        if($resultado){
           echo 'Enviado! :)';       
        }        
        else
            echo 'Error! :(';

    }
}
?>