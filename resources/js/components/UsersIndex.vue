<template>
  <div>
    <div class="container">
      <h1>Lista ristoranti presenti in deliveboo</h1>
      <div v-for="user in users" :key="user.id">
        {{user.name}}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      users: []
    }
  },
  methods: {
    fetchPosts(){
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
  this.fetchPosts();
  }
  
}

</script>

<style>

</style>