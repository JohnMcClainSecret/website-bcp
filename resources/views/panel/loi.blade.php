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
            border-width: 3.5px 0px;
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
    </style>
</head>

<body>
    @php
        $current = Carbon::now()->format('m-d-Y');
    @endphp
    {{-- logo --}}
    <div style="width: 50%; margin-left: 350px; margin-top: 10px;margin-bottom: 10px">
        <img src="{{ public_path('img/logo.png') }}" style="width: 100px; height: 100px">
    </div>
    {{-- datos de contacto --}}
    <div class="flexrow" >
        <div style="text-align: center; font-family: Logo; font-size: 10px; line-height: 12px">
            <label>199 Water Street, New Yor, NY, 10038</label> <br>
            <label>Phone: </label> 212 4611062<br>
            <label>Fax: </label> XXX-XXX-XXX<br>
            <label><a href="www.bcpbrokers.com">www.bcpbrokers.com</a></label> <br>
            <label>contact@bcpbrokers.com</label> <br>
        </div>
    </div>
    {{-- textos --}}
    <div class='div'>
        <p> <label style="font-family: BCP BOLD;"> BC Prime</label> BC Prime offers you combined years of experience along with exceptional customer service.
            Our sales departmentwill assist you in all aspects of  this  international  acquisition
            including  the  production  of  current  market  evaluations  to  ensure  that  you  receive
            the  best value  for  your membership.
            <br> The purpose of this letter is to set forth some of the basic terms and conditions of the proposed
            purchase. The terms set forth in this Letter willnot become binding until a more detailed
            “Purchase Agreement” is negotiated and signed by the parties, as contemplated below by the section
            of this Letter entitled “Non-Binding”.
            <br> The Purchase Offer listed is guaranteed as long as your membership’s description is accurate.
            Please verify that all the information specified below is correct.
        </p>
        <p>
            <label style="font-family: BCP BOLD;">1. Property:</label> BC Primewill negotiate the resale of the following vacation membership:
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
        <table class="table table-bordered center" style="margin: 0 120px">
            <tbody>
                <tr>
                    <td style="font-family: BCP BOLD;">PURCHASE OFFER</td> <td style="font-family: BCP BOLD;">PURCHASE TERMS</td>
                </tr>
                <tr>
                    <td>
                        <label style="font-family: BCP BOLD;">Resort: {{ $Resort}}</label><br>
                        <label style="font-family: BCP BOLD;">Location: {{$Location}}</label><br>
                        <label style="font-family: BCP BOLD;">Type of Unit: {{$UnitType}}</label><br>
                        <label style="font-family: BCP BOLD;">Registered Weeks / Points: {{ $Registered}}</label><br>
                        <label style="font-family: BCP BOLD;">Membership: {{$Membership}}</label><br>
                        <label style="font-family: BCP BOLD;">Current Usage Fee: {{$Maintenance}}</label><br>
                    </td>
                    <td>
                        <p >
                            -PRICE:The  proposed  purchase  price  is  ${{$PurchasePrice}} USD,  of which   would   be
                            deposited   in a Trust   Account   upon acceptance of a binding Purchase Agreement.
                            Buyer would pay the balance to Seller at closing.
                        </p>
                        <p>
                            -COMMISSION:An 8% commission will be charged to the Seller(s)at the time of closing.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>Purchase Price:</td> <td>  </td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- no binding --}}
    <div  style="margin: 20px 50px 0px">
        <p style="text-align: justify">
            <label style="font-family: BCP BOLD;">NON-BINDING.</label> letter of Intent does not and is not intended to contractually bind the parties,
            and is only an expression of the basic conditions to be incorporated into a binding Purchasing
            Agreement. This Letter does not require either party to negotiate in good faith or to proceed to
            the completion of a binding Purchase Agreement. The parties shall not be contractually bound unless
            and until they enter into a formal, written Purchase Agreement, which must be in form and content
            satisfactory to each party and to each party’s legal counsel, in their sole discretion. Neither
            party may rely on this Letter as creating any legal obligation of any kind.
        </p>
    </div>
    <footer >
        <p style="margin-top: 25px">© CopyrightBusiness Consultant Prime. All Rights Reseverves</p>
    </footer>
    <hr>
    <div style="margin: 40px 45px">
        <label style="text-align: justify; font-family: BCP BOLD">DISCLOSURE:</label>
        <p style="text-align: justify">The  offer  on  this  letter  of  intent  is  for  a  limited  period  and  will  expire  within
            the  next  10  days  upon  its  delivery  date.  Upon  the understanding of this agreement, please
            sign and return a copy of this Letter of Intent and Proof of Ownership.
        </p>
            <ol style="font-family: BCP">
                <li>By signing this Purchase Offer you are not committing nor obligated to sell</li>
                <li>By signing this Purchase Offer you will not be relinquishing the rights to your property.</li>
            </ol>
        <p>For any questions or concerns, please contact your broker.</p>
        <br>
        <p>Sincerely, </p>
    </div>
    {{-- Firmas --}}
    <div class="row" style="margin: 130px 45px">
        <div class="col-md-6">
            <label style="font-family: BCP BOLD;"> Broker: _________________________</label>
            @if (isset($Signature))
                <label style="font-family: BCP BOLD;margin-left: 20px"> Designated Member:</label>
                <img src="{{$Signature}}" style="width: 100px">
            @else
                <label style="font-family: BCP BOLD;margin-left: 20px"> Designated Member: _______________________</label>
            @endif
        </div> <br>
        <div class="col-md-6">
            <label style="font-family: BCP BOLD; "> Business Consultant Prime Brokers</label>
            <label style="font-family: BCP BOLD; margin-left: 130px"> Co-Member: ____________________________</label>
        </div>
    </div>
    <div style="margin: 20px 45px">
        <p>
            Company Representative <br> Business Consultant Prime Brokers
            <br>   New York,
            <br> NYIssued:
        </p>
    </div>
     {{-- logo --}}
     <div style="width: 50%; margin-left: 350px; margin-top: 110px;margin-bottom: 10px">
        <img src="{{ public_path('img/logo.png') }}" style="width: 100px; height: 100px">
    </div>
    {{-- datos de contacto --}}
    <div>
        <div style="text-align: center; font-family: Logo; font-size: 10px; line-height: 12px">
            <br>
            <label >199 Water Street, New Yor, NY, 10038</label> <br>
            <label >Phone: 212 4611062</label> <br>
            <label >Fax: XXXXXXXXXX</label> <br>
            <label ><a href="www.bcpbrokers.com">www.bcpbrokers.com</a></label> <br>
            <label >contact@businessconsultantprimebrokers.com</label> <br>
        </div>
    </div>
</body>

</html>
