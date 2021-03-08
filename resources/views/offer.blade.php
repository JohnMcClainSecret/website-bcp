@extends('layouts.template')

@section('content')
    <div style="background: linear-gradient(to right, aqua, green);">
        ah si pos si
        <div class="container" style="background: white;width: 540px;height: 420px; margin: 0 auto;
            position: relative; box-shadow: 2px 5px 20px rgba(gray, 0.5);">
            otra cosa
        </div>
    </div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection
{{-- <html>
    @include('layouts.head')
    <style lang="scss">
                body {
                    background: linear-gradient(to right, aqua, green);
                }

                .container {
                    background: white;
                    width: 540px;
                    height: 420px;
                    margin: 0 auto;
                    position: relative;
                    margin-top: 10%;
                    box-shadow: 2px 5px 20px rgba(gray, 0.5);
                }

                .logo {
                float: right;
                margin-right: 12px;
                margin-top: 12px;
                font-weight: 900;
                font-size: 1.5em;
                letter-spacing: 1px;
                }

                .CTA {
                width: 80px;
                height: 40px;
                right: -20px;
                bottom: 0;
                margin-bottom: 90px;
                position: absolute;
                z-index: 1;
                background: green;
                font-size: 1em;
                transform: rotate(-90deg);
                transition: all 0.5s ease-in-out;
                cursor: pointer;
                }
                .CTA h1 {
                    color: white;
                    margin-top: 10px;
                    margin-left: 9px;
                }
                .CTA:hover {
                    background: aqua;
                    transform: scale(1.1);
                }
                .leftbox {
                float: left;
                top: -5%;
                left: 5%;
                position: absolute;
                width: 15%;
                height: 110%;
                background: green;
                box-shadow: 3px 3px 10px rgba(gray, 0.5);
                }

                nav a {
                list-style: none;
                padding: 35px;
                color: white;
                font-size: 1.1em;
                display: block;
                transition: all 0.3s ease-in-out;
                }
                nav a:hover {
                    color: aqua;
                    transform: scale(1.2);
                    cursor: pointer;
                }
                nav a:first-child {
                    margin-top: 7px;
                }
                .active {
                color: aqua;
                }

                .rightbox {
                float: right;
                width: 60%;
                height: 100%;
                }

                .profile,
                .payment,
                .subscription,
                .privacy,
                .settings {
                    transition: opacity 0.5s ease-in;
                    position: absolute;
                    width: 70%;
                }

                h1 {
                color: green;
                font-size: 1em;
                margin-top: 40px;
                margin-bottom: 35px;
                }

                h2 {
                color: gray;
                width: 80%;
                text-transform: uppercase;
                font-size: 8px;
                letter-spacing: 1px;
                margin-left: 2px;
                }

                p {
                border-width: 1px;
                border-style: solid;
                border-image: linear-gradient(to right, aqua, rgba(green, 0.5)) 1 0%;
                border-top: 0;
                width: 80%;
                font-size: 0.7em;
                padding: 7px 0;
                color: black;
                }
                span {
                font-size: 0.5em;
                color: gray;
                }

                .btn {
                float: right;
                text-transform: uppercase;
                font-size: 10px;
                border: none;
                color: aqua;
                }

                .btn:hover {
                text-decoration: underline;
                font-weight: 900;
                }

                input {
                border: 1px solid lighten(gray, 40%);
                padding: 2px;
                margin: 0;
                }

                .privacy h2 {
                margin-top: 25px;
                }

                .settings h2 {
                margin-top: 25px;
                }

                .noshow {
                opacity: 0;
                }

                footer {
                position: absolute;
                width: 20%;
                bottom: 0;
                right: -20px;
                text-align: right;
                font-size: 0.8em;
                text-transform: uppercase;
                letter-spacing: 2px;

                }
                p {
                    border: none;
                    padding: 0;
                }
                a {
                    color: #ffffff;
                    text-decoration: none;

                }
                a:hover {
                    color: #7d7d7d;
                    }

    </style>
        <div class="container">
            <div id="logo"><h1 class="logo">hulu</h1>
            <div class="CTA">
                <h1>Get $10</h1>
                </div>
            </div>
            <div class="leftbox">
            <nav>
                <a id="profile" class="active"><i class="fa fa-user"></i></a>
                <a id="payment"><i class="fa fa-credit-card"></i></a>
                <a id="subscription"><i class="fa fa-tv"></i></a>
                <a id="privacy"><i class="fa fa-tasks"></i></a>
                <a id="settings"><i class="fa fa-cog"></i></a>
            </nav>
            </div>
            <div class="rightbox">
            <div class="profile">
                <h1>Personal Info</h1>
                <h2>Full Name</h2>
                <p>Julie Park <button class="btn">update</button></p>
                <h2>Birthday</h2>
                <p>July 21</p>
                <h2>Gender</h2>
                <p>Female</p>
                <h2>Email</h2>
                <p>example@example.com <button class="btn">update</button></p>
                <h2>Password </h2>
                <p>••••••• <button class="btn">Change</button></p>
            </div>

            <div class="payment noshow">
                <h1>Payment Info</h1>
                <h2>Payment Method</h2>
                <p>Mastercard •••• •••• •••• 0000 <button class="btn">update</button></p>
                <h2>Billing Address</h2>
                <p>1234 Example Ave | Seattle, WA <button class="btn">change</button></p>
                <h2>Zipcode</h2>
                <p>999000</p>
                <h2>Billing History</h2>
                <p>2018<button class="btn">view</button></p>
                <h2>Redeem Gift Subscription </h2>
                <p><input type="text" placeholder="Enter Gift Code"></input> <button class="btn">Redeem</button></p>
            </div>

            <div class="subscription noshow">
                <h1>Your Subscription</h1>
                <h2>Payment Date</h2>
                <p>05-15-2018 <button class="btn">pay now</button></p>
                <h2>Your Next Charge</h2>
                <p>$8.48<span> includes tax</span></p>
                <h2>Hulu Base Plan</h2>
                <p>Limited Commercials <button class="btn">change plan</button></p>
                <h2>Add-ons</h2>
                <p>None <button class="btn">manage</button></p>
                <h2>Monthly Recurring Total </h2>
                <p>$7.99/month</p>
            </div>

            <div class="privacy noshow">
                <h1>Privacy Settings</h1>
                <h2>Manage Email Notifications<button class="btn">manage</button></h2>
                <p></p>
                <h2>Manage Privacy Settings<button class="btn">manage</button></h2>
                <p></p>
                <h2>View Terms of Use <button class="btn">view</button></h2>
                <p></p>
                <h2>Personalize Ad Experience <button class="btn">update</button></h2>
                <p></p>
                <h2>Protect Your Account <button class="btn">protect</button></h2>
                <p></p>
            </div>
            <div class="settings noshow">
                <h1>Account Settings</h1>
                <h2>Sync Watchlist to My Stuff<button class="btn">sync</button></h2>
                <p></p>
                <h2>Hold Your Subscription<button class="btn">hold</button></h2>
                <p></p>
                <h2>Cancel Your Subscription <button class="btn">cancel</button></h2>
                <p></p>
                <h2>Your Devices <button class="btn">Manage Devices</button></h2>
                <p></p>
                <h2>Referrals <button class="btn">get $10</button></h2>
            <p></p>
            </div>

            </div>
        </div>

</html>
@include('layouts.scripts')
<script>
    /*active button class onclick*/
    $('nav a').click(function(e) {
    e.preventDefault();
    $('nav a').removeClass('active');
    $(this).addClass('active');
    if(this.id === !'payment'){
        $('.payment').addClass('noshow');
    }
    else if(this.id === 'payment') {
        $('.payment').removeClass('noshow');
        $('.rightbox').children().not('.payment').addClass('noshow');
    }
    else if (this.id === 'profile') {
        $('.profile').removeClass('noshow');
        $('.rightbox').children().not('.profile').addClass('noshow');
    }
    else if(this.id === 'subscription') {
        $('.subscription').removeClass('noshow');
        $('.rightbox').children().not('.subscription').addClass('noshow');
    }
        else if(this.id === 'privacy') {
        $('.privacy').removeClass('noshow');
        $('.rightbox').children().not('.privacy').addClass('noshow');
    }
    else if(this.id === 'settings') {
        $('.settings').removeClass('noshow');
        $('.rightbox').children().not('.settings').addClass('noshow');
    }
    });
</script> --}}
