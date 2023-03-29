<script>
import Home from './components/Home.vue'
import About from './components/About.vue'
import NotFound from './components/NotFound.vue'
import Footer from './components/Footer.vue'
import Header from './components/Header.vue'
//import Reversation from './components/Reversation.vue'
import Booking from './components/booking.vue'
import Register from './components/register.vue'
import Login from './components/login.vue'

const routes = {
  
  '/': Home,
  '/about': About,
  //'/reversation' : Reversation,
  '/booking' : Booking,
  '/register' : Register,
  '/login' : Login,
  //'/footer' : Footer,

  
}

export default {
  data() {
    return {
      currentPath: window.location.hash
    }
  },
  components:{
    Home,
    Footer,
    Header
  },
  computed: {
    currentView() {
      return routes[this.currentPath.slice(1) || '/'] || NotFound
    }
  },
  mounted() {
    window.addEventListener('hashchange', () => {
		  this.currentPath = window.location.hash
		})
  }
}
</script>

<template>
<Header></Header>
<component :is="currentView" />
<!-- <Home></Home> -->
<Footer></Footer>
</template>


