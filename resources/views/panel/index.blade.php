@extends('layouts.template')

@section('content')
    <style>
        .idk{
            margin: 140px 60px 30px;
        }
    </style>
    {!! Form::hidden('id', Auth::user()->id, ['id'=>'id']) !!}
    <div class="container" style="height: 500px">
        @if(session('status'))
            <div class="alert alert-success" id="msgAlert" style="width:100%; " id="alert">
                {{ session('status') }}
            </div>
        @endif
        <div style="text-align: center; margin-top: 50px">
            <h4>WELCOME {{ Auth::user()->name}}    </h4>
        </div>
        {{-- Buttons General Documents  --}}
        <div class="form-inline">
            <button  type="button" data-toggle="modal" id="loi" data-target="#loiModal" class="btn btn-info idk"><i class="icofont-file-document"></i>  L.O.I section</button>
            @if ($status->TNL != 0)
                <button type="button" data-toggle="modal" data-target="#tnlModal" class="btn btn-info idk" ><i class="icofont-law-document"></i> TNL section</button>
            @else
                <button class="btn btn-info idk" disabled="true"><i class="icofont-law-document"></i> TNL section</button>
            @endif
            @if ($status->Contract != 0)
                <button class="btn btn-info idk" data-toggle="modal" data-target="#contractModal" ><i class="icofont-search-document"></i> Contract</button>
            @else
                <button class="btn btn-info idk" disabled="true"><i class="icofont-search-document"></i> Contract</button>
            @endif

            <button class="btn btn-info idk" data-toggle="modal" data-target="#docsModal" id="documents"><i class="icofont-document-folder"></i> Upload your documents</button>
        </div>
    </div>
    {{-- ----------------------------------------modal LOI-------------------------------------------- --}}

        <div class="modal fade bd-example-modal-lg" id="loiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">L.O.I Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if ($files == null || $files->PathLOI == null)
                            <div class="form-inline">
                                {{-- DOWNLOAD THE DOCUMENT --}}
                                <div class="col-md-6 form-inline">
                                    <div>
                                        <img style="width: 50%; margin-left: 120px;" src="{{ asset('img/step1.png')}}" alt="">
                                        <p style="margin-left: 65px; margin-top: 15px">Print your document, sign it and upload it here</p>
                                    </div>
                                    <div class="col-md-12 form-inline">
                                        <a href="{{ url('downloadLOI')}}" style="width: 100px" class="btn btn-warning">Download </a>
                                        {!! Form::open(['url'=>'submitLOI','files'=>'true']) !!}
                                            {!! Form::file('LOIFirm', ['class'=>'form-control','style'=>'margin-left: 50px']) !!}

                                    </div>
                                    <div class="col-md-12" style="margin-top: 30px">
                                        <div class="modal-footer">
                                            <p></p>
                                            {{-- <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                                <button style="margin-left: 50px; margin-top: 40px" type="submit" class="btn btn-info">Submit</button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                                {{-- SIGNING THE DOCUMENT --}}
                                <div class="col-md-6 form-inline">
                                    <div>
                                        <img style="width: 40%; margin-left: 200px" src="{{ asset('img/step2.png')}}" alt="">
                                        <p style="margin-top: 15px; margin-left: 100px">Generate your signature electronically and sign your document</p>
                                    </div>
                                    <div class="col-md-12 form-inline">
                                        <div class="col-md-6">
                                            <button onclick="signs(1)" style="margin-left: 60px; width: 200px" class="btn btn-warning" type="button">Generate Signature</button>
                                        </div>
                                        {{-- FORM WITH DIFFERENTS WAYS TO SIGN THE DOCUMENT --}}
                                        <div class="form-inline col-md-6" id="signs" >
                                            <button style="margin: 0px 30px" class="btn btn-primary" data-container="body"
                                            data-toggle="popover" data-placement="top" type="button"
                                            data-content="Upload an image with your signature" data-trigger="hover"
                                            onclick="upload(1)">Upload</button>

                                            <button style="margin: 0px 30px" class="btn btn-primary" data-container="body"
                                            data-toggle="popover" data-placement="top" type="button"
                                            data-content="Draw your signature online" data-trigger="hover"
                                            onclick="draw(1)">Draw</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 30px">
                                        {!! Form::open(['url'=>'previewLOI']) !!}
                                        <div class="modal-footer">
                                            <p style="font-size: 10px">By clicking Continue, I agree that the signature will be the electronic representation
                                                of my signature for all purposes when I  use them  legally in this binding contracts
                                                - just the same as a pen-and-paper signature or initial.</p>
                                                {!! Form::label('WS', 'Approve the document without signature') !!}
                                                {!! Form::checkbox('Withouts', 1, false, ['class'=>'form-control']) !!}
                                                <button style="margin-left: 50px" type="submit" class="btn btn-info">Continue</button>
                                            </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        @else
                            <button class="btn btn-success"type="button" onclick="showPDF()" style="margin-left: 650px; margin-bottom: 30px">Show</button>
                            <div id="pdf" style="margin-left: 200px">
                                <object type="application/pdf" data="{{ $files->PathLOI }}" width="1000" height="650"></object>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Upload Signature-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UPLOAD</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                {!! Form::open(['url'=>'uploadSignature','files'=>'true']) !!}
                        {!! Form::file('Signature', ['class'=>'form-control','id'=>'file']) !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- Modal Draw Signature-->
        <div class="modal fade" id="drawModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Draw</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <canvas id="sig-canvas" width="460" height="160">
                            Get a better browser, bro.
                        </canvas>
                        <img id="sig-image" src="" alt="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="sig-clearBtn" class="btn btn-secondary" >Clear Signature</button>
                        <button class="btn btn-primary" id="sig-submitBtn">Create Signature</button>
                        <button class="btn btn-secondary" id="back" onclick="back(1)" type="button">Back</button>
                        <button class="btn btn-info" id="continue" type="button"  data-dismiss="modal" >Continue</button>
                    </div>
                </div>
            </div>
        </div>
    {{-- ------------------------------------------------------------------------------------------------- --}}
                                            {{-- modal TNL--}}
        <div class="modal fade bd-example-modal-lg" id="tnlModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">TNL Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @if ($files == null || $files->PathTNL == null)
                            <div class="form-inline">
                                {{-- DOWNLOAD THE DOCUMENT --}}
                                <div class="col-md-6 form-inline">
                                    <div>
                                        <img style="width: 50%; margin-left: 120px;" src="{{ asset('img/step1.png')}}" alt="">
                                        <p style="margin-left: 65px; margin-top: 15px">Print your document, sign it and upload it here</p>
                                    </div>
                                    <div class="col-md-12 form-inline">
                                        <a href="{{ url('downloadTNL')}}" style="width: 100px" class="btn btn-warning">Download </a>
                                        {!! Form::open(['url'=>'submitTNL','files'=>'true']) !!}
                                            {!! Form::file('TNLFirm', ['class'=>'form-control','style'=>'margin-left: 50px']) !!}
                                    </div>
                                    <div class="col-md-12" style="margin-top: 30px">
                                        <div class="modal-footer">
                                                <button style="margin-left: 50px" type="submit" class="btn btn-info">Submit</button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                                {{-- SIGNING THE DOCUMENT --}}
                                <div class="col-md-6 form-inline">
                                    <div>
                                        <img style="width: 40%; margin-left: 200px" src="{{ asset('img/step2.png')}}" alt="">
                                        <p style="margin-top: 15px; margin-left: 100px">Generate your signature electronically and sign your document</p>
                                    </div>
                                    <div class="col-md-12 form-inline">
                                        <div class="col-md-6">
                                            <button onclick="signs(2)" style="margin-left: 60px; width: 200px" class="btn btn-warning" type="button">Generate Signature</button>
                                        </div>
                                        {{-- FORM WITH DIFFERENTS WAYS TO SIGN THE DOCUMENT --}}
                                        <div class="form-inline col-md-6" id="signsTNL" >
                                            <button style="margin: 0px 30px" class="btn btn-primary" data-container="body"
                                            data-toggle="popover" data-placement="top" type="button"
                                            data-content="Upload an image with your signature" data-trigger="hover"
                                            onclick="upload(2)">Upload</button>

                                            <button style="margin: 0px 30px" class="btn btn-primary" data-container="body"
                                            data-toggle="popover" data-placement="top" type="button"
                                            data-content="Draw your signature online" data-trigger="hover"
                                            onclick="draw(2)">Draw</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 30px">
                                        {!! Form::open(['url'=>'previewTNL', 'method'=>'GET']) !!}
                                            <div class="modal-footer">
                                            {{-- <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                                {!! Form::label('WS', 'Approve the document without signature') !!}
                                                {!! Form::checkbox('Withouts', 1, false, ['class'=>'form-control']) !!}
                                                <button style="margin-left: 50px" type="submit" class="btn btn-info">Continue</button>
                                            </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        @else
                            <button class="btn btn-success"type="button" onclick="showPDF(2)" style="margin-left: 650px; margin-bottom: 30px">Show</button>
                            <div id="pdf2" style="margin-left: 200px;">
                                <object type="application/pdf" data="{{ $files->PathTNL }}" width="1000" height="650"></object>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Upload Signature TNL-->
        <div class="modal fade" id="exampleModalTNL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">UPLOAD</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                {!! Form::open(['url'=>'uploadSignature','files'=>'true']) !!}
                        {!! Form::file('Signature', ['class'=>'form-control','id'=>'file']) !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- Modal Draw Signature TNL-->
        <div class="modal fade" id="drawModalTNL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Draw</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <canvas id="sig-canvasTNL" width="460" height="160">
                            Get a better browser, bro.
                        </canvas>
                        <img id="sig-imageTNL" src="" alt="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="sig-clearBtnTNL" class="btn btn-secondary" >Clear Signature</button>
                        <button class="btn btn-primary" id="sig-submitBtnTNL">Create Signature</button>
                        <button class="btn btn-secondary" id="backTNL" onclick="back(2)" type="button">Back</button>
                        <button class="btn btn-info" id="continueTNL" type="button"  data-dismiss="modal" >Continue</button>
                    </div>
                </div>
            </div>
        </div>
    {{-- --------------------------------------------CONTRACT MODAL-------------------------------------- --}}

    {{-- modal Contract--}}
    <div class="modal fade bd-example-modal-lg" id="contractModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contract Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if ($files == null || $files->PathContract == null)
                        <div class="form-inline">
                            {{-- DOWNLOAD THE DOCUMENT --}}
                            <div class="col-md-6 form-inline">
                                <div>
                                    <img style="width: 50%; margin-left: 120px;" src="{{ asset('img/step1.png')}}" alt="">
                                    <p style="margin-left: 65px; margin-top: 15px">Print your document, sign it and upload it here</p>
                                </div>
                                <div class="col-md-12 form-inline">
                                    <a href="{{ url('downloadContract')}}" style="width: 100px" class="btn btn-warning">Download </a>
                                    {!! Form::open(['url'=>'submitContract','files'=>'true']) !!}
                                        {!! Form::file('ContractFirm', ['class'=>'form-control','style'=>'margin-left: 50px']) !!}
                                </div>
                                <div class="col-md-12" style="margin-top: 30px">
                                    <div class="modal-footer">
                                            <button style="margin-left: 50px" type="submit" class="btn btn-info">Submit</button>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            {{-- SIGNING THE DOCUMENT --}}
                            <div class="col-md-6 form-inline">
                                <div>
                                    <img style="width: 40%; margin-left: 200px" src="{{ asset('img/step2.png')}}" alt="">
                                    <p style="margin-top: 15px; margin-left: 100px">Generate your signature electronically and sign your document</p>
                                </div>
                                <div class="col-md-12 form-inline">
                                    <div class="col-md-6">
                                        <button onclick="signs(3)" style="margin-left: 60px; width: 200px" class="btn btn-warning" type="button">Generate Signature</button>
                                    </div>
                                    {{-- FORM WITH DIFFERENTS WAYS TO SIGN THE DOCUMENT --}}
                                    <div class="form-inline col-md-6" id="signsContract" >
                                        <button style="margin: 0px 30px" class="btn btn-primary" data-container="body"
                                        data-toggle="popover" data-placement="top" type="button"
                                        data-content="Upload an image with your signature" data-trigger="hover"
                                        onclick="upload(3)">Upload</button>

                                        <button style="margin: 0px 30px" class="btn btn-primary" data-container="body"
                                        data-toggle="popover" data-placement="top" type="button"
                                        data-content="Draw your signature online" data-trigger="hover"
                                        onclick="draw(3)">Draw</button>
                                    </div>
                                </div>
                                <div class="col-md-12" style="margin-top: 30px">
                                    <div class="modal-footer">
                                        {{-- <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                        {!! Form::open(['url'=>'previewContract', 'method'=>'GET']) !!}
                                            <button style="margin-left: 50px" type="submit" class="btn btn-info">Continue</button>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <button class="btn btn-success"type="button" onclick="showPDF(3)" style="margin-left: 650px; margin-bottom: 30px">Show</button>
                        <div id="pdf3" style="margin-left: 200px;">
                            <object type="application/pdf" data="{{ $files->PathContract }}" width="1000" height="650"></object>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Upload Signature Contract-->
    <div class="modal fade" id="exampleModalContract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UPLOAD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
            {!! Form::open(['url'=>'uploadSignatureContract','files'=>'true']) !!}
                    {!! Form::file('Signature', ['class'=>'form-control','id'=>'file']) !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- Modal Draw Signature contract-->
    <div class="modal fade" id="drawModalContract" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Draw</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <canvas id="sig-canvasContract" width="460" height="160">
                        Get a better browser, bro.
                    </canvas>
                    <img id="sig-imageContract" src="" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" id="sig-clearBtnContract" class="btn btn-secondary" >Clear Signature</button>
                    <button class="btn btn-primary" id="sig-submitBtnContract">Create Signature</button>
                    <button class="btn btn-secondary" id="backContract" onclick="back(3)" type="button">Back</button>
                    <button class="btn btn-info" id="continueContract" type="button"  data-dismiss="modal" >Continue</button>
                </div>
            </div>
        </div>
    </div>
    {{-- --------------------------------------------DOCUMENTS MODAL-------------------------------------- --}}

        {{-- modal --}}
        <div class="modal fade bd-example" id="docsModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Required Documents</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! Form::open(['url'=>'uploadDocuments','files'=>'true']) !!}
                            {!! Form::text('Description', '', ['placeholder'=>'Description','class'=>'form-control','style'=>'margin: 5px']) !!}
                            {!! Form::file('Doc', ['class'=>'form-control','style'=>'margin: 5px']) !!}
                            <div class="col-md-12" >
                                <button type="submit" class="btn btn-info" style="float: right">Submit</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    <style>
        #sig-canvas {
            border: 2px dotted #CCCCCC;
            border-radius: 15px;
            cursor: crosshair;
        }
        #sig-canvasTNL {
            border: 2px dotted #CCCCCC;
            border-radius: 15px;
            cursor: crosshair;
        }
        #sig-canvasContract {
            border: 2px dotted #CCCCCC;
            border-radius: 15px;
            cursor: crosshair;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $('#document').ready(function(){
            $('#signs').hide();
            $('#signsTNL').hide();
            $('#signsContract').hide();
            $('#continue').hide();
            $('#continueTNL').hide();
            $('#continueContract').hide();
            $('#back').hide();
            $('#backTNL').hide();
            $('#backContract').hide();
            $('#pdf').hide();
            $('#pdf2').hide();
            $('#pdf3').hide();
            $('#msgAlert').fadeIn();
            setTimeout(function() {
                $("#msgAlert").fadeOut();
            },2500);
        })
        function signs(id){
            // alert(id)
            if(id == 1){
                $('#signs').show();
            }else if (id == 2){
                $('#signsTNL').show();
            }else if(id == 3){
                $('#signsContract').show();
            }

        }
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
        function upload(id){
            if(id == 1){
                $('#exampleModal').modal('show');
            } else if(id == 2){
                $('#exampleModalTNL').modal('show');
            }else if(id == 3){
                $('#exampleModalContract').modal('show');
            }

        }
        function draw(id){
            if(id == 1){
                $('#drawModal').modal('show');
            } else if(id == 2){
                $('#drawModalTNL').modal('show');
            }else if(id == 3){
                $('#drawModalContract').modal('show');
            }
        }
        function back(id){
            if(id == 1){
                $('#continue').hide();
                $('#back').hide();
                $('#sig-submitBtn').show();
                $('#sig-clearBtn').show();
            } else if(id == 2){
                $('#continueTNL').hide();
                $('#backTNL').hide();
                $('#sig-submitBtnTNL').show();
                $('#sig-clearBtnTNL').show();
            }else if(id == 3){
                $('#continueContract').hide();
                $('#backContract').hide();
                $('#sig-submitBtnContract').show();
                $('#sig-clearBtnContract').show();
            }

        }
        function uploadSignature(){
            var fd = new FormData();
            var files = $('#file').files[0];
            // alert(files)
            // Check file selected or not
            if(files.length > 0 ){
                fd.append('file',files[0]);

            var data = {
                file: fd,
                _token: '{{ csrf_token() }}'
            }

                $.post('uploadSignature',data,function(response){

                })
            }
        }
        function showPDF(id){
            if(id==2){
                $('#pdf2').show();
            }else if(id == 3){
                $('#pdf3').show();
            }else
                $('#pdf').show();
        }
        // LOI
        (function() {
            window.requestAnimFrame = (function(callback) {
                return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimaitonFrame ||
                function(callback) {
                    window.setTimeout(callback, 1000 / 60);
                };
            })();

            var canvas = document.getElementById("sig-canvas");
            var ctx = canvas.getContext("2d");
            ctx.strokeStyle = "#222222";
            ctx.lineWidth = 4;

            var drawing = false;
            var mousePos = {
                x: 0,
                y: 0
            };
            var lastPos = mousePos;

            canvas.addEventListener("mousedown", function(e) {
                drawing = true;
                lastPos = getMousePos(canvas, e);
            }, false);

            canvas.addEventListener("mouseup", function(e) {
                drawing = false;
            }, false);

            canvas.addEventListener("mousemove", function(e) {
                mousePos = getMousePos(canvas, e);
            }, false);

            // Add touch event support for mobile
            canvas.addEventListener("touchstart", function(e) {

            }, false);

            canvas.addEventListener("touchmove", function(e) {
                var touch = e.touches[0];
                var me = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
                });
                canvas.dispatchEvent(me);
            }, false);

            canvas.addEventListener("touchstart", function(e) {
                mousePos = getTouchPos(canvas, e);
                var touch = e.touches[0];
                var me = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
                });
                canvas.dispatchEvent(me);
            }, false);

            canvas.addEventListener("touchend", function(e) {
                var me = new MouseEvent("mouseup", {});
                canvas.dispatchEvent(me);
            }, false);

            function getMousePos(canvasDom, mouseEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                x: mouseEvent.clientX - rect.left,
                y: mouseEvent.clientY - rect.top
                }
            }

            function getTouchPos(canvasDom, touchEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top
                }
            }

            function renderCanvas() {
                if (drawing) {
                ctx.moveTo(lastPos.x, lastPos.y);
                ctx.lineTo(mousePos.x, mousePos.y);
                ctx.stroke();
                lastPos = mousePos;
                }
            }

            // Prevent scrolling when touching the canvas
            document.body.addEventListener("touchstart", function(e) {
                if (e.target == canvas) {
                e.preventDefault();
                }
            }, false);
            document.body.addEventListener("touchend", function(e) {
                if (e.target == canvas) {
                e.preventDefault();
                }
            }, false);
            document.body.addEventListener("touchmove", function(e) {
                if (e.target == canvas) {
                e.preventDefault();
                }
            }, false);

            (function drawLoop() {
                requestAnimFrame(drawLoop);
                renderCanvas();
            })();

            function clearCanvas() {
                canvas.width = canvas.width;
            }

            // Set up the UI
            // var sigText = document.getElementById("sig-dataUrl");
            var sigImage = document.getElementById("sig-image");
            var clearBtn = document.getElementById("sig-clearBtn");
            var submitBtn = document.getElementById("sig-submitBtn");


            clearBtn.addEventListener("click", function(e) {
                clearCanvas();
                sigText.innerHTML = "Data URL for your signature will go here!";
                sigImage.setAttribute("src", "");
            }, false);

            submitBtn.addEventListener("click", function(e) {
                var dataUrl = canvas.toDataURL();
                // alert(dataUrl)
                var data = {
                    image: dataUrl,
                    _token: '{{ csrf_token() }}'
                }
                $.post('signatureDrawn',data,function(result){
                    if(result === 'exito'){
                        sigImage.setAttribute("src", dataUrl);
                        $('#sig-submitBtn').hide();
                        $('#sig-clearBtn').hide();
                        $('#continue').show();
                        $('#back').show();
                    }
                })
            }, false);

        })();
        // TNL
        (function() {
            window.requestAnimFrame = (function(callback) {
                return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimaitonFrame ||
                function(callback) {
                    window.setTimeout(callback, 1000 / 60);
                };
            })();

            var canvas = document.getElementById("sig-canvasTNL");
            var ctx = canvas.getContext("2d");
            ctx.strokeStyle = "#222222";
            ctx.lineWidth = 4;

            var drawing = false;
            var mousePos = {
                x: 0,
                y: 0
            };
            var lastPos = mousePos;

            canvas.addEventListener("mousedown", function(e) {
                drawing = true;
                lastPos = getMousePos(canvas, e);
            }, false);

            canvas.addEventListener("mouseup", function(e) {
                drawing = false;
            }, false);

            canvas.addEventListener("mousemove", function(e) {
                mousePos = getMousePos(canvas, e);
            }, false);

            // Add touch event support for mobile
            canvas.addEventListener("touchstart", function(e) {

            }, false);

            canvas.addEventListener("touchmove", function(e) {
                var touch = e.touches[0];
                var me = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
                });
                canvas.dispatchEvent(me);
            }, false);

            canvas.addEventListener("touchstart", function(e) {
                mousePos = getTouchPos(canvas, e);
                var touch = e.touches[0];
                var me = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
                });
                canvas.dispatchEvent(me);
            }, false);

            canvas.addEventListener("touchend", function(e) {
                var me = new MouseEvent("mouseup", {});
                canvas.dispatchEvent(me);
            }, false);

            function getMousePos(canvasDom, mouseEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                x: mouseEvent.clientX - rect.left,
                y: mouseEvent.clientY - rect.top
                }
            }

            function getTouchPos(canvasDom, touchEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top
                }
            }

            function renderCanvas() {
                if (drawing) {
                ctx.moveTo(lastPos.x, lastPos.y);
                ctx.lineTo(mousePos.x, mousePos.y);
                ctx.stroke();
                lastPos = mousePos;
                }
            }

            // Prevent scrolling when touching the canvas
            document.body.addEventListener("touchstart", function(e) {
                if (e.target == canvas) {
                e.preventDefault();
                }
            }, false);
            document.body.addEventListener("touchend", function(e) {
                if (e.target == canvas) {
                e.preventDefault();
                }
            }, false);
            document.body.addEventListener("touchmove", function(e) {
                if (e.target == canvas) {
                e.preventDefault();
                }
            }, false);

            (function drawLoop() {
                requestAnimFrame(drawLoop);
                renderCanvas();
            })();

            function clearCanvas() {
                canvas.width = canvas.width;
            }

            // Set up the UI
            // var sigText = document.getElementById("sig-dataUrl");
            var sigImage = document.getElementById("sig-imageTNL");
            var clearBtn = document.getElementById("sig-clearBtnTNL");
            var submitBtn = document.getElementById("sig-submitBtnTNL");


            clearBtn.addEventListener("click", function(e) {
                clearCanvas();
                sigText.innerHTML = "Data URL for your signature will go here!";
                sigImage.setAttribute("src", "");
            }, false);

            submitBtn.addEventListener("click", function(e) {
                var dataUrl = canvas.toDataURL();
                // alert(dataUrl)
                var data = {
                    image: dataUrl,
                    _token: '{{ csrf_token() }}'
                }
                $.post('signatureDrawnTNL',data,function(result){
                    if(result === 'exito'){
                        sigImage.setAttribute("src", dataUrl);
                        $('#sig-submitBtnTNL').hide();
                        $('#sig-clearBtnTNL').hide();
                        $('#continueTNL').show();
                        $('#backTNL').show();
                    }
                })
            }, false);
        })();
        // Contract
        (function() {
            window.requestAnimFrame = (function(callback) {
                return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimaitonFrame ||
                function(callback) {
                    window.setTimeout(callback, 1000 / 60);
                };
            })();

            var canvas = document.getElementById("sig-canvasContract");
            var ctx = canvas.getContext("2d");
            ctx.strokeStyle = "#222222";
            ctx.lineWidth = 4;

            var drawing = false;
            var mousePos = {
                x: 0,
                y: 0
            };
            var lastPos = mousePos;

            canvas.addEventListener("mousedown", function(e) {
                drawing = true;
                lastPos = getMousePos(canvas, e);
            }, false);

            canvas.addEventListener("mouseup", function(e) {
                drawing = false;
            }, false);

            canvas.addEventListener("mousemove", function(e) {
                mousePos = getMousePos(canvas, e);
            }, false);

            // Add touch event support for mobile
            canvas.addEventListener("touchstart", function(e) {

            }, false);

            canvas.addEventListener("touchmove", function(e) {
                var touch = e.touches[0];
                var me = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
                });
                canvas.dispatchEvent(me);
            }, false);

            canvas.addEventListener("touchstart", function(e) {
                mousePos = getTouchPos(canvas, e);
                var touch = e.touches[0];
                var me = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
                });
                canvas.dispatchEvent(me);
            }, false);

            canvas.addEventListener("touchend", function(e) {
                var me = new MouseEvent("mouseup", {});
                canvas.dispatchEvent(me);
            }, false);

            function getMousePos(canvasDom, mouseEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                x: mouseEvent.clientX - rect.left,
                y: mouseEvent.clientY - rect.top
                }
            }

            function getTouchPos(canvasDom, touchEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top
                }
            }

            function renderCanvas() {
                if (drawing) {
                ctx.moveTo(lastPos.x, lastPos.y);
                ctx.lineTo(mousePos.x, mousePos.y);
                ctx.stroke();
                lastPos = mousePos;
                }
            }

            // Prevent scrolling when touching the canvas
            document.body.addEventListener("touchstart", function(e) {
                if (e.target == canvas) {
                e.preventDefault();
                }
            }, false);
            document.body.addEventListener("touchend", function(e) {
                if (e.target == canvas) {
                e.preventDefault();
                }
            }, false);
            document.body.addEventListener("touchmove", function(e) {
                if (e.target == canvas) {
                e.preventDefault();
                }
            }, false);

            (function drawLoop() {
                requestAnimFrame(drawLoop);
                renderCanvas();
            })();

            function clearCanvas() {
                canvas.width = canvas.width;
            }

            // Set up the UI
            // var sigText = document.getElementById("sig-dataUrl");
            var sigImage = document.getElementById("sig-imageContract");
            var clearBtn = document.getElementById("sig-clearBtnContract");
            var submitBtn = document.getElementById("sig-submitBtnContract");


            clearBtn.addEventListener("click", function(e) {
                clearCanvas();
                sigText.innerHTML = "Data URL for your signature will go here!";
                sigImage.setAttribute("src", "");
            }, false);

            submitBtn.addEventListener("click", function(e) {
                var dataUrl = canvas.toDataURL();
                // alert(dataUrl)
                var data = {
                    image: dataUrl,
                    _token: '{{ csrf_token() }}'
                }
                $.post('signatureDrawnContract',data,function(result){
                    if(result === 'exito'){
                        alert('result')
                        sigImage.setAttribute("src", dataUrl);
                        $('#sig-submitBtnContract').hide();
                        $('#sig-clearBtnContract').hide();
                        $('#continueContract').show();
                        $('#backContract').show();
                    }
                })
            }, false);

        })();
    </script>
@endsection
