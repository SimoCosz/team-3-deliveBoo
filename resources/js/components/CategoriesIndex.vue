<template>
  <div>
CIAO
      <div v-for="category in categories" :key="category.id">
      {{category.name}}
      </div>

  </div>
</template>

<script>
  export default {
    data() {
      return{
        categories: []
      }
    },

    mounted() {
        axios.get('/api/categories')
        .then(res=>{
          const {categories} = res.data
          this.categories = categories
        })
    },
  }
</script>

<style lang="scss" scoped>

</style>