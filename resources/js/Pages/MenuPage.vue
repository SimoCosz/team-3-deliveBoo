<template>
<div class="container">
  <div v-for="product in user.products" :key="product.id">
    {{product.name}}
  </div>
</div>
</template>

<script>
  export default {
    data(){
      return {
        user: null
      }
    },
    
    methods: {
      fetchProducts(){
        axios.get(`/api/users/${this.$route.params.slug}`)
        .then((res) => {
            const { users } = res.data;
            this.user = users;
        })
        .catch((err) => {
          console.warn(err);
            this.$router.push("/404");
        });
      }
    },

    mounted() {
      this.fetchProducts()
    },
  }
</script>

<style lang="scss" scoped>

</style>