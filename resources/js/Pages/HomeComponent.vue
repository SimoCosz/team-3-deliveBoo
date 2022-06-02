<template>
  <Layout>
    <div>
      <Jumbo/>
      <Selection/>
    </div>
  </Layout>
</template>

<script>
  import Users from '../components/UsersIndex.vue'
  import Layout from '../layouts/Layout.vue'
  import Jumbo from '../components/HomeJumbotron.vue'
  import Selection from '../components/SelectionDeliveboo.vue'


  export default {
    components: { 
      Layout,
      Users,
      Jumbo,
      Selection
    },
    
  }
</script>

<style lang="scss" scoped>

</style>