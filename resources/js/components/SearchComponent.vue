<template>
    <div class="search-component">
        <div class="search-form">
            <input class="search-form__input" v-model="query" type="text" placeholder="Введите ID записи">
            <div class="search-form__button" @click="fetch(keywords)">{{query}}</div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            query: ''
        }
    },
    watch: {

    }
}
</script>