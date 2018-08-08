<template>
	<div class="shopping-cart-header">
		<i class="fas fa-shopping-cart cart-icon"></i><span class="badge">3</span>
		<div class="shopping-cart-total">
			<span class="lighter-text">Total:</span>
			<span class="main-color-text">$2,229.97</span>
		</div>
	</div>
</template>

<script>
  export default {
    name: "Header"
  }
</script>

<style lang="scss" scoped>
	.shopping-cart-header {
		border-bottom: 1px solid #E8E8E8;
		padding-bottom: 10px;
		
		.shopping-cart-total {
			float: right;
		}
	}
</style>