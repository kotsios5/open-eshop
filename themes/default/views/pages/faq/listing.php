<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="page-header">
    <h1><?=__('FAQ')?></h1>
</div>

<?if(count($faqs)):?>
<ol class="faq-list">
    <?foreach($faqs as $faq ):?>
    <li>
        <h4>
            <a title="<?= $faq->title;?>" href="<?=Route::url('faq', array('seotitle'=>$faq->seotitle))?>"> <?=$faq->title; ?></a>
        </h4>            
        <p><?=Text::removebbcode($faq->description)?></p>
    </li>
    <?endforeach?>
</ol>
<?else:?>
<!-- Case when we dont have ads for specific category / location -->
    <div class="page-header">
       <h3><?=__('We do not have any faq')?></h3>
    </div>
<?endif?>