<template>
	<div id="navigation">
		<ul>
  <li   v-for="item in navItems"><a  :href='item.href' >
    {{ item.text }}
       </a>
  </li>
</ul>
	</div>
</template>
<script>
	export default{
data () {
    return {
          navItems:[
      {text:'HOME',href:'#home'},
      {text:'ABOUT US',href:'#about us'},
      {text:'CAREERS',href:'#careers',id:'third'},
  {text:'CONTACT US',href:'#contact'},
      {text:'COMPANY PROFILE',href:'#profile'},
       {text:'COMPANY REGISTRATION',href:'#reg'},
      {text:'WISH LIST',href:'#wish'}
      ]
      
    }
   
  }
	}
</script>
<style lang="scss" scoped>
		#navigation{
			width: 1600px;
			height: 47px;
			background-color: #000000;
			ul{
				margin-left: 370px;
			li{
				display: inline-block;
				margin-top: 19px;

				margin-right: 33px;
				a{
					font-family: 'Roboto';
				font-weight: 400;

					font-size: 13px;
					color: #ffffff;
				}
				a:hover{
					color: red;
				}
			}
		}
		}

	</style>