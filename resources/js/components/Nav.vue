<template>
    <v-navigation-drawer
        app
        v-model="drawer"
        :clipped="$vuetify.breakpoint.lgAndUp"
    >
        <v-list dense>
            <v-list-item
                v-for="item in items"
                :key="item.title"
                link
                :to="item.link"
            >
                <v-list-item-icon>
                    <v-icon>{{ item.icon }}</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>
<script>
  export default {
      data: () => ({
          drawer: null,
          items: [
              // Icons https://materialdesignicons.com/
              { title: 'Projects', icon: 'mdi-dns-outline', link: '/projects'},
          ],
      }),

      mounted() {
          this.$root.$on('drawer', (drawer) => {
              this.drawer = drawer;
          });
      }
  }
</script>
