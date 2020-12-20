<template>
  <div class="hello">
    <div v-for="item in products" :key="item.id">
      <p>{{ item.title }}</p>

    </div>
  </div>
</template>

<script>
export default {
  name: 'Products',
  props: {
    products: Array
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
