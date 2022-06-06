<template>
<<<<<<< HEAD
  <Layout>
    <div>
      <Jumbo/>
      <Selection/>
      <Favourite/>
    </div>
  </Layout>
=======
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
>>>>>>> body---2
</template>

<script>
  // import Users from '../components/UsersIndex.vue'
  import Users from '../components/UsersIndex.vue'
  import Categories from '../components/CategoriesIndex.vue'
  import NewsSection from '../components/NewsSection.vue'
  import WorkWithUs from '../components/WorkWithUs.vue'
  import Layout from '../layouts/Layout.vue'
<<<<<<< HEAD
  import Jumbo from '../components/HomeJumbotron.vue'
  import Selection from '../components/SelectionDeliveboo.vue'
  import Favourite from '../components/FavouriteDishes.vue'

=======
>>>>>>> body---2

  export default {
    components: { 
      Layout,
      Users,
<<<<<<< HEAD
      Jumbo,
      Selection,
      Favourite
=======
      Categories,
      NewsSection,
      WorkWithUs
>>>>>>> body---2
    },
    
  }
</script>

<style lang="scss" scoped>

</style>