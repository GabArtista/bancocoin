@extends($activeTemplate . 'layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card custom--card">
            <div class="card-body">
                <div class="form-group">
                    <label class="d-flex justify-content-between">
                        <span>@lang('Link para Divulgar')</span>
                        @if (auth()->user()->referrer)
                            <span class="text-info">@lang('Você foi indicado por:')
                                {{ auth()->user()->referrer->fullname }}</span>
                        @endif
                    </label>
                    <div class="input-group">
                        <input class="form-control form-control-lg referralURL text-muted ps-3" type="text"
                            value="{{ route('home') }}?ref={{ auth()->user()->username }}" readonly>
                        <button class="input-group-text copyBoard" id="copyBoard"><i class="la la-copy"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="order-section pd-t-30 pd-b-80">
    <div class="row justify-content-center ml-b-30">
        <div class="col-lg-12 mrb-30">
            <label>@lang('Meus Indicados')</label>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>@lang('Nome')</th>
                        <th>@lang('Status')</th>
                        <th>@lang('Indicados')</th>
                        <th>@lang('Ações')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user->referrals as $referral)
                        <tr>
                            <td>{{ $referral->fullname }} ({{ $referral->username }})</td>
                            <td>
                                @if($referral->isActive())
                                    <span class="badge bg-success">@lang('Ativo')</span>
                                @else
                                    <span class="badge bg-danger">@lang('Inativo')</span>
                                @endif
                            </td>
                            <td>{{ $referral->referrals_count }}</td> <!-- Mostrar o número de indicados -->
                            <td>
                                <a href="https://wa.me/{{ $referral->mobile }}" target="_blank"
                                    class="btn btn-sm btn-success" @if(strlen($referral->mobile) < 12) disabled @endif>
                                    @lang('WhatsApp')
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/global/css/jquery.treeView.css') }}">
@endpush

@push('script')
    <script src="{{ asset('assets/global/js/jquery.treeView.js') }}"></script>
    <script>
        (function ($) {
            "use strict";

            $('.copyBoard').on('click', function () {
                const copyText = document.querySelector(".referralURL");
                copyText.select();
                copyText.setSelectionRange(0, 99999); // For mobile devices
                document.execCommand("copy");
                notify('success', "@lang('Copiado')");
            });
        })(jQuery);
    </script>
@endpush

@push('style')
    <style>
        .input-group input {
            padding-left: 15px !important;
        }
    </style>
@endpush