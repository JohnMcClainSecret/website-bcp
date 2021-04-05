@extends('layouts.template')

@section('content')
    <style>
        /* .idk{
            margin: 140px 60px 30px;
        } */
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
        .flex-container {
            display: flex;
            flex-direction: row;
            font-size: 30px;
            text-align: center;
        }
        .flex-item-right {
            /* background-color: dodgerblue; */
            padding: 10px;
            flex: 50%;
        }
        /* Responsive layout - makes a one column-layout instead of two-column layout */
        @media (max-width: 800px) {
            .flex-container {
                flex-direction: column;
            }
            .pdf{
                width: 50%;
                height: 50%;
            }
        }
        @media (max-width: 1066px) {
            .pdf{
                width: 100%;
                height: 70%;
            }
        }
        .modal{
            display flex
            align-items center
            justify-content center
            position fixed
        }

    </style>
    <section>
        <div class=" container">
            {!! Form::hidden('id', Auth::user()->id, ['id'=>'id']) !!}
            <div style="text-align: center; margin-top: 50px">
                <h4>WELCOME {{ Auth::user()->name}}    </h4>
            </div>
            <div class="flex-container" style="height: 500px">
                @if(session('status'))
                    <div class="alert alert-success" id="msgAlert" style="width:100%; " id="alert">
                        {{ session('status') }}
                    </div>
                @endif
                {{-- Buttons General Documents  --}}
                <div class="flex-container" style="margin: auto">
                    <div class="flex-item-right">
                        <button  type="button" data-toggle="modal" id="loi" data-target="#loiModal" class="btn btn-info idk"><i class="icofont-file-document"></i>  L.O.I section</button>
                    </div>
                    <div class="flex-item-right">
                        @if ($status->TNL != 0)
                            <button type="button" data-toggle="modal" data-target="#tnlModal" class="btn btn-info idk" ><i class="icofont-law-document"></i> TNL section</button>
                        @else
                            <button class="btn btn-info idk" disabled="true"><i class="icofont-law-document"></i> TNL section</button>
                        @endif
                    </div>
                    <div class="flex-item-right">
                        @if ($status->Contract != 0)
                            <button class="btn btn-info idk" data-toggle="modal" data-target="#contractModal" ><i class="icofont-search-document"></i> Contract</button>
                        @else
                            <button class="btn btn-info idk" disabled="true"><i class="icofont-search-document"></i> Contract</button>
                        @endif
                    </div>
                    <div class="flex-item-right">
                        <button class="btn btn-info idk" data-toggle="modal" data-target="#docsModal" id="documents"><i class="icofont-document-folder"></i> Upload your documents</button>
                    </div>
                </div>
            </div>
            {{-- ----------------------------------------modal LOI-------------------------------------------- --}}

            <div class="modal fade bd-example-modal-lg " id="loiModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                <div style="text-align: center">
                                    <button class="btn btn-success"type="button" onclick="showPDF()" >Show</button>
                                    <div id="pdf" >
                                        <object class="pdf"  type="application/pdf" data="{{ url('https://businessconsultantprimebrokers.com/website-bcp/public/'.$files->PathLOI)}}" width="1000" height="650"></object>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
