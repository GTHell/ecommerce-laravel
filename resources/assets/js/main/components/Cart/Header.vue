<template>
	<div class="shopping-cart-header">
		<i class="fas fa-shopping-cart cart-icon"></i><span class="badge">{{ totalUnit }}</span>
		<div class="shopping-cart-total">
			<span class="lighter-text">Total:</span>
			<span class="main-color-text">${{totalPrice/100}}</span>
		</div>
	</div>
</template>

<script>
	import {mapGetters} from 'vuex';
  export default {
    name: "Header",
	  // props: ['total-price'],
	  computed: {
		  ...mapGetters({
			  items: 'cart/carts'
		  }),
		  totalUnit: function() {
		    return this.items.length;
		  },
      totalPrice: function() {
		    // if(this.items.length === 1)
		      // return this.items[0].total_price
	      // var total = this.items[0]
	      // var value = this.items.reduce((total, item) => (total += item.total_price));
	      var value = _.sumBy(this.items, (val) => (val.total_price))
	      // console.log(this.items)
      
        return value;
      }
	  }
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