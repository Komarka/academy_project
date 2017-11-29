<template>
<div id="main">
	<div v-for="product in products" :id="product.id" >
	<img :src="product.img">
<p id="des">{{product.des}}</p>
<hr>

<p id="pr"><span id="dollar">$</span><span id="pr_1">{{product.price_1}}</span><span id="pr_2">{{product.price_2}}</span></p>
<button  v-on:click="buying">GET IT</button>

	</div>
</div>
</template>
<script>
import img_1 from '../assets/1.png'
import img_2 from '../assets/2.png'
import img_3 from '../assets/3.png'
import img_4 from '../assets/4.png'
import img_5 from '../assets/5.png'
import img_6 from '../assets/6.png'
import img_7 from '../assets/7.png'
import img_8 from '../assets/8.png'
import {bus} from '../main'


	export default {
  name:'app',
  data () {
    return {
      products:[
      {id:'1',price_1:'8.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_1},
      {id:'2',price_1:'7.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_2},
      {id:'3',price_1:'4.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_3},
      {id:'4',price_1:'1.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_4},
      {id:'5',price_1:'6.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_5},
      {id:'6',price_1:'4.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_6},
      {id:'7',price_1:'2.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_7},
      {id:'8',price_1:'3.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_8},
      {id:'9',price_1:'8.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_1},
      {id:'10',price_1:'7.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_2},
      {id:'11',price_1:'3.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_3},
      {id:'12',price_1:'8.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_4},
      {id:'13',price_1:'5.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_5},
      {id:'14',price_1:'4.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_6},
      {id:'15',price_1:'0.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_7},
      {id:'16',price_1:'9.',price_2:'99',des:'Kids Moon Colorblock Footed Tights',img:img_8},






      ]
      
    }
  },
  methods:{
    buying:function(){
      bus.$emit('buy')
    }
  }
}
  
</script>
<style lang="scss">

	#main div{
		width: 219px;
		position: relative;
height: 346px;
background-color: #ffffff;
float: left;
margin-left: 14px;
margin-bottom: 10px;

#des{
	margin-left: 10px;
	width: 128px;

height: 30px;
color: #565555;
font-family: 'Roboto';
font-size: 13px;
font-weight: 700;
line-height: 17px;
}
button{
	position: absolute;
	left: 100px;
	top: 280px;

	background: #bd1e3e;
  background-image: -webkit-linear-gradient(top, #bd1e3e, #e0264b);
  background-image: -moz-linear-gradient(top, #bd1e3e, #e0264b);
  background-image: -ms-linear-gradient(top, #bd1e3e, #e0264b);
  background-image: -o-linear-gradient(top, #bd1e3e, #e0264b);
  background-image: linear-gradient(to bottom, #bd1e3e, #e0264b);
  -webkit-border-radius: 6;
  -moz-border-radius: 6;
  border-radius: 6px;
  font-family: Arial;
  color: #ffffff;
  cursor: pointer;
  font-size: 18px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  outline: none;
}
button:hover{
	background: #b83368;
  background-image: -webkit-linear-gradient(top, #b83368, #3498db);
  background-image: -moz-linear-gradient(top, #b83368, #3498db);
  background-image: -ms-linear-gradient(top, #b83368, #3498db);
  background-image: -o-linear-gradient(top, #b83368, #3498db);
  background-image: linear-gradient(to bottom, #b83368, #3498db);
  text-decoration: none;
}
#pr{
	margin-left: 20px;
	width: 19px;
height: 19px;
color: #3e3f3f;
font-family: 'Roboto';
font-size: 28px;
font-weight: 700;
line-height: 32.99px;
font-size: 18px;
}
#dollar{
	margin-right: 3px;
	width: 7px;
height: 14px;
color: #3e3f3f;
font-family: 'Roboto';
font-size: 14px;
font-weight: 700;
line-height: 14px;
}
#pr_2{
	position: absolute;
	top: 280px;
	left: 48px;
	width: 19px;
height: 14px;
color: #3e3f3f;
font-family: 'Roboto';
font-size: 12px;
font-weight: 700;
line-height: 25.29px;
padding-bottom: 300px;
}
#pr_1{
	width: 19px;
height: 14px;
color: #3e3f3f;
font-family: 'Roboto';
font-size: 29px;
font-weight: 700;
line-height: 25.29px;
padding-bottom: 300px;
}
img{
	margin-top: 5px;
	margin-left: 5px;
}
	}
	#main{
		width: 1000px;
		margin-left: 320px;
		margin-top: 10px;
	}
	

</style>