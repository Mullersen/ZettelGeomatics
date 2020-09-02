<template>
    <div>
        <Navigation/>
        <Welcome/>
        <Services/>
        <Contact/>
        <Location/>
    </div>
</template>

<script>
    import Navigation from './Navigation';
    import Welcome from './Welcome';
    import Services from './Services';
    import Contact from './Contact';
    import Location from './Location';

    export default {
        name: "Root",
        components: {
            Navigation,
            Welcome,
            Services,
            Contact,
            Location
        },
    }
</script>
