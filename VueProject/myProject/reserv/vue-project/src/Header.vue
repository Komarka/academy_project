<template>
<div id='app'>
<img  class='logo' src="./assets/fashion.png">
<img src="./assets/bag.png" class="bag" >
<div class="info">
	<ul>
  <li  :id='item.li_id' v-for="item in infoItems"><a :id='item.id' :href='item.href' >
    {{ item.text }}<span v-if='item.counter'>({{item.count}})</span>
    </a>
  </li>
</ul>
</div>
<navigation></navigation>
</div>
</template>
<script>
import Navigation from './components/Navigation.vue';
	export default {
  name: 'app',
  components:{
'navigation':Navigation
  },
   data () {
    return {
          infoItems:[
      {text:'Join',href:'#join',id:'first',li_id:'li_first'},
      {text:'Sign In',href:'#sign',id:'second',li_id:'li_second'},
      {text:'Shopping Bag',href:'#bag',id:'third',li_id:'li_third',count:'0',counter:true
 }
      ]
      
    }
   
  }
  
}
</script>
<style lang="scss">

		*{
box-sizing: border-box;
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
		height: 2880px;
	}
	#app{
		.logo{
margin-left: 406px;
margin-top:29px;
margin-bottom:29px;
display: inline-block;
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
