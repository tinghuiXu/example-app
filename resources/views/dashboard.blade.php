@extends('layouts.backendLayout')

@section('title')
    導覽頁
@endsection

@section('main_content')
    <v-container>
        <v-row>
            <v-col>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda incidunt blanditiis, obcaecati beatae
                consequuntur excepturi dolore id repellendus saepe asperiores nobis quaerat fugiat dolor eius quos? Magnam
                architecto harum distinctio!

            </v-col>
        </v-row>
        <v-row>
    </v-container>
@endsection

@push('scripts')
    <script>
        const app = new Vue({
            el: '#app',
            vuetify: new Vuetify(),
            data: {
                // 必要的
                {!! $drawer !!}
                // 自己的
                localData: '這是本地變數',
            },

            methods: {
                showLocalData() {
                    alert(this.localData);
                }
            }
        });
    </script>
@endpush
