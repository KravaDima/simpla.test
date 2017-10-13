<!-- Отображение вариантов товара радиобаттонами -->
<radio name="variant" class="fn_variant">
	{foreach $product->variants as $v name=foo}
		<input value="{$v->id}" name="variant" type="radio" data-price="{$v->price|convert}" data-stock="{$v->stock}"  {if $v->compare_price > 0} data-cprice="{$v->compare_price|convert}"{/if}{if $v->sku} data-sku="{$v->sku|escape}"{/if} {if $v->units}data-units="{$v->units}"{/if} {if $smarty.foreach.foo.first}checked{/if}>
		{if $v->name}{$v->name|escape} - {$v->price|convert} {$currency->sign|escape} {else}{$product->name|escape} - {$v->price|convert} {$currency->sign|escape} {/if}</br>
	{/foreach}
</radio>