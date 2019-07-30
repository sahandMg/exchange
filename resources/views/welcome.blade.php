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

        <p v-show="minAmount > 0" class="alert-danger">Minimum Amount for @{{ send }} is @{{minAmount}}</p>
        <div class="row">

                    <div class="col- btn-group">
                           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Send <span class="caret"></span>
                           </button>
                           <ul class="dropdown-menu">
                               <li v-for="(item,index) in list">
                                   <a  @click="sendCryprto(item.name)" class="link-block"  href="#">
                                       <img width="20" height="20" :src="'assets/img/icons/'+item.name+'.png'" alt="">
                                       <span style="width: 100px;padding: 10px;text-align: center" :style="'color:'+item.color"> @{{ item.name.toUpperCase() }}</span>
                                       <span>@{{ item.full_name }}</span>
                                   </a>

                               </li>

                           </ul>
                       </div>

                    <div class="col- btn-group">
                        <button style="margin: 20px" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Receive <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li v-for="(item,index) in list">
                                <a @click="receiveCryprto(item.name)" href="#">
                                    <img width="20" height="20" :src="'assets/img/icons/'+item.name+'.png'" alt="">
                                    <span style="width: 100px;padding: 10px;text-align: center" :style="'color:'+item.color"> @{{ item.name.toUpperCase() }}</span>
                                    <span>@{{ item.full_name }}</span>
                                </a>

                            </li>

                        </ul>
                    </div>
        </div>

            <div class="row">
                <div class="col-md-4">  <input  v-show="send.length>0 && receive.length>0" type="number" v-model="sendNumber"></div>
                <div class="col-md-4">-------------------></div>
                <div class="col-md-4"><input readonly  type="text" v-model="receiveNumber" placeholder="You Receive"></div>

            </div>

            <br><br>
            <div style="border:5px solid deepskyblue;width: 100%;height: 300px" class="row">

                <div class="row">
                    <div class="col-md-6"><h3 style="text-align: center"> You're Sending</h3></div>
                    <div class="col-md-6"><h3 style="text-align: center"> You're Receiving</h3></div>
                </div>
                <div class="row">

                    <div class="col-md-6">    <span>@{{ sendNumber }} x @{{ send }}</span> <img width="50" height="50" :src="'assets/img/icons/'+send+'.png'" alt=""></div>
                       <div class="col-md-6"> <span>@{{ receiveNumber }} x @{{ receive }}</span> <img width="50" height="50" :src="'assets/img/icons/'+receive+'.png'" alt=""></div>

                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <button @click='exchange' class="btn btn-lg btn-danger">Exchange</button>
                    </div>
                </div>

            </div>

            <p class="alert-success">@{{ message }}</p>

            <button @click="getStatus" class="btn btn-success">Get Transactions</button>

            {{--<table class="table table-bordered">--}}
                {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>Crypto</th>--}}
                        {{--<th>Symbol</th>--}}
                    {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                    {{--<tr v-for="(item,index) in list">--}}
                        {{--<td>--}}
                               {{--<h4 style="width: 100px;padding: 10px;text-align: center" :style="'color:'+item.color"> @{{ item.name.toUpperCase() }}</h4><span>@{{ item.full_name }}</span>--}}
                        {{--</td>--}}
                        {{--<td><img width="50" height="50" :src="'assets/img/icons/'+item.name+'.png'" alt=""></td>--}}
                    {{--</tr>--}}
                {{--</tbody>--}}
            {{--</table>--}}
        </div>

        <script>

            new Vue({

                el:".container",

                data:{
                    list:[],
                    send:'',
                    sendNumber:0,
                    receive:'',
                    receiveNumber:0,
                    minAmount:0,
                    message:''
                },
                created:function () {

                    vm = this;
                    axios.post('{{route('getCurrencies')}}').then(function (response) {
                        vm.list = response.data;
                    })
                },
                methods:{
                    sendCryprto:function (name) {
                        this.send = name;
                        if(this.receiveNumber > 0){

                            this.getReceiveNumber();
                        }
                    },
                    receiveCryprto:function (name) {
                        this.receive = name;
                        if(this.receiveNumber > 0){

                            this.getReceiveNumber();
                        }
                    },

                    getReceiveNumber:function () {
                        vm = this;
                        axios.get('{{route('getExchangeAmount')}}',{'from':vm.send,'to':vm.receive,'amount':vm.sendNumber}).then(function (response) {
                            if(response.data == 500){

                                vm.receiveNumber = NAN
                            }else{
                                vm.receiveNumber = response.data.toFixed(8);

                            }
                        })
                    },
                    exchange:function(){
                        vm = this;
                        axios.post('{{route('createTransaction')}}',{
                            'from':vm.send,'to':vm.receive,'amount':vm.sendNumber,'address':'0xf8B1392351dcf6912Af12d1365F3415620Bb44bD'
                        }).then(function (response) {

                            vm.message = response.data
                        })
                    },
                    getStatus:function () {

                        vm = this;
                        axios.post('{{route('getStatus')}}',{
                            'id':'r3683fkrakha91yl'
                        }).then(function (response) {

                            vm.message = response.data
                        })
                    }
                },
                watch:{
                    sendNumber:function (number) {
                        vm = this;
                        axios.post('{{route('getMinAmount')}}',{'from':vm.send,'to':vm.receive}).then(function (response) {
                            if(response.data == 500){

                                vm.minAmount = NAN
                            }else{
                                vm.receiveNumber = 0;
                                vm.minAmount = response.data;
                                vm.getReceiveNumber();

                            }
                        })
                    },

                }

            });

        </script>
    </body>
</html>
