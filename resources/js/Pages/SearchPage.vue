<template>
  <layout>
    <!-- <div class="container py-5"> -->
      <div class="search-page-container row mt-5">
        <div class="col-2 categories p-2">
          <div class="after">
            <div class="where d-flex align-items-center p-2">
              <img src="../../../public/img/logo-categories.png" alt="">
              <h5 class="m-0">Roma</h5>
            </div>
          </div>
          <!-- after -->
            <h5 class="my-3">Categorie</h5>
          <div class="check my-2" v-for="category in categories" :key="category.id">
            <input type="checkbox" v-model="categoryFiltered" :id="category.name" :name="category.name" :value="category.name">
            <label :for="category.name">{{category.name}}</label>
          </div>
        </div>
        <div class="col restaurants mb-5">
          <h2 class="mb-4">Ristoranti che consegnano a Roma</h2>
          <div class="container-card" v-if="this.filteredRestaurants.length == 0">
            <h3>Nessun ristorante trovato</h3>
            <!-- card -->
          </div>
          <div class="container-card" v-else>
            <RestaurantCard :element="user" v-for="user in filteredUsers" :key="user.id"/>
          </div>
        </div>
      </div>
     
    <!-- </div> -->
  </layout>
</template>

<script>
import axios from 'axios';
import Layout from '../layouts/Layout.vue';
import RestaurantCard from '../components/RestaurantCard.vue'

  export default {
  components: {
    Layout,
    RestaurantCard 
  },
    data(){
      return{
        users: [],
        categories: [],
        filteredUsers: [],
        userCategories: [],
        categoryFiltered: [],
        loading: false
      }
    },
    methods:{
      fetchRestaurant() {
        axios.get("/api/users")
        .then((res) => {
            const { users } = res.data;
            this.users = users;
        })
        .catch((err) => {
          console.warn(err);
            this.$router.push("/404");
        });
      },

      fetchCategories(){
        axios.get("/api/categories")
        .then((res) => {
            const { categories } = res.data;
            this.categories = categories;
        })
        .catch((err) => {
          console.warn(err);
            this.$router.push("/404");
        });
      },

      // checkCategories(){
      //   console.log(this.categoryFiltered);
      // },

      checkCategoriesContain(user){
        let userCategories = user.categories.map((c)=>{
          return c.name;
        });
        return this.categoryFiltered.every((el)=>{
          return userCategories.includes(el);
        });
      }
    },
    computed: {
      filteredRestaurants(){
        if(!this.categoryFiltered.length){
          return(this.filteredUsers = this.users);
        } else {
          this.filteredUsers = this.users.filter(
            this.checkCategoriesContain
          );
          return this.filteredUsers;
        }
      }
    },
    
    mounted() {
      this.fetchRestaurant()
      this.fetchCategories()
    },
      
  }
</script>

<style lang="scss" scoped>
.search-page-container{
  margin: 0;
  padding: 0 15px 0 15px;
}

.where{
  width: 95px;
  gap: 10px;
  // position: sticky !important;
  // top: 10px;
}

.after::after{
    content: '';
    display: block;
    border: 1px solid #e9e8e8;
    width: 90%;
}

.categories{
  min-width: 180px;
  max-height: calc(100vh - 50px);
  overflow: auto;
  margin-left: 40px;
}

.container-card{
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}
@media (max-width: 1200px){
  .restaurants{
    margin-left: 20px!important;
  }
}

@media (max-width: 750px){
  .categories{
    display: none;
  }
  .restaurants{
    margin-left: 10px!important;
  }
}

</style>