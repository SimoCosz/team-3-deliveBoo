<template>
  <div class="hamburger-menu">
    <div class="item hamburger dropdown" @click="dropdown()">
      <div class="dropbtn">
        <i class="bi bi-list p-1"></i>Menu
      </div>
      <div :class="['dropdown-content', dropdown1 == true? 'show' : '']">
        <ul>
          <li class="link">
            <router-link tag="a" :to="{name:'search.restaurant'}">Ristoranti</router-link>
          </li>
          <hr class="mt-0">
          <li>
            <h6 class="title">Collabora con noi</h6>
          </li>
          <li class="link">
            <a href="/register">Ristoranti</a>
          </li>
          <li class="link">
            <a href="#">Lavora con noi</a>
          </li>
          <li class="link">
            <a href="#">Deliveboo for Work</a>
          </li>
          <hr>
          <li class="link"><h6><a href="#"><i class="bi bi-cart4 p-1"></i>0,00 &euro;</a></h6></li>
          <li class="link"><h6><a href="/home"><i class="bi bi-house-door p-1"></i>Registrati o accedi</a></h6></li>
        </ul>

      </div>
    </div>
  </div>
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

  .hamburger-menu{
    display: flex;
    gap: 10px;

    .hamburger{
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
        right: 0;
        border-radius: 5px;
        font-size: 12px;
        background-color: #F8FAFC;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 999;

        &.show{
           display: block;
        }

        .link{
          padding: 5px;
          border-radius: 5px;

          a{
            padding: 10px;
          }

          &:hover{
            background-color: #dddddd;
          }
        }

        .title{
          padding: 5px;
        }
      }
    }
    @media (max-width: 312px) {
      .dropdown{
        margin-top: 10px;
      }

      .dropdown-content{
        position: absolute;
        top: 105%;
        transform: translatex(25%);
        width: max-content;
        text-align: center;
      }
  }
  }
</style>