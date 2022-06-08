<template>
  <section class="products py-5">
    <!-- LISTA PRODOTTI -->
    <div class="my-container">
      <div class="products-cart row">
        <div class="col-12 col-lg-8">
          <div class="row">
            <div class="product col-12 col-md-6" v-for="product in user.products" :key="product.id" @click="showModal(product)">
              <div class="d-flex align-items-center single-card p-3">
                <div class="product_info flex-grow-1">
                  <h5 class="title">{{product.name}}</h5>
                  <p class="description">{{product.description}}</p>
                  <p class="r-color">{{product.price}} &#8364;</p>
                </div>
                <div>
                  <div class="image" :style="{ backgroundImage: `url(${product.cover})` }"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- CART -->
        <div class="col-12 col-lg-4">
          <div class="cart p-3">
            <div class="text-dark" v-if="localCartShop">
              <h4 class="font-weight-bold">I tuoi ordini</h4>
              <div v-for="(element, i) in localCartShop" :key="element.id">
                <div class="d-flex justify-content-between">
                  <span>{{element.name}}</span>
                  <div class="d-flex justify-content-center">
                    <i class="bi bi-dash-circle primary-color" v-if="element.quantity > 1" @click="decrementCartQuantity(element)"></i>
                    <span class="quantity px-2">{{element.quantity}}</span>
                    <i class="bi bi-plus-circle primary-color" @click="incrementCartQuantity(element)"></i>
                    <span class="px-2">{{element.price*element.quantity}} &#8364;</span>
                    <button @click="deleteDish(i)">Delete</button>
                  </div>
                </div>
              </div>
              <div class="total d-flex justify-content-between mt-3">
                <h5 class="font-weight-bold">Totale:</h5>
                <h5 class="font-weight-bold">{{totalPrice}}&#8364;</h5>
                <button @click="deleteAll()">Delete All</button>
              </div>
               <button class="btn btn-bg-color btn-block"> Vai al Pagamento</button>
            </div>

            <div v-else>
              <p class="text-center py-5">Il carrello è vuoto</p>
              <button class="btn btn-secondary btn-block"> Vai al Pagamento</button>
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- MODALE DEL PRODOTTO -->
    <!--FIXME: Transition ancora non funzionante -->
    <Transition name="slide-fade" appear>
    <div v-if="show">
      <div class="my-modal" @click="closePlateInfo()">
        <div class="product-show" @click.stop>
          <i class="bi bi-x" @click="closePlateInfo()"></i>
          <img class="product-show_img" :src=selectedProduct.cover alt="">
          <div class="product-show_info p-4">
            <h4 class="title">{{selectedProduct.name}}</h4>
            <p class="description">{{selectedProduct.description}}</p>
          </div>
          <div class="product-show-add p-4">
            <div class="d-flex justify-content-center pb-3">
              <i class="bi bi-dash-circle" @click="decrementQuantity()"></i>
              <span class="quantity px-2">{{quantity}}</span>
              <i class="bi bi-plus-circle" @click="incrementQuantity()"></i>
            </div>
            
            <button class="btn btn-block btn-bg-color" @click="addToCart(selectedProduct)">
              Aggiungi per &#8364;{{selectedProduct.price*quantity}} &euro;
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
    show: false,
    selectedProduct: false,
    activeElement: undefined,
    cartShop:[],
    restaurant: [],
    menuPlates: [],
    ingredients: [],
    logo: require('/public/img/img-default-img.png'),
    authUser: window.authUser,
    quantity: 1,
    totalPrice: 0,
    csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),

    // Cart shop del local storage
    localCartShop: JSON.parse(localStorage.getItem('cartShop')),
  }
},

methods : {
  showModal: function(product) {
    this.show = true;
    this.selectedProduct = product;
  },

  totalPriceFunction() {
    let elementTotPrice = 0;
    for (let index = 0; index < this.localCartShop.length; index++) {
      elementTotPrice = this.localCartShop[index].price * this.localCartShop[index].quantity;
      this.totalPrice += elementTotPrice;
    } 
    localStorage.setItem("cartShop", JSON.stringify(this.localCartShop)); 

    // window.location.reload();
    console.log(this.totalPrice);
    return this.totalPrice


  },

  fetchRestaurantInfo(){
    axios.get(`/app/Http/Controllers/Api/UserController.php/$(this.$route.params.id}`)
    .then( res => {
      this.restaurant = res.data.user[0];
      this.menuPlates = res.data.user_plates;
    })
    .catch( err => {
      console.warn(err);
    })
  },
  // a questa funzione viene passato come parametro l'indice del piatto cliccato,
  // ed assegna all'array ingredients i corrispettivi ingredienti
  viewPlate(i){
    this.activeElement = i;
    this.ingredients = this.menuPlates[i].ingredients.split(',');
  },
  closePlateInfo(){
    this.show = false;
    this.quantity = 1;
  },

  deleteDish(el) {
    this.localCartShop.splice(el, 1);

    localStorage.setItem("cartShop", JSON.stringify(this.localCartShop));
  },

  deleteAll() {
    this.localCartShop = null;

    localStorage.setItem("cartShop", JSON.stringify(this.localCartShop)); 
  },

  // Per aumentare o diminuire le quantità nel carrello
  incrementCartQuantity(el){
    this.localCartShop[el.quantity++];

    localStorage.setItem("cartShop", JSON.stringify(this.localCartShop));
  },

  decrementCartQuantity(el){
    // if(this.localCartShop[el.quantity] >= 1) {
      this.localCartShop[el.quantity--];

      localStorage.setItem("cartShop", JSON.stringify(this.localCartShop));
    // }
  },

  // Per aumentare o diminuire le quantità nella finestra del prodotto
  incrementQuantity(){
    this.quantity++;
  },

  decrementQuantity() {
    if(this.quantity > 1) {
      this.quantity--;
    }
  },

  addToCart(plateObject) {
    if(typeof(Storage) !== undefined) {
      const {id, name, cover, price} = plateObject;

      const plate = {
        id: id,
        name: name,
        cover: cover,
        price: price,
        totPrice: 0,
        quantity: this.quantity
      };

      if(JSON.parse(localStorage.getItem('cartShop')) === null) {
        this.cartShop.push(plate);
        localStorage.setItem('cartShop', JSON.stringify(this.cartShop));
        window.location.reload();
      } else {
        const localItems = JSON.parse(localStorage.getItem('cartShop'));
        localItems.map(data=>{
          if(plate.id == data.id) {
            plate.quantity += data.quantity;
            plate.totPrice = plate.price * plate.quantity;
          } else {
            this.cartShop.push(data);
          }
        });

        this.cartShop.push(plate);
        this.totalPriceFunction();
        window.location.reload();
        localStorage.setItem('cartShop', JSON.stringify(this.cartShop));
      }
    } else {
      alert('Storage non funziona nel tuo browser');
    }
  }
},

mounted() {
  this.fetchRestaurantInfo();
  // console.log(this.localCartShop[1]);
  // this.totalPriceFunction();
}
}
</script>

<style lang="scss" scoped>

.btn-bg-color{
  background-color:  #00C2B3;
  color: white;
  font-weight: 700;
}

.r-color{
  color: #FB5058;
}

.primary-color{
  color: #14AA9E!important;
}

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
        .bi.bi-dash-circle,.bi.bi-plus-circle{
          &::before{
            line-height: 23.05px;
            cursor:pointer;
          }
        }
      }

      .row{
        .product{
          .single-card{
            border-radius: 5px;
            margin-bottom: 30px;
            box-shadow: 0 1px 4px rgb(0 0 0 / 20%);
            gap: 20px;
            min-height: 150px;
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
      .m-gap{
        gap: 20px;
      }
      .bi.bi-plus-circle, .bi.bi-dash-circle{
        color:#00CCBC;
        font-size: 24px;
        font-weight: bold;
        &::before{
          cursor: pointer;
          line-height: 48px;
        }
      }
      .quantity{
       font-size: 30px 
      }
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
  transition: opacity 0.1s ease;
}


.slide-fade-enter-from,
.slide-fade-leave-to {
  opacity: 0;
}
</style>