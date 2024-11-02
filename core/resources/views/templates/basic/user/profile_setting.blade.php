@extends($activeTemplate . 'layouts.master')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="profile-area">
                <form action="" class="profile-form" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="InputFirstname">@lang('Primeiro Nome')</label>
                                <input class="form-control" id="InputFirstname" name="firstname" placeholder="@lang('First Name')" required type="text" value="{{ $user->firstname }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lastname">@lang('Sobrenome')</label>
                                <input class="form-control" id="lastname" name="lastname" placeholder="@lang('Last Name')" required type="text" value="{{ $user->lastname }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>@lang('Usuário')</label>
                                <input class="form-control" placeholder="Username" readonly type="text" value="{{ $user->username }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">@lang('Endereço de Email')</label>
                                <input class="form-control" id="email" name="email" placeholder="@lang('E-mail Address')" readonly type="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input id="track" name="country_code" type="hidden">
                                <label for="phone">@lang('Whatsapp')</label>
                            </div>
                            <input class="form-control" id="phone" name="mobile" placeholder="@lang('Your Contact Number')" readonly type="tel" value="{{ $user->mobile }}">
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="country">@lang('País')</label>
                                <input class="form-control" id="country" readonly type="text" value="{{ @$user->address->country }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="address">@lang('espaço em branco')</label>
                                <input class="form-control" id="address" name="address" placeholder="@lang('Address')" required="" type="text" value="{{ @$user->address->address }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="state">@lang('espaço em branco')</label>
                                <input class="form-control" id="state" name="state" placeholder="@lang('state')" required="" type="text" value="{{ @$user->address->state }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="zip">@lang('espaço em branco')</label>
                                <input class="form-control" id="zip" name="zip" placeholder="@lang('Zip Code')" required="" type="text" value="{{ @$user->address->zip }}">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="city">@lang('espaço em branco')</label>
                                <input class="form-control" id="city" name="city" placeholder="@lang('City')" required="" type="text" value="{{ @$user->address->city }}">
                            </div>
                        </div>

                    </div>
                    <button class="submit-btn" type="submit">@lang('Enviar')</button>
                </form>
            </div>
        </div>
    </div>
@endsection
