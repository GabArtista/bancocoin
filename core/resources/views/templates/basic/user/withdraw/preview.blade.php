@extends($activeTemplate . 'layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item rounded-0 d-flex justify-content-between">
                    <span class="font-weight-bold">@lang('Requested Amount')</span>
                    <span>{{ showAmount($withdraw->amount, 8, exceptZeros:true) }} {{ $withdraw->userCoinBalance->miner->coin_code }}</span>
                </li>
                <li class="list-group-item rounded-0 d-flex justify-content-between">
                    <span class="font-weight-bold">@lang('Transaction Id')</span>
                    <span>{{ showAmount($withdraw->amount, 8, exceptZeros:true) }} {{ $withdraw->trx }}</span>
                </li>
                <li class="list-group-item rounded-0 d-flex justify-content-between">
                    <span class="font-weight-bold">@lang('Remaining Balance')</span>
                    <span>{{ showAmount($withdraw->userCoinBalance->balance, 8, exceptZeros:true) }} {{ $withdraw->userCoinBalance->miner->coin_code }}</span>
                </li>
                <li class="list-group-item rounded-0 d-flex justify-content-between">
                    <span class="font-weight-bold">@lang('Status')</span>
                    <span>
                        @php
                            echo $withdraw->statusBadge;
                        @endphp
                    </span>
                </li>
            </ul>
        </div>
    </div>
@endsection
