<template>
  <div>
    <HeaderComponent />
    <main>
      <slot/>
    </main>
    <FooterComponent/>
  </div>
</template>

<script>
import HeaderComponent from '../components/HeaderComponent.vue'
import FooterComponent from '../components/FooterComponent.vue'

  export default {
    components: { 
      HeaderComponent,
      FooterComponent,
    },
  }
</script>

<style lang="scss" scoped>

</style>