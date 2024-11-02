@php
    $contactCaption = getContent('contact_us.content', true);
    $pages = App\Models\Page::where('is_default', Status::NO)
        ->where('tempname', $activeTemplate)
        ->get();
    $socials = getContent('social_icon.element');
@endphp
<style>
    .site-logo img
    {
        width: 184px !important;
    }
    @media (min-width: 1400px) {
        .container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl 
        {
            max-width: 1430px !important;
        }
        
    }
    @media (min-width: 1200px) {
    .container, .container-lg, .container-md, .container-sm, .container-xl 
    {
        max-width: 1300px !important;
    }
}
</style>
<header class="header-section">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-lg justify-content-between p-0">
                        <a class="site-logo site-title" href="{{ route('home') }}"><img alt="@lang('site-logo')" src="{{ getImage('assets/images/logoIcon/logo.png') }}"></a>

                        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler header-button ml-auto shadow-none" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-lg-center" id="navbarSupportedContent">
                            <ul style="justify-content: center;align-items: center;" class="navbar-nav main-menu ml-auto mr-auto">
                                <li><a class="active" href="{{ route('home') }}">@lang('Institucional')</a></li>

                                @if (!request()->routeIs('user.*') && (!auth()->user() || (!request()->routeIs('ticket.index') && !request()->routeIs('ticket.open') && !request()->routeIs('ticket.view'))))
                                    @if ($pages->count())
                                        @foreach ($pages as $item)
                                            <li><a href="{{ route('pages', ['slug' => $item->slug]) }}">{{ __($item->name) }}</a></li>
                                        @endforeach
                                    @endif
                                    <li><a href="{{ route('plans') }}">@lang('Planos de Mineração')</a></li>
                                    <li style="display:flex; justify-content:center;border: 1px solid white;padding: 5px;border-radius: 5px;height: 35px; width:150px" ><a style="padding:0px " href="{{ route('user.login') }}">GAMES <img src="{{ getImage('assets/images/game-icon.png') }}" width="22px"></a></li>
                                    <li><a href="{{ route('blog') }}">@lang('Notícias')</a></li>
                                    <li><a href="{{ route('contact') }}">@lang('Suporte')</a></li>
                                @else
                                    <li class="menu_has_children"><a href="#0">@lang('Retirada')</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('user.withdraw') }}">@lang('Retirar Agora')</a></li>
                                            <li><a href="{{ route('user.withdraw.history') }}">@lang('Minhas Retiradas')</a></li>
                                        </ul>
                                    </li>
                                    <li style="display:flex; justify-content:center;border: 1px solid white;padding: 5px;border-radius: 5px;height: 35px; width:150px" ><a style="padding:0px " href="{{ route('games') }}">GAMES <img src="{{ getImage('assets/images/game-icon.png') }}" width="22px"></a></li>
                                    <li class="menu_has_children"><a href="#0">@lang('Mineradora')</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('user.plans') }}">@lang('Comece a Minerar')</a></li>
                                            <li><a href="{{ route('user.plans.purchased') }}">@lang('Caminhos de Mineração')</a></li>
                                        </ul>
                                    </li>

                                    @if ($general->referral_system)
                                        <li class="menu_has_children"><a href="#0">@lang('Indicados')</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('user.referral') }}">@lang('Meus Indicados')</a></li>
                                                <li><a href="{{ route('user.referral.log') }}">@lang('Bonus de Referência')</a></li>
                                            </ul>
                                        </li>
                                    @endif

                                    <li class="menu_has_children"><a href="#0">@lang('TIcket de Suporte')</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('ticket.index') }}">@lang('Todos os Tickets')</a></li>
                                            <li><a href="{{ route('ticket.open') }}">@lang('Abrir Ticket')</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu_has_children"><a href="#0">@lang('Minha Conta')</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('user.profile.setting') }}">@lang('Configuração de Perfil')</a></li>
                                            <li><a href="{{ route('user.change.password') }}">@lang('Mudar Senha')</a></li>
                                            <li><a href="{{ route('user.twofactor') }}">@lang('2FA Segurança')</a></li>
                                            <li><a href="{{ route('user.wallets') }}">@lang('Carteiras')</a></li>
                                            <li><a href="{{ route('user.payment.history') }}">@lang('Histórico de Pagamento')</a></li>
                                            <li><a href="{{ route('user.transactions') }}">@lang('Transações')</a></li>
                                            <li><a href="{{ route('user.logout') }}">@lang('Sair')</a></li>
                                        </ul>
                                    </li>
                                @endif

                                <li class="d-flex justify-content-between d-lg-none d-block flex-wrap">
                                    @if ($general->multi_language)
                                        <div class="select-language d-lg-none d-block">
                                            <select class="select-bar nic-select langSel">
                                                @foreach ($language as $lang)
                                                    <option value="{{ $lang->code }}">@lang($lang->name)</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif

                                    @auth
                                        <div class="dashboard-btn d-lg-none d-block">
                                            <a class="cmn-btn" href="{{ route('user.home') }}">@lang('Escritório das Máquinas')</a>
                                            <a class="cmn-btn-danger" href="{{ route('user.logout') }}">@lang('Logout')</a>
                                        </div>
                                    @else
                                        <div class="dashboard-btn d-lg-none d-block">
                                            <a class="cmn-btn" href="{{ route('user.register') }}">@lang('Register')</a>
                                            <a class="cmn-btn" href="{{ route('user.login') }}">@lang('Login')</a>
                                        </div>
                                    @endauth
                                </li>

                            </ul>
                        </div>
                        @if ($general->multi_language)
                            <div class="select-language d-lg-block d-none">
                                <select class="select-bar nic-select langSel">
                                    @foreach ($language as $lang)
                                        <option value="{{ $lang->code }}">@lang($lang->name)</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                        <div class="header-right-info d-lg-block d-none ms-lg-2">
                            <div class="header-action">
                                @guest
                                    <a class="cmn-btn" href="{{ route('user.register') }}">@lang('Cadastro')</a>
                                    <a class="cmn-btn-active" href="{{ route('user.login') }}">@lang('Login')</a>
                                @else
                                    <a class="cmn-btn-active" href="{{ route('user.home') }}">@lang('Monitor de Mineração')</a>
                                @endguest
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
