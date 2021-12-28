@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>

<html>

<head>
    <title>PURCHASE OFFER</title>
    <style>
           @page {
                margin: 0cm 0cm;
            }
        html{
            margin: 0 0;

        }
        .div {
            border-style: solid;
            border-color: #17a2b8;
            align-content: center;
            /* font-family: Arial; */
            margin: 10px 15px;
            border-width: 1px;
            font-family: BCP;
            font-size: 17px;
        }
        .table, tr, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        /* .table2, tr, td{
            border: 1px solid rgb(255, 255, 255);
            border-collapse: collapse;
        } */
        .center{
            margin-left: auto;
            margin-right: auto;
        }
        .flexrow {
            /* display: -webkit-box;
            display: -webkit-flex; */
            display: flex !important;

        }
        .flexrow > div {
            /* -webkit-box-flex: 1; */
            /* -webkit-flex: 1;
             flex: 1; */
            border-style: solid none;
            border-color: #17a2b8 #fff;
            border-width: 3px 0px;
        }
            /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Extra personal styles **/
            background-color: #17a2b8;
            color: white;
            text-align: center;
            line-height: 1.5cm;
        }

        p{
            font-family: BCP;
            line-height: 15px;
            margin: 0 7px;
        }
        @font-face {
            font-family: "BCP";
            src: url({{ storage_path('fonts/UniversLightCondensed.ttf') }}) format("truetype");
        }
        @font-face {
            font-family: "Logo";
            src: url({{ storage_path('fonts/TrajanusBricks.ttf') }}) format("truetype");
        }

        @font-face{
            font-family: "BCP BOLD";
            src: url({{ storage_path('fonts/Universal Condensed Regular.ttf')}}) format("truetype");
        }
        hr {
            page-break-after: always;
            border: 0;
            margin: 0;
            padding: 0;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #ffffff;
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color:#ffffff;
        }
    </style>
</head>

<body>
    @php
        $current = Carbon::now()->format('l jS \\of F Y ');
    @endphp
    {{-- logo --}}
    <div style="width: 50%; margin-left: 350px; margin-top: 10px;margin-bottom: 8px">
        <img src="{{ public_path('img/logo-bcp.png') }}" style="width: 100px; height: 100px">
    </div>
    {{-- datos de contacto --}}
    <div class="flexrow" >
        <div style="text-align: center; font-family: Logo; font-size: 9.5px; line-height: 10px; letter-spacing: 1px; font-weight: 1px; padding: 5px 0;">
            <label>199 Water Street, New Yor, NY, 10038</label> <br>
            <label>Phone: </label> (212) 372 7173<br>
            <label>Fax: </label> (212) 658-9545<br>
            <label><a href="www.bcpbrokers.com">www.bcpbrokers.com</a></label> <br>
            <label>contact@bcpbrokers.com</label> <br>
        </div>
    </div>
    {{-- textos --}}
    <div class='div'>
        <p> <label style="font-family: BCP BOLD;"> BC Prime</label> BC Prime le ofrece años combinados de
            experiencia junto con un servicio al cliente excepcional. Nuestro departamento de ventas lo
            ayudará en todos los aspectos de esta adquisición internacional, incluida la producción de
            evaluaciones de mercado actuales para garantizar que reciba el mejor valor por su membresía.
            <br> El propósito de esta carta es establecer algunos de los términos y condiciones básicos de
            la compra propuesta. Los términos establecidos en esta Carta no serán vinculantes hasta que las
            partes negocien y firmen un "Acuerdo de Compra" más detallado, como se contempla a continuación
            en la sección de esta Carta titulada "No vinculante".
            <br>La oferta de compra indicada está garantizada siempre que la descripción de su membresía
            sea precisa. Verifique que toda la información especificada a continuación sea correcta.
        </p><br>
        <p style="margin-bottom: 5px">
            <label style="font-family: BCP BOLD;">1. Propiedad: BC Prime </label> negociará la reventa de la siguiente membresía vacacional:
        </p>
    </div>
    {{-- datos de user --}}
    <div class='div'>
        <label style="font-family: BCP BOLD; margin: 0 7px;">Propietario Designado: {{$Seller}}</label><br>
        <label style="font-family: BCP BOLD; margin: 0 7px;">Teléfono: {{ $Phone}}</label><br>
        <label style="font-family: BCP BOLD; margin: 0 7px;">Email: {{ $Email}}</label><br>
    </div>
    {{-- tabla con info --}}
    <div class="justify-content-center" style="margin-top: 20px">
        <table class="table table-striped center" style="margin: 0 120px">
            <tbody>
                <tr>
                    <td style="font-family: BCP BOLD;">OFERTA DE COMPRA: </td> <td style="font-family: BCP BOLD;">TÉRMINOS DE COMPRA</td>
                </tr>
                <tr>
                    <td  width="50%">
                        <label style="font-family: BCP BOLD;">Resort:</label> <label style="font-family: BCP;">{{ $Resort}}</label><br>
                        {{-- <label style="font-family: BCP BOLD;">Season:</label> <label style="font-family: BCP;">Red</label> <br> --}}
                        <label style="font-family: BCP BOLD;">Ubicación:</label> <label style="font-family: BCP;">{{$Location}}</label>  <br>
                        <label style="font-family: BCP BOLD;">Tipo de Unidad:</label> <label style="font-family: BCP;">{{$UnitType}}</label><br>
                        @if ($Additional > 0)
                            <label style="font-family: BCP BOLD;">Semanas / Puntos registrados: </label> <label style="font-family: BCP;">
                            {{ $Registered}} semana(s) registrada(s) y {{$Additional}} semana(s) adicional(es)</label> <br>
                        @else
                            <label style="font-family: BCP BOLD;">Semanas / Puntos registrados: </label> <label style="font-family: BCP;">
                            {{ $Registered}} semana(s) registrada(s)</label> <br>
                        @endif

                        <label style="font-family: BCP BOLD;">Membresía:</label> <label style="font-family: BCP;"> {{$Membership}} </label> <br>
                        <label style="font-family: BCP BOLD;">Tarifa de uso actual: </label> <label style="font-family: BCP;">{{$Maintenance}}</label>
                    </td>
                    <td width="50%">
                        <p style="text-align: justify">
                            <label style="font-family: BCP BOLD;"> - Precio: </label>
                            El precio de compra propuesto es de $ {{ number_format($PurchasePrice)}}USD, de los cuales se depositarían
                            en una Cuenta Fiduciaria al aceptar un Acuerdo de Compra vinculante. El comprador
                            pagaría el saldo al vendedor al cierre.
                        </p>
                        <p>
                            -<label style="font-family: BCP BOLD;">Comisión: </label>Se cobrará una comisión del 8% al Vendedor (es) en el momento del cierre.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: BCP BOLD; text-align: right; font-size: 19px">PRECIO DE COMPRA: $ {{ number_format($PurchasePrice)}}  USD</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- no binding --}}
    <div  style="margin: 20px 50px 0px">
        <p style="text-align: justify">
            <label style="font-family: BCP BOLD;">NO VINCULANTE.</label> Esta carta de intención no vincula
            contractualmente a las partes y no está destinada a vincularlas contractualmente, y es solo una
            expresión de las condiciones básicas que se incorporarán en un Acuerdo de compra vinculante.
            Esta Carta no requiere que ninguna de las partes negocie de buena fe o proceda a completar un
            Acuerdo de Compra vinculante. Las partes no estarán vinculadas contractualmente a menos que y
            hasta que celebren un Acuerdo de compra formal por escrito, que debe tener una forma y un
            contenido satisfactorios para cada parte y para el asesor legal de cada parte, a su entera
            discreción. Ninguna de las partes puede confiar en que esta Carta crea obligación legal de ningún
            tipo.
        </p>
    </div>
    <footer >
        <p style="margin-top: 25px">© Copyright <label style="font-family: BCP BOLD;">Business Consultant
            Prime.</label>   All Rights Reservers</p>
    </footer>
    <hr>
    <div style="margin: 40px 45px">
        <label style="text-align: justify; font-family: BCP BOLD">DECLARACIONES:</label>
        <p style="text-align: justify">La oferta de esta carta de intención es por un período limitado y
            vencerá dentro de los próximos 10 días a partir de la fecha de entrega. Una vez que haya
            entendido este acuerdo, firme y envíe una copia de esta carta de intención y prueba de propiedad.
        </p>
            <ol type="a" style="font-family: BCP">
                <li >Al firmar esta Oferta de Compra, no se compromete ni está obligado a vender.</li>
                <li>Al firmar esta Oferta de Compra, no renunciará a los derechos de su propiedad.</li>
            </ol>
        <p>Para cualquier pregunta y/o aclaración, contata a tu broker.</p>
        <br>
        <p>Atentamente, </p>
    </div>
    {{-- Firmas --}}
    <div class="row" style="margin: 100px 45px 130px">
        <div class="col-md-6">
            <label style="font-family: BCP BOLD;"> Broker:
                <img src="{{$BrokerSignature}}" style="width: 200px; height: 150px">
                {{-- {{$BrokerName}} --}}
            </label>
            @if (isset($Signature))
                <label style="font-family: BCP BOLD;margin-left: 120px">Propietario Designado:</label>
                <img src="{{$Signature}}" style="width: 200px">
            @else
                <label style="font-family: BCP BOLD;margin-left: 110px">Propietario Designado: _______________________</label>
            @endif
        </div>
        <div class="col-md-6">
            <label style="font-family: BCP BOLD; ">
                {{$BrokerName}} <br>
                Business Consultant Prime Brokers</label>
            <label style="font-family: BCP BOLD; margin-left: 130px">Co-Propietario: ____________________________</label>
        </div>
    </div>
    <div style="margin: 20px 45px">
        <p>
            Representante de la compañía <br> Business Consultant Prime Brokers
            <br>   New York,NY
            <br> Emitido: {{$current}}
        </p>
    </div>
     {{-- logo --}}
     <div style="width: 50%; margin-left: 60px; margin-top: 70px;margin-bottom: 10px">
        <img  src="{{ public_path('img/caa.jpg') }}" style=" margin: 0 25px; width: 50px; height: 50px" >
        <img  src="{{ public_path('img/timeshare.png') }}"  style=" margin: 0 25px; width: 120px; height: 50px" >
        <img  src="{{ public_path('img/logo-bcp.png') }}" style="width: 100px; height: 100px">
        <img  src="{{ public_path('img/inc.png') }}"  style=" margin: 0 25px 0 40px; width: 50px; height: 40px" >
        <img  src="{{ public_path('img/tsc.png')}}" style=" margin: 0 25px; width: 150px; height: 50px" >
    </div>
    {{-- datos de contacto --}}
    <div style="text-align: center; font-family: Logo; font-size: 8px; line-height: 8px;">
        <br>
        <label >199 Water Street, New Yor, NY, 10038</label> <br>
        <label >Phone: (212) 372 7173</label> <br>
        <label >Fax: (212) 658-9545</label> <br>
        <label ><a href="www.bcpbrokers.com">www.bcpbrokers.com</a></label> <br>
        <label >contact@businessconsultantprimebrokers.com</label> <br>
    </div>
</body>

</html>
