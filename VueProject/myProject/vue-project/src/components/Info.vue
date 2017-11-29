<template>
	<div id="info">
	
		<img src="../assets/fon.png">
		<h1>About</h1>
		<img  class="fash" src="../assets/fashion.png">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin sem nec leo tempus fermentum. Integer consequat, turpis eget lobortis.</p>
<div id="follow">
	<h1 id="us">Follow Us</h1>
	<div id="squ">
		<img src="../assets/face.png" >
	</div>
	<div id="squ_2">
		<img src="../assets/twit.png" >
	</div>
	<div id="squ_3">
		<img src="../assets/inst.png" >
	</div>
	<div id="squ_4">
		<img src="../assets/gog.png" >
	</div>

<div id="contact">
	<h1 id="con">CONTACTs</h1>
	<p>Phone: 1.800.555.6789</p>
<p id="p_2">Fax: 1.888.555.9876</p>
<p id="p_3">Email: letschat@11thagency.com</p>
</p>

</div>


</div>
<div id="contact">
	
</div>
	</div>
</template>
<script >
	export default {
  name:'app',
  data () {
    return {
      
          }
  },
  } 
</script>
<style lang="scss">
#contact{
	position: absolute;
	top: 0px;
	left: 350px;
	#con{
		width: 97px;
height: 24px;
color: #323232;
font-family: Roboto;
font-size: 17px;
font-weight: 700;
text-transform: uppercase;
	}
#p_2{
	margin-top: -50px;
	}
	#p_3{
	@extend #p_2;
		}
}
#squ_2{
	width: 32px;
	height: 29px;
	background-color: #df1f26;
	position: absolute;
	left: 70px;
top: 75px;
cursor: pointer;
}
#squ_2 img{
	margin-left: 9px;
	margin-top: 8px;
	cursor: pointer;
}
#squ_3{
	cursor: pointer;
	width: 32px;
	height: 29px;
	background-color: #df1f26;
	position: absolute;
	left: 110px;
top: 75px;
}
#squ_3 img{
	margin-left: 9px;
	margin-top: 8px;
}

#squ_4{
	margin-right: 10px;
	cursor: pointer;
	width: 32px;
	height: 29px;
	background-color: #df1f26;
	position: absolute;
	left: 150px;
top: 75px;
}
#squ_4 img{

	margin-left: 9px;
	margin-top: 7px;
}

#squ{
	margin-right: 10px;
	cursor: pointer;
	position: absolute;
	width: 32px;
	height: 29px;
	background-color: #df1f26;
	left: 30px;
top: 75px;
}
#squ img{
	margin-left: 11px;
	margin-top: 6px;
}
#follow{
	width: 230px;
height: 173px;
position: absolute;
left: 400px;
top: 45px;
border-left: 3px solid white;
border-right: 3px solid white;
#us{
	width: 97px;
height: 14px;
color: #323232;
font-family: Roboto;
font-size: 17px;
font-weight: 700;
text-transform: uppercase;
}
}
	#info{
		position: absolute;
		top: 2670px;
		h1{
			margin-top: 23px;
			margin-left: 58px;
			width: 58px;
height: 14px;
color: #323232;
font-family: Roboto;
font-size: 18px;
font-weight: 700;
text-transform: uppercase;
		}
		.fash{
			margin-left: 58px;
			margin-top: 15px;
		}
		p{
			margin-top: 15px;
			margin-left: 58px;

			width: 219px;
height: 61px;
color: #393939;
font-family: 'Roboto';
font-size: 12px;
font-weight: 700;
line-height: 16px;
		}
	}
</style>
