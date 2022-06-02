<template>
  <section class="products py-5">
    <div class="my-container">
      <div class="products-cart row">
        <div class="col-12 col-lg-8">
          <div class="row">
            <div class="product col-12 col-sm-6" v-for="product in user.products" :key="product.id">
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
        
        <div class="col-12 col-lg-4">
          <div class="cart p-3">
            <p class="text-center py-5">Il carrello è vuoto</p>
            <button class="btn btn-secondary btn-block"> Vai al Pagamento</button>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {
props: {
  user: Object,
}
}
</script>

<style lang="scss" scoped>
.products{
  background-color: #F9FAFA;
  .my-container{
    max-width: 1500px;
    margin: 0 auto;
    padding: 0 20px;
    .products-cart{
      
      .cart{
        width: 100%;
        position: sticky;
        top:30px;
        box-shadow: 0 1px 4px rgb(0 0 0 / 20%);
        color:#abadad;
        .btn-secondary{
          background-color: #e2e5e5;
          border:none;
          font-weight: bold;
          color:#abadad;
          cursor: not-allowed;
        }
      }
      .row{
        .product{
          
          .single-card{
            border-radius: 5px;
            margin-bottom: 30px;
            box-shadow: 0 1px 4px rgb(0 0 0 / 20%);
            gap: 20px;
            min-height: 180px;
            cursor: pointer;
            &:hover{
              box-shadow: 0px 17px 43px -5px lightgrey;
            }
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
</style>