<template>
  <section class="products py-5">
    <div class="my-container">
      <div class="products-cart row">
        <div class="col-12 col-lg-8">
          <div class="row">
            <div class="product col-12 col-sm-6" v-for="product in user.products" :key="product.id" @click="showModal(product)">
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

    <!-- Transition ancora non funzionante -->
    <Transition name="slide-fade" appear>
    <div v-if="show">
      <div class="my-modal" @click="show=false">
        <div class="product-show" @click.stop>
          <i class="bi bi-x" @click="show=false"></i>
          <img class="product-show_img" :src=selectedProduct.cover alt="">
          <div class="product-show_info p-4">
            <h4 class="title">{{selectedProduct.name}}</h4>
            <p class="description">{{selectedProduct.description}}</p>
          </div>
          <div class="product-show-add p-4">
            <button class="btn btn-success btn-block">
              Aggiungi per &#8364;{{selectedProduct.price}}
            </button>
          </div>
        </div>
      </div>
    </div>
    </Transition>
  </section>
</template>

<script>
export default {
props: {
  user: Object,
},
data(){
  return {
    show:false,
    selectedProduct:null,
  }
},
methods : {
  showModal: function(product) {
    this.show=true;
    this.selectedProduct=product;
    console.log(product)
  }
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



.my-modal{
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
  background-color: rgba($color: #000000, $alpha: 0.5);
  overflow: hidden;
  .product-show{
    background-color: white;
    position: absolute;
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);
    max-width: 500px;
    max-height: 800px;
    .product-show_img{
      max-width: 100%;
    }
    .product-show-add{
      box-shadow: 0 1px 4px rgb(0 0 0 / 20%);
    }

    .bi.bi-x{
      color:#00CCBC;
      position: absolute;
      top:-10px;
      right: 10px;
      font-size: 40px;
      font-weight: bold;
      &::before{
        background: white;
        border-radius: 100%;
        cursor:pointer;
      }

    }

  }
}

.slide-fade-enter-active,.slide-fade-leave-active {
  transition: opacity 0.3s ease;
}


.slide-fade-enter-from,
.slide-fade-leave-to {
  opacity: 0;
}
</style>