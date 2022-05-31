<template>
<Layout>
  <div>
    <Users/>
  </div>
</Layout>
</template>

<script>
  import Users from '../components/UsersIndex.vue'
  import Layout from '../layouts/Layout.vue'
  export default {
    components: { 
      Layout,
      Users
    },
    
  }
</script>

<style lang="scss" scoped>

</style>