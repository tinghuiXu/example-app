<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Vuetify CSS -->
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.5.10/dist/vuetify.min.css" rel="stylesheet">
    <!-- Vuetify Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- 引入 Vue 和 Vuetify JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.5.10/dist/vuetify.js"></script>
</head>

<body>
    <v-app id="app">

        <v-navigation-drawer v-model="drawer" app>
            {{-- avatar --}}
            <v-list-item>
                <v-list-item-avatar>
                    <v-img src="https://cdn.vuetifyjs.com/images/john.jpg"></v-img>
                </v-list-item-avatar>
                <v-list-item-content>
                    <v-list-item-title>{{ Auth::user()->name }}</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
            {{-- 選單一 --}}
            <v-list-item>
                <v-list-item-icon>
                    <v-icon>mdi-home</v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                    <v-list-item-title>首頁</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
            {{-- 選單二 --}}
            <v-list-item>
                <v-list-item-icon>
                    <v-icon>mdi-account</v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                    <v-list-item-title>會員管理</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-navigation-drawer>

        <v-app-bar app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Application</v-toolbar-title>
            <v-spacer></v-spacer>
            {{-- <v-switch label="黑暗" v-model="$vuetify.theme.dark"></v-switch> --}}
            {{-- 太陽和月亮 --}}
            <v-btn icon @click = "$vuetify.theme.dark = !$vuetify.theme.dark">
                <v-icon v-if="$vuetify.theme.dark">mdi-white-balance-sunny</v-icon>
                <v-icon v-else>mdi-weather-night</v-icon>
            </v-btn>

            {{-- 登出 --}}
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <v-btn type="submit" icon>
                    <v-icon>mdi-logout</v-icon>
                </v-btn>
            </form>
        </v-app-bar>

        <v-main>
            @yield('main_content')
        </v-main>

        <v-footer app>
            <span>&copy; {{ date('Y') }} My App</span>
        </v-footer>

    </v-app>

    @stack('scripts')
</body>


</html>
