@extends($activeTemplate . 'layouts.master')
@section('content')
    @if ($general->kv && auth()->user()->kv != Status::KYC_VERIFIED)
        @php
            $kycInstruction = getContent('kyc_instruction.content', true);
        @endphp
        <div class="row mrb-60">
            <div class="container">
                <div class="row">
                    @if (auth()->user()->kv == Status::KYC_UNVERIFIED)
                        <div class="col-12">
                            <div class="alert alert-info mb-0" role="alert">
                                <h5 class="alert-heading m-0">@lang('KYC Opção de Segurança')</h5>
                                <hr>
                                <p class="mb-0"> {{ __($kycInstruction->data_values->verification_instruction) }} <a class="text-base" href="{{ route('user.kyc.form') }}">@lang('Click aqui para Verificar')</a></p>
                            </div>
                        </div>
                    @elseif(auth()->user()->kv == Status::KYC_PENDING)
                        <div class="col-12">
                            <div class="alert alert-warning mb-0" role="alert">
                                <h5 class="alert-heading m-0">@lang('KYC Verificação Pendente')</h5>
                                <hr>
                                <p class="mb-0"> {{ __($kycInstruction->data_values->pending_instruction) }} <a class="text-base" href="{{ route('user.kyc.data') }}">@lang('See KYC Data')</a></p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
    
    <div class="row justify-content-center ml-b-30 pb-5">
        <div class="col-lg-4">
            <a href="https://livepix.gg/minelaboficialpt" class="btn cmn-btn w-100 p-3 text-center" >DEPÓSITO</a>
        </div>
    </div>

    <div class="row justify-content-center ml-b-30">
        <div class="col-lg-4 col-md-6 col-sm-8 mrb-30">
            <div class="dash-item d-flex flex-wrap">
                <div class="dash-icon">
                    <i class="las la-money-bill fa-4x"></i>
                </div>
                <div class="dash-content">
                    <h3 class="sub-title">@lang('SALDO')</h3>
                    <h4 class="title"> <span>{{ showAmount(auth()->user()->balance) }} {{ __($general->cur_text) }}</span></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8 mrb-30">
            <div class="dash-item d-flex flex-wrap">
                <div class="dash-icon">
                    <i class="las la-wallet fa-4x"></i>
                </div>
                <div class="dash-content">
                    <h3 class="sub-title">@lang('BONUS DE INDICAÇÃO')</h3>
                    <h4 class="title"> <span>{{ showAmount($referralBonus) }} {{ __($general->cur_text) }}</span></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8 mrb-30">
            <div class="dash-item d-flex flex-wrap">
                <div class="dash-icon">
                    <i class="las la-money-bill fa-4x"></i>
                </div>
                <div class="dash-content">
                    <h3 class="sub-title">PAC COIN</h3>
                    <h4 class="title"> <span>{{auth()->user()->pac_coin}}</span></h4>
                </div>
            </div>
        </div>
        @foreach ($miners as $item)
            <div class="col-lg-4 col-md-6 col-sm-8 mrb-30">
                <div class="dash-item d-flex flex-wrap">
                    <div class="dash-icon">
                        <img alt="@lang('Image')" src="{{ getImage(getFilePath('miner') . '/' . $item->coin_image, getFileSize('miner')) }}">
                    </div>
                    <div class="dash-content">
                        <h3 class="sub-title"><span>{{ $item->coin_code }}</span> @lang('CARTEIRA')</h3>
                        <h4 class="title">{{ showAmount($item->userCoinBalances->balance, 8, exceptZeros:true) }} {{ $item->coin_code }}</h4>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <section class="mrt-30">
        <div class="order-section">
            <h2 class="section-title">@lang('Ultimas') <span>@lang('Transações')</span></h2>
            <div class="order-table-area">
                
                    @include($activeTemplate . 'partials.transaction_table', ['transactions' => $transactions])
            </div>
        </div>
    </section>
@endsection
