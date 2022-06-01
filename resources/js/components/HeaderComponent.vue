<template>
  <header>
    <nav class="nav">
        <div class="container-fluid">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <figure class="cover">
                <img src="../../../public/img/logo-navbar.png" alt="">
              </figure>
              <div class="items-menu">
                <ul>
                  <li class="item dropdown" @mouseenter="dropdown()" @mouseleave="dropdown()">
                    <div class="dropbtn">
                      <i cldivss="bi bi-chevron-compact-down"></i> Collabora con noi
                    </div>
                    <div :class="['dropdown-content', dropdown1 == true? 'show' : '']">
                      <ul>
                        <li>
                          <a href="/register">Ristoranti</a>
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
                    <li class="item"><a href=""><i class="bi bi-house-door p-1"></i>Registrati o accedi</a></li>
                </ul>
              </div>


              <li class="item ghost"><a href=""><i class="bi bi-list p-1"></i>Menu</a></li>

            </div>
          </div>
        </div>
      </nav>
  </header>
</template>

<script>
  export default {
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
@media screen and (max-width: 768px) {
  body{
    background-color: blue;
  }
}

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
  padding: 10px 0;

  .cover{
    max-width: 150px;
  }

  .items-menu{
    display: flex;
    // flex-grow: 1;
    gap: 10px;

    .item{
      border: 2px solid #E9EBEB;
      padding: 5px 10px;
      border-radius: 5px;
      white-space: nowrap;

      &:hover{
        border: 2px solid #97CDB4;
      }

      &.ghost{
        display: none;
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
}



</style>