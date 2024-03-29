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
            border-color: #5c768d;
            align-content: center;
            /* font-family: Arial; */
            margin: 0px 15px;
            border-width: 2px;
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
            /* display: flex !important; */
            border-style: solid none;
            border-color: #17a2b8 #fff;
            border-width: 2.5px 0px;
        }
        .flexrow > div {
            /* -webkit-box-flex: 1; */
            /* -webkit-flex: 1;
             flex: 1; */
            /* border-style: solid none;
            border-color: #17a2b8 #fff;
            border-width: 2.5px 0px; */
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
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -0.75rem;
            margin-left: -0.75rem;
        }
        .row-cols-6 > * {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    </style>
</head>

<body>
    @php
        $current = Carbon::now()->format('m-d-Y');
    @endphp
    {{-- logo --}}
    <div style="width: 50%; margin-left: 350px; margin-top: 10px;">
        <img src="{{ public_path('img/logo-bcp.png') }}" style="width: 100px; height: 100px">
    </div>
    {{-- datos de contacto --}}
    <div class="flexrow">
        <div class="row">
            <div class="col-md-6" style="font-family: Logo; font-size: 10px; line-height: 12px; margin: 0px 40px; text-align: center">
                {{-- <div style="margin-left: 30px"> --}}
                <label>199 Water Street, New Yor, NY, 10038</label> <br>
                <label>Phone:  (212) 372 7173 /  (212) 461 1062 </label> <br>
                <label>Fax:  (212) 658-9545 </label> <br>
                <label><a href="www.bcpbrokers.com">www.bcpbrokers.com</a></label> <br>
                <label>contact@bcpbrokers.com</label>
                {{-- </div> --}}
            </div>
            <div class="col-md-6" style="float: right;font-family: Logo; font-size: 10px; line-height: 12px; margin-right: 150px; padding-top: 25px;" >
                <label  style="border-right: 1px solid #17a2b8 ;border-left: 1px solid #17a2b8 ;border: 1px solid #17a2b8 ;">Agreement: BCP- {{$contract->Agreement}} </label> <br>
                <label style="border-right: 1px solid #17a2b8 ;border-left: 1px solid #17a2b8 ;border: 1px solid #17a2b8 ;">Date: {{Carbon::create($contract->Date)->format('m-d-Y')}} </label> <br>
            </div>
        </div>
    </div>
    {{-- textos --}}
    <div style="text-align: center">
        <label style="font-family: BCP BOLD;font-size: 20px;"> TIME SHARE RESALE AGREEMENT</label> <br>
        <label style="font-size: 12px; font-family: BCP BOLD;">CONTRACT FOR LODGING RIGHTS AND SERVICES</label>
    </div>
    <label style="font-size: 15px; font-family: BCP BOLD; margin-left: 75px">PROPERTY DESCRIPTION </label>
    <div class='div' style="font-family: BCP; padding: 15px; margin: 0 75px">
        <label style="font-family: BCP BOLD;">Designated Member:</label> {{$contract->DesignatedMember}} <br>
        <label style="font-family: BCP BOLD;">Co-Member:</label>  {{$contract->CoMember}}<br>
        <label style="font-family: BCP BOLD;">Phone: </label> {{$contract->Phone}}
        <label style="font-family: BCP BOLD; margin-left: 150px">Email:</label>{{ $contract->Email}} <br> <br>
        <label style="font-family: BCP BOLD;">Resort: </label> {{$contract->Resort}}<br>
        <label style="font-family: BCP BOLD;">Location:</label> {{ $contract->Location}}<br>
        <label style="font-family: BCP BOLD;">Type of Unit:  </label>{{$contract->TypeOfUnit}} <label style="font-family: BCP BOLD; margin-left: 150px">Number of weeks subject to the contract: </label> {{$contract->NumberWeeksSubject}}<br>
        <label style="font-family: BCP BOLD;">Registered Number: </label> {{$contract->RegisteredNumber}}<br>
        <label style="font-family: BCP BOLD;">Classification: </label> Red <label style="font-family: BCP BOLD; margin-left: 70px">Bedrooms: </label>{{$contract->Bedrooms}}
        <label style="font-family: BCP BOLD; margin-left: 30px">Baths: </label>{{$contract->FourBedroomBaths}}  <label style="font-family: BCP BOLD;">Capacity: </label> {{ $contract->Capacity}}<br>
        <label style="font-family: BCP BOLD;">Current usage fee per week: </label>$ {{ number_format($contract->CurrentUsageFee,2)}} USD<br>
    </div>
    <table class="div" style=" margin: 0 75px">
        <tr>
            <td  style="border: hidden;border-right: 2px solid #5c768d ;border-bottom: 2px solid #5c768d ; font-family: BCP BOLD; ">PURCHASE OFFER</td>
            <td  style="border: hidden; border-bottom: 2px solid #5c768d ; font-family: BCP BOLD;">PURCHASE TERMS</td>
        </tr>
        <tr>
            <td  style="border: hidden; width: 40%; border: hidden;border-right: 2px solid #5c768d ; font-family: BCP BOLD;">Purchase Price: $ {{ number_format($contract->PurchasePrice,2)}} USD<br>
                Administrative Fee: $ {{ number_format($contract->AdministrativeFee,2)}} USD<br>
                TOTAL AMOUNT: $ {{ number_format($contract->TotalAmount,2)}} USD
            </td>
            <td  style="border: hidden; width: 60%">- PRICE: The proposed purchase price is ${{ number_format($contract->PurchasePrice,2)}} USD, of which would be deposited in a Trust Account upon acceptance of a binding Purchase Agreement. Buyer would pay the balance to Seller at closing.
              <br>  - COMMISSION: An 8% commission will be charged to the Lessee (s) at the time of closing.
            </td>
        </tr>
    </table>
    <div  style="margin: 20px 130px 0px">
        <p style="text-align: justify">
            <label style="font-family: BCP BOLD;">1.	USE OF WEEK (S):</label>
            Timeshare unit is next available for Buyer's use in 2022<br>
             <label style="font-family: BCP BOLD;">2.	DEFINITIONS:</label>
             As used in this contract, "timeshare" shall mean any form of ownership providing a
             right to use and occupy a room, apartment, villa, cottage or the like for a specified
             interval each year, either fixed or varied as to date and place, for a fixed term of
             years or number of uses, established as part of a condominium regime, club plan or
             otherwise. "Timeshare unit" shall mean the physical space dedicated to timeshare ownership.
             "Week" shall mean a seven-day period commencing on noon Friday, Saturday or Sunday,
             depending upon the timeshare plan established by the resort or club above listed.
             Week number 1 is the first week commencing after January 1 of each year; subsequent weeks
             are numbered consecutively through week number 52 (which shall extend until the commencement
             of the following week number.
        </p>
    </div>
    <footer >
        <p style="margin-top: 25px">© Copyright Business Consultant Prime. All Rights Reseverves</p>
    </footer>
    <hr>
    <div style="margin: 90px 130px">
        <p style="text-align: justify">
            <label style="text-align: justify; font-family: BCP BOLD">3.	PURCHASE AGREEMENT:</label>
            The Seller agrees to sell and the Buyer agrees to buy (a) the timeshare unit described in
            property description, the allocated undivided interest in the common elements, the use of
            all furniture and personal property in the timeshare unit, the  right to use and occupy the
            timeshare unit during the week(s) described in property description.<br><br>
            <label style="text-align: justify; font-family: BCP BOLD">4.	PURCHASE PRICE AND PAYMENT:</label>
            In exchange for Seller's transferring to Buyer all of Seller's ownership rights in the property
            described in the property description section. Buyer will pay Seller the amount set forth as
            the Purchase Price in property description section.<br><br>
            Buyer will pay the Deposit amount stated in purchase price of the Contract upon Buyer's signing
            the Contract. If a third-party is engaged as a title agent in such transaction, Seller will
            turn over the deposit amount to the Title Company for disbursement at closing date.
            Buyer will pay Seller the balance of the purchase price at the stipulated closing date, but if there
            is a title agent, then payment shall be to the Title Company.<br><br>
            <label style="text-align: justify; font-family: BCP BOLD">5.	CONTRACT CANCELLATION: </label>
            This agreement is contingent upon seller conveying to buyer fee simple marketable title to the
            interval ownership interest.
            -   In the case of Seller(s) terminating this Purchase Agreement before the transaction is
            completed, the Seller(s) agree to pay a Termination Fee of $4,000.00 USD (Four Thousand U.S.
            Dollars) to BC Prime.
            -	Indemnification. In the event of a forfeiture by a prospective Purchaser(s) the
            Closing Company will retain 50% (fifty percent) of such deposits, pay the Broker 8%
            (Eight Percent) and the rest to the Seller(s) as compensation, in this event the broker is
            obligated to find a new buyer for the seller.<br><br>
            <label style="text-align: justify; font-family: BCP BOLD">6.	CLOSING DATE:</label> <br>
            -	<label style="text-align: justify; font-family: BCP BOLD">Deliveries.</label>
            Within 48 (Forty-Eight) hours from signing this Purchase Agreement, the Broker shall notify
            the Seller(s) of the Title Company that is arranging title search, execution and delivery of
            documents, transfer of funds and satisfaction of liens (the "Closing Agent"). This Title
            Company is hereby authorized to accept and hold on behalf of the Seller(s) any and all funds
            paid as a deposit or binder in regards to the resale of the Contract for Lodging Rights and
            Services, in accordance with the laws of the State of New York.  <br>
            -	<label style="text-align: justify; font-family: BCP BOLD">Disbursement.</label> The final
            disbursement of funds will take place within 30 business days from the Seller(s) signing this
            Purchase Agreement through the chosen Title Company.
            <br>-   <label style="text-align: justify; font-family: BCP BOLD">Title Company.</label>
            The chosen Title Company shall be located in the Unites States of America and licensed to do
            business where the Contract for Lodging Rights and Services is located and registered to
            operate.<br><br>
            <label style="text-align: justify; font-family: BCP BOLD">7.	TITLE COMPANY: </label>
            <label style="text-align: justify; font-family: BCP BOLD">TITLE SEARCH: </label>Buyer agrees
            to notify Seller in writing of any defects in title as soon as reasonably possible and in
            any event not later than thirty (30) days from the date of the execution of this contract
            by Seller. <br>
            In case legal steps are  necessary to perfect the title, such action must be taken by the
            Seller promptly at their own expense. If there is found to be any defect in the title which
            cannot be corrected within thirty (30) days after notice to Seller of the defect, Purchaser
            may rescind this contract at Purchaser’s option The Title agent shall hold and disburse
            funds in accordance with this contract and shall perform such other services for which the
            escrow agent is specifically engaged.
        </p>
    </div>
    <div style="margin: 80px 130px 200px">
        <p style="text-align: justify">
            <label style="text-align: justify; font-family: BCP BOLD">8.	RISK OF LOSS:</label>
            Any loss or damage to the property by fire or other hazard is the Seller's responsibility
            until the closing. If the property suffers damage which has not been repaired within 30
            days after the scheduled closing date, either party may cancel this  Contract and all
            deposit monies shall be returned to Buyer; the parties shall have no further obligations
            to each other with respect to this Contract.<br><br>
            <label style="text-align: justify; font-family: BCP BOLD">9.	CLOSING; POSSESSION:</label>
            Seller will deliver the document transferring ownership when Closing Company disburse the
            balance of the purchase price. Unless otherwise agreed between the parties, closing shall
            take place by mail. Funds and documents shall be delivered through the title agent or, if
            none, Buyer shall mail the balance of the purchase price to Seller who shall mail the deed
            or other transfer documents to Buyer promptly upon Buyer's funds have been cleared.
            <br>Buyer will also be given constructive possession of the timeshare unit at the time of closing.<br><br>
            <label style="text-align: justify; font-family: BCP BOLD">10.	TAXES, MAINTENANCE CHARGES:</label>
            Unless otherwise agreed in this contract, Seller shall pay all real estate taxes, club dues,
            assessments and common maintenance charges due through the end of the year in which the
            Contract is signed. Any charges, due assessments or taxes accruing thereafter will be Buyer's
            responsibility (if applicable). <br><br>
            <label style="text-align: justify; font-family: BCP BOLD">11.	SATISFACTION OF LIENS:</label>
            All claims of others against the property, such as  mortgage liens, must be paid in full or
            satisfied on or before the closing. Seller may satisfy such claims from the remainder of the
            purchase price paid at closing. <br><br>
            <label style="text-align: justify; font-family: BCP BOLD">12.	BINDING EFFECT:</label>
                This Contract is binding upon all parties who sign it and all who succeed to their rights and
                responsibilities. It replaces and cancels any prior written or verbal understandings and
                agreements. This contract can only be changed by an addendum in writing signed by both Buyer
                and Seller.<br><br>
            <label style="text-align: justify; font-family: BCP BOLD">13: OTHER AGREEMENTS:</label>
                <ol style="font-family: BCP">
                    <li> <u>Buyer</u> is responsible for 2022	maintenance fees.</li>
                    <li><u>Seller</u> is responsible for closing costs.</li>
                    <li>Funds to be held in Dutch Consultant Professional Closing</li>
                    <li>Closing attorney shall be George Dimov.</li>
                </ol>
                ________________________________________________________________ <br> ________________________________________________________________ <br>
                ________________________________________________________________ <br> ________________________________________________________________
        </p>
    </div>
    <div style="margin-left: 130px; margin-right: 130px; padding-top: 130px; position: relative;">
        <p style="text-align: justify">
            <label style="text-align: justify; font-family: BCP BOLD">14. DEFAULT.</label>
            Upon failure of the Buyers or Sellers to comply with the terms here of within the stipulated
            time, and after receipt of notice of said default with a ten (l0) day right to cure, it is
            understood and agreed by and between both parties hereto that either party may enforce the
            performance of this contract by specific performance or pursue any other remedy available at
            law or in equity. The prevailing party in any litigation brought to enforce the terms of this
            agreement shall be entitled to an award of attorney’s fees and litigation expenses. <br>
            <label style="text-align: justify; font-family: BCP BOLD">15.	TITLE AGENT.</label>
            The Firm of Dutch Consultant Professional on New York shall be the Title Agent for closing.
            The Title Agent shall not be charged with any knowledge until such facts are communicated to
            the Title Agent in writing. The Title Agent shall not be required to institute or maintain
            any litigation unless indemnified to its satisfaction for its counsel fees, costs, disbursements
            and all other expenses and liabilities to which it may, in its judgment, be subjected in
            connection with this action. The Seller and Buyer shall at all times indemnify the Title Agent
            against all actions, proceedings, claims or demands arising out of this transaction. In the
            event of any dispute by and between the Seller and Buyer which cannot be resolved, the Title
            Agent shall have the option of depositing the earnest money deposit into the Clerk of Court's
            Office of New York County pending resolution of the disposition of said funds and upon
            depositing said funds, Title Agent shall bear no further responsibility.
        </p> <br> <br>
        <label style="font-family: BCP">Agreed to by:</label> <br> <br><br>
    </div>
      {{-- Firmas --}}
        @if ($Broker == 1)
            <div class="row" style="margin-left: 130px; margin-right: 130px ">
                <div class="col-md-6" style="float: left; width: 50%">
                    <label style="font-family: BCP BOLD;">
                        <img src="{{$Signature}}" width="70%"> <br>
                        Broker:</label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed: <u>{{$current}}</u> </label>
                </div> <br>
                <div class="col-md-6" style="float: right; margin-top: 30px">
                    <img src="img/anthony.jpg" width="80%"> <br>
                    <label style="font-family: BCP BOLD; ">BCP PRIME Representative </label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed:<u> {{$current}}</u> </label>
                </div>
            </div> <br><br><br><br><br>
        @elseif($Broker == 2)
            <div class="row" style="margin-left: 130px; margin-right: 130px ">
                <div class="col-md-6" style="float: left; width: 50%">
                    <label style="font-family: BCP BOLD;">
                        <img src="{{$Signature}}" alt=""> <br>
                        Broker:</label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed: <u>{{$current}}</u> </label>
                </div> <br>
                <div class="col-md-6" style="float: right;">
                    <label style="font-family: BCP BOLD; ">
                        <img src="img/anthony.jpg" width="80%"> <br>
                        BCP PRIME Representative </label> <br>
                        <label style="font-family: BCP BOLD;"> Date Signed:<u> {{$current}}</u> </label>
                </div>
            </div> <br><br><br><br><br>
        @elseif ($Broker == 3)
            <div class="row" style="margin-left: 130px; margin-right: 130px ">
                <div class="col-md-6" style="float: left; width: 50%; padding-top: 50px">
                    <label style="font-family: BCP BOLD;">
                        <img src="{{$Signature}}" width="80%"> <br>
                        Broker:</label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed: <u>{{$current}}</u> </label>
                </div> <br>
                <div class="col-md-6" style="float: right;">
                    <label style="font-family: BCP BOLD; ">
                        <img src="img/anthony.jpg" width="80%"> <br>
                        BCP PRIME Representative </label> <br>
                        <label style="font-family: BCP BOLD;"> Date Signed:<u> {{$current}}</u> </label>
                </div>
            </div> <br><br><br><br><br>
        @elseif ($Broker == 4)
            <div class="row" style="margin-left: 130px; margin-right: 130px ">
                <div class="col-md-6" style="float: left; width: 50%">
                    <label style="font-family: BCP BOLD;">
                        <img src="{{$Signature}}" width="50%"> <br>
                        Broker:</label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed: <u>{{$current}}</u> </label>
                </div> <br>
                <div class="col-md-6" style="float: right; margin-top: 20px">
                    <label style="font-family: BCP BOLD; ">
                        <img src="img/anthony.jpg" width="80%"> <br>
                        BCP PRIME Representative </label> <br>
                        <label style="font-family: BCP BOLD;"> Date Signed:<u> {{$current}}</u> </label>
                </div>
            </div> <br><br><br><br><br>
        @elseif ($Broker == 5)
            <div class="row" style="margin-left: 130px; margin-right: 130px ">
                <div class="col-md-6" style="float: left; width: 30%; padding-top: 10px">
                    <label style="font-family: BCP BOLD;">
                        <img src="{{$Signature}}" width="100%"> <br>
                        Broker:</label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed: <u>{{$current}}</u> </label>
                </div> <br>
                <div class="col-md-6" style="float: right;">
                    <label style="font-family: BCP BOLD; ">
                        <img src="img/anthony.jpg" width="80%"> <br>
                        BCP PRIME Representative </label> <br>
                        <label style="font-family: BCP BOLD;"> Date Signed:<u> {{$current}}</u> </label>
                </div>
            </div> <br><br><br><br><br>
        @elseif ($Broker == 6)
            <div class="row" style="margin-left: 130px; margin-right: 130px ">
                <div class="col-md-6" style="float: left; width: 30%">
                    <label style="font-family: BCP BOLD;">
                        <img src="{{$Signature}}" width="100%"> <br>
                        Broker:</label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed: <u>{{$current}}</u> </label>
                </div> <br>
                <div class="col-md-6" style="float: right;">
                    <label style="font-family: BCP BOLD; ">
                        <img src="img/anthony.jpg" width="80%"> <br>
                        BCP PRIME Representative </label> <br>
                        <label style="font-family: BCP BOLD;"> Date Signed:<u> {{$current}}</u> </label>
                </div>
            </div> <br><br><br><br><br>
        @elseif ($Broker == 7)
            <div class="row" style="margin-left: 130px; margin-right: 130px ">
                <div class="col-md-6" style="float: left; width: 30%">
                    <label style="font-family: BCP BOLD;">
                        <img src="{{$Signature}}" width="100%"> <br>
                        Broker:</label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed: <u>{{$current}}</u> </label>
                </div> <br>
                <div class="col-md-6" style="float: right; margin-top: 20px">
                    <label style="font-family: BCP BOLD; ">
                        <img src="img/anthony.jpg" width="80%"> <br>
                        BCP PRIME Representative </label> <br>
                        <label style="font-family: BCP BOLD;"> Date Signed:<u> {{$current}}</u> </label>
                </div>
            </div> <br><br><br><br><br>
        @elseif ($Broker == 8)
            <div class="row" style="margin-left: 130px; margin-right: 130px ">
                <div class="col-md-6" style="float: left; width: 30%">
                    <label style="font-family: BCP BOLD;">
                        <img src="{{$Signature}}" width="100%"> <br>
                        Broker:</label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed: <u>{{$current}}</u> </label>
                </div> <br>
                <div class="col-md-6" style="float: right;">
                    <label style="font-family: BCP BOLD; ">
                        <img src="img/anthony.jpg" width="80%"> <br>
                        BCP PRIME Representative </label> <br>
                        <label style="font-family: BCP BOLD;"> Date Signed:<u> {{$current}}</u> </label>
                </div>
            </div> <br><br><br><br><br>
        @elseif ($Broker == 9)
            <div class="row" style="margin-left: 130px; margin-right: 130px ">
                <div class="col-md-6" style="float: left; width: 30%">
                    <label style="font-family: BCP BOLD;">
                        <img src="{{$Signature}}" width="110%"> <br>
                        Broker:</label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed: <u>{{$current}}</u> </label>
                </div> <br>
                <div class="col-md-6" style="float: right;">
                    <label style="font-family: BCP BOLD; ">
                        <img src="img/anthony.jpg" width="80%"> <br>
                        BCP PRIME Representative </label> <br>
                        <label style="font-family: BCP BOLD;"> Date Signed:<u> {{$current}}</u> </label>
                </div>
            </div> <br><br><br><br><br>
        @elseif ($Broker == 10)
            <div class="row" style="margin-left: 130px; margin-right: 130px ">
                <div class="col-md-6" style="float: left; width: 50%; margin-top: 30px">
                    <label style="font-family: BCP BOLD;">
                        <img src="{{$Signature}}" width="100%"> <br>
                        Broker:</label> <br>
                    <label style="font-family: BCP BOLD;"> Date Signed: <u>{{$current}}</u> </label>
                </div> <br>
                <div class="col-md-6" style="float: right;">
                    <label style="font-family: BCP BOLD; ">
                        <img src="img/anthony.jpg" width="80%"> <br>
                        BCP PRIME Representative </label> <br>
                        <label style="font-family: BCP BOLD;"> Date Signed:<u> {{$current}}</u> </label>
                </div>
            </div> <br><br><br><br><br>
        @endif
    <div class="row" style="margin-left: 130px; margin-right: 130px; padding-top: 250px;  position: relative;">
        <div class="col-md-6" style="float: left; width: 50%; margin-top: 200px">
            @if (isset($CSignature))
                <label style="font-family: BCP BOLD;"> <img src="{{$CSignature}}" width="70%"> <br> Designated Member </label> <br>
            @else
                <label style="font-family: BCP BOLD;">__________________ Designated Member </label> <br>
            @endif
                <label style="font-family: BCP BOLD;"> Date Signed: __________</label>
        </div> <br>
        <div class="col-md-6" style="float: right; width: 50%; margin-top: 200px; margin-left: 150px; padding-left: 170px">
            <label style="font-family: BCP BOLD; ">_____________________ <br> Co-Member </label> <br>
            <label style="font-family: BCP BOLD;"> Date Signed: __________</label>
        </div>
    </div>
</body>

</html>
