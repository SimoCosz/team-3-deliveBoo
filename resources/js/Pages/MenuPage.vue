<template>
<LayoutAlternative>
  <div v-if="!loading">
    <section class="info-users py-4">
      <div class="my-container">
        <div class="row">
          <div class="col-12 col-md-4">
            <figure>
              <img class="restourant-image" v-if="user.cover != null" :src='user.cover' alt="">
              <!-- <img class="restourant-image" v-else :src='require('../../../public/img/img-default-img.png')' alt=""> -->
            </figure>
          </div>
          <div class="col-12 col-md-8">
            <h1>{{user.name}}</h1>
            <p>{{user.category}}</p>
            <div class="d-flex align-items-center">
              <i class="bi bi-house-door"></i>
              <span>{{user.city}}, {{user.address}}</span>
            </div>
            <div class="d-flex align-items-center">
              <i class="bi bi-telephone"></i>
              <span>{{user.telephone_number}}</span>
            </div>
            <div class="d-flex align-items-center">
              <i class="bi bi-envelope"></i>
              <span>{{user.email}}</span>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <ProductList :user="user"/>

  </div>
</LayoutAlternative>
</template>

<script>
import LayoutAlternative from '../layouts/LayoutAlternative.vue'
import ProductList from '../components/ProductList.vue'

  export default {
    components:{
      LayoutAlternative,
      ProductList
    },

    data(){
      return {
        user: {},
        loading: false
      }
    },
    
    methods: {
      fetchProducts(){
        axios.get(`/api/users/${this.$route.params.slug}`)
        .then((res) => {
            const { users } = res.data;
            this.user = users;
        })

      }
    },

    mounted() {
      this.fetchProducts()
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

i{
  font-size:20px;
  padding-right: 10px;
  color: #00C2B3;
}
i::before{
  line-height: 32px;
}
</style>