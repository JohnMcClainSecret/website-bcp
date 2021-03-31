@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>

<html>

<head>
    <title>PURCHASE OFFER</title>
    <style>
        

        html{
            margin: 0;
        }
        .div {
            border-style: solid;
            border-color: #17a2b8;
            align-content: center;
            font-family: Arial;
            margin: 0 15px;
            border-width: -10px;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
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
            border-width: 3px 0px;
        }
    </style>
</head>

<body>
    @php
        $current = Carbon::now()->format('m-d-Y');
    @endphp
    <div  style="width: 40%; margin-left: 300px; margin-top: 30px;margin-bottom: 10px">
        <img src="{{ public_path('img/logo.png') }}" style="width: 100px; height: 100px">
    </div>
    <div class="flexrow">
        <div style="text-align: center; font-family: no">
            <br>
            <label for="">199 Water Street, New Yor, NY, 10038</label> <br>
            <label>Phone: </label> 212 4611062<br>
            <label>Fax: </label> XXXXXXXXXX<br>
            <label for=""><a href="www.bcpbrokers.com">www.bcpbrokers.com</a></label> <br>
            <label>contact@businessconsultantprimebrokers.com</label> <br>
        </div>
    </div>
    <br> <br>
    <div class='div'>
        <p> <b>BC Prime</b> offers you combined years of experience along with exceptional customer service.
            Our sales departmentwill assist you in all aspects of  this  international  acquisition
            including  the  production  of  current  market  evaluations  to  ensure  that  you  receive
            the  best value  for  your membership.
        </p>
        <p> The purpose of this letter is to set forth some of the basic terms and conditions of the proposed
            purchase. The terms set forth in this Letter willnot become binding until a more detailed
            “Purchase Agreement” is negotiated and signed by the parties, as contemplated below by the section
            of this Letter entitled “Non-Binding”.
        </p>
        <p> The Purchase Offer listed is guaranteed as long as your membership’s description is accurate.
            Please verify that all the information specified below is correct.
        </p>
        <p>
            <b>1. Property:</b> BC Primewill negotiate the resale of the following vacation membership:
        </p>
    </div>
    <br>
    <div class='div'>
        <label for="">Designated Owner:</label><br>
        <label for="">Phone:</label><br>
        <label for="">Email:</label><br>
    </div>
    <div class="justify-content-center" style="margin-top: 20px">
        <table class="table center">
            <tbody>
                <tr>
                    <td>Resort:</td> <td> </td>
                </tr>
                <tr>
                    <td>Location:</td> <td>  </td>
                </tr>
                <tr>
                    <td>Unit type:</td> <td>  </td>
                </tr>
                <tr>
                    <td>Amenities:</td> <td> </td>
                </tr>
                <tr>
                    <td>Membership/Season:</td> <td>  </td>
                </tr>
                <tr>
                    <td>Resgistered Weeks:</td> <td> </td>
                </tr>
                <tr>
                    <td>Maintenance Fee:</td> <td> </td>
                </tr>
                <tr>
                    <td>Exchange Company:</td> <td> </td>
                </tr>
                <tr >
                    <td> <b>PURCHASE PRICE: </b> </td> <td> <b>$ USD</b> </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div  style="margin: 10px 50px 0px">
        <p style="text-align: justify">
            NON-BINDING.This letter of Intent does not and is not intended to contractually bind the parties,
            and is only an expression of the basic conditions to be incorporated into a binding Purchasing
            Agreement. This Letter does not require either party to negotiate in good faith or to proceed to
            the completion of a binding Purchase Agreement. The parties shall not be contractually bound unless
            and until they enter into a formal, written Purchase Agreement, which must be in form and content
            satisfactory to each party and to each party’s legal counsel, in their sole discretion. Neither
            party may rely on this Letter as creating any legal obligation of any kind.
        </p>
    </div>
    <div style="background-color: #17a2b8; height: 80px;" >
        <p for="">© CopyrightBusiness Consultant Prime. All Rights Reseverves</p>
    </div>
    @if (isset($Signature))
        <img src="" alt="">
    @endif

</body>

</html>
