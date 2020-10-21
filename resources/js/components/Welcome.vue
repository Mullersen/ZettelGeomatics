<template>
    <section class="hero"  id="home">
        <div class="hero-body">

            <div class="container has-text-centered">
                <h1 id="title" class="title">Zettel Geomatics</h1>
                <button class="button"><a href="#contact">CONTACT</a></button>
            </div>
        </div>
    </section>
</template>

<script>
export default {
     Name:"Welcome",

}
</script>

<style scoped>
.hero{
    min-height: 80vh;
    background-image: url("/images/welcome1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;

}
.container{
    margin-top:10vh;
}
#title{
    font-size: 3rem;
}
</style>
