<template>
  <LayoutAlternative>
    <div>
      <Jumbo/>
      <Selection/>
      <Favourite/>
    </div>
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
    
  </LayoutAlternative>
</template>

<script>
  // import Users from '../components/UsersIndex.vue'
  import Users from '../components/UsersIndex.vue'
  import Categories from '../components/CategoriesIndex.vue'
  import NewsSection from '../components/NewsSection.vue'
  import WorkWithUs from '../components/WorkWithUs.vue'
  import LayoutAlternative from '../layouts/LayoutAlternative.vue'
  import Jumbo from '../components/HomeJumbotron.vue'
  import Selection from '../components/SelectionDeliveboo.vue'
  import Favourite from '../components/FavouriteDishes.vue'
  import Payments from '../components/Payments.vue'


  export default {
    components: { 
      LayoutAlternative,
      Users,
      Jumbo,
      Selection,
      Favourite,
      Categories,
      NewsSection,
      WorkWithUs,
      Payments
    },
    
  }
</script>

<style lang="scss" scoped>

</style>