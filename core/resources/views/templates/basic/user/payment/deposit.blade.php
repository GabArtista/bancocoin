@extends($activeTemplate . 'layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form action="{{ route('user.deposit.insert') }}" method="post">
                    @csrf
                    <input name="method_code" type="hidden">
                    <input name="currency" type="hidden">
                    @if ($order)
                        <input name="order" type="hidden" value="{{ $order->id }}">
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                @if ($order)
                                    @lang('Payment Methods')
                                @else
                                    @lang('Deposit')
                                @endif
                            </h5>
                        </div>
                        <div class="card-body">
                            @if ($order)
                                <div class="form-group">
                                    <label class="form-label">@lang('Plan Title')</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" value="{{ __($order->plan_details->title) }}" autocomplete="off" readonly>
                                    </div>
                                </div>
                            @endif
                            teste
                            <div class="form-group">
                                <label class="form-label">@lang('Select Gateway')</label>
                                <select class="form-control form-select" name="gateway" required>
                                    <option value="">@lang('Select One')</option>
                                    @foreach ($gatewayCurrency as $data)
                                        <option data-gateway="{{ $data }}" value="{{ $data->method_code }}" @selected(old('gateway') == $data->method_code)>{{ $data->name }}</option>
                                    @endforeach
                                </select>

                                <small class="text-danger d-none limit-error mt-2"></small>
                            </div>
                            <div class="form-group">
                                <label class="form-label">@lang('Amount')</label>
                                <div class="input-group">
                                    <input class="form-control" name="amount" type="number" value="{{ $order ? $order->amount : old('amount') }}" step="any" autocomplete="off" required @readonly($order)>
                                    <span class="input-group-text">{{ $general->cur_text }}</span>
                                </div>
                            </div>
                            <div class="preview-details d-none my-3">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>@lang('Limit')</span>
                                        <span><span class="min fw-bold">0</span> {{ __($general->cur_text) }} - <span class="max fw-bold">0</span> {{ __($general->cur_text) }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>@lang('Charge')</span>
                                        <span><span class="charge fw-bold">0</span> {{ __($general->cur_text) }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>@lang('Payable')</span> <span><span class="payable fw-bold"> 0</span> {{ __($general->cur_text) }}</span>
                                    </li>
                                    <li class="list-group-item justify-content-between d-none rate-element">

                                    </li>
                                    <li class="list-group-item justify-content-between d-none in-site-cur">
                                        <span>@lang('In') <span class="method_currency"></span></span>
                                        <span class="final_amo fw-bold">0</span>
                                    </li>
                                    <li class="list-group-item justify-content-center crypto_currency d-none">
                                        <span>@lang('Conversion with') <span class="method_currency"></span> @lang('and final value will Show on next step')</span>
                                    </li>
                                </ul>
                            </div>
                            <button class="submit-btn" type="submit">@lang('Submit')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        (function($) {
            "use strict";
            $('select[name=gateway]').change(function() {
                if (!$('select[name=gateway]').val()) {
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                var resource = $('select[name=gateway] option:selected').data('gateway');
                var fixed_charge = parseFloat(resource.fixed_charge);
                var percent_charge = parseFloat(resource.percent_charge);
                var rate = parseFloat(resource.rate)
                if (resource.method.crypto == 1) {
                    var toFixedDigit = 8;
                    $('.crypto_currency').removeClass('d-none');
                } else {
                    var toFixedDigit = 2;
                    $('.crypto_currency').addClass('d-none');
                }
                $('.min').text(parseFloat(resource.min_amount).toFixed(2));
                $('.max').text(parseFloat(resource.max_amount).toFixed(2));
                var amount = parseFloat($('input[name=amount]').val());

                if (parseFloat(resource.max_amount).toFixed(2) < amount) {
                    $('button[type="submit"]').attr('disabled', true);
                    $('.limit-error').text('Amount exceed the gateway limit');
                    $('.limit-error').removeClass('d-none');
                } else {
                    $('.limit-error').addClass('d-none');
                    $('button[type="submit"]').attr('disabled', false);
                }

                if (!amount) {
                    amount = 0;
                }
                if (amount <= 0) {
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                $('.preview-details').removeClass('d-none');
                var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                $('.charge').text(charge);
                var payable = parseFloat((parseFloat(amount) + parseFloat(charge))).toFixed(2);
                $('.payable').text(payable);
                var final_amo = (parseFloat((parseFloat(amount) + parseFloat(charge))) * rate).toFixed(toFixedDigit);
                $('.final_amo').text(final_amo);
                if (resource.currency != '{{ $general->cur_text }}') {
                    var rateElement = `<span class="fw-bold">@lang('Conversion Rate')</span> <span><span  class="fw-bold">1 {{ __($general->cur_text) }} = <span class="rate">${rate}</span>  <span class="method_currency">${resource.currency}</span></span></span>`;
                    $('.rate-element').html(rateElement)
                    $('.rate-element').removeClass('d-none');
                    $('.in-site-cur').removeClass('d-none');
                    $('.rate-element').addClass('d-flex');
                    $('.in-site-cur').addClass('d-flex');
                } else {
                    $('.rate-element').html('')
                    $('.rate-element').addClass('d-none');
                    $('.in-site-cur').addClass('d-none');
                    $('.rate-element').removeClass('d-flex');
                    $('.in-site-cur').removeClass('d-flex');
                }
                $('.method_currency').text(resource.currency);
                $('input[name=currency]').val(resource.currency);
                $('input[name=method_code]').val(resource.method_code);
                $('input[name=amount]').on('input');
            });
            $('input[name=amount]').on('input', function() {
                $('select[name=gateway]').change();
                $('.amount').text(parseFloat($(this).val()).toFixed(2));
            });
        })(jQuery);
    </script>
@endpush
