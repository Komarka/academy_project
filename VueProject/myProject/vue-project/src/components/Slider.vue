
<template>
 
<div id="test">
	<img class="girls" src="../assets/chicks.png">
	<img class="round" src="../assets/round.png">
	<img class="round_2" src="../assets/round.png">
	<img class="left" v-on:click="goLeft" src="../assets/left.png" ref="myBtn">
	<img class="right" v-on:click="goRight" src="../assets/right.png" ref="myBt">

   <transition name="slide-fade">
  <div id="anim" v-if='show'>
<div v-if='counter==1'>
     <p id="big">We provide worlds top
	 fashion for less
fashionpress. </p>
<p id="small">FashionPress the name of hi class fashion web.</p>
</div>
<div v-else-if='counter==2'>
  <p id="big">Also good shoes </p>
</div>
<div v-else-if='counter==3 '>
  <p id="big">And an exellent outfits </p>
</div>
<div v-else-if='counter==0'>
  <p id="big">And an exellent outfits </p>
</div>
<div v-else-if='counter== -1'>
  <p id="big">Also good shoes </p>
</div>
<div v-else-if='counter==-2'>
     <p id="big">We provide worlds top
	 fashion for less
fashionpress. </p>
<p id="small">FashionPress the name of hi class fashion web.</p>
</div>
</div>
</transition>
</div>

</template>
<script>
	




export default {
  name:'app',
  data () {
    return {
      counter:1,
      show:true,
      clicked:0,
     
    
  }
}, 
methods:{
	goLeft:function(){
		var timer=setTimeout(function() { var elem = this.$refs.myBtn;
            elem.click(); }.bind(this), 1000);
this.clicked+=1;

		this.show=!this.show;
		this.counter-=1;
		if(this.counter==-3){
			this.counter=3;
		}
		if(this.clicked===2){
			clearTimeout(timer);
			this.clicked=0;
		}
		
		
	},
	goRight:function(){
		var timer=setTimeout(function() { var elem = this.$refs.myBt;
            elem.click(); }.bind(this), 1000);
this.clicked+=1;

		this.show=!this.show;
		this.counter+=1;
		if(this.counter==4){
			this.counter=1;
		}
		if(this.clicked===2){
			clearTimeout(timer);
			this.clicked=0;
		}
	}

}

}

</script>
<style lang='scss' >
#test{
	position: relative;
	margin-top: -1px;
	width: 1600px;
	height: 787px;
	background: url(../assets/cover.png);
	}
	#big{
position: absolute;
left: 277px;
top: 185px;
		width: 463px;
		height: 164px;
		font-family: 'Open Sans', sans-serif;
				font-size: 51px;
		color: #ffffff;
		font-weight: 300;
		font-style: light;
	}
	#small{
		@extend #big;
		top:437px;
		left:285px;
		font-size: 17px;
	}
	.girls{
		position: absolute;
		left: 724px;
		top: 153px;
	}
	.round{
		position: absolute;
		left: 13px;
		top: 401px;
	}
	.round_2{
		position: absolute;
		
		top: 401px;
		right:26px;
	}
	.left{
		cursor: pointer;
		position: absolute;
		left: 29px;
		top: 414px;
	}
	.right{
		cursor: pointer;
		position: absolute;
		right: 42px;
		top: 415px;
	}
	.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active до версии 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
</style>