<template>
	<div id="search_area">
	<img   id="menu_opened" src="../assets/menu_opened.png" v-on:click="show_bar" >
	<transition name="fade" >
    <img v-if="!show"  class='menu_closed' id="menu_closed" src="../assets/menu_closed.png" v-on:click="show_bar"  >
      </transition>

     


<p id="s_product">SEARCH PRODUCT</p>
<input type="text" id='s_field' v-on:focus="focusing" v-on:blur="bluring" ref='input' >
<div id="square" v-on:click="rotate">
	<img  class='lupa' id="lupa" src="../assets/lupa.png" >

</div>
<div id="menu" class="menu menu_animation" >
	<div id='block'>
	<img  id='p-m' src="../assets/products-menu.png">
		<ul>
  <li   v-for="item in navigation"><a :href='item.href
  '>
    {{ item.text }}
    </a>

  </li>


 <img src="../assets/str_line.png" class="line" id="line" height="1680"  >
  </ul>
	</div>
	<div id="deliver">
		<img src="../assets/marker.png" id="marker">
		<img src="../assets/shadow.png" id="shadow">
		<h1>{{deliver}}</h1>
		<h2>{{world}}</h2>
		<h3>{{tw}}</h3>
		<h4><span>@lukebeck</span> love this theme, tons of options, lots of goodies and crazy good support.  I cant ask!
<span>about 3 hours ago</span></h4>
<h4><span>@harikumar</span> where do you get support for account issues?Do it.
<span>less than a minute ago</span></h4>
<h4><span>@crucio</span> what an incredible site!
<span>less than a minute ago</span>
</h4>

<h3 id="clients">{{clients}}</h3>
<div id='comment'>
	<span>
		{{comment}}
	</span>
	<img src="../assets/chat_ar.png" id="chat_ar">
	<img src="../assets/icon.png" id="icon">
	<span id="inc">{{inc}}</span>
</div>
	</div>
</div>
</div>
	
</template>
<script>
export default {
  name:'app',

  data () {
    return {
    	inc:'Jon Doe, Company Inc.',
    	comment:'“Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec tetur, adipisci velit, sed quia non numquam eius labore et dolore magnam ets aliquam quaerat voluptatemser.  Enim ad minimas venians amets',
    	clients:'Our Happy Clients',
    	deliver:'DELIVERING',
    	tw:'Latest From Twitter',
    	world:'WORLD WIDE',
     number:0, 
  show:true,
      navigation:[
      {text:'Man',href:'#man'},
      {text:'Women',href:'#women'},
      {text:'Fashion 2013',href:'#fashion'},
      {text:'Kids',href:'#kids'},
      {text:'Jeans',href:'#jeans'},
      {text:'Tshirt',href:'#tshirt'},
{text:'Top Fashion',href:'#man'},
{text:'Summer Collection',href:'#summer'},

{text:'Special Offer',href:'#special'}






           ]
  }
  },
  methods:{
  	focusing:function(){
  		var elem=document.getElementById('square');
  		elem.style.height='27px';
  		var elem=this.$refs.input;
  		elem.style.background='#D3C4C4';
  	},
  	bluring:function(){
 var elem=document.getElementById('square');
  		elem.style.height='29px';
  		var elem=this.$refs.input;
  		elem.style.background='#ffffff';  	},
  		rotate:function(){
  			this.number+=360;
  			document.getElementById('lupa')
    .style.transform = 'rotate('+this.number+'deg)';

  		},
  		show_bar:function(){
var line=document.getElementById('line');

line.hidden=!line.hidden;
  			this.show=!this.show;
  			var el=document.getElementById('menu');
  			el.classList.toggle('menu_animation');

  		},
  		  
  }
  } 
</script>
<style lang="scss">

#search_area{
	position: relative;
	width: 1600px;
	height: 44px;
	color: #ffffff;
	opacity: 87%;
	background: #e8e9fc;
	
	p{
		color: #df1f26;
		font-size: 14px;
		width: 121px;
		height: 12px;
		font-family: 'Roboto';
		font-style: medium;
		font-weight: 800;
		margin-left: 327px;
		margin-top: 15px;
		display: inline-block;
		margin-right: 19px;
	}
	input{
		width: 245px;
		height: 29px;
		color: '#E47B7B';
		outline:none;
	}
}
#square{
	width: 32px;
	height: 29px;
	position: absolute;
	background-color: #df1f26;
	left: 714px;
	top: 9px;
	cursor: pointer;
}	
.lupa{
	margin-top: 6px;
	margin-left: 5px;
	margin-bottom: 5px;
	transition: all 1s ease;
}
.menu_closed{
position: absolute;
right: 375px;
top: 17px;
cursor: pointer;
}
#menu_opened{
	position: absolute;
right: 375px;
top: 17px;
cursor: pointer;
}
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s
}
.fade-enter, .fade-leave-to /* .fade-leave-active до версии 2.1.8 */ {
  opacity: 0
}
.menu{
	background: #eeeeee;
width: 261px;
height: 505px;
	margin-top: 9px;
	margin-left: -270px;
transition: all .3s ease;
ul{
	padding: 0px;

	
	li{

		cursor: pointer;
	padding-left: 35px;
		margin-top:0px;
		width: 100%;
		height: 50px;
		display: block;
		font-size: 15px;
		font-family: 'Roboto';
		font-style: medium;
		font-weight: 700;
		line-height: 40px;
		list-style-type: none;
		border-bottom: 1px solid #ccc;
}
a{
	color: #333333;

	
}

	
}

}
#menu li:hover{
background-color: white;
border-right: 5px solid red;	
}


.menu_animation{
	 transform: translateX(50px+270px);
}	

#block{
	width: 262px;
	height: 39px;
	background-color: #df1f26;
}
#p-m{
margin-left: 20px;
margin-top: 13px;
}

#str_line{
	margin-left: 261px;
}
.arrows{
	position: absolute;
	top: 60px;
	left: 12px;
}
#line{
	position: absolute;
	left: 261px;
	top: 0px;
	width: 2px;
}
 #menu li:before{
	content: url('../assets/arrow.png');
	margin-right: 12px;


}
#deliver{
margin-top: 595px;
margin-left: -20px;
width: 261px;
height: 1000px;
background:#e8e5df ;
h3{
	margin-left: 25px;
	margin-top: 80px;
width: 159px;
height: 14px;
color: #d52229;
font-family: 'Roboto';
font-size: 18px;
font-weight: 700;
line-height: 20px;
}
h4{
	width: 178px;
	margin-bottom: 15px;
height: 93px;
color: #838383;
font-family: "Roboto - Medium Italic";
font-size: 13px;
font-weight: 400;
line-height: 20px;

}
h1{

	width: 196px;
height: 28px;
color: #909191;
font-family: 'Roboto';
font-size: 37px;
font-weight: 100;
margin-left: 30px;
text-transform: uppercase;
}
h2{
	width: 240px;
height: 45px;
color: #909191;
font-family: 'Roboto';
font-size: 37px;
font-weight: 800;
margin-left: 20px;
text-transform: uppercase;
}
span{
	color: #d52229;
}
}
#marker{
	margin-left: 130px;
	margin-top: 50px;
}
#shadow{
	margin-left: 30px;
	margin-top: -10px;
}
#clients{
	position: absolute;
	top: 1250px;
	
	
}
#comment{
	margin-left: 5px;
	margin-top: 50px;
	width: 221px;
height: 190px;
position: relative;
background-color: #f6f3f3;
span{
position: absolute;
top: 20px;
left: 24px;
	width: 171px;
height: 129px;
color: #747474;
font-family: "PT Sans";
font-size: 13px;
font-style: italic;
line-height: 20px;
}
#chat_ar{
	position: absolute;
	top: 180px;
	left: 65px;
}
#icon{
	position: absolute;
	top: 200px;
	left: 35px;
}
#inc{
	position: absolute;
	top:210px;
	left: 85px;
	width: 134px;
height: 12px;
color: #333333;
font-family: 'Roboto';
font-size: 13px;
font-weight: 700;
line-height: 20px;
}
}
h1,h2,h3,h4{
	margin-left: 35px;
}






</style>