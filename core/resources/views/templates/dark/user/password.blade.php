@extends($activeTemplate . 'layouts.master')

@section('content')
    <div class="card custom--card">
        <div class="card-header">
            <h5 class="card-title">
                @lang('Change Password')
            </h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label class="form-label">@lang('Current Password')</label>
                    <input autocomplete="current-password" class="form--control" name="current_password" required type="password">
                </div>
                <div class="form-group">
                    <label class="form-label">@lang('Password')</label>
                    <div>
                        <input autocomplete="current-password" class="form--control" name="password" required type="password">
                        @if ($general->secure_password)
                            <div class="input-popup">
                                <p class="error lower">@lang('1 small letter minimum')</p>
                                <p class="error capital">@lang('1 capital letter minimum')</p>
                                <p class="error number">@lang('1 number minimum')</p>
                                <p class="error special">@lang('1 special character minimum')</p>
                                <p class="error minimum">@lang('6 character password')</p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">@lang('Confirm Password')</label>
                    <input autocomplete="current-password" class="form--control" name="password_confirmation" required type="password">
                </div>
                <button class="btn--base w-100" type="submit">@lang('Submit')</button>
            </form>
        </div>
    </div>
@endsection
@push('script-lib')
    <script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
@endpush

@push('script')
    @if ($general->secure_password)
        <script>
            (function($) {
                "use strict";
                $('input[name=password]').on('input', function() {
                    secure_password($(this));
                });

                $('[name=password]').focus(function() {
                    $(this).closest('div').addClass('hover-input-popup');
                });

                $('[name=password]').focusout(function() {
                    $(this).closest('div').removeClass('hover-input-popup');
                });
            })(jQuery);
        </script>
    @endif
@endpush
