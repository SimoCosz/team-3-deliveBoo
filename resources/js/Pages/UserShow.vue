<template>
  <Layout>
    <div v-if="!loading">
      <section class="info-users py-4">
        <div class="my-container">
          <div class="row">
            <div class="col-12 col-md-4">
              <figure>
                <img :src=user.cover alt="">
              </figure>
            </div>
            <div class="col-12 col-md-8">
              <h1>{{user.name}}</h1>
              <p>{{user.category}}</p>
              <p>{{user.city}}</p>
              <p>{{user.telephone_number}}</p>
            </div>
          </div>
        </div>
      </section>


      <section class="products py-5">
        <div class="my-container">
          <div class="my-card-wrapper">
            <div class="row">
              <!-- CARDS -->
              <div class="product col-12 col-sm-6 col-lg-4" v-for="product in user.products" :key="product.id">
                <div class="d-flex align-items-center single-card p-3">
                  <div class="product_info flex-grow-1">
                    <h5 class="title">{{product.name}}</h5>
                    <p class="description">{{product.description}}</p>
                    <p>{{product.price}} &#8364;</p>
                  </div>
                  <div>
                    <div class="image" :style="{ backgroundImage: `url(${product.cover})` }"></div>
                  </div>
                </div>
              </div>
             </div>
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
.info-users{
  border-bottom: 1px solid rgba(0,0,0,.08);
  box-shadow: 0 2px 4px rgb(0 0 0 / 20%);
  .my-container{
    max-width: 1500px;
    margin: 0 auto;
    .my-card-wrapper{
      .my-card{
        border: 1px solid black;
      }
    }
  }
}

.products{
  .my-container{
    max-width: 1500px;
    margin: 0 auto;
    .my-card-wrapper{
      .row{
        .product{
          
          .single-card{
            border-radius: 5px;
            margin-bottom: 30px;
            box-shadow: 0 1px 4px rgb(0 0 0 / 20%);
            gap: 20px;
            min-height: 180px;
            .product_info{
              .title{
                font-weight: bold;
                margin-bottom: 0.2rem;
              }
              .description{
              -webkit-line-clamp: 2;
              display: -webkit-box;
              -webkit-box-orient: vertical;
              overflow: hidden;
              font-size: 0.9rem;
              color: #585c5c;
              margin-bottom:0.2rem;
            }
            }
            .image{
              width: 100px;
              height: 100px;
              background-size: cover;
              background-position: center;
              border-radius:4px ;
            }
          } 
        }
      }
    }
    
      
    
  }

}
  
    

</style>>

