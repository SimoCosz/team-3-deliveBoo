<template>
  <Layout>
    <div v-if="!loading">
      <section class="header-show">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-4">
              <figure>
                <img :src=user.cover alt="">
              </figure>
            </div>
            <div class="col-12 col-md-8">
              <h1>{{user.name}}</h1>
              <p>{{user.city}}</p>
              <p>{{user.telephone_number}}</p>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div v-for="product in user.products" :key="product.id">
            {{product.name}}
          </div>
        </div>
      </section>
    </div>
  </Layout>
</template>

<script>
import Layout from "../layouts/Layout.vue";
export default {
  components: {
    Layout
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
      console.log(res.data)
      const { user } = res.data
      this.user = user
      this.loading = false;
    })
    
  },
  mounted(){
    console.log(this.user)
  }
}
</script>

<style lang="scss" scoped>

</style>>

