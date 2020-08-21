<template>
    <v-app-bar
        :clipped-left="$vuetify.breakpoint.lgAndUp"
        app
        color="blue darken-3"
        dark
    >
        <v-app-bar-nav-icon @click.stop="toggle"></v-app-bar-nav-icon>
        <v-toolbar-title>Deploy UI</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-btn icon @click="site" href="/">
            <v-icon>mdi-earth</v-icon>
        </v-btn>
        <v-btn icon @click="logout">
            <v-icon>mdi-logout</v-icon>
        </v-btn>
    </v-app-bar>
</template>

<script>
    export default {
        data: () => ({
            drawer: true,
        }),

        methods: {
            site() {
                window.location.href = window.config.baseUrl;
            },
            toggle() {
                this.drawer = !this.drawer;
                this.$root.$emit('drawer', this.drawer);
            },
            logout() {
                window.location.href = window.config.baseUrl + '/logout';
            },
        }
    };
</script>

<style scoped>

</style>
