<template>
    <v-combobox multiple
                v-model="select"
                label="Tags"
                append-icon
                chips
                deletable-chips
                class="tag-input"
                :search-input.sync="search"
                @keyup.tab="updateTags"
                @paste="updateTags">
    </v-combobox>
</template>

<script>
    export default {
        data: () => ({
            select: [],
            items: [],
            search: '',
        }),
        methods: {
            getTags() {
                return this.items;
            },
            updateTags() {
                this.$nextTick(() => {
                    this.select.push(...this.search.split(','));
                    this.$nextTick(() => {
                        this.search = '';
                    });
                });
            },
        },
    };
</script>

<style scoped>
    .tag-input span.chip {
        background-color: #1976d2;
        color: #fff;
        font-size: 1em;
    }

    .tag-input span.v-chip {
        background-color: #1976d2;
        color: #fff;
        font-size: 1em;
        padding-left: 7px;
    }

    .tag-input span.v-chip::before {
        content: "label";
        font-family: 'Material Icons';
        font-weight: normal;
        font-style: normal;
        font-size: 20px;
        line-height: 1;
        letter-spacing: normal;
        text-transform: none;
        display: inline-block;
        white-space: nowrap;
        word-wrap: normal;
        direction: ltr;
        -webkit-font-feature-settings: 'liga';
        -webkit-font-smoothing: antialiased;
    }
</style>
