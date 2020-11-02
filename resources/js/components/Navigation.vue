<template>
  <section>
    <div class="container">
      <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" id="hidden-logo" href="#home">
              <img src="/logo/logo-cropped.jpg" />
            </a>
          <a
            role="button"
            class="navbar-burger burger"
            aria-label="menu"
            aria-expanded="false"
            data-target="navbarBasic"
          >
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div  id="navbarBasic" class="navbar-menu">
          <div class="navbar-start">
            <span class="navbar-menu">
            <a class="navbar-item" href="#home">
              <img src="/logo/logo-cropped.jpg" />
            </a>
            </span>
              <a class="navbar-item animate" href="#services">OUR SERVICES</a>
              <a class="navbar-item animate" href="#contact">CONTACT</a>
              <a class="navbar-item animate" href="#location">LOCATION</a>
              <a class="navbar-item" href="tel:+14036781119">+1 403-678-1119</a>
          </div>
        </div>
      </nav>
    </div>
  </section>
</template>

<script>
export default {
  Name: "Navigation",
};
</script>

<style scoped>
img {
  max-height: 10vh;
}
@media screen and (min-width: 1561px) {
  .navbar {
    padding: 0 20vw 0 20vw;
  }
  .navbar-start .navbar-item:link {
    margin-right: 3rem;
    margin-left: 3rem;
  }
    #hidden-logo{
        display: none;
    }
}
@media screen and (max-width: 1560px) {
  .navbar {
    padding: 0 20vw 0 20vw;
  }
  .navbar-start .navbar-item:link {
    margin-right: 1rem;
    margin-left: 1rem;
  }
  #hidden-logo{
        display: none;
    }
}
@media screen and (max-width: 789px){
    #hidden-logo{
        display: inline;
    }
    .navbar {
    padding: 0;
  }
}
.navbar-start .navbar-item:link {
  margin-top: auto;
  margin-bottom: auto;
  padding: 2px;
  border-bottom: 2px solid;
  border-color: rgba(21, 41, 130, 0);
  transition: border 0.5s ease-in-out;
}
.navbar-start .navbar-item:hover {
  border-color: rgba(21, 41, 130, 1);
}
.navbar-start .navbar-item:active {
  border-color: rgba(21, 41, 130, 1);
}

.navbar-start {
  margin: 2px auto 2px auto !important;
}
.navbar-burger {
    margin-top:auto;
    margin-bottom:auto;
}
</style>
