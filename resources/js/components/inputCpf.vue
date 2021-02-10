<template>
    <input type="text" v-model="texto" v-mask="'###.###.###-##'" :maxlength="14">
</template>

<script>
    export default {
        name: 'App',
        data() {
            return {
                texto: ""
            };
        }
    };
</script>