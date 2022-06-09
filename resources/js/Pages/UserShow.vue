<template>
  <Layout>
    <div v-if="!loading">
      <section class="info-users py-4">
        <div class="my-container">
          <div class="row">
            <div class="col-12 col-md-4">
              <figure>
                <img class="restourant-image" :src=user.cover alt="">
              </figure>
            </div>
            <div class="col-12 col-md-8">
              <h1>{{user.name}}</h1>
              <p>{{user.category}}</p>
              <p><i class="bi bi-house-door"></i>Roma</p>
              <p>{{user.telephone_number}}</p>
            </div>
          </div>
        </div>
      </section>

      <ProductList :user="user"/>
      
    </div>
  </Layout>
</template>

<script>
import Layout from "../layouts/Layout.vue";
import ProductList from "../components/ProductsList.vue"
export default {
  components: {
    Layout,
    ProductList
  },
  data(){
    return {
      user: null,
      loading: true,
    }
  },
  beforeMount(){
    axios.get(`/api/users/${ this.$route.params.slug }`)
    .then(res => {
      const { user } = res.data
      this.user = user
      this.loading = false;
    })
    
  },
  
}
</script>

<style lang="scss" scoped>

.info-users{
  border-bottom: 1px solid rgba(0,0,0,.08);
  box-shadow: 0 2px 4px rgb(0 0 0 / 10%);
  .my-container{
    max-width: 1500px;
    margin: 0 auto;
    padding: 0 20px;
    .restourant-image{
      border-radius: 4px;
    }
  }
}

</style>

