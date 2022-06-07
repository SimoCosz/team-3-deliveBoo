<template>
  <Layout>
    <!-- <div>
      <Jumbo/>
      <Selection/>
      <Favourite/>
    </div> -->
    <!-- <div>
      <Users/>
    </div> -->
    <!-- <div>
      <Categories/>
    </div> -->
    <div>
      <NewsSection/>
    </div>
    <!-- <div>
      <WorkWithUs/>
    </div> -->
  </Layout>
</template>

<script>
  // import Users from '../components/UsersIndex.vue'
  import Users from '../components/UsersIndex.vue'
  import Categories from '../components/CategoriesIndex.vue'
  import NewsSection from '../components/NewsSection.vue'
  import WorkWithUs from '../components/WorkWithUs.vue'
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
      Favourite,
      Categories,
      NewsSection,
      WorkWithUs
    },
    
  }
</script>

<style lang="scss" scoped>

</style>