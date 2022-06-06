<template>
  <div class="container">
    <div v-for="user in users" :key="user.id">
      {{user.name}}
      <router-link tag="button" :to="{ name:'menu.restaurant', params:{slug:user.slug} }">menu</router-link>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

  export default {
    data(){
      return{
        users: []
      }
    },

    methods:{
      fetchRestaurant() {
        axios.get("/api/users")
        .then((res) => {
            const { users } = res.data;
            this.users = users;
            console.log(this.users)
        })
        .catch((err) => {
          console.warn(err);
            this.$router.push("/404");
        });
      }
    },
    
    mounted() {
      this.fetchRestaurant()
    },
      
  }
</script>

<style lang="scss" scoped>

</style>