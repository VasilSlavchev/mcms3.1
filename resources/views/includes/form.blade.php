<div class="container-fluid bg-green-color">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="subscribe scrollme">

                    <div class="col-lg-6 col-lg-offset-5 col-md-6 col-md-offset-5 col-sm-12 col-xs-12">
                        <h4 class="subscribe-title">Send letter</h4>
                      <!--Contact us-->
                        {!! Form::open(['url' => 'contact/submit']) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Enter your name'])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Enter your email address'])}}
                        </div>
                        <div class="form-group">
                            {{Form::textarea('message', '', ['class'=>'form-control', 'placeholder'=>'Enter message'])}}
                        </div>
                        <div>
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        </div>
                    {!! Form::close() !!}
                        <!--/ Contact us-->

                    </div>

                    <div class="images-block">
                        <img src="{{ asset('app/img/subscr-gear.png') }}" alt="gear" class="gear">
                        <img src="{{ asset('app/img/subscr1.png') }}" alt="mail" class="mail">
                        <img src="{{ asset('app/img/subscr-mailopen.png') }}" alt="mail" class="mail-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
