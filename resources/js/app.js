/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
        new_todo: '',
        todos: []
    },
    methods: {
        fetchTodos: function () {
            axios.get('/api/v1/todos').then((res) => {
                this.todos = res.data
            })
        },
        addTodo: function () {
            axios.post('/api/v1/todos', {
                title: this.new_todo
            }).then((res) => {
                this.todos = res.data,
                this.new_todo = ''
            })
        },
        deleteTodo: function (task_id) {
            axios.delete('/api/v1/todos', {
                id: task_id
            }).then((res) => {
                console.log(res);
                this.todos = res.data
            })
        }
    },
    created() {
        this.fetchTodos()
    },

});
