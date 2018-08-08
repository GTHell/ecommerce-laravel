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
      addToCart: function(id) {
	      this.$store.dispatch('cart/addToCart', id)
      }
	  }
  }
</script>

<style scoped>

</style>