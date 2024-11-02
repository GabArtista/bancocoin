<ul class="nav nav-tabs pricing-tab-menu">
    @foreach ($miners as $item)
        <li class="nav-item">
            
            <a class="nav-link @if ($loop->first) active show @endif" data-bs-toggle="tab" href="#active_tab{{ $loop->iteration }}">{{ $item->name }}</a>
        </li>
    @endforeach
</ul>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@200..700&display=swap')
.container{
    margin:0 auto !important;
    margin-left:0px !important;
    width:90%;
    display: contents;
}
.line{
    background:white;
    width:2px;
    height:22px;
}
.button-2 {
    color:white;
    font-weight: 900;
   box-shadow: 0 0 .05rem #fff,
            0 0 .05rem #fff,
            0 0 0.5rem #30e209,
            0 0 0.5rem #30e209,
            0 0 0.5rem #30e209,
            inset 0 0 0.5rem #30e209;
  border:1px solid white;
}
.card-item{
    background: #2abd6a;
    box-shadow: 0 0 .03rem #fff,
            0 0 .03rem #fff,
            0 0 0.3rem #30e209,
            0 0 0.3rem #30e209,
            0 0 0.3rem #30e209,
            inset 0 0 0.3rem #30e209;
            border:1px solid white;
}
.card-item-evento{
    background: #512abd;
    box-shadow: 0 0 .03rem #fff,
            0 0 .03rem #fff,
            0 0 0.3rem #30e209,
            0 0 0.3rem #30e209,
            0 0 0.3rem #30e209,
            inset 0 0 0.3rem #30e209;
            border:1px solid white;
}
.card-item-txt{
     font-family: "Bebas Neue", sans-serif;
}
.card-border{
  -webkit-box-shadow: 8px 8px 5px 0px rgba(166,166,166,1);
-moz-box-shadow: 8px 8px 5px 0px rgba(166,166,166,1);
box-shadow: 8px 8px 5px 0px rgba(166,166,166,1);
border-radius:8px;
}
.button-2:hover {
   transition:2s;
   background:#27ae61;
   color:white;
   box-shadow: 1px -1px 46px 0px rgba(38,240,82,0.75);
    -webkit-box-shadow: 1px -1px 46px 0px rgba(38,240,82,0.75);
    -moz-box-shadow: 1px -1px 46px 0px rgba(38,240,82,0.75);
    
}
.fade:not(.show) {
    transition:0.5s !important;
  display:none !important;
}
</style>

    
    @foreach ($miners as $item)
    <div class="tab-content fade @if ($loop->first) active show @endif"  style="display:flex;gap:30px;flex-direction:row;align-items: center; flex-wrap:wrap; margin:auto;justify-content: center; margin-bottom:30px" id="active_tab{{ $loop->iteration }}">
        @foreach ($item->activePlans as $plan)
        <div class="card-border">
            <div class="@if ($item->name == "Bitcoin") card-item @endif @if ($item->name == "ETHEREUM DE EVENTO") card-item-evento @endif " style="display:flex;gap:30px;height:auto;flex-wrap:wrap;flex-direction:column;align-items: center;min-width:350px;max-width:380px;border-radius:8px;padding:0px;padding-bottom:0px;">
               
                @php
                
                $imageNamepng = strtolower(str_replace(' ', '_', $plan->title)) . '.png';
                $imagemUrlpng = asset('core/resources/images/' . $imageNamepng);
                                                    
                $imageNamejpg = strtolower(str_replace(' ', '_', $plan->title)) . '.jpg'; 
                $imagemUrljpg = asset('core/resources/images/' . $imageNamejpg);
                                                 
                // Verificar se a imagem PNG existe
                if (file_exists(public_path('core/resources/images/' . $imageNamepng))) {
                    $imagemUrl = $imagemUrlpng;
                } else {
                    // Caso contrário, usar a imagem JPG
                    $imagemUrl = $imagemUrljpg;
                }
                @endphp
            <img src="{{ $imagemUrl }}" alt="{{ $plan->title }}" width="90%" style="margin-top:10px;border-radius:5px">
            <div style="text-align:center;">
                <h3 style="color:white;" class="sub-title">{{ __($plan->title) }}</h3>
                                    <span class="pricing-border"></span>
                                    <h2 class="title" style="color:white;"><span class="pricing-pre">
                                            {{ $general->cur_sym }}</span>{{ showAmount($plan->price) }}
                                        <span class="pricing-post">/ {{ $plan->period . ' '  . "Dias" }}</span>
                                    </h2>
            </div>                        
                                <div class="card-item-txt" style="width:95%; background: #27ae61; border-radius:8px;padding:5px;">
                                    <ul class="pricing-list" style="display:flex;flex-wrap:wrap;gap:0px 8px 0px 8px">
                                        
                                        @foreach ($plan->features ?? [] as $feature)
                                            <li style="width:49%;color:white;text-align:center;font-weight: 600;">{{ $feature }}</li>
                                            <div class="line"></div>
                                        @endforeach
                                    </ul>
                                    </div>
                                    <script>
                                    window.onload = ()=>{
                                        let linhas = document.querySelectorAll(".line");
                                        linhas[1].style.background = "#27ae61";
                                        linhas[3].style.background = "#27ae61";
                                        linhas[5].style.background = "#27ae61";
                                        linhas[7].style.background = "#27ae61";
                                        linhas[9].style.background = "#27ae61";
                                        linhas[11].style.background = "#27ae61";
                                        linhas[13].style.background = "#27ae61";
                                        linhas[15].style.background = "#27ae61";
                                        linhas[17].style.background = "#27ae61";
                                        linhas[19].style.background = "#27ae61";
                                        linhas[21].style.background = "#27ae61";
                                        linhas[23].style.background = "#27ae61";
                                        linhas[25].style.background = "#27ae61";
                                        linhas[27].style.background = "#27ae61";
                                        linhas[29].style.background = "#27ae61";
                                        linhas[31].style.background = "#27ae61";
                                        linhas[33].style.background = "#27ae61";
                                        linhas[35].style.background = "#27ae61";
                                        linhas[37].style.background = "#27ae61";
                                        linhas[39].style.background = "#27ae61";
                                        linhas[41].style.background = "#27ae61";
                                        linhas[43].style.background = "#27ae61";
                                        linhas[45].style.background = "#27ae61";
                                        linhas[47].style.background = "#27ae61";
                                        linhas[49].style.background = "#27ae61";
                                        linhas[51].style.background = "#27ae61";
                                        linhas[53].style.background = "#27ae61";
                                        linhas[55].style.background = "#27ae61";
                                        linhas[57].style.background = "#27ae61";
                                        linhas[59].style.background = "#27ae61";
                                        
                                    }
                                    </script>
                                        @guest
                                            <a class="button-2" style="width:80%; margin-bottom:20px; text-align:center;padding:12px;border-radius:8px 8px 8px 8px;"  href="{{ route('user.login') }}">@lang('COMPRAR AGORA')</a>
                                        @else
                                            <a class="button-2 buy-plan" style="width:80%; margin-bottom:20px; text-align:center;padding:12px;border-radius:8px 8px 8px 8px;" data-id="{{ $plan->id }}" data-title="{{ $plan->title }}" data-price="{{ showAmount($plan->price) }}" href="javascript:void(0)">@lang('COMPRAR AGORA')</a>
                                        @endguest
                                    
        </div>
    </div>
    @endforeach
    <!--
        <div class="tab-pane fade @if ($loop->first) active show @endif" id="active_tab{{ $loop->iteration }}">
            <div class="row justify-content-center ml-b-30 mrt-20">
                @foreach ($item->activePlans as $plan)
                    <div class="col-lg-3 col-md-6 col-sm-6 mrb-60">
                        <div class="pricing-item text-center">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <div class="pricing-icon">
                                         @php
                                           $imageNamepng = strtolower(str_replace(' ', '_', $plan->title)) . '.png'; 
                                                $imagemUrlpng = asset('core/resources/images/' . $imageNamepng);
                                                
                                                $imageNamejpg = strtolower(str_replace(' ', '_', $plan->title)) . '.jpg'; 
                                                $imagemUrljpg = asset('core/resources/images/' . $imageNamejpg);
                                                
                                                // Verificar se a imagem PNG existe
                                                if (file_exists(public_path('core/resources/images/' . $imageNamepng))) {
                                                    $imagemUrl = $imagemUrlpng;
                                                } else {
                                                    // Caso contrário, usar a imagem JPG
                                                    $imagemUrl = $imagemUrljpg;
                                                }
                                        @endphp
                                    <img src="{{ $imagemUrl }}" alt="{{ $plan->title }}">
                                        <style>
                                            
                                            .pricing-inner {
                                                    padding: 40px 0px !impotant;
                                                
                                            
                                            .pricing-header {
                                                    width: 100%;
                                                }
                                    </style>
                                       <!--<i class="fas fa-microchip" style="font-size:25px;"></i>-->
                                        <!--<i class="fas fa-smile"></i>
                                    </div>
                                    <h3 class="sub-title">{{ __($plan->title) }}</h3>
                                    <span class="pricing-border"></span>
                                    <h2 class="title"><span class="pricing-pre">
                                            {{ $general->cur_sym }}</span>{{ showAmount($plan->price) }}
                                        <span class="pricing-post">/ {{ $plan->period . ' ' . $plan->periodUnitText }}</span>
                                    </h2>
                                </div>
                                <div class="pricing-body">
                                    <ul class="pricing-list">
                                        @foreach ($plan->features ?? [] as $feature)
                                            <li>{{ $feature }}</li>
                                        @endforeach
                                    </ul>
                                    <div class="pricing-btn-area">
                                        @guest
                                            <a class="cmn-btn-active" href="{{ route('user.login') }}">@lang('Comprar agora')</a>
                                        @else
                                            <a class="cmn-btn-active buy-plan" data-id="{{ $plan->id }}" data-title="{{ $plan->title }}" data-price="{{ showAmount($plan->price) }}" href="javascript:void(0)">@lang('Buy Now')</a>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>-->
</div>
    @endforeach
@auth
    @include($activeTemplate . 'partials.buy_plan_modal')
@endauth
