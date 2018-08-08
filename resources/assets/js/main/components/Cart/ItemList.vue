<template>
	<div>
		<ul class="shopping-cart-items">
			<li class="clearfix">
				<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1"/>
				<span class="item-name">Sony DSC-RX100M III</span>
				<span class="item-price">$849.99</span>
				<span class="item-quantity">Quantity: 01</span>
			</li>
		</ul>
	</div>
</template>

<script>
  export default {
    name: "ItemList"
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