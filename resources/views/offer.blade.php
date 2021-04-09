@extends('layouts.template')

@section('content')
    @push('css')
        <style>
            body{
                /* background: linear-gradient(to right, rgb(13, 187, 187), rgb(4, 109, 91)); */
                background-image: url("img/fondo.jpeg");
                background-repeat: round;
                background-size: auto;
            }

            nav a {
                list-style: none;
                padding: 35px;
                color: rgb(247, 231, 159);
                font-size: 1.1em;
                display: block;
                transition: all 0.3s ease-in-out;
            }

            nav a:hover {
                color: rgb(104, 192, 192);
                transform: scale(1.2);
                cursor: pointer;
            }
            nav a:first-child {
                margin-top: 7px;
            }
            .active {
            color: aqua;
            }
            span {
                font-size: 0.5em;
                color: gray;
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

            p {
                border: none;
                padding: 0;
            }
            a {
                color: #ffffff;
                text-decoration: none;

            }
            a:hover {
                color: #f4ff8f;
            }
        </style>
    @endpush
    <div style="display: flex">
        <div class="container" style="margin-top: 80px; margin-bottom: 90px;background: white;width: 600px;height: 500px; margin-left: auto;
           margin-right: auto; margin-bottom: 25px;position: relative;  box-shadow: 2px 5px 20px rgba(gray, 0.5);">
            <div class="leftbox" style="float: left; top: -5%; left: 5%; position: relative; width: 15%;
                height: 110%;background: seashell;box-shadow: 3px 3px 10px rgba(gray, 0.5);">
                <nav id='nav'>
                    <a type="button" id="unitInfoIcon"  onclick="continuar(0)"><i class="icofont-home"></i></a>
                    <a  type="button"  id="membershipIcon" onclick="continuar(1)"><i class="icofont-credit-card"></i></a>
                    <a  type="button"  id="importIcon" onclick="continuar(2)"><i class="icofont-ui-user"></i></a>
                    <a  type="button"  id="privacy"><i class="fa fa-tasks"></i></a>
                    <a  type="button"  id="settings"><i class="fa fa-cog"></i></a>
                </nav>
            </div>
            <div>
                {!! Form::open(['url'=>'sendOffer','id'=>'form']) !!}
                    <div class="row" id="unitInfo">
                        <div class="col-md-1"></div>
                        <div class="col-md-11" style="margin-top: 20px">
                            <h2 style=" color: green; font-size: 35px; text-align: center ">Unit Info</h2> <br>
                            <input required type="radio" id="dewey" name="typeRoom" value="Studio">
                            <label style=" margin: -5px 10px 10px" for="dewey">Studio</label>
                            <input type="radio" id="louie" name="typeRoom" value="1bdrm">
                            <label style=" margin: -5px 10px" for="louie">1 Bdrm</label>
                            <input type="radio" id="louie" name="typeRoom" value="2bdrm">
                            <label style=" margin: -5px 10px" for="louie">2 Bdrm</label>
                            <input type="radio" id="louie" name="typeRoom" value="Villa">
                            <label style=" margin: -5px 10px 10px" for="louie">Villa </label> <br>
                            <input  type="radio" id="louie" name="typeRoom" value="Suit">
                            <label style=" margin: -5px 10px 10px" for="louie">Suit</label>
                            <input  type="radio" id="louie" name="typeRoom" value="Lockoff">
                            <label style=" margin: -5px 10px 10px"for="louie">Lockoff</label>
                            <input type="radio" id="louie" name="typeRoom" value="3bdrm">
                            <label style=" margin: -5px 10px 10px" for="louie">3 Bdrm</label>
                            <hr>
                            <input required type="radio" id="louie" name="Weeks" value="FlotingW">
                            <label style=" margin: -5px 10px 10px"for="louie">Floting Weeks</label>
                            <input type="radio" id="louie" name="Weeks" value="FixedW">
                            <label style=" margin: -5px 10px 10px" for="louie">Fixed Weeks</label>
                            <hr>
                            <label style=" color: gray; width: 80%;text-transform: uppercase;
                                letter-spacing: 1px;margin-left: 2px;">Reg Weeks x year
                            </label>
                            {!! Form::number('RegWeeks', '', ['class'=>'form-control', 'required']) !!}
                            <label style=" color: gray; width: 80%;text-transform: uppercase;
                                letter-spacing: 1px;margin-left: 2px;">Additional Week
                            </label>
                            {!! Form::number('AdditionalWeek', '', ['class'=>'form-control','required']) !!}
                            <button type="button" onclick="continuar(1)" style="position: relative; margin-left: 250px;" class="btn btn-info marginBtn">Continue</button>
                        </div>
                    </div>
                    <div class="row" id="membership" >
                        <div class="col-md-1"></div>
                        <div class="col-md-11" style="margin-top: 20px">
                            {!! Form::label('Membership', 'Membership: ',["style"=>"margin-right: 15px"]) !!}
                            <input  type="radio" id="membera" name="membership" value="Annual" >
                            <label style=" margin: -5px 5px 10px"for="membera">Annual</label>
                            <input type="radio" id="memberb" name="membership" value="Biannual">
                            <label style=" margin: -5px 5px 10px" for="memberb">Biannual</label>
                            <div class="row">
                                <div class="col-md-6 formRow">
                                    <label style=" color: gray; width: 80%;text-transform: uppercase;
                                        letter-spacing: 1px;margin-left: 2px;">Amount of Points
                                    </label>
                                    {!! Form::number('AmountPoints', '', ['class'=>'form-control']) !!}
                                </div>
                                <div class="col-md-6 formRow">
                                    <label style=" color: gray; width: 80%;text-transform: uppercase;
                                        letter-spacing: 1px;margin-left: 2px;">Years remain
                                    </label>
                                    {!! Form::number('YearRemain', '', ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <hr>
                            {!! Form::label('Season', 'Season: ',["style"=>"margin-right: 15px"]) !!}
                            <input  type="radio" id="seasonR" name="season" value="Red" >
                            <label style=" margin: -5px 5px 10px"for="seasonR">Red</label>
                            <input type="radio" id="seasonB" name="season" value="Blue">
                            <label style=" margin: -5px 5px 10px" for="seasonB">Blue</label>
                            <input type="radio" id="seasonW" name="season" value="White">
                            <label style=" margin: -5px 5px 10px" for="seasonW">White</label>
                            <div class="row">
                                <div class="col-md-6 formRow">
                                    <label style=" color: gray; width: 80%;text-transform: uppercase;
                                        letter-spacing: 1px;margin-left: 2px;">Other
                                    </label>
                                    {!! Form::text('OtherSeason', '', ['class'=>'form-control']) !!}
                                </div>
                                <div class="col-md-6 formRow">
                                    <label style=" color: gray; width: 80%;text-transform: uppercase;
                                        letter-spacing: 1px;margin-left: 2px;">Maint Fee
                                    </label>
                                    {!! Form::number('MaintFee', '', ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <hr>
                            {!! Form::label('Exchange', 'Exchange Company: ',["style"=>"margin-right: 15px"]) !!}
                            <input  type="radio" id="RCI" name="exchCompany" value="RCI" >
                            <label style=" margin: -5px 5px 10px"for="RCI">RCI</label>
                            <input type="radio" id="HSI" name="exchCompany" value="HSI">
                            <label style=" margin: -5px 5px 10px" for="HSI">HSI</label>
                            <input type="radio" id="II" name="exchCompany" value="II">
                            <label style=" margin: -5px 5px 10px" for="II">II</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <label style=" color: gray; width: 80%;text-transform: uppercase;
                                        letter-spacing: 1px;margin-left: 2px;">Other
                                    </label>
                                    {!! Form::text('OtherExch', '', ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-inline"  style="display: flex">
                                <div class=" form-group groupBtn">
                                    <button type="button" class="btn btn-info btnBack" onclick="continuar(0)">Back</button>
                                    <button type="button" onclick="continuar(2)" class="btn btn-info btnContinue">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="import">
                        <div class="col-md-1"></div>
                        <div class="col-md-11" style="margin-top: 15px">
                            <h2 style=" color: green; font-size: 25px; text-align: center ">Important Info</h2>
                            {!! Form::text('Benefits', '', ['class'=>'form-group form-control','placeholder'=>'Benefits']) !!}
                            {!! Form::text('ResortName', '', ['class'=>'form-control form-group ','required','placeholder'=>'Resort Name']) !!}
                            {!! Form::text('Location', '', ['class'=>'form-control form-group ','placeholder'=>'Location']) !!}
                            {!! Form::email('Email', '', ['class'=>'form-control form-group ','required','placeholder'=>'Email']) !!}
                            {!! Form::text('OwnerName', '', ['class'=>'form-control form-group ','required','placeholder'=>'Owner Name']) !!}
                            <div class="row">
                                <div class="col-md-6 formRow">
                                    {!! Form::text('Phone', '', ['class'=>'form-control form-group ','placeholder'=>'Phone/Home','required']) !!}
                                </div>
                                <div class="col-md-6 formRow">
                                    {!! Form::text('Availability', '', ['class'=>'form-control form-group','placeholder'=>'Availability']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::text('Broker', '', ['class'=>'form-control form-group ','placeholder'=>'Do you have a broker? Put her/his name here']) !!}
                            </div>
                            <div style="align-items: right">
                                <a href="{{ url('terms')}}">Accept Terms and Conditions </a>
                                {!! Form::checkbox('Terms', '1',  ['class'=>'form-control','required']) !!}
                            </div>
                            {!! Form::hidden('Token', '', ['id'=>'token']) !!}
                            <div class="form-inline"  style="display: flex">
                                <div class=" form-group groupBtn">
                                    <button type="button" class="btn btn-info" onclick="continuar(1)">Back</button>
                                    <button type="submit" onclick="continuar(3)" class="btn btn-info btnContinue">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        /*active button class onclick*/
        $('#nav').click(function(e) {
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
        $('document').ready(function(){
            $('#membership').hide();
            $('#import').hide();
        })
        function continuar(val){
            if(val == 1){
                $('#unitInfo').hide();
                // $('#unitInfoIcon').removeClass('active');
                $('#membershipIcon').addClass('active');
                $('#membership').show();
                $('#import').hide();
            }else if (val == 2){
                $('#unitInfo').hide();
                $('#continuar').show();
                // $('#membershipIcon').removeClass('active');
                $('#importIcon').addClass('active');
                $('#membership').hide();
                $('#import').show();
            }else if(val == 0){
                $('#unitInfo').show();
                // $('#unitInfoIcon').removeClass('active');
                $('#unitInfoIcon').addClass('active');
                $('#membership').hide();
                $('#import').hide();
            }
        }
    </script>
       <script src="https://www.google.com/recaptcha/api.js?render=6LdmqHEaAAAAANPhgR5iJ2-kq2SeiSzSNu4RM0B9"></script>
       <script>
           grecaptcha.ready(function() {
               grecaptcha.execute('6LdmqHEaAAAAANPhgR5iJ2-kq2SeiSzSNu4RM0B9', {action: 'homepage'}).then(function(token) {
                   document.getElementById('token').value = token;
               });
           });
       </script>
@endsection
{{-- https://codepen.io/juliepark/pen/pLMxoP --}}
