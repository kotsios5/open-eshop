<?/*<form action="<?=Route::url('default',array('controller'=>'stripe','action'=>'pay','id'=>$product->seotitle))?>" method="post">
  <script
    src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
    data-key="<?=Core::config('payment.stripe_public')?>"
    data-label="<?=__('Pay with Card')?>"
    data-name="<?=$product->title?>"
    data-description="<?=substr(Text::removebbcode($product->description), 0, 30)?>"
    <?if (Auth::instance()->logged_in()):?>
        data-email="<?=Auth::instance()->get_user()->email?>"
    <?endif?>
    data-amount="<?=StripeKO::money_format($product->final_price())?>"
    data-currency="<?=$product->currency?>">
  </script>
</form>*/?>
<button id="stripe_button" class="btn btn-success pay-btn"><?=__('Pay with Card')?></button>