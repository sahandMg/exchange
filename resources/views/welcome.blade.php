<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script  src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js" ></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Crypto</th>
                        <th>Symbol</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item,index) in list">
                        <td>
                               <h4 style="width: 100px;padding: 10px;text-align: center" :style="'color:'+item.color"> @{{ item.name.toUpperCase() }}</h4><span>@{{ item.full_name }}</span>
                        </td>
                        <td><img width="50" height="50" :src="'assets/img/icons/'+item.name+'.png'" alt=""></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <script>

            new Vue({

                el:".container",

                data:{
                    list:[]
                },
                created:function () {

                    vm = this;
                    axios.get('{{route('getCurrencies')}}').then(function (response) {
                        vm.list = response.data;
                        console.log(vm.list[0])
                    })
                },

            });

        </script>
    </body>
</html>
