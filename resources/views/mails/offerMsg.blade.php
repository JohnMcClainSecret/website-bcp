<div style="background-color: #5c768d; height: 50px; color: white; text-align: center; border-style: solid;border-color: #111111;">
    <img src="{{url('img/logo-bcp.png')}}" style="width: 50px; height: 50px">
</div>
<div style= 'border-style: solid;border-color: #111111;'>
    <div>
        <br> <br>
            <label style=" font-size: 25px; margin-top: 25px; margin-left: 25px"> {{$msg['OwnerName'] }}  solicitó una oferta
            </label>
    </div>
    <div style="text-align: left; margin-left: 300px; margin-top: 15px">
        <div class="form-inline">
            <b> {!! Form::label('', 'Type Room: ') !!} </b>
            {!! Form::label('', $msg['typeRoom'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Type Weeks: ') !!} </b>
            {!! Form::label('', $msg['Weeks'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b>  {!! Form::label('', 'Additional Weeks: ') !!} </b>
            {!! Form::label('', $msg['AdditionalWeek'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Reg Weeks x year:') !!} </b>
            {!! Form::label('', $msg['RegWeeks'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Membership: ') !!} </b>
            {!! Form::label('', $msg['membership'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Amount of Points: ') !!} </b>
            {!! Form::label('', $msg['AmountPoints'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Years Remain: ') !!} </b>
            {!! Form::label('', $msg['YearsRemain'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
            <b> {!! Form::label('', 'Season: ') !!} </b>
            {!! Form::label('', $msg['season'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Other Season: ') !!} </b>
            {!! Form::label('', $msg['OtherSeason'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Maint Fee: ') !!} </b>
            {!! Form::label('', $msg['MaintFee'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
            <b> {!! Form::label('', 'Exchange Company: ') !!} </b>
            {!! Form::label('', $msg['exchCompany'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Other Exchange Company: ') !!} </b>
            {!! Form::label('', $msg['OtherExch'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Benefits: ') !!} </b>
            {!! Form::label('', $msg['Benefits'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Resort Name: ') !!} </b>
            {!! Form::label('', $msg['ResortName'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Location: ') !!} </b>
            {!! Form::label('', $msg['Location'], ['class'=>'form-control']) !!}>
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Email: ') !!} </b>
            {!! Form::label('', $msg['Email'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
          <b>  {!! Form::label('', 'Owner Name: ') !!} </b>
            {!! Form::label('', $msg['OwnerName'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Phone: ') !!} </b>
            {!! Form::label('', $msg['Phone'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
          <b>  {!! Form::label('', 'Availability: ') !!} </b>
            {!! Form::label('', $msg['Availability'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Selling: ') !!} </b>
            {!! Form::label('', $msg['Selling'], ['class'=>'form-control']) !!}
        </div>
        <div class="form-inline">
           <b> {!! Form::label('', 'Rental: ') !!} </b>
            {!! Form::label('', $msg['Rental'], ['class'=>'form-control']) !!}
        </div>
    </div>
    <label style="font-size: 25px; margin-top: 25px; margin-left: 25px">
        Solicitó la estimación con {{ $msg['Broker']}}, házle saber que necesita revisar esta información.
    </label>
    <br><br><br>
</div>



