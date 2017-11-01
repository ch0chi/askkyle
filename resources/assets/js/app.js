
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

//Vue.component('example-component', require('./components/ExampleComponent.vue'));

    //todo add props and make this less bad
const app = new Vue({
    el: '#app',

    data:{
        query:'',
        quotes:'',
        newQuote:'',
        toggleShow:false
    },

    methods:{
        onSearch(){
            axios.get('/quotes',this.$data)
                .then(response =>
                    this.update(response.data)
                );
        },
        update(data){
            this.quotes = shuffle(data,1);
            this.toggleShow = true;
        },
        onStoreQuote(){
            axios.post('/quotes', {
                body:this.newQuote
            })
                .then(response =>
                    this.toggleShow = true,
                    this.newQuote = '',
                    setTimeout(() => {
                        this.toggleShow = false;
                    }, 3000)
                )
                .catch(error =>
                    console.log(error)
                );
        }
    }
});

/**
 * Randomizes an array within a range.
 * @param arr
 * @param range
 * @returns {*}
 */
function shuffle(arr,range){
    if(range === 1){
        let result = arr[Math.floor(Math.random()*arr.length)];
        return result;
    }
    let randIndex,temp;
    for(let i = arr.length-1;i>0;i--){ //arr starts at last elm in arr
        randIndex = Math.floor(Math.random()*(i+1)); //rand index
        temp = arr[i]; //set temp var to current index
        arr[i] = arr[randIndex]; //set arr's current index to random index within range
        arr[randIndex] = temp; //set random index back to what index was, for loop will now move down one
    }
    return arr.splice(0,range);//set range to get
}