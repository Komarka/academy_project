<template>
<div id='app'>
<img  class='logo' src="./assets/fashion.png">
<img src="./assets/bag.png" class="bag" >
<div class="info">
	<ul>
  <li  :id='item.li_id' v-for="item in infoItems"><a :id='item.id' :href='item.href' >
    {{ item.text }}<span v-if='item.counter'>({{count}})</span>
    </a>
  </li>
</ul>
</div>
<navigation></navigation>
<slider></slider>
<search></search>
<products></products>
<info></info>
<foot></foot>
</div>
</template>
<script>
import Navigation from './components/Navigation.vue';
import Slider from './components/Slider.vue';
import Search from './components/Search.vue';
import Products from './components/Products.vue';
import Info from './components/Info.vue';
import Footer from './components/Footer.vue';
import {bus} from './main'

	export default {
  name: 'app',
  components:{
'navigation':Navigation,
'slider':Slider,
'search':Search,
'products':Products,
'info':Info,
'foot':Footer,
  },
   data () {
    return {
    	count:0,
          infoItems:[
      {text:'Join',href:'#join',id:'first',li_id:'li_first'},
      {text:'Sign In',href:'#sign',id:'second',li_id:'li_second'},
      {text:'Shopping Bag',href:'#bag',id:'third',li_id:'li_third',counter:true
 }
      ]
      
    }
   
  },
 created() {
 	bus.$on('buy',function(){
 		this.count++;
 	}.bind(this))
      }  
}
</script>
<style lang="scss">
		*{
box-sizing: border-box;

	}
	body{
		background:#eeeeee;
	}
	a{
text-decoration: none;
cursor: pointer;
	}
	ul{
	height:66px;
}

	#app{
		width:1600px;
		height: 3580px;
	}
	#app{
		.logo{
margin-left: 406px;
margin-top:29px;
margin-bottom:29px;
display: inline-block;
		}
		#app{
		background:white;
		}
	}
	.bag{
		position: absolute;
		top: 37px;
		left: 1302px;
		z-index: 1000;
	}
	.info{
		margin-top: -105px;
	
		margin-left: 944px;
		
		#li_first{
			display: inline-block;
			margin-left: 36px;
			width: 66px;
			height: 81px;
			background-color: #eeeeee;
			position: relative;
			#first{
				font-size: 14px;
				text-decoration: none;
				font-family: 'Roboto';
				font-weight: 700;
				color: #555555;
				font-style: medium;
			position: absolute;
			margin-top:35px;
			margin-left: 17px;
			}
		}
		#li_second{
			display: inline-block;
			margin-left: 1px;
			width: 70px;
			height: 81px;
			background-color: #eeeeee;
			position: relative;
			#second{
				font-size: 14px;
				text-decoration: none;
				font-family: 'Roboto';
				font-weight: 700;
				color: #555555;
				font-style: medium;
			position: absolute;
			margin-top:34px;
			margin-left: 12px;
			margin-right: 12px;

			}
		}
		#li_third{
			display: inline-block;
			margin-left: 1px;
			width: 185px;
			height: 81px;
			background-color: #eeeeee;
			position: relative;
			#third{
				font-size: 14px;
				text-decoration: none;
				font-family: 'Roboto';
				font-weight: 700;
				color: #e70505;
				font-style: medium;
			position: absolute;
			margin-top:35px;
			margin-left: 17px;
			span{
				margin-left: 5px;
				color: #555555;
			}
			}
		}
		}

		



	


</style>
