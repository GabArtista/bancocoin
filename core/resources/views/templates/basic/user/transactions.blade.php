@extends($activeTemplate . 'layouts.master')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="show-filter mb-3 text-end">
                <button class="btn btn--base showFilterBtn btn-sm" type="button"><i class="las la-filter"></i> @lang('Filtro')</button>
            </div>
            <div class="card responsive-filter-card mb-4">
                <div class="card-body">
                    <form action="">
                        <div class="d-flex flex-wrap gap-4">
                            <div class="flex-grow-1">
                                <label>@lang('Número da Transação')</label>
                                <input class="form-control" name="search" type="text" value="{{ request()->search }}">
                            </div>
                            <div class="flex-grow-1">
                                <label>@lang('Código da Moeda')</label>
                                <select class="form-control" name="coin_code">
                                    <option value="">@lang('Qualquer')</option>
                                    @foreach ($coins as $coin)
                                        <option @selected(request()->coin_code == $coin->currency) value="{{ $coin->currency }}">{{ __(keyToTitle($coin->currency)) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex-grow-1">
                                <label>@lang('Tipo')</label>
                                <select class="form-control" name="trx_type">
                                    <option value="">@lang('Tudo')</option>
                                    <option @selected(request()->trx_type == '+') value="+">@lang('Plus')</option>
                                    <option @selected(request()->trx_type == '-') value="-">@lang('Minus')</option>
                                </select>
                            </div>
                            <div class="flex-grow-1">
                                <label>@lang('Remark')</label>
                                <select class="form-control" name="remark">
                                    <option value="">@lang('Qualquer')</option>
                                    @foreach ($remarks as $remark)
                                        <option @selected(request()->remark == $remark->remark) value="{{ $remark->remark }}">{{ __(keyToTitle($remark->remark)) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex-grow-1 align-self-end">
                                <button class="btn btn--base w-100 btn-filter"><i class="las la-filter"></i> @lang('Filtro')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="order-section">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="order-table-area">
                    @include($activeTemplate . 'partials.transaction_table', ['transactions' => $transactions])
                    {{ paginateLinks($transactions) }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <style>
        .btn-filter {
            height: 37px;
            line-height: 0.1;
        }
    </style>
@endpush
