 <!-- Modal -->
 <div class="modal fade" id="buyPlanModal" role="dialog">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">@lang('Compre Suas Máquinas')</h5>
                 <button class="close" data-bs-dismiss="modal" type="button" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="{{ route('user.plan.order') }}" method="POST">
                     @csrf
                     <input name="plan_id" type="hidden">

                     <div class="form-row">
                         <div class="form-group col-12">
                             <label>@lang('Título')</label>
                             <input class="form-control plan-title" type="text" readonly>
                         </div>

                         <div class="form-group col-12">
                             <label>@lang('Preço')</label>
                             <div class="input-group">
                                 <span class="input-group-text">{{ $general->cur_sym }}</span>
                                 <input class="form-control plan-price" type="text" readonly>
                             </div>
                         </div>

                         <div class="form-group col-md-12">
                             <label for="paymentMethod">@lang('Sistema de Pagamento')</label>
                             <select class="form-control nic-select" id="paymentMethod" name="payment_method">
                                 <option value="" selected disabled>@lang('Selecione Um')</option>
                                 <option value="1">@lang('Do Saldo')</option>
                                 <option value="2">@lang('Pagamento Direto')</option>
                             </select>
                         </div>

                         <div class="form-group col-md-12">
                             <button class="submit-btn btn-block" type="submit">@lang('Compre Agora')</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 @push('script')
     <script>
         'use strict';
         (function($) {

             $(document).on('click', '.buy-plan', function() {
                 var modal = $('#buyPlanModal');
                 modal.find('input[name=plan_id]').val($(this).data('id'));
                 modal.find('.plan-title').val($(this).data('title'));
                 modal.find('.plan-price').val($(this).data('price'));
                 modal.modal('show');
             });
         })(jQuery);
     </script>
 @endpush
