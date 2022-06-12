<template>
  <div>
    <HeaderComponentAlternative />
    <main>
      <slot/>
    </main>
    <FooterComponent/>
  </div>
</template>

<script>
import HeaderComponent from '../components/HeaderComponent.vue'
import FooterComponent from '../components/FooterComponent.vue'
import HeaderComponentAlternative from '../components/HeaderComponentAlternative.vue'

  export default {
    components: { 
      HeaderComponentAlternative,
      FooterComponent,
    },
  }
</script>

<style lang="scss" scoped>

</style>