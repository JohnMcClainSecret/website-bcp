@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>

<html>

<head>

    <title>PURCHASE OFFER</title>
    <style>
        .div {
            border-style: solid;
            border-color: #111111;
            align-content: center;
            font-family:Arial;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }
        .center{
            margin-left: auto;
            margin-right: auto;
        }
        .flexrow {
            display: -webkit-box;
            display: -webkit-flex;
             display: flex !important;
        }
        .flexrow > div {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
             flex: 1
        }
    </style>
</head>

<body>
    @php
        $current = Carbon::now()->format('m-d-Y');
    @endphp
    <div class="flexrow" style="margin-bottom: -50px">
        <div  style="width: 40%">
            <img src="{{ public_path('img/logo.png') }}" style="width: 100px; height: 100px">
        </div>
        <div style="text-align: right;  margin-left: 300px">
            <br>
            <b>Business Consultat Prime Brokers</b> <br>
            <label for="">199 Water Street, New York, New York, 10038</label> <br>
            <label>Phone: </label> 212 4611062<br>
            <label>Email: contact@businessconsultantprimebrokers.com</label> <br>
        </div>
    </div>
    <div class='div'>
        <h1 style="text-align: center">PURCHASE OFFER</h1>
        <p>This Purchase Offer is made and entered into this {{ $current }}</p>

        <p> <b> BETWEEN: Mariana Agueova</b> (Licencse No. 2011027781), representing <b>Business Consultant Prime Brokers </b>
            doing business as BCP Brokers, a company organized and existing under the laws of New York, with its head office
            at 199 Water Street, New York, New York, 10038.
        </p>
        <p> <b> Seller (S):</b> {{ $Seller }} </p>
        <p> <b> Phone:</b> {{ $Phone}} </p>
        <p> <b> Email:</b> {{$Email}} </p>
        <p>
            <b>PREAMBLE</b><br>
            We, Business Consultant Prime Brokers, here by offer to purchase from you, the Seller,
            upon and subject to the terms and consitions herein, the following property.
        </p>
        <p>
            <b>PROPERTY DESCRIPTION: </b>
            <table class="table table-striped center">
                <tbody>
                    <tr>
                        <td>Resort:</td> <td>{{$Resort}} </td>
                    </tr>
                    <tr>
                        <td>Location:</td> <td> {{$Location}} </td>
                    </tr>
                    <tr>
                        <td>Unit type:</td> <td> {{$UnitType}} </td>
                    </tr>
                    <tr>
                        <td>Amenities:</td> <td> {{$Membership}} </td>
                    </tr>
                    <tr>
                        <td>Membership/Season:</td> <td> {{$Membership}} </td>
                    </tr>
                    <tr>
                        <td>Resgistered Weeks:</td> <td> {{$Registered}} </td>
                    </tr>
                    <tr>
                        <td>Maintenance Fee:</td> <td> {{$Maintenance}} </td>
                    </tr>
                    <tr>
                        <td>Exchange Company:</td> <td> {{$Exchange}} </td>
                    </tr>
                    <tr >
                        <td> <b>PURCHASE PRICE: </b> </td> <td> <b>$ {{$PurchasePrice}} USD</b> </td>
                    </tr>
                </tbody>
            </table>
        </p>
        <p>
            <ol>
                <li> <b>PURCHASE OFFER</b>
                    The total purchase price for the property shall bethe sum of $ USD
                    <ul type='a'>
                        <li>
                            This offer is subject to a Formal Purchase Agreement which is forthcoming after
                            accepting this offer.
                        </li>
                        <li>
                            The purchaser agrees to deposit the full amount into and/or trust account, depending
                            on the properties characteristics, upon providing proof ofownership and signing this
                            purchase offer
                        </li>
                    </ul>
                </li>
            </ol>
        </p>
    </div>
    <br> <br>
    <div class="div" style="margin-top: 100px">
        <ol>
            <li><b>Comission</b>
                <p>An 8% commission will be charged to the Seller(s) at the time of closing</p>
                <ul type='a'>
                    <li>The payment of the commission will be handled by the closing company that gets assigned to the transaction.</li>
                </ul>
            </li>
            <li><b>Transfer of ownership</b>
                <p>On the closing date the purchaser(s) will acquire from the seller(s) certain asset(s) listed in the resale contract.
                    In this event the purcharser(s) will assume the liability of reimbursing the administrative and research fee to
                    the seller(s) at closing.
                </p>
            </li>
            <li><b>Pay out</b>
                <p>The offered amount will be paid through a closing company assigned by the purchaser(s) on a specific closing date.
                    The assigned closing company will be licensed to business in the United States and in the country that the property is localed.
                </p>
            </li>
            <li><b>Disclosure</b>
                <p>Is you find this purcharse agreement satisfying and wish to move forward with the resale, please sing and date this letter-spacing
                    and return in to us vía email or fax and we will submit a Format Pruchase Agrement. This offer is contingent upon the
                    Seller(s) providing proof of ownership.
                </p>
                <ul type='a'>
                    <li>This offer is not legal binding</li>
                    <li>By signing this purchase offer you are not committing nor obligated to sell</li>
                    <li>By signing this purchase offer you will not be relinquishing the rights to your property.</li>
                </ul>
            </li>
        </ol>
    </div>
    @if (isset($Signature))
        <img src="{{ $Signature }}" alt="">
    @endif

</body>

</html>
