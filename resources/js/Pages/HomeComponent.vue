<template>
<Layout>
  <!-- <div>
    <Users/>
  </div> -->
  <div>
    <Categories/>
  </div>
  <div>
    <NewsSection/>
  </div>
  <div>
    <WorkWithUs/>
  </div>
</Layout>
</template>

<script>
  // import Users from '../components/UsersIndex.vue'
  import Users from '../components/UsersIndex.vue'
  import Categories from '../components/CategoriesIndex.vue'
  import NewsSection from '../components/NewsSection.vue'
  import WorkWithUs from '../components/WorkWithUs.vue'
  import Layout from '../layouts/Layout.vue'

  export default {
    components: { 
      Layout,
      Users,
      Categories,
      NewsSection,
      WorkWithUs
    },
    
  }
</script>

<style lang="scss" scoped>

</style>