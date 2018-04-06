<div class="content-box" id="organization-box">
    <div class="element-wrapper">
        <div class="element-box">
            <form id="organization-form" role="form" method="post" action="{{ route('organization.save') }}">
                {{ csrf_field() }}
                <h5>Verein Registrieren</h5>
                <div class="form-desc">
                    Bitte Ihrer Verein registireren, bevor Sie weitermachen.
                </div>
                <div class="steps-w">
                    <div class="step-triggers">
                        <a class="step-trigger active" href="#stepContent1">Vereindetails</a>
                        <a class="step-trigger" href="#stepContent2">Plan auswählen</a>
                        <a class="step-trigger" href="#stepContent3">Eingaben prüfen</a>
                    </div>
                    @if ($errors->any())
                        <h5>Folgende Felder müssen ausgefüllt werden:</h5>
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="step-contents">
                        <div class="step-content active" id="stepContent1">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Vereinsname</label>
                                        <input class="form-control" placeholder="Vereinsname" name="name" data-error=""
                                               type="text"
                                                value="{{ old('name') }}">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Straße</label>
                                        <input class="form-control" placeholder="Straße" name="street" data-error=""
                                               type="text"
                                                value="{{ old('street') }}">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Nr.</label>
                                        <input class="form-control" placeholder="Nr." name="houseno" data-error=""
                                               type="text"
                                                value="{{ old('houseno') }}">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">PLZ</label>
                                        <input class="form-control" placeholder="PLZ" name="zipcode" data-error=""
                                               type="text"
                                                value="{{ old('zipcode') }}">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Stadt</label>
                                        <input class="form-control" placeholder="Stadt" name="city" data-error=""
                                               type="text"
                                                value="{{ old('city') }}">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Telefon</label>
                                        <input class="form-control" placeholder="Telefon" name="tel" data-error=""
                                               type="text"
                                                value="{{ old('tel') }}">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">E-Mail-Adresse</label>
                                        <input class="form-control" placeholder="E-Mail-Adresse" name="email"
                                               data-error="" type="email" 
                                               value="{{ old('email') }}">
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Webseite</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    http://
                                                </div>
                                            </div>
                                            <input class="form-control" placeholder="Webseite" name="website"
                                                   data-error="" type="text" 
                                                   value="{{ old('website') }}">
                                            <div class="help-block form-text with-errors form-control-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-buttons-w text-right">
                                <button type="submit" class="btn btn-primary step-trigger-btn" href="#stepContent2">
                                    Weiter
                                </button>
                            </div>
                        </div>
                        <div class="step-content" id="stepContent2">

                            <div class="pricing-plans row no-gutters">
                                @foreach($plans as $plan)
                                    <div class="pricing-plan plan-{{ $plan->id }} col-sm-4">
                                        <div class="plan-head">
                                            <div class="plan-image">
                                                <img alt="" src="/assets/img/plan1.png">
                                            </div>
                                            <div class="plan-name">
                                                {{ $plan->name }}
                                            </div>
                                        </div>
                                        <div class="plan-body">
                                            <div class="plan-price-w">
                                                <div class="price-value">
                                                    {{ $plan->price }} €
                                                </div>
                                                <div class="price-label">
                                                    Nur für
                                                </div>
                                            </div>
                                            <div class="plan-btn-w">
                                                <a class="choose btn btn-primary btn-rounded"
                                                   data-plan="{{ $plan->id }}" href="#!">Auswählen</a>
                                            </div>
                                        </div>
                                        <div class="plan-description">
                                            {!! $plan->description !!}
                                        </div>
                                    </div>
                                @endforeach
                                <input type="hidden" name="plan_id" id="plan" placeholder="Paket" value="">
                            </div>
                            <div class="form-buttons-w text-right">
                                <a class="btn btn-primary step-trigger-btn save-button" href="#stepContent3"> Weiter</a>
                            </div>
                        </div>
                        <div class="step-content" id="stepContent3">
                            <h3>Zusammenfassung:</h3>
                            <table class="table no-border" id="summary">
                            </table>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="accept" type="checkbox">Ich akzeptiere die allgemeinen
                                    Geschäftsbedingungen und bestätige die Richtigkeit der Angaben.
                                </label>
                            </div>
                            <div class="form-buttons-w text-right">
                                <button class="btn btn-primary">Senden</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@section('scripts')
    <script type="text/javascript">
        $('.choose').click(function () {
            var plan = $(this).data('plan');
            $('#plan').val(plan);
            $('.pricing-plan').css('border', '0');
            $('.plan-' + plan).css('border', '2px dashed #047BF8');
        });
        $('.save-button').click(function () {
            $('#organization-form input').each(function () {
                var val = $(this).val();
                var text = $(this).attr('placeholder');
                if (!text) {
                    return true;
                }
                $(
                    '<tr class="row">' +
                    '<td class="col-md-3"><strong>' + text + '</strong></td>' +
                    '<td class="col-md-9">' + val + '</td>' +
                    '</tr>'
                ).appendTo('#summary');
            })
        })
    </script>
@stop