<template>
  <div class="payments">
    <div></div>
    <div class="logo-butt">
      <div class="row">
        <figure class="immagine">
          <a href="/">
            <img src="../../../public/img/logo-navbar.png" alt="" />
          </a>
        </figure>
        <div class="items-menu">
          <ul>
            <li class="item">
              <a href="#"><i class="bi bi-cart4 p-1"></i>0,00 &euro;</a>
            </li>
            <li class="item">
              <a href="/home"><i class="bi bi-house-door p-1"></i>Registrati o accedi</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="cont-2">
      <div class="date">
        <div class="nome-ristorante">
          <h2><i class="fa-solid fa-timer"></i>Pinseria Romana</h2>
          <h6>Tempo di consegna 20 - 35 m</h6>
        </div>
        <div class="dati-cliente">
          <div class="wrapper">
            <div class="container body">
              <!-- // form -->
              <form action="">
                <h1>
                  <i class="fas fa-shipping-fast"></i>
                  Informazioni di consegna
                </h1>
                <div class="name">
                  <div>
                    <label for="f-name">Nome*</label>
                    <input type="text" required minlength="3" name="f-name" />
                  </div>
                  <div>
                    <label for="l-name">Cognome*</label>
                    <input type="text" required minlength="3" name="l-name" />
                  </div>
                </div>
                <div class="street">
                  <label for="name">Via*</label>
                  <input type="text" required minlength="3" name="address" />
                </div>
                <div class="address-info">
                  <div>
                    <label for="city">Città*</label>
                    <input type="text" required minlength="3" name="city" />
                  </div>
                </div>
                <h1><i class="bi bi-credit-card-2-back"></i> Dati di pagameto</h1>
                <div class="cc-num">
                  <label for="card-num">Carta di credito*</label>
                  <input
                    type="text"
                    required
                    minlength="16"
                    maxlength="16"
                    name="card-num"
                  />
                </div>
                <div class="cc-info">
                  <div>
                    <label for="card-num">Scadenza*</label>
                    <input type="date" required name="expire" />
                  </div>
                  <div>
                    <label for="card-num">CCV*</label>
                    <input
                      type="text"
                      required
                      minlength="3"
                      maxlength="3"
                      name="security"
                    />
                  </div>
                </div>
                <div class="btns">
                  <button type="submit">Acquista</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="cart">
        <div class="dentro-cart">
          <h4>Carrello</h4>

          <p class="prod">1x Pizza margherita</p>
          <hr />
          <p>Subtotale<span class="sp-1">7,00 €</span></p>
          <p>Supplemento<span class="sp-2">2,00 €</span></p>
          <p>Spese di consegna<span class="sp-3">4,90 €</span></p>
          <h5 class="part-blu">La consegna è gratuita se spendi almeno 10 €</h5>
          <p>Spese di servizio<span class="sp-4">0,49 €</span></p>
          <p>Mancia per il rider<span class="sp-5">0,00 €</span></p>
          <hr />

          <h4>Totale<span class="sp-6">14,39 €</span></h4>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
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
* {
  font-family: "Nunito", sans-serif;
}
.payments {
  height: 100vh;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.row {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0;
}
.items-menu > ul {
  display: flex;
  flex-direction: row;
}
.items-menu > ul > li {
  display: flex;
  flex-direction: row;
  text-decoration: none;
}
.item {
  border: 2px solid #e9ebeb;
  padding: 5px 10px;
  border-radius: 5px;
  white-space: nowrap;
  background-color: white;
  margin-left: 10px;
}
.item > a {
  color: black;
}

/* .back{
    width: 100%;
    height: 100%;
    background-image: url("../../../public/images/backgroundpayment.png"); 
    background-size: cover;
} */
.immagine {
  width: 200px;
  padding-left: 5px;
}
.logo-butt {
  width: 85%;
  height: 70px;
  padding-top: 10px;
}
.cont-2 {
  width: 85%;
  height: 85%;
  order: 1px solid black;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.date {
  width: 40%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.dati-cliente {
  width: 90%;
  height: 83%;
}
.nome-ristorante {
  width: 100%;
  height: 15%;
  margin-bottom: 25px;
}
.nome-ristorante > h2 {
  font-weight: bold;
}

.cart {
  width: 40%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: "Arimo";
  background-color: white;
  -webkit-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
  -moz-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
  box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
  animation: slideUp 2000ms ease;
  padding: 20px;
  border-radius: 20px;
}
.dentro-cart {
  width: 90%;
  min-height: 80%;
}
.dentro-cart > h4 {
  font-weight: bold;
}
.sp-1 {
  padding-left: 270px;
  color: grey;
}
.sp-2 {
  padding-left: 248px;
  color: grey;
}
.sp-3 {
  padding-left: 214px;
  color: grey;
}
.sp-4 {
  padding-left: 227px;
  color: grey;
}
.sp-5 {
  padding-left: 220px;
  color: grey;
}
.sp-6 {
  padding-left: 244px;
  color: black;
  font-weight: bold;
}
.part-blu {
  margin: 10px 10px 10px 0px;
  background-color: #00ccbc;
  padding: 15px 15px 15px 15px;
  font-size: 16px;
}

// form
.body {
  width: 100%;
  display: flex;
  justify-content: center;
  padding: 0;
}

.date {
  width: 50%;
  height: 100%;
  display: flex;
  justify-content: center;
  font-family: "Arimo";
  background-color: white;
  -webkit-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
  -moz-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
  box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
  animation: slideUp 2000ms ease;
  padding: 20px;
  border-radius: 20px;
}

@keyframes slideUp {
  0% {
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
    visibility: visible;
  }

  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

.container {
  width: 100%;
}

h1 {
  align-self: center;
}

form {
  width: 100%;

  > * {
    margin-top: 5px;
  }

  input {
    width: 100%;
    min-height: 25px;
    border: 0.3px solid grey;
    font-size: 1rem;
    letter-spacing: 0.15rem;
    font-family: "Arimo";
    margin-top: 5px;
    color: brown;
    border-radius: 4px;
  }

  label {
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 2px;
    color: grey;
    margin: 0;
  }

  h1 {
    font-size: 24px;
    line-height: 10px;
    color: black;
    letter-spacing: 1px;
    padding-bottom: 6px;
    padding-top: 0;
  }

  h1:nth-of-type(2) {
    margin-top: 25px;
  }
}

.name {
  justify-content: space-between;
  display: flex;
  width: 100%;

  div {
    width: 45%;
  }
}

.address-info {
  display: flex;
  justify-content: space-between;

  div {
    width: 100%;
  }
}

.cc-info {
  display: flex;
  justify-content: space-between;

  div {
    width: 45%;
  }
}
.prod {
  margin-bottom: 0;
}

.btns {
  display: flex;
  flex-direction: row;
  justify-content: space-between;

  button {
    margin: 3px 0;
    height: 30px;
    width: 40%;
    color: black;
    background-color: #00ccbc;
    text-transform: uppercase;
    border: 0;
    border-radius: 0.3rem;
    letter-spacing: 2px;
    margin-top: 10px;

    &:hover {
      animation-name: btn-hov;
      animation-duration: 550ms;
      animation-fill-mode: forwards;
    }
  }
}

@keyframes btn-hov {
  100% {
    background-color: rgb(184, 184, 184);
    color: black;
    transform: scale(1.05);
  }
}

input:focus,
button:focus {
  outline: none;
}

@media (max-width: 736px) {
  .wrapper {
    width: 100%;
  }

  .container {
    width: 100%;
  }

  .btns {
    align-items: center;

    button {
      width: 50%;
    }
  }

  form h1 {
    text-align: center;
  }

  .name,
  .address-info,
  .cc-info {
    flex-direction: column;
    width: 100%;
    justify-content: space-between;

    div {
      align-items: center;
      flex-direction: column;
      width: 100%;
      display: flex;
    }
  }

  .street,
  .cc-num {
    text-align: center;
  }

  input {
    margin: 5px 0;
    min-height: 30px;
  }
}
</style>
