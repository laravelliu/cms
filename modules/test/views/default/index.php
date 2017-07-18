<?php
use app\support\widgets\JsBlock;
?>

<div id="app">
    {{message}}
</div>

<div id="app-2">
      <span v-bind:title="message">
        鼠标悬停几秒钟查看此处动态绑定的提示信息！
      </span>
</div>

<div id="app-3">
    <p v-if="seen">现在你看到我了</p>
</div>

<div id="app-4">
    <ol>
        <li v-for="todo in todos">
            {{ todo.text }}
        </li>
    </ol>
</div>

<div id="app-5">
    <p>{{ lfs }}</p>
    <button v-on:click="com">逆转消息</button>
</div>

<div id="app-6">
    <p>{{ message }}</p>
    <input v-model="message">
</div>


<div id="app-7">
    <ol>
        <lfs
            v-for="item in groceryList"
            v-bind:todo="item"
            v-bind:key="item.id">
        </lfs>
    </ol>
</div>


<?php JsBlock::begin()?>
<script type="application/javascript">
    var app = new Vue({
        el: '#app',
        data: {
            message: '刘方硕'
        }
    });

    var app2 = new Vue({
        el: '#app-2',
        data: {
            message: '刘方硕1'
        }
    });

    var app3 = new Vue({
        el: '#app-3',
        data: {
            seen: false
        }
    });

    var app4 = new Vue({
        el: '#app-4',
        data: {
            todos: [
                { text: '学习 JavaScript' },
                { text: '学习 Vue' },
                { text: '整个牛项目' }
            ]
        }
    });

    //app4.todos.push({ text: 'lfs' });
    app4.todos.pop();


    var app5 = new Vue({
        el: '#app-5',
        data: {
            message: 'Hello Vue.js!',
            lfs:'aaaa  cccccc',
        },
        methods: {
            com: function () {
                this.lfs = this.lfs.split('').reverse().join('')
            }
        }
    });

    var app6 = new Vue({
        el: '#app-6',
        data: {
            message: 'Hello Vue.js!',
        }
    });

    Vue.component('lfs',{
        props: ['todo'],
        template: '<li>{{ todo.text }}</li>',
    });

    var app7 = new Vue({
        el: '#app-7',
        data: {
            groceryList: [
                { id: 0, text: '蔬菜' },
                { id: 1, text: '奶酪' },
                { id: 2, text: '随便其他什么人吃的东西' }
            ]
        }
    });
    
</script>
<?php JsBlock::end();?>
