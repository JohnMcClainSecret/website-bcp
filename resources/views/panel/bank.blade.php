@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>

<html>

    <head>
        <title>Beneeficiary Distribution Request Form</title>
        <style>
            @page {
                margin: 20px 1cm;
            }
            body{
                margin: 0;
            }
            .nav{
                width: 100%;
            }
            .nav__header{
                margin: 0;
                width: 40%;
                float: left;

            }
            .nav__title{
                background-color: darkslategray;
                width: 65%;
                color: #fff;
                flex: 0 0 50%;
                height: 120px;
                float: right;
                padding-top: 25px;
                padding-left: 15px;
            }
            .nav__title-text{
                font-size: 25px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .useform{
                font-size: 10px;
                font-family: Arial, Helvetica, sans-serif;
                text-align: justify;
                line-height: 15px;
            }
            .userform__list{
                font-size: 10px;
                font-family: Arial, Helvetica, sans-serif;
                margin-left: -30px;
                margin-top: -7px;
            }
            .h6{
                text-align: center;
                margin-top: -7px;
                font-size: 11px;
            }
            .label{
                margin-top: -20px;
                display: inline-block;
            }
            .input{
                border: 1px solid black;
                border-top: none;
                width: 320px;
                height: 15px;
            }
            .input2{
                border: 1px solid black;
                border-top: none;
                width: auto;
                height: 15px;
            }
            .input3{
                border: 1px solid black;
                border-top: none;
                width: auto;
                height: 15px;
                margin-left: 15px
            }
            .inputB{
                border: 1px solid black;
                border-top: none;
                border-left: none;
                border-right: none;
                width: auto;
                height: 15px;
            }
            .input-text{
                background-color: rgba(236, 233, 233, 0.877);
                font-family: Arial, Helvetica, sans-serif;
                font-size: 10px;
                width: 95%;
                display: block;
                float: right;
                margin-top: -2px;
            }
            .border{
                border: 3px dotted rgb(17, 255, 17);
            }
            .border2{
                border: 1px solid rgb(255, 0, 0);
            }
            .border3{
                border: 1px double rgb(17, 0, 255);
            }
            .top{
                margin-top: -20px;
            }
            .inline{
                display: inline;
                width: auto;
                height: auto;
            }
            .floatR{
                float: right;
            }
            .floatL{
                float: left;
            }
            .mini{
                width: 30px;
                border-left: none;
                display: inline-block;
            }
            table, td, th{
                border-collapse: collapse;
                border: 1px solid black;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 10px;
                width: 250px;
                height: 20px;
                text-align: center;
                font-style: bold;
            }
        </style>
    </head>

    <body>
        <div class="nav " >
            <div class="nav__header">
                <img src="img/logo.png" width="230px">
            </div>
            <div class="nav__title">
                <h1 class="nav__title-text">BENEEFICIARY DISTRIBUTION REQUEST FORM</h1>
            </div>
        </div>
        <div >
            <p class="useform " >
                <strong >Use this form:</strong>
                <ul class="userform__list">
                    <li>
                        To request a distribution or transfer of retirement assets to a beneficiary of a plan participant of a DCP Closing Custodial Account;or
                    </li>
                    <li>
                        To request a distribution from many inherited DCP Closing Custodial Account.
                    </li>
                </ul>
            </p>
            <p class="useform " >
                <strong>IMPORTANT  INFORMATION  ABOUT  PROCEDURES  FOR  BENEFICIARY  ACCOUNTS.</strong> To help the government fight
                the funding of terrorism and money laundering activities,  Federal law requires all financial institutions to  obtain,
                verify, and record information that identifies each person who opens an account. We require this information for each executor or trustee.
                If you fail to provide all requested information, it may
                delay or prevent us from opening an account and making your requested fund(s) available, and if  after your account is  open,
                we   are unable to  verify the information you provide to your closing agent
            </p>
        </div>
        <div style="margin-bottom: 10px">
            <h6 class="h6"> If  completing by   hand, please print clearly in    CAPITAL LETTERS using blue or   black ink</h6>
            <label class="useform label"><b> If  applicable, provide any DCP Consulting case number(s) related to    your request</b></label>
            <div class="input" style="float: right"></div>
        </div>
        <div>
            <img src="img/1.png" width="25px">
            {{-- <label class="input-text border3" >ACCOUNT OWNER/PARTICIPANT (DECEDENT) INFORMATION</label> <br> --}}
            <input type="text" class="input-text " value="ACCOUNT OWNER/PARTICIPANT (DECEDENT) INFORMATION"> <br><br>
            <label class="useform label">Owner’sname</label>
            <div class="input top" style=" font-family: Arial, Helvetica, sans-serif; font-size: 11px">{{$OwnerName}}</div>
            <label class="useform label">Co –Owner’s Name</label>
            <div class="input" style=" font-family: Arial, Helvetica, sans-serif; font-size: 11px">{{$trust->CoOwnerName}}</div>
        </div><br>
        <div>
            <img src="img/2.png" width="25px">
            <input type="text" class="input-text" value="BENEFICIARY INFORMATION"> <br> <br>
            <div style="width: 500px; display: inline-block; margin-top: 5px">
                <label class="useform label">Named beneficiary (Individual,Estate,Trust or other entity)</label>
                <div class="input2 top" style=" font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->OwnerName}}</div>
            </div>
            <div style="width: 200px; display: inline-block; margin-top: 6px">
                <label class="useform label" style="margin-left: 15px">Beneficiary’s date of Closing (required)</label>
                <div class="input3 top" style=" font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->ClosingDate}}</div>
            </div>
        </div>
        <div style="margin-top: 5px">
            <div style="width: 380px; display: inline-block" >
                <label class="useform">Street address of residence(no P.O.Box address)</label>
                <div class="input" style="width: 380px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->StreetAddress}}</div>
            </div>
            <div style="width: 130px;display: inline-block; margin-left: 5px" >
                <label  class="useform">City</label>
                <div class="input " style="width: 130px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->CityAddress}}</div>
            </div>
            <div style="width: 90px;display: inline-block; margin-left: 5px">
                <label  class="useform">State</label>
                <div class="input " style="width: 90px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->StateAddress}}</div>
            </div>
            <div style="width: 80px; display: inline-block; margin-left: 5px">
                <label  class="useform">ZIP</label>
                <div class="input " style="width: 90px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->ZIPAddress}}</div>
            </div>
        </div>
        <div style="margin-top: 5px">
            <div style="width: 380px; display: inline-block" >
                <label class="useform">Mailing address (if different from above)</label>
                <div class="input" style="width: 380px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->MailingAddress}}</div>
            </div>
            <div style="width: 130px;display: inline-block; margin-left: 5px" >
                <label  class="useform">City</label>
                <div class="input " style="width: 130px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->CityMailing}}</div>
            </div>
            <div style="width: 90px;display: inline-block; margin-left: 5px">
                <label  class="useform">State</label>
                <div class="input " style="width: 90px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->StateMailing}}</div>
            </div>
            <div style="width: 80px; display: inline-block; margin-left: 5px">
                <label  class="useform">ZIP</label>
                <div class="input " style="width: 90px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->ZIPMailing}}</div>
            </div>
        </div>
        <div style="margin-top: 5px">
            <div style="width: 420px; display: inline-block" >
                <label class="useform">Email Address</label>
                <div class="input" style="width: 420px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->Email}}</div>
            </div>
            <div style="width: 140px;display: inline-block; margin-left: 5px" >
                <label  class="useform">Primary phone number</label>
                <div class="input " style="width: 140px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->Phone}}</div>
            </div>
            <div style="width: 140px;display: inline-block; margin-left: 5px">
                <label  class="useform">Alternate phone number</label>
                <div class="input " style="width: 140px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->SecondPhoneNumber}}</div>
            </div>
        </div>
        <div >
            <div style="width: 300px; display: inline-block; margin-top: 20px" >
                @if ($trust->TypeCitizen == 1)
                    <input type="checkbox" checked > <label class="useform " style="margin-top: -5px; display: inline-block" >U.S.citizen</label>
                @else
                    <input type="checkbox"  > <label class="useform " style="margin-top: -5px; display: inline-block" >U.S.citizen</label>
                @endif
                @if ($trust->TypeCitizen == 2)
                    <input type="checkbox" checked> <label class="useform " style="margin-top: -5px; display: inline-block" >Resident alien</label>
                @else
                    <input type="checkbox" > <label class="useform " style="margin-top: -5px; display: inline-block" >Resident alien</label>
                @endif
                @if ($trust->TypeCitizen == 3)
                    <input type="checkbox" checked> <label class="useform " style="margin-top: -5px; display: inline-block" >Non resident alien</label>
                @else
                    <input type="checkbox" > <label class="useform " style="margin-top: -5px; display: inline-block" >Non resident alien</label>
                @endif
                    <p class="useform" style="margin-top: -10px">
                        <strong>If you area Non resident alien</strong> , please indicate your <br> country of citizenship and country of tax residence.
                    </p>
            </div>
            <div style="width: 200px;display: inline-block; margin-top: -10px" >
                <label   class="useform">Country of citizenship</label>
                <div class="input " style="width: 200px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->CountryCitizen}}</div>
            </div>
            <div style="width: 200px;display: inline-block; margin-top: -10px">
                <label  class="useform">Country of tax residence</label>
                <div class="input " style="width: 200px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->CountryTax}}</div>
            </div>
        </div>
        <div style="margin-top: -15px">
            <p class="useform">
                1.EXCHANGE COMPANY TRANSFERS: DCP Closing does not facilitate the transfer of any banked points, banked
                weeks or membership with an exchange company and must be arranged by and between the parties direct and
                outside  escrow and/or trust. <br>
                2.DCP  CLOSING  has  already  received  the  funds  for  your  property  resale,  and  will  continue
                to  hold  all  funds  until  the  transaction is  completed.
            </p>
        </div>
        <div>
            <img src="img/3.png" width="25px">
            <input type="text" class="input-text" value="BANK INFORMATION / ELECTRONIC SERVICES AUTHORIZATION"> <br> <br>
            <p style="margin-top: -10px" class="useform ">
                If you would like your distributions to be sent to a bank account, please select one of the options below. <br>
                <strong>NOTE: Requests to send proceeds electronically with in 15 days of establishing or changing bank instructions
                    may need to be signature guaranteed, other wise your proceeds will be sent by check to your address of record.
                </strong> <br>
                 1. Use the Existing Bank Account. Send the proceeds to the bank account currently linked  to your DCP Consulting
                account. <br>
                2. Add a New Bank Account. Send the proceeds to  the  new  bank  account  provided  below and establish/change
                electronic transfers to or from the new bank account. Only one bank account can be linked to your Franklin Templeton
                account(s) for purchases and redemptions. <br>
                3.Add a New Bank Account For This One-Time Requested Distribution Only. Send the proceeds to the bank account provided
                below and DO NOT retain this bank account for additional use.
            </p>
            <div style="margin-top: 82px;">
                <hr>
                <p class="useform " style="text-align:center">Questions? Contact your financial professional, visit dutchconsultantsp.com or call us at (212) 372 7173</p>
            </div>
        </div>
        <br><br>
        {{-- new page --}}
        <div style="margin-top: 55px">
            <div style="width: auto; display: inline-block; margin-top: 20px" >
                <p class="useform" style="margin-top: -10px">
                    Select one of the following options:
                </p>
                @if ($trust->TypePay == 1)
                    <input type="checkbox" checked> <label class="useform " style="margin-top: -5px; display: inline-block" >Use my attached, preprinted voided check.</label>
                @else
                    <input type="checkbox" > <label class="useform " style="margin-top: -5px; display: inline-block" >Use my attached, preprinted voided check.</label>
                @endif
                @if ($trust->TypePay == 2)
                    <input type="checkbox" checked> <label class="useform " style="margin-top: -5px; display: inline-block" >Use my attached, preprinted checking deposit slip</label>
                @else
                    <input type="checkbox" > <label class="useform " style="margin-top: -5px; display: inline-block" >Use my attached, preprinted checking deposit slip</label>
                @endif
                @if ($trust->TypePay == 3)
                    <input type="checkbox" checked> <label class="useform " style="margin-top: 0; display: inline-block" >Use my attached, preprinted savings deposit slip. </label>
                @else
                    <input type="checkbox" > <label class="useform " style="margin-top: 0; display: inline-block" >Use my attached, preprinted savings deposit slip. </label>
                @endif
                @if ($trust->TypePay == 4)
                    <label class="useform " style="margin-top: -10px; display: block">Bank routing number (9 digits).Bank account number ( 9 digits) Bank account number</label>
                @else
                    <label class="useform " style="margin-top: -10px; display: block">Bank routing number (9 digits).Bank account number ( 9 digits) Bank account number</label>
                @endif

            </div>
            <div >
                @if ($trust->NumberAccount != null)
                <div class="input " style="width: 360px; display: inline; font-family: Arial, Helvetica, sans-serif;font-size: 11px"> {{$trust->NumberAccount}}
                </div>
                @else
                    <div class="input " style="width: 360px; display: inline">
                        <div class="input mini"></div>
                        <div class="input mini" ></div>
                        <div class="input mini" ></div>
                        <div class="input mini" ></div>
                        <div class="input mini" ></div>
                        <div class="input mini" ></div>
                        <div class="input mini" ></div>
                    </div>
                @endif
                <div class="input " style="width: 200px; display: inline-block"></div>
            </div>
            <div style="margin-top: 10px">
                <img src="img/4.png" width="25px">
                <input type="text" class="input-text" value="ONE-TIME DISTRIBUTION AMOUNT AND INSTRUCTIONS"> <br><br>
                <input type="text"  class="input-text"  style="background-color: transparent; border: none" value="BE SURE TO READ THE ATTACHED BENEFICIARY MINIMUM DISTRIBUTION REQUIREMENTS PRIOR
                    TO CHOOSING YOUR METHOD.">
                    <p class="useform " style="margin-top: -5px"><strong>Choose only one option below:</strong> <br> <strong>Option 1</strong></p>
                    <input type="checkbox" style="margin-top: 5px" > <label class="useform " style="margin-top: -3px; display: inline-block" >Balance of all accounts (inherited amount)</label>
                    <input type="checkbox "  style="margin-top: 5px" > <label class="useform " style="margin-top: -3px; display: inline-block" ></label>
                    <strong class="useform " style="display: block">Option 2</strong>
                    <br> <label class="useform ">Send to: </label>
                    <input type="checkbox" style="margin-top: 5px" > <label class="useform " style="margin-top: 3px; display: inline-block" >Bank</label>
                    <input type="checkbox" style="margin-top: 5px"> <label class="useform " style="margin-top: 2px; display: inline-block" >Mailing address</label>
                    <table style="height: 100px" >
                        <thead>
                            <tr >
                                <th colspan="2" style="background-color: darkslategray; color: white " >TRANSACTIONS DETAILS</th>
                            </tr>
                        </thead>
                        <tbody >
                            @foreach ($pays as $pay)
                                <tr style="font-family: Arial, Helvetica, sans-serif;">
                                    <td > {{$pay->Description}}</td>
                                    <td >$ {{number_format($pay->Amount,2)}} </td>
                                </tr>
                            @endforeach
                            <tr style="font-family: Arial, Helvetica, sans-serif;">
                                <td >Total Amount </td>
                                <td >$ {{ number_format($trust->Total,2)}}</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div>
                <p class="useform">
                    3. Unless the annual maintenance fee has already been paid, it will be assessed if you are closing a fund-account,
                    even if other fund-accounts remain open with in the same account type. <br>
                    4. If the amount requested is greater than the balance of the account at the time of the distribution, we will
                    distribute 100% of the account.
                </p>
            </div>
            <div>
                <img src="img/5.png" width="25px">
                <input type="text" class="input-text" value="BROKER INFORMATION">
                <p class="useform">
                    At the time the beneficiary account is established, the broker-dealer of record on the participant’s account will
                    be carried over to the beneficiary account(s). If the beneficiary wishes to remove or change this broker-dealer,
                    the beneficiary must indicate to remove the existing broker-dealer or have his/her new broker-dealer complete the
                    information below
                </p>
                <p class="useform">
                    <strong> Broker-dealer Use Only </strong> <br> This request complies with the terms of our selling agreement with DCP
                        Consulting. (“Distributors”) and with the current prospect us(es) for the fund(s) identified in Section 1.
                        We agree to notify Distributors of any purchases of shares which may be eligible for reduced or eliminated charges.
                </p>
                <div class="useform">
                    <div style="width: 350px; display: inline-block; ">
                        <div class="inputB " style=" width: 350px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$trust->employee->Name}}</div>
                        <label  class="useform" style="margin-left: 150px">Broker's name</label>
                    </div>
                    <div style="width: 350px;display: inline-block; ">
                        <div class="inputB " style="margin-left: 20px; width: 350px; font-family: Arial, Helvetica, sans-serif;font-size: 11px">{{$IdAgent}}</div>
                        <label  class="useform" style="margin-left: 150px">Broker identification number</label>
                    </div>
                </div>
                {{-- <div class="useform">
                    <label for="">Company N</label>
                    <label style="margin-left: 450px">Suffix</label>
                    <label style="margin-left: 30px">Telephone number</label> <br>
                    <label for="">_________________________________________________________________________________________</label> &nbsp;
                    <label for="">_______</label>   &nbsp;
                    <label for="">_(___)_____________________</label>
                </div>
                <div class="useform">
                    <label for="">Financial professional email</label>
                    <label style="margin-left: 230px">Dealer number</label>
                    <label style="margin-left: 30px">Branch number</label>
                    <label style="margin-left: 30px">Financial professional number</label> <br>
                    <label for="">______________________________________________________________</label> &nbsp;
                    <label for="">________________</label>   &nbsp;
                    <label for="">________________</label>  &nbsp; &nbsp;
                    <label for="">________________________</label>
                </div>
                <div class="useform">
                    <label for="">Branch address</label>
                    <label style="margin-left: 330px">City</label>
                    <label style="margin-left: 120px">State</label>
                    <label style="margin-left: 75px">ZIP</label> <br>
                    <label for="">_______________________________________________________________________</label> &nbsp;
                    <label for="">_______________________</label>   &nbsp;
                    <label for="">_________________</label>  &nbsp;
                    <label for="">_________</label>
                </div>
                <div class="useform">
                    <label></label>
                    <label style="margin-left: 500px">Title</label> <br>
                    <label for="">________________________________________________________________________________________</label> &nbsp;
                    <label for="">___________________________________</label> <br>
                    <label for="">Authorized signature (Registered Principal for the Securities Dealer listed above)</label> <br>
                </div> --}}
                <p class="useform" style="text-align: center; font-style: italic">Please keep this supplement for future reference</p>
                <div style="margin-top: 250px;">
                    <p class="useform " style="text-align:center">Questions? Contact your financial professional, visit dutchconsultantsp.com or call us at (212) 372 7173</p>
                </div>
            </div>
        </div>
        <div class="nav " >
            <div class="nav__header">
                <img src="img/logo.png" width="220px">
            </div>
            <div class="nav__title">
                <h1 class="nav__title-text">BANK DETAILS FORM</h1>
            </div>
        </div>
        <div  style="margin-top: 300px; font-size: 13px; padding-top: 200px; font-family: Arial, Helvetica, sans-serif;">
            <label for=""> <b> <u>ESSENCIAL INFORMATION</u> </b></label>
            <p>THE FOLLOWING INFORMATION SHOULD BE PROVIDED AT YOUR EARLIEST CONVENIENCE, IT IS ESSENTIAL TO
                ENABLE OURSELVES TO SETUP YOUR FILE.</p> <br><br>
        </div>
        <div>
            <ol style="font-family: Arial, Helvetica, sans-serif;font-size: 13px;">
                <li> <b> <u>BANK DETAILS</u> </b> <br> <b>ACCOUNT HOLDERS NAME (IN CAPITALS)</b><br><br>
                    <p>
                        <div  style="border: 1px solid black;width: 320px;height: 40px;"></div>
                    </p>
                    <b>BANK NAME</b>  <br>
                    <p>
                        <div  style="border: 1px solid black;width: 320px;height: 40px;"></div>
                    </p>
                     <b>SWIFT CODE</b>  <br>
                    <p>
                        <div  style="border: 1px solid black;width: 320px;height: 40px;"></div>
                    </p>
                    <b>BANK NAMESWIFT CODEACCOUNT NUMBER</b>  <br>
                    <p>
                        <div  style="border: 1px solid black;width: 320px;height: 30px;"></div>
                    </p>
                </li><br><br><br>
                <li> <b><u>PAYMENT INTO ANOTHER PERSONS ACCOUNT</u></b><br><br>
                    SHOULD YOU NOT HAVE YOUR OWN BANK ACCOUNT AND WOULD LIKE YOUR DISBURSEMENT PAID INTO
                    ANOTHER PERSONS ACCOUNT, PLEASE SIGN THE DECLARATION BELOW STATING YOU AGREE YOUR WAGES
                    CAN BE PAID INTO THEIR ACCOUNT.
                </li>
            </ol>
            <br><br><br><br>
            <p style="font-family: Arial, Helvetica, sans-serif;font-size: 13px;">
               <b>I AUTHORIZE MY DISBURSEMENT TO BE PAID INTO THE ABOVE ACCOUNT</b><br><br><br><br><br>

                PRINT NAME: __________________________________________________ <br> <br> <br>
                SIGNATURE:  __________________________________________________ <br><br><br>
                DATE:       __________________________________________________ <br><br><br>
            </p>
        </div>
    </body>
</html>
