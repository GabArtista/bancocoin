@extends($activeTemplate . 'layouts.frontend')

@section('content')
    @php
        $content = getContent('contact_us.content', true);
        $socials = getContent('social_icon.element');
    @endphp

    <section class="contact py-100 section-bg">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-information">
                        <h3 class="contact-title">{{ __(@$content->data_values->heading) }}</h3>

                        <div class="contact-information-wrapper">
                            <div class="contact-information__item">
                                <div class="contact-information__item-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-information__content">
                                    <h5 class="contact-information__title">@lang('Address')</h5>
                                    <p class="contact-information__desc"> {{ __(@$content->data_values->contact_details) }} </p>
                                </div>
                            </div>
                            <div class="contact-information__item">
                                <div class="contact-information__item-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-information__content">
                                    <h5 class="contact-information__title">@lang('Email Address')</h5>
                                    <p class="contact-information__desc"><a href="mailto:{{ @$content->data_values->email_address }}">{{ @$content->data_values->email_address }}</a> </p>
                                </div>
                            </div>
                            <div class="contact-information__item">
                                <div class="contact-information__item-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-information__content">
                                    <h5 class="contact-information__title"> @lang('Phone Number') </h5>
                                    <p class="contact-information__desc"><a href="tel:{{ @$content->data_values->contact_number }}">{{ @$content->data_values->contact_number }}</a></p>
                                </div>
                            </div>
                            @if (count($socials))
                                <div class="contact-information__item">
                                    <h6 class="follow-title me-2 mb-2 w-100"> @lang('Follow Us On')</h6>
                                    <ul class="social-list">
                                        @foreach ($socials as $item)
                                            <li class="social-list__item"><a class="social-list__link" href="{{ $item->data_values->url }}" target="_blank">@php echo $item->data_values->social_icon @endphp</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 ps-lg-5">
                    <div class="contact-form">
                        <form action="#" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-xl-6 @if (auth()->user()) d-none @endif">
                                    <div class="form-group">
                                        <input @if (auth()->user()) readonly @endif class="form--control" name="name" placeholder="@lang('Your Name')" required type="text" value="{{ auth()->user() ? auth()->user()->fullname : old('name') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6 @if (auth()->user()) d-none @endif">
                                    <div class="form-group">
                                        <input @if (auth()->user()) readonly @endif class="form--control" name="email" placeholder="@lang('Your Email')" required type="text" value="{{ auth()->user() ? auth()->user()->email : old('email') }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form--control" name="subject" placeholder="@lang('Subject')" required type="text" value="{{ old('subject') }}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form--control" name="message" placeholder="@lang('Your Message')" required>{{ old('message') }}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <x-captcha />
                                </div>

                                <div class="col-12">
                                    <button class="btn--base w-100" id="recaptcha" type="submit">@lang('Submit')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($sections->secs != null)
        @foreach (json_decode($sections->secs) as $sec)
            @include($activeTemplate . 'sections.' . $sec)
        @endforeach
    @endif
@endsection
