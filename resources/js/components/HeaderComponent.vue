<template>
  <header>
    <nav class="nav">
        <div class="container-fluid">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <figure class="cover m-0">
                <a href="/">
                  <img src="../../../public/img/logo-navbar.png" alt="">
                </a>
              </figure>
              <div class="items-menu">
                <ul>
                  <li class="item">
                    <router-link tag="a" :to="{name:'search.restaurant'}">Ristoranti</router-link>
                  </li>
                  <li class="item dropdown" @mouseenter="dropdown()" @mouseleave="dropdown()">
                    <div class="dropbtn">
                      <i cldivss="bi bi-chevron-compact-down"></i> Collabora con noi
                    </div>
                    <div :class="['dropdown-content', dropdown1 == true? 'show' : '']">
                      <ul>
                        <li>
                          <a href="/register">Ristoratori</a>
                        </li>
                        <li>
                          <a href="#">Lavora con noi</a>
                        </li>
                        <li>
                          <a href="#">Deliveboo for Work</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                    <li class="item"><a href="#"><i class="bi bi-cart4 p-1"></i>0,00 &euro;</a></li>
                    <li class="item"><a href="/home"><i class="bi bi-house-door p-1"></i>Registrati o accedi</a></li>
                </ul>
              </div>
              <HeaderHamburger class="ghost" />
            </div>
          </div>
        </div>
      </nav>
  </header>

</template>

<script>
import HeaderHamburger from '../components/HeaderHamburgerMenu.vue'

  export default {
    components: {
      HeaderHamburger
    },
    data() {
      return{
        dropdown1: false,
      }
    },

    methods: {
      dropdown(){
        this.dropdown1 = !this.dropdown1
      }
    }
    
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

nav{
  background-color: transparent;
  padding: 10px 0;

  .cover{
    max-width: 200px;
  }

  .items-menu{
    display: flex;
    gap: 10px;

    .item{
      border: 2px solid #E9EBEB;
      padding: 5px 10px;
      border-radius: 5px;
      white-space: nowrap;
      background-color: white;

      &:hover{
        border: 2px solid #97CDB4;
      }

    }

    .dropdown{
      position: relative;

      &:hover{
        border: 2px solid #97CDB4;
      }
      
      .dropbtn{
        cursor: pointer;
      }

      .dropdown-content{
        display: none;
        position: absolute;
        top: 105%;
        left: 0;
        border-radius: 5px;
        width: 200px;
        font-size: 12px;
        background-color: #F8FAFC;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 999;

        &.show{
           display: block;
        }

        li{
          padding: 5px;
          border-radius: 5px;

          a{
            padding: 10px;
          }

          &:hover{
            background-color: #dddddd;
          }
        }
      }
    }
  }

  @media (max-width: 768px) {
    .items-menu{
      display: none;
    }

    .ghost{
      display: block;
      white-space: nowrap;
    }
  }

  @media (max-width: 312px) {
    .hamburger-menu{
      display: flex !important;
      justify-content: center !important;
      width: 100% !important;
    }
  }  
}

.ghost{
  display: none;
}



</style>