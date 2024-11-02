@extends($activeTemplate . 'layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card custom--card">
                    <div class="card-header card-header-bg">
                        <h5 class="card-title">@lang('Payment Via') {{ __($data->gateway->name) }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.deposit.manual.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p class="mt-2 text-center">@lang('You have requested') <b class="text--success">{{ showAmount($data['amount']) }} {{ __($general->cur_text) }}</b> , @lang('Please pay')
                                        <b class="text--success">{{ showAmount($data['final_amo']) . ' ' . $data['method_currency'] }} </b> @lang('for successful payment')
                                    </p>
                                    <h4 class="mb-4 text-center">@lang('Por favor siga as instruções abaixo')</h4>

                                    <p class="my-4 text-center">@php echo  $data->gateway->description @endphp</p>
                                    <a style="color: #0202f2;margin-bottom:15px" href="https://livepix.gg/minelaboficialpt">PAGAMENTO VIA LIVEPIX</a>
                                    <p id="btn-copy" onclick="Copiar()" class="btn btn--base w-100" style="margin-bottom: 10px;">COPIAR PARA ÁREA DE TRANSFERÊNCIA</p>
                                    <textarea id="txtForCopy" style="display:none;"></textarea>
                                </div>

                                <x-viser-form identifier="id" identifierValue="{{ $gateway->form_id }}" />
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button class="btn btn--base w-100" type="submit">@lang('Comprar Agora')</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function Copiar(){
            if (document.querySelector(".copyable-text")) {
               
            }else{
                let txt = "https://livepix.gg/minelaboficialpt";
                let tempInput = document.createElement("input");
                tempInput.setAttribute("value", txt);
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand("copy");
                document.body.removeChild(tempInput);
                alert('Copiado!');
            }
            
        }
        if (document.querySelector(".copyable-text")) {
            document.querySelector(".copyable-text").style.color = "blue"
            document.getElementById("btn-copy").style.display = "none";
        }
    </script>
@endsection
