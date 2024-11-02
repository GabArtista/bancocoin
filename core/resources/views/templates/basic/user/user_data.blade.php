@extends($activeTemplate . 'layouts.frontend')

@section('content')
    <div class="row justify-content-center ptb-120">
        <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="card custom--card">
                <div class="card-body">
                    <form method="POST" action="{{ route('user.data.submit') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="form-label">@lang('Primeiro Nome')</label>
                                <input class="form-control form--control" name="firstname" type="text" value="{{ old('firstname') }}" required>
                            </div>

                            <div class="form-group col-sm-6">
                                <label class="form-label">@lang('Último Nome')</label>
                                <input class="form-control form--control" name="lastname" type="text" value="{{ old('lastname') }}" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="form-label">@lang('Endereço')</label>
                                <input class="form-control form--control" name="address" type="text" value="{{ old('address') }}">
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="form-label">@lang('Estado')</label>
                                <input class="form-control form--control" name="state" type="text" value="{{ old('state') }}">
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="form-label">@lang('Código Postal(CEP)')</label>
                                <input class="form-control form--control" name="zip" type="text" value="{{ old('zip') }}">
                            </div>

                            <div class="form-group col-sm-6">
                                <label class="form-label">@lang('Cidade')</label>
                                <input class="form-control form--control" name="city" type="text" value="{{ old('city') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn--base w-100" type="submit">
                                @lang('Enviar')
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
