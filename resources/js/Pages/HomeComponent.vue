<template>
  <Layout>
    <div>
      <Jumbo/>
    </div>
  </Layout>
</template>

<script>
  import Users from '../components/UsersIndex.vue'
  import Layout from '../layouts/Layout.vue'
  import Jumbo from '../components/HomeJumbotron.vue'


  export default {
    components: { 
      Layout,
      Users,
      Jumbo
    },
    
  }
</script>

<style lang="scss" scoped>

</style>