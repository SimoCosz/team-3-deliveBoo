<template>
  <layout>
    <div class="container py-5">
      <div class="row">
        <div class="col-3 categories p-2">
          <div class="after">
            <div class="where d-flex align-items-center p-2">
              <img src="../../../public/img/logo-categories.png" alt="">
              <h5 class="m-0">Roma</h5>
            </div>
          </div>
          <!-- after -->
            <h5 class="my-3">Categorie</h5>
          <div class="check my-2" v-for="category in categories" :key="category.id">
            <input type="checkbox" id="categories" name="categories">
            <label for="categories">{{category.name}}</label>
          </div>
        </div>
        <div class="col-9 restaurants">
          <h2>Ristoranti che consegnano a Roma</h2>
          <div class="container-card">
            <!-- card -->
            <RestaurantCard v-for="user in users" :key="user.id" :element="user" />
          </div>
        </div>
      </div>
     
    </div>
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
        categories: []
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
      }
    },
    
    mounted() {
      this.fetchRestaurant()
      this.fetchCategories()
    },
      
  }
</script>

<style lang="scss" scoped>
.where{
  width: 70px;
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
  max-height: calc(100vh - 50px);
  overflow: auto;
}

.container-card{
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

</style>