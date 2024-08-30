@extends('layouts.backendLayout')

@section('title')
    最新消息管理
@endsection

@section('main_content')
<div id="app2">
    <v-app>
        <v-main>
            <v-container>
                <v-row>
                    <v-col>
                        <v-btn @click="showGlobalVariable">顯示全域變數</v-btn>
                        <v-btn @click="showLocalData">顯示本地變數</v-btn>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</div>

<script>
    const app2 = new Vue({
        el: '#app2',
        vuetify: new Vuetify(),
        app: app,
        data: {
            localData: '這是本地變數',
        },
        methods: {
            showGlobalVariable() {
                alert(app.globalVariable);
            },
            showLocalData() {
                alert(this.localData);
            }
        }
    });
</script>
@endsection
