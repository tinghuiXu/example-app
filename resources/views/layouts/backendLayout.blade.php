<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Vuetify CSS -->
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.5.10/dist/vuetify.min.css" rel="stylesheet">
</head>
<body>
    <!-- 引入 Vue 和 Vuetify JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.5.10/dist/vuetify.js"></script>

    <div id="app">
    </div>
    @yield('main_content')
    
    <!-- 初始化 Vue 實例並設置全域變數 -->
    <script>
        const app = new Vue({
            el: '#app',
            vuetify: new Vuetify(),
            data: {
                globalVariable: '這是全域變數'
            },
            methods: {

            }
        });
    </script>
</body>
</html>