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
            <label>Phone: </label> (212) 372 7173 / (212) 461 1062<br>
            <label>Fax: </label> (212) 658-9545<br>
            <label><a href="www.bcpbrokers.com">www.bcpbrokers.com</a></label> <br>
            <label>contact@bcpbrokers.com</label> <br>
        </div>
    </div>
    {{-- textos --}}
    <div class='div'>
        <p style="text-align: justify; margin: 0 15px"> <label style="font-family: BCP BOLD;text-align: justify"> BC Prime</label> offers you combined years of experience along with exceptional customer service.
            Our sales departmentwill assist you in all aspects of  this  international  acquisition
            including  the  production  of  current  market  evaluations  to  ensure  that  you  receive
            the  best value  for  your membership.
            <br> The purpose of this letter is to set forth some of the basic terms and conditions of the proposed
            purchase. The terms set forth in this Letter willnot become binding until a more detailed
            Rental Agreement” is negotiated and signed by the parties, as contemplated below by the section
            of this Letter entitled “Non-Binding”.
            <br> The Rental Offer listed is guaranteed as long as your membership’s description is accurate.
            Please verify that all the information specified below is correct.
        </p><br>
        <p style="margin-bottom: 5px">
            <label style="font-family: BCP BOLD;">1. Property: BCP Prime</label> negotiate the rental of the following vacation membership:
        </p>
    </div>
    {{-- datos de user --}}
    <div class='div'>
        <label style="font-family: BCP BOLD; margin: 0 7px;">Designated Owner: {{$Seller}}</label><br>
        <label style="font-family: BCP BOLD; margin: 0 7px;">Phone: {{ $Phone}}</label><br>
        <label style="font-family: BCP BOLD; margin: 0 7px;">Email: {{ $Email}}</label><br>
    </div>
    {{-- tabla con info --}}
    <div class="justify-content-center" style="margin-top: 20px">
        <table class="table table-striped center" style="margin: 0 120px">
            <tbody>
                <tr>
                    <td style="font-family: BCP BOLD;">RENTAL OFFER</td> <td style="font-family: BCP BOLD;">RENTAL TERMS</td>
                </tr>
                <tr>
                    <td  width="50%">
                        <label style="font-family: BCP BOLD;">Resort:</label> <label style="font-family: BCP;">{{ $Resort}}</label><br>
                        <label style="font-family: BCP BOLD;">Season:</label> <label style="font-family: BCP;">Red</label> <br>
                        <label style="font-family: BCP BOLD;">Location:</label> <label style="font-family: BCP;">{{$Location}}</label>  <br>
                        <label style="font-family: BCP BOLD;">Type of Unit:</label> <label style="font-family: BCP;">{{$UnitType}}</label><br>
                        @if ($Additional > 0)
                            <label style="font-family: BCP BOLD;">Registered Weeks / Points:</label> <label style="font-family: BCP;">
                            {{ $Registered}} Registered week and {{$Additional}} Additional Weeks</label> <br>
                        @else
                            <label style="font-family: BCP BOLD;">Registered Weeks / Points:</label> <label style="font-family: BCP;">
                            {{ $Registered}} Registered week</label> <br>
                        @endif
                        <label style="font-family: BCP BOLD;">Current Usage Fee: </label> <label style="font-family: BCP;">$ {{ number_format($Maintenance,2)}} USD</label> <br>
                        <label style="font-family: BCP BOLD;">Membership:</label> <label style="font-family: BCP;"> {{$Membership}} </label> <br>
                        <label style="font-family: BCP BOLD;">Weeks to Rent:</label> <label style="font-family: BCP;"> {{$Weeks}} </label> <br>
                        <label style="font-family: BCP BOLD;">Per week:</label> <label style="font-family: BCP;">$ {{ number_format($PerWeek,2)}} USD</label> <br>
                    </td>
                    <td width="50%">
                        <p style="text-align: justify">
                            <label style="font-family: BCP BOLD;"> - Price: </label>
                            The proposed rental price is $ {{ number_format($PurchasePrice)}}  USD, of which would be deposited in a Trust Account
                            upon acceptance ofa binding Rental Agreement. Lessor would pay the balance to Lesse at
                            closing
                        </p>
                        <p>
                            -<label style="font-family: BCP BOLD;"> Comission: </label>An 8% commission will be charged to the Lessor(s) at the time of closing.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="font-family: BCP BOLD; text-align: right; font-size: 19px">Rental Price: $ {{ number_format($PurchasePrice)}}  USD</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- no binding --}}
    <div  style="margin: 20px 50px 0px">
        <p style="text-align: justify">
            <label style="font-family: BCP BOLD;">NON-BINDING.</label> This letter of Intent does not and is not
            intended to contractually bind the parties, and is only an expression of the basic conditions to be
            incorporated into a binding Rental Agreement. This Letter does not require either party to negotiate
            in good faith or to proceed to the completion of a binding Rental Agreement. The parties shall not be
            contractually bound unless and until they enter into a formal, written Rental Agreement, which must
            be in form and content satisfactory to each party and to each party’s legal counsel, in their sole
            discretion. Neither party may rely on this Letter as creating any legal obligation of any kind.
        </p>
    </div>
    <footer >
        <p style="margin-top: 25px">© Copyright <label style="font-family: BCP BOLD;">Business Consultant Prime.</label>   All Rights Reservers</p>
    </footer>
    <hr>
    <div style="margin: 40px 45px">
        <label style="text-align: justify; font-family: BCP BOLD">DISCLOSURE:</label>
        <p style="text-align: justify">The  offer  on  this  letter  of  intent  is  for  a  limited  period  and  will  expire  within
            the  next  10  days  upon  its  delivery  date.  Upon  the understanding of this agreement, please
            sign and return a copy of this Letter of Intent and Proof of Ownership.
        </p>
            <ol type="a" style="font-family: BCP">
                <li >By signing this Rental Offer you are not committing nor obligated to sell</li>
                <li>By signing this Rental Offer you will not be relinquishing the rights to your property.</li>
            </ol>
        <p>For any questions or concerns, please contact your broker.</p>
        <br>
        <p>Sincerely, </p>
    </div>
    {{-- Firmas --}}
    <div class="row" style="margin: 100px 45px 130px">
        <div class="col-md-6">
            <label style="font-family: BCP BOLD;"> Broker:
                <img src="{{$BrokerSignature}}" style="width: 200px; height: 150px">
                {{-- {{$BrokerName}} --}}
            </label>
            @if (isset($Signature))
                <label style="font-family: BCP BOLD;margin-left: 120px"> Designated Member:</label>
                <img src="{{$Signature}}" style="width: 200px">
            @else
                <label style="font-family: BCP BOLD;margin-left: 110px"> Designated Member: _______________________</label>
            @endif
        </div>
        <div class="col-md-6">
            <label style="font-family: BCP BOLD; ">
                {{$BrokerName}} <br>
                Business Consultant Prime Brokers</label>
            <label style="font-family: BCP BOLD; margin-left: 130px"> Co-Member: ____________________________</label>
        </div>
    </div>
    <div style="margin: 20px 45px">
        <p>
            Company Representative <br> Business Consultant Prime Brokers
            <br>   New York,NY
            <br> Issued: {{$current}}
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
        <label >Phone: (212) 372 7173 / (212) 461 1062</label> <br>
        <label >Fax: (212) 658-9545</label> <br>
        <label ><a href="www.bcpbrokers.com">www.bcpbrokers.com</a></label> <br>
        <label >contact@businessconsultantprimebrokers.com</label> <br>
    </div>
</body>

</html>
