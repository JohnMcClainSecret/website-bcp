@extends('layouts.template')

@section('content')
    @push('css')
        <style>
            body{
                background: linear-gradient(to right, rgb(13, 187, 187), rgb(4, 109, 91));
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
            p {
                border-width: 1px;
                border-style: solid;
                border-image: linear-gradient( right,rgb(9, 170, 170), rgba(rgb(77, 165, 113), 0.5)) 1 0%;
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

            /* .btn {
                float: right;
                text-transform: uppercase;
                font-size: 10px;
                border: none;
                color: aqua;
            } */

            /* .btn:hover {
                text-decoration: underline;
                font-weight: 900;
            } */

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
    @endpush
    <div style="margin-top: 80px">
        <div class="container" style="background: white;width: 540px;height: 420px; margin-left: auto;
           margin-right: auto; margin-bottom: 25px;position: relative; box-shadow: 2px 5px 20px rgba(gray, 0.5);">
            <div class="leftbox" style="float: left; top: -5%; left: 5%; position: absolute; width: 15%;
                height: 110%;background: #5c768d;box-shadow: 3px 3px 10px rgba(gray, 0.5);">
                <nav>
                    <a id="profile" class="active"><i class="icofont-ui-user"></i></a>
                    <a id="payment"><i class="icofont-credit-card"></i></a>
                    <a id="subscription"><i class="fa fa-tv"></i></a>
                    <a id="privacy"><i class="fa fa-tasks"></i></a>
                    <a id="settings"><i class="fa fa-cog"></i></a>
                </nav>
            </div>
            <div>
                <div style="margin-left: 120px; ">
                    <h1 style=" color: green; font-size: 35px; ">Unit Info</h1>
                    <div class="form-row">
                        <input  type="radio" id="dewey" name="drone" value="dewey">
                        <label style=" margin: -5px 10px 10px" for="dewey">Studio</label>
                        <input type="radio" id="louie" name="drone" value="louie">
                        <label style=" margin: -5px 10px" for="louie">1 Bdrm</label>
                        <input type="radio" id="louie" name="drone" value="louie">
                        <label style=" margin: -5px 10px" for="louie">2 Bdrm</label>
                    </div>
                    <div class="form-row">
                        <input type="radio" id="louie" name="drone" value="louie">
                        <label style=" margin: -5px 10px 10px" for="louie">Villa </label>
                        <input  type="radio" id="louie" name="drone" value="louie">
                        <label style=" margin: -5px 10px 10px" for="louie">Suit</label>
                        <input  type="radio" id="louie" name="drone" value="louie">
                        <label style=" margin: -5px 10px 10px"for="louie">Lockoff</label>
                        <input type="radio" id="louie" name="drone" value="louie">
                        <label style=" margin: -5px 10px 10px" for="louie">3 Bdrm</label>
                    </div>
                    <hr>
                    <div class="form-row">
                        <input  type="radio" id="louie" name="drone" value="louie">
                        <label style=" margin: -5px 10px 10px"for="louie">Floting Weeks</label>
                        <input type="radio" id="louie" name="drone" value="louie">
                        <label style=" margin: -5px 10px 10px" for="louie">Fixed Weeks</label>
                    </div>
                    <label style=" color: gray; width: 80%;text-transform: uppercase;
                        letter-spacing: 1px;margin-left: 2px;">Reg Weeks x year
                    </label>
                    {!! Form::text('RegWeeks', '', ['class'=>'form-control']) !!}
                    <label style=" color: gray; width: 80%;text-transform: uppercase;
                        letter-spacing: 1px;margin-left: 2px;">Additional Week
                    </label>
                    {!! Form::text('RegWeeks', '', ['class'=>'form-control']) !!}
                    <button type="button" style="position: relative; margin-left: 250px; margin-top: 10px" class="btn btn-info">Continuar</button>
                </div>
                {{-- <div class="payment noshow">
                    <div class="form-row">
                        {!! Form::label('Membership', 'Membership: ') !!}
                        <label style=" color: gray; width: 80%;text-transform: uppercase;
                            letter-spacing: 1px;margin-left: 2px;">Additional Week
                        </label>
                    </div>

                </div> --}}
                {{-- <div >
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
                <div >
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
                <div >
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
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
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
    </script>
@endsection
{{-- https://codepen.io/juliepark/pen/pLMxoP --}}
