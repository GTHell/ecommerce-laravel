<template>
	<div @click="addToCart(pid)">
		<slot></slot>
	</div>
</template>

<script>
  export default {
    name: "AddToCardWrapper",
	  props: ['pid'],
	  methods: {
      addToCart: function(id, qty=1) {
	      this.$store.dispatch('cart/addToCart', {id, qty})
      }
	  }
  }
</script>

<style scoped>

</style>