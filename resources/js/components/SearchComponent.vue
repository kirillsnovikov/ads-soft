<template>
    <div class="search-component">
        <div class="search-form">
            <div class="search-form__input">
                <input v-model="query" type="text" placeholder="Введите ID записи">
            </div>
            <div class="search-form__button" @click="fetch(query)">
                {{button}}
                <div class="lds-spinner" v-if="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
        <div v-if="alert" class="alert"><i>{{alert}}</i></div>
        <ul v-if="data">
            <li v-for="(value, name) in data">
                {{name}}: <strong>{{value}}</strong>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                query: '',
                button: 'Найти',
                alert: null,
                data: null,
                loader: false,
            }
        },
        watch: {
            query: function(newValue, oldValue) {
                if (isNaN(newValue)) {
                    this.alert = 'Введите число';
                } else if (newValue === '0') {
                    this.alert = 'Введите число больше нуля';
                }
                else {
                    this.alert = null;
                }

            }
        },
        methods: {
            fetch(query) {
                this.data = null;
                this.loader = true;
                setTimeout(() => {
                    if (!isNaN(query)) {
                        if (query !== '' && query !== '0') {
                            axios.get('api/search/' + query)
                            .then(response => {
                                if (response.data.data) {
                                    this.data =  JSON.parse(response.data.data);
                                }
                                this.alert =  response.data.error;
                            })
                            .catch(error => {
                                this.alert = error;
                            });
                        } else if (query === '0') {
                            this.alert = 'Введите число больше нуля';
                        }
                        else {
                            this.alert = 'Введите число'
                        }
                    }
                    this.loader = false;
                }, 500);
            }
        }
    }
</script>