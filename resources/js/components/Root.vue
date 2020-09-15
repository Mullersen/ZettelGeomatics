<template>
    <div>
        <Navigation/>
        <Welcome/>
        <MyLine v-scrollanimation/>
        <Services/>
        <MyLine v-scrollanimation/>
        <Contact/>
        <MyLine v-scrollanimation/>
        <Location/>
        <footer class="footer">
            <div class="content">
                <p>All rights reserved Zettel Geomatics</p>
            </div>
        </footer>
    </div>
</template>

<script>
    import Navigation from './Navigation';
    import Welcome from './Welcome';
    import Services from './Services';
    import Contact from './Contact';
    import Location from './Location';
    import MyLine from './MyLine';

    export default {
        name: "Root",
        components: {
            Navigation,
            Welcome,
            Services,
            Contact,
            Location,
            MyLine,
        },
    }
</script>
<style>
.subtitle{
    font-family: 'Rambla', sans-serif;
    font-weight:bold;
}
.before-enter{
 opacity: 0 ;
 transform: translateY(100px);
 transition: all .5s .2s ease-out;
}
.enter{
 opacity: 1 ;
 transform: translateY(0px);
}
</style>
