<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <label>Nombre Producto</label>
    <input v-model="form.title" placeholder="nombre" />
    <input v-model="form.image" />
    <button class="btn btn-primary" @click="saveProduct">Enviar</button>
    <Products :products="list"/>
  </div>
</template>

<script>
import Products from './components/Products.vue'
import { listProducts, PostProducts } from './services/products'
export default {
  name: 'App',
  components: {
    Products
  },
  data () {
    return {
      form: {
        title: '',
        image: ''
      },
      list: []
    }
  },
  mounted () {
    this.listarProductos()
  },
  methods: {
    async listarProductos () {
      try {
        const { data } = await listProducts()
        this.list = data
      } catch (e) {
        console.log(e)
      }
    },
    async saveProduct () {
      try {
        await PostProducts(this.form)
        this.listarProductos()
      } catch (e) {
        console.log(e)
      }
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
