<template>
	<div id="footer">
		<img src="../assets/wall.png" id="wall">
<ul>
	<li>
		 <li   v-for="foot in footers"><a :href='foot.href' >
    {{ foot.text }}
    </a>
  </li>
	</li>
</ul>
	</div>
</template>
<script>
	export default {
  name:'app',
  data () {
    return {
    	footers:[
    	{text:'Terms of Service',href:'#service'},
    	{text:'Privacy Policy',href:'#privacy'},
    	{text:'Creative Rights Policy',href:'#creative'},
    	{text:'Contact Us',href:'#contact'},
    	{text:'Support',href:'#support'}



    	]

      }
  }
}
</script>
<style lang='scss'>
#footer{
	height: 800px;
	background: black;
	position: absolute;
		top: 2970px;
		ul{
			list-style-type: square;
			top: 0px;
			position: absolute;
			li{
				margin-left: 26px;
				display: inline-block;
				
height: 13px;

font-family: 'Roboto';
font-size: 12px;
font-weight: 700;

a{
	color: #c3c3c3;
}
a:hover{
	color:red;
}
			}
		}
		
}	
</style>