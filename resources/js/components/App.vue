<template>
    <v-app id="inspire">
        <root-nav-bar></root-nav-bar>
        <root-nav></root-nav>
        <v-main>
            <v-container fluid>
                <router-view></router-view>
            </v-container>
        </v-main>
    </v-app>
</template>
<script>
    export default {
        data: () => ({
            drawer: null,
        }),
        mounted() {},
    };
</script>
