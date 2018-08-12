<template>
	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<div v-if="carts.length">
						<table class="table-shopping-cart">
							<tr class="table-head">
								<th class="column-1"></th>
								<th class="column-2">Product</th>
								<th class="column-3">Price</th>
								<th class="column-4 p-l-70">Quantity</th>
								<th class="column-5">Total</th>
							</tr>
							
							<tr v-for="item in carts" class="table-row">
								<td class="column-1">
									<div class="cart-img-product b-rad-4 o-f-hidden">
										<img src="images/item-10.jpg" alt="IMG-PRODUCT">
									</div>
								</td>
								<td class="column-2">{{ item.name }}</td>
								<td class="column-3">{{ item.unit_price | currency }}</td>
								<td class="column-4">
									<div class="input-group">
										<input style="background-color: #f1f1f1"
										       type="number"
										       min="1"
										       oninput="this.value=(this.value === null) ? 1 : this.value;"
										       class="form-control" :value="item.qty" aria-label="Recipient's username"
										       aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-outline-secondary" @click="incrementToCart(item.id)"
											        type="button">+
											</button>
											<button class="btn btn-outline-secondary" @click="decrementToCart(item.id)"
											        type="button">-
											</button>
											<a class="btn btn-danger" href="#" @click.prevent="deleteFromCart(item.id)">Del</a>
										</div>
									</div>
									<!--<div class="flex-w bo5 of-hidden w-size17">-->
									<!--<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">-->
									<!--<i class="fs-12 fa fa-minus" aria-hidden="true"></i>-->
									<!--</button>-->
									<!---->
									<!--<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="{{ item.qty }}">-->
									<!---->
									<!--<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">-->
									<!--<i class="fs-12 fa fa-plus" aria-hidden="true"></i>-->
									<!--</button>-->
									<!--</div>-->
								</td>
								<td class="column-5">{{ item.total_price | currency}}</td>
							</tr>
						</table>
					</div>
					<div v-else class="text-center">
						<h2>Cart is empty</h2>
						<p>Go on more shopping!!!</p>
					</div>
				
				</div>
			</div>
			
			
			<!-- Total -->
			<div v-if="carts.length" class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>
				
				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>
					
					<span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
				</div>
				
				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>
					
					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any
							help.
						</p>
						
						<span class="s-text19">
							Calculate Shipping
						</span>
						
						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="selection-2" name="country">
								<option>Select a country...</option>
								<option>US</option>
								<option>UK</option>
								<option>Japan</option>
							</select>
						</div>
						
						<div class="size13 bo4 m-b-12">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
						</div>
						
						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
						</div>
						
						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div>
				
				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>
					
					<span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
				</div>
				
				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
  import {mapGetters} from 'vuex'
  
  export default {
    name: "index",
    computed: {
      ...mapGetters({
        carts: 'cart/carts'
      })
    },
    methods: {
      incrementToCart: function (id) {
        this.$store.dispatch('cart/incrementToCart', id);
      },
      decrementToCart: function (id) {
        this.$store.dispatch('cart/decrementToCart', id);
      },
      deleteFromCart: function (id) {
        this.$store.dispatch('cart/deleteFromCart', id);
      }
    },
    filters: {
      currency: function (val) {
        return '$' + (val / 100).toFixed(2)
      }
    }
  }
</script>

<style scoped>

</style>