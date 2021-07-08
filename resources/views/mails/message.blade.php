<div style="background-color: #5c768d; height: 50px; color: white; text-align: center; style= 'border-style: solid;border-color: #111111;'>
    <img src="{{url('img/logo-bcp.png')}}" style="width: 50px; height: 50px">

</div>
<div style= 'border-style: solid;border-color: #111111;'>
    <div>
        <br> <br>
            <label style=" font-size: 15px; margin-top: 25px">Alguien te ha contactado desde la página web. Este fue el mensaje que dejaron</label>
    </div>
    <div style="text-align: left; margin-left: 300px; margin-top: 15px">
        <div class="form-inline">
            <b>{!! Form::label('NombreLbl', 'Subject') !!} </b>
            {!! Form::label('NombreTxt', $msg['Subject'],['style'=>'font-weight: 350; font-size: 20px']) !!}
        </div>
        <div class="form-inline">
            <b>{!! Form::label('NombreLbl', 'Message') !!} </b>
            {!! Form::label('NombreTxt', $msg['Message'],['style'=>'font-weight: 350; font-size: 20px']) !!}
        </div>
    </div>
    <div>
        <br> <br>
        <label style=" font-size: 15px; margin-top: 30px"> Estos son los datos que dejaron para que te pongas en contacto lo antes posible</label>

        <div style="text-align: left; margin-left: 300px; margin-top: 15px">
            <div class="form-inline">
                <b> {!! Form::label('NombreLbl', 'Name: ') !!}</b>
                 {!! Form::label('NombreTxt', $msg['Name'],['style'=>'font-weight: 350; font-size: 20px']) !!}
             </div>
             <div class="form-inline">
                 <b>{!! Form::label('NombreLbl', 'Email') !!} </b>
                 {!! Form::label('NombreTxt', $msg['Email'],['style'=>'font-weight: 350; font-size: 20px']) !!}
             </div>
        </div>
    </div>
    <br><br><br>
</div>


