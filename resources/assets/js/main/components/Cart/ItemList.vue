<template>
	<div>
		<ul class="shopping-cart-items">
			<li class="clearfix">
				<img style="width: 66px;" :src="item.images[0].url" alt="item1"/>
				<span class="item-name">{{item.name}}</span>
				<span class="item-price">{{(item.unit_price * item.qty) | currency}}</span>
				<span class="item-quantity">Quantity: {{item.qty}}</span>
			</li>
		</ul>
	</div>
</template>

<script>
  export default {
    name: "ItemList",
	  props: ['item'],
    filters: {
      currency: function (val) {
        return '$' + (val / 100).toFixed(2)
      }
    }
  }
</script>

<style lang="scss" scoped>
	$main-color: #6394F8;
	$light-text: #ABB0BE;
	
	.shopping-cart-items {
		padding-top: 20px;
		
		li {
			margin-bottom: 18px;
		}
		
		img {
			float: left;
			margin-right: 12px;
		}
		
		.item-name {
			display: block;
			padding-top: 10px;
			font-size: 16px;
		}
		
		.item-price {
			color: $main-color;
			margin-right: 8px;
		}
		
		.item-quantity {
			color: $light-text;
		}
	}
</style>