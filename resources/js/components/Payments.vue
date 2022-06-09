<template>
<div>
  <HeaderComponent />
  <section class="payment_section container">
    <div class="personal_info">
      <h1>Nome ristorante</h1>
      <p>Tempo di consegna: 15-20 minuti</p>
      <form action="">
        <h3>
          Dati personali
        </h3>
        <div class="personal_info_input">
          <span>
            Nome *
          </span>
          <input placeholder="Es: Mario, Giulia..." type="text" minlength="3" name="name" required>
        </div>
        <div class="personal_info_input">
          <span>
            Cognome*
          </span>
          <input placeholder="Es: Maldini, Mattarella..." type="text" minlength="3" name="lastname" required>
        </div>
        <div class="personal_info_input">
          <span>
            Indirizzo*
          </span>
          <input placeholder="Es: Via Garibaldi 95" type="text" minlength="5" name="address" required>
        </div>
        <div class="personal_info_input">
          <span>
            Città*
          </span>
          <input placeholder="Es: Roma" type="text" minlength="3" name="address" required>
        </div>
        <button>
          Vai al pagamento
        </button>
      </form>
    </div>
    <div class="cart_summary">
      <h1>Riepilogo dell'ordine</h1>
      <ul class="cart_items_badges">
        <li class="cart_item_badge">
          Pizza
        </li>
        <li class="cart_item_badge">
          Coca-Cola
        </li>
      </ul>
      <ul class="cart_items_list">
        <li class="cart_item_list">
          <span class="cart_item_list_quantity">1x</span>
          <span class="cart_item_list_name">Pizza</span>
          <span class="cart_item_list_price">€</span>
        </li>
        <li class="cart_item_list">
          <span class="cart_item_list_quantity">1x</span>
          <span class="cart_item_list_name">Coca-Cola</span>
          <span class="cart_item_list_price">€</span>
        </li>
      </ul>
      <div class="total">
        <h2>
          Totale
        </h2>
        <h2>
          €
        </h2>
      </div>
    </div>
  </section>
    <FooterComponent/>
</div>
</template>

<script>
import HeaderComponent from '../components/HeaderComponent.vue'
import FooterComponent from '../components/FooterComponent.vue'
export default {
  components: { 
    HeaderComponent,
    FooterComponent,
  },
  data() {
    return {
      title: "payments",
    };
  },

  methods: {
    currentDate() {
      const date = new Date();
      console.log(date);
      return date;
    },
  },

  mounted() {
    this.currentDate();
  },
};
</script>

<style lang="scss" scoped>
.payment_section{
  padding: 50px 0px;
  // border: 5px solid red;
  // height: 600px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  text-align: center;
  animation: slideUp 1500ms ease;
  .personal_info{
    // border: 3px solid purple;
    width: 50%;
    height: 98%;
    padding: 20px 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 0 15px 30px 1px grey;
    border-radius: 15px;
    border: 3px solid transparent;
    position: relative;
    &:hover{
      border: 3px solid #007e8a;
    }
    h1, h2, h3, h4, h5{
      color: #007e8a;
      font-weight: 800;
    }
    h1{
      @media (max-width: 381px){
        font-size: 28px;
      }
    }
    h3{
      @media (max-width: 381px){
        font-size: 24px;
      }
    }
    p{
      font-weight: 700;
      padding-bottom: 10px;
      @media (max-width: 768px){
      padding-bottom: 0px;
      }
    }
    form{
      width: 80%;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .personal_info_input{
      display: flex;
      align-items: center;
      justify-content: center;
      // border: 2px solid red;
      gap: 5px;
      padding-bottom: 10px;
      text-align: left;
      width: 90%;
      span{
        width: 30%;
        height: 100%;
        text-transform: uppercase;
        font-size: 16px;
        color: #007e8a;
        padding: 5px;
        @media (max-width: 991px){
          font-size: 12px;
        }
        @media (max-width: 381px){
          font-size: 10px;
        }
        @media (max-width: 281px){
          font-size: 10px;
          width: 50%;
        }
      }
      input{   
        border: 1px solid #e5e5e5;
        border-radius: 5px;
        width: 70%;
        height: 100%;
        padding: 5px;
        font-size: 14px;
        outline-color: #007e8a;
        @media (max-width: 991px){
          font-size: 12px;
        }
        @media (max-width: 381px){
          font-size: 10px;
        }
        @media (max-width: 281px){
          font-size: 8px;
          width: 50%;
        }
      }
    }
    button{
      font-weight: 700;
      color: white;
      font-size: 14px;
      padding: 5px;
      background-color: #007e8a;
      width: 150px;
      border: none;
      border-radius: 5px;
      opacity: 0.8;
      &:hover{
        transition: ease-in-out 0.5s;
        opacity: 1;
      }
      @media (max-width: 991px){
        bottom: 28.5%;
        font-size: 12px;
      }
    }
    @media (max-width: 768px){
      width: 80%;
      height: 45%;
    }
  }
  .cart_summary{
    // border: 3px solid purple;
    width: 40%;
    height: 98%;
    padding: 20px 5px;
    box-shadow: 0 15px 30px 1px grey;
    border-radius: 15px;
    border: 3px solid transparent;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    &:hover{
      border: 3px solid #007e8a;
    }
    h1, h2, h3, h5{
      color: #007e8a;
      font-weight: 800;
    }
    h1{
      @media (max-width: 381px){
        font-size: 28px;
      }
    }
    .cart_items_badges{
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 10px;
      position: relative;
      .cart_item_badge{
        margin: 0;
        padding: 0;
        text-align: center;
        background-color: #007e8a;
        padding: 2px 7px;
        color: white;
        border-radius: 25px;
      }
    }
    .cart_items_list{
      // border: 1px solid red;
      width: 80%;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      .cart_item_list{
        // border: 1px solid blue;
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0px 5px;
        border: 1px solid #007e8a;
        border-radius: 5px;
        font-size: 16px;
        @media (max-width: 381px){
          font-size: 14px;
        }
        .cart_item_list_quantity{
          width: 8%;
          text-align: left;
        }
        .cart_item_list_name{
          width: 70%;
          text-align: left;
          border-left: 1px solid #007e8a;
          border-right: 1px solid #007e8a;
          padding-left: 5px;
        }
        .cart_item_list_price{
          width: 15%;
          text-align: right;
        }
      }
    }
    .total{
      width: 80%;
      display: flex;
      justify-content: space-between;
      color: #007e8a;
    }
    @media (max-width: 768px){
      width: 80%;
      height: 45%;
    }
  }
  @keyframes slideUp {
    0% {
      -webkit-transform: translateY(100%);
      transform: translateY(100%);
      visibility: hidden;
    }
    25%{
      visibility: hidden;
    }
    50%{
      visibility: hidden;
    }
    60%{
      visibility: hidden;
    }
    100% {
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }
  }
  @media (max-width: 768px){
    display: flex;
    flex-direction: column;
    gap: 40px;
    align-items: center;
  }
}
</style>
