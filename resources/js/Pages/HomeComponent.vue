<template>
  <Layout>
    <div>
      <Jumbo/>
      <Selection/>
      <Favourite/>
    </div>
  </Layout>
</template>

<script>
  import Users from '../components/UsersIndex.vue'
  import Layout from '../layouts/Layout.vue'
  import Jumbo from '../components/HomeJumbotron.vue'
  import Selection from '../components/SelectionDeliveboo.vue'
  import Favourite from '../components/FavouriteDishes.vue'


  export default {
    components: { 
      Layout,
      Users,
      Jumbo,
      Selection,
      Favourite
    },
    
  }
</script>

<style lang="scss" scoped>

</style>