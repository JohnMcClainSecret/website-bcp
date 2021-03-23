@extends('layouts.template')

@section('content')
    <style>
        .idk{
            margin: 140px 60px 30px;
        }
    </style>
    <div class="container" style="height: 500px">
        <div style="text-align: center; margin-top: 50px">
            <h4>WELCOME {{ Auth::user()->name}}    </h4>
        </div>
        <div class="form-inline" >
            <button  type="button" data-toggle="modal" data-target="#loiModal" class="btn btn-info idk"><i class="icofont-file-document"></i>  L.O.I section</button>
            <button class="btn btn-info idk"><i class="icofont-law-document"></i> TNL section</button>
            <button class="btn btn-info idk"><i class="icofont-search-document"></i> Contract</button>
            <button class="btn btn-info idk"><i class="icofont-document-folder"></i> Upload your documents</button>
        </div>
    </div>
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
                    <div class="form-inline">
                        <div class="col-md-6">
                            <a href="{{ url('downloadLOI')}}" style="margin-left: 100px" class="btn btn-warning">Download</a>
                        </div>
                        <div class="col-md-6">
                            {!! Form::open(['url'=>'submitLOI','files'=>'true']) !!}
                                {!! Form::file('LOIFirm', ['class'=>'form-control']) !!}

                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {!! Form::close() !!}
                    <button style="margin-left: 50px" type="button" class="btn btn-primary">Submit</button>
                  </div>

            </div>
        </div>
    </div>
@endsection

