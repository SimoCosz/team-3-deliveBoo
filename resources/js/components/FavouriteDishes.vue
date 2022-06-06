<template>
  <section class="favourite-section">
    <div class="favourite-container">
        <h1 class="favourite-title">I tuoi piatti preferiti, consegnati da noi</h1>
        <div class="favourite-card-container">
          <!-- CARD CICLE -->
          <a class="favourite-link" v-for="user in users" :key="user.id" href="">
            <div class="favourite-card">
              <img class="favourite-img" :src="user.cover" alt="">
              <h2 class="favourite-name">{{user.name}}</h2>
            </div>
          </a>
          <!-- END CARD CICLE -->
        </div>
    </div>
  </section>
</template>

<script>
export default {
  data(){
    return{
      users: []
    }
  },
  methods: {
    fetchUsers(){
      axios.get('/api/users')
      .then(res =>{
        const {users} = res.data
        this.users = users
    })
    .catch( err => {
      console.warn(err)
    })
    }
  },
  mounted(){
  this.fetchUsers();
  }
}
</script>

<style lang="scss" scoped>

.favourite-section{
  background-color: #FFEAE4;
  max-width: 100vw;
  display: flex;
  justify-content: center;

  .favourite-container{
    width: 1024px;
    display: flex;
    flex-direction: column;
    margin-top: 50px;
    margin-bottom: 20px;

    .favourite-title{
      font-weight: 700;
      margin-bottom: 30px;
      }

    .favourite-card-container{
      margin-bottom: 50px;
      display: flex;
      flex-wrap: wrap;
      gap: 2%;

      .favourite-link{
        text-decoration: none;
        color: currentColor;
        margin-bottom: 20px;
        width: 32%;
        transition: 0.3s ease-in-out;

        &:hover{
          box-shadow: black;
          transform: scale(1.1);
        }

        .favourite-card{


          .favourite-img{
            height: 180px;
            width: 100%;
            margin-bottom: 13px;
          }

          .favourite-name{
            font-weight: 700;
            font-size: 24px;
          }
        }
      }
      @media (max-width: 1024px){
        .favourite-link{
          width: 43%;
        }
      }

      @media (max-width: 650px){
        .favourite-link{
          width: 90%;
        }
      }
    }
  }
  @media (max-width: 1024px){
    .favourite-card-container{
      justify-content: center;
      gap: 4%!important;
    }

    .favourite-title{
      padding: 0 10% 0 10%;
      text-align: center;
    }
  }

  @media (max-width: 650px){
    .favourite-title{
      font-size: 22px;
    }

    .favourite-name{
      text-align: center;
    }
  }
}
</style>