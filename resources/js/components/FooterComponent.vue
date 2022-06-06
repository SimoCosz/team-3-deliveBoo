<template>
  <div class="container-fluid footer">
    <div class="container">
      <div class="row card-wrapper">
        <div class="card-footer">
          <h6>Scopri Deliveboo</h6>
          <ul>
            <li><a href="#">Investitori</a></li>
            <li><a href="#">Chi simao</a></li>
            <li><a href="#">Ristoranti</a></li>
            <li><a href="#">Altro</a></li>
            <li><a href="#">Pressroom</a></li>
            <li><a href="#">Il nostro blog</a></li>
            <li><a href="#">Programmazione</a></li>
            <li><a href="#">Desgin</a></li>
            <li><a href="#">Lavora con noi</a></li>
            <li><a href="#">Diventa nostro partner</a></li>
          </ul>
        </div>
        <div class="card-footer">
          <h6>Note legali</h6>
          <ul>
            <li><a href="#">Termini & Condizioni</a></li>
            <li><a href="#">Informativa sulla privacy</a></li>
            <li><a href="#">Cookies</a></li>
          </ul>
        </div>
        <div class="card-footer">
          <h6>Aiuto</h6>
          <ul>
            <li><a href="#">Contatti</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Tipi di cucina</a></li>
          </ul>
        </div>
        <div class="card-footer">
          <h6>Porta Deliveroo con te</h6>
          <ul>
            <li>
              <a href="#">
                <figure class="badge-app">
                  <img src="../../../public/img/ios-badge.png" alt="">
                </figure>
              </a>
            </li>
            <li>
              <a href="#">
                <figure class="badge-app">
                  <img src="../../../public/img/android-badge.png" alt="">
                </figure>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row justify-content-between p-2">
        <div class="col-6 d-flex icon flex-wrap">
          <ul>
            <li>
              <a href="#">
                <i class="bi bi-facebook icon"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-twitter icon"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="bi bi-instagram icon"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-6 copy d-flex justify-content-end align-items-center">
          <span>&copy; 2022 Deliveboo</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    
  }
</script>

<style lang="scss" scoped>
ul, li{
  list-style: none;
}

ul{
  display: contents;
}

a{
  text-decoration: none;
  color: currentColor;
}

.footer{
  background-color: #2E3333;
  padding: 20px 0 0 0;

  .card-wrapper{
    gap: 10px;

    .card-footer{
      flex-grow: 1;
      color: white;
      padding: 20px;
      background-color: #434848;

      h6{
        font-weight: bold;
      }

      li{
        font-size: 12px;
        width: max-content;

        &:hover{
          text-decoration: underline;
        }

        .badge-app{
          width: 100px;
          margin: 0;
          overflow: hidden;
        }
      }
    }
  }
  .icon{
    gap:15px;
    color: white;
    padding: 10px;

    &:hover{
      color: rgb(74, 74, 196);
    }
  }
  .copy{
    color: white;
  }
}
</style>