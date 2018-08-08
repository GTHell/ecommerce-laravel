<template>
	<div>
		<div class="btn-group">
			<button type="button" data-toggle="dropdown" aria-haspopup="true"
			        aria-expanded="false">
				<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
			</button>
			<div class="dropdown-menu p-0 dropdown-menu-right" aria-labelledby="dropdownMenuOffset">
				<div class="shopping-cart">
					<div v-if="$store.state.cart.length == 0">
						<p>Cart is empty</p>
					</div>
					<div v-else>
						<cart-header></cart-header>
						<cart-items></cart-items>
						<a href="#" class="btn btn-primary btn-block">Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
  import Header from './Header'
  import List from './ItemList'
  
  export default {
    name: "index",
    components: {
      'cart-header': Header,
	    'cart-items': List
    }
  }
</script>

<style lnag="scss" scoped>
	.shopping-cart {
		margin: 20px 0;
		float: right;
		background: white;
		width: 320px;
		position: relative;
		border-radius: 3px;
		padding: 0 20px;
	}
</style>