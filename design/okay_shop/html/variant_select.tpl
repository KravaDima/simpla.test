<!-- Отображение вариантов товара в виде "выпадающий список" -->
<select name="variant" class="fn_variant variant_select">
	{foreach $product->variants as $v}
		<option value="{$v->id}" data-price="{$v->price|convert}" data-stock="{$v->stock}"{if $v->compare_price > 0} data-cprice="{$v->compare_price|convert}"{/if}{if $v->sku} data-sku="{$v->sku|escape}"{/if} {if $v->units}data-units="{$v->units}"{/if}>{if $v->name}{$v->name|escape}{else}{$product->name|escape}{/if}
		</option>
	{/foreach}
</select>