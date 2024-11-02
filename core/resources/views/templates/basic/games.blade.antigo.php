
<style>
#testeTouch{
	margin: 0px;
	padding: 0px;
	border: 1px solid;
	position: absolute;
}
.pcm-game{
	width: 100%;
	height: 120vh;
	z-index: 10;
	background-color: white;
	top: 80;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	background-image: url('{{asset("/assets/img/banner-pcm.png")}}');
	background-size: 100% 100%;
	background-repeat: no-repeat;
	
}
#panel{
	top: 10;
	width: 570px !important;
	border-radius: 14px !important;
	height: 570px !important;
}
#home{
	border-radius: 8px !important;
	height: 650px !important;
	
}
#score > span , #highscore > span{
	
	
}
#score, #highscore{
	
	width: auto !important;
	display: flex !important;
  	flex-direction: column !important;
}
#score > h2, #highscore h2{
	color: white !important;
}
#board{
	top: 3 !important;
	margin-top: 5px !important;
}
.username{
	padding: 10px;
}
.sound{
	position: relative !important;
}
#panel, #home{
	position: relative !important;
	margin-bottom: 20px !important;
	border: 1px solid #ae54b0;
}
.help-button{
	position: relative !important;
	right: 0px !important;
	margin: 0px !important;
}
.panel-info-game{
	display: flex;
	align-items: center;
	justify-content: space-around;
	width: 100%;
	margin: auto;
	padding: 10px;
	flex-wrap: wrap;
}
@media (max-width: 450px) {
	body{
		overflow-y: hidden !important;
	}
	.pcm-game{
		height: auto !important;
	}
	#panel, #home{
		width: 95% !important;
		height: 450px !important;
		cursor: pointer;
	}
	#presentation{
		width: 95% !important;
	}
	#presentation-titles{
		left: 88px !important;
		font-size: 14px !important;
	}
	#presentation-character-blinky, #presentation-character-pinky, #presentation-character-inky, #presentation-character-clyde, #presentation-name-blinky, #presentation-name-pinky, #presentation-name-inky, #presentation-name-clyde{
		width: 230px !important;
		left: 100px !important;
		font-size: 16px !important;
	}
	#board, #canvas-board, #canvas-paths, #canvas-fruits, #canvas-pacman, #canvas-bubbles, #canvas-ghost-blinky, #canvas-ghost-pinky, #canvas-ghost-inky, #canvas-ghost-clyde{
		width: 100% !important;
		height: 100% !important;
	}
	#message{
		left: 70px !important;
	}
	#control-up-big{
		display: none !important;
	}
	#control-down-big{
		display: none !important;
	}
	#control-left-big{
		display: none !important;
	}
	#control-right-big{
		display: none !important;
	}
}
</style>

<div class="pcm-game">
	<canvas id="canvas-panel-title-pacman"></canvas>
	<div class="username">{{$reference->username}}</div>
	<div class="panel-info-game">
	<div>
	<div style="float: left;" id="score"><h2>1UP</h2><span>00</span></div>
	<div id="highscore"><h2>High Score</h2><span>00</span></div>
	</div>
	<div class="help-button">- help -</div>
	<a class="sound" href="javascript:void(0);" data-sound="on"><img src="/assets/img/sound-on.png" alt="" border="0"></a>
	</div>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121647007-2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			
			gtag('config', 'UA-121647007-2');
		</script>
	
		<meta property="og:image" content="https://pacman-e281c.firebaseapp.com/img/preview.png">
		<meta property="og:url" content="https://pacman-e281c.firebaseapp.com/">
		<meta property="og:description" content="Pac-Man game written in HTML5 + CSS3 + jQuery with Canvas. This WebApp is a Responsive Web Design (RWD) website.">
		<meta property="og:title" content="Minelab Oficial - Pac-Man">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
		<meta name="description" content="Pac-Man game written in HTML5 + CSS3 + jQuery with Canvas. This WebApp is a Responsive Web Design (RWD) website." />
		<meta name="keywords" content="pacman, pac-man, pac-man online, pacman online, online, online games, games, free, puzzle, Minelab Oficial, html, html5, css, css3, javascript, jquery, rwd, responsive, responsive web design, responsive web, web design, canvas, draw" />

		<link rel="stylesheet" type="text/css" href="/assets/css/pacman.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/pacman-home.css" />
	
		<script type="text/javascript" src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
		<!--<script type="text/javascript" src="js/jquery-mobile.js"></script>-->
		<script type="text/javascript" src="/assets/js/jquery-buzz.js"></script>
		
		<script type="text/javascript" src="/assets/js/game.js"></script>
		<script type="text/javascript" src="/assets/js/tools.js"></script>
		<script type="text/javascript" src="/assets/js/board.js"></script>
		<script type="text/javascript" src="/assets/js/paths.js"></script>
		<script type="text/javascript" src="/assets/js/bubbles.js"></script>
		<script type="text/javascript" src="/assets/js/fruits.js"></script>
		<script type="text/javascript" src="/assets/js/pacman.js"></script>
		<script type="text/javascript" src="/assets/js/ghosts.js"></script>
		<script type="text/javascript" src="/assets/js/home.js"></script>
		<script type="text/javascript" src="/assets/js/sound.js"></script>
		
		<script type="text/javascript">		
			USERNAME = document.querySelector(".username").innerHTML;
			function simulateKeyup(code) { 
				var e = jQuery.Event("keyup");
				e.keyCode = code;
				jQuery('body').trigger(e);
				console.log("simulateKeyup")
			}
			function simulateKeydown(code) { 
				var e = jQuery.Event("keydown");
				e.keyCode = code;
				jQuery('body').trigger(e);
			}
			
			$(document).ready(function() { 
				//$.mobile.loading().hide();
				loadAllSound();
				
				HELP_TIMER = setInterval('blinkHelp()', HELP_DELAY);
				
				initHome();
				
				$(".sound").click(function(e) { 
					e.stopPropagation();
					
					var sound = $(this).attr("data-sound");
					if ( sound === "on" ) { 
						$(".sound").attr("data-sound", "off");
						$(".sound").find("img").attr("src", "/assets/img/sound-off.png");
						GROUP_SOUND.mute();
					} else { 
						$(".sound").attr("data-sound", "on");
						$(".sound").find("img").attr("src", "/assets/img/sound-on.png");
						GROUP_SOUND.unmute();
					}
				});
				
				$(".help-button, #help").click(function(e) { 
					e.stopPropagation();
					if (!PACMAN_DEAD && !LOCK && !GAMEOVER) { 
						if ( $('#help').css("display") === "none") { 
							$('#help').fadeIn("slow");
							$(".help-button").hide();
							if ( $("#panel").css("display") !== "none") { 
								pauseGame();
							}
						} else { 
							$('#help').fadeOut("slow");
							$(".help-button").show();
						}
					}
				});
				
				$(".github,.putchu").click(function(e) { 
					e.stopPropagation();
				});
				
				$("#home").on("click touchstart", function(e) { 
					if ( $('#help').css("display") === "none") { 
						e.preventDefault();
						simulateKeydown(13);
					}
				});
				$("#control-up, #control-up-second, #control-up-big").on("mousedown touchstart", function(e) { 
					e.preventDefault();
					simulateKeydown(38);
					simulateKeyup(13);
				});
				$("#control-down, #control-down-second, #control-down-big").on("mousedown touchstart", function(e) { 
					e.preventDefault();
					simulateKeydown(40);
					simulateKeyup(13);
				});
				$("#control-left, #control-left-big").on("mousedown touchstart", function(e) { 
					e.preventDefault();
					simulateKeydown(37);
					simulateKeyup(13);
				});
				$("#control-right, #control-right-big").on("mousedown touchstart", function(e) { 
					e.preventDefault();
					simulateKeydown(39);
					simulateKeyup(13);
				});

				
				$("body").keyup(function(e) { 
					KEYDOWN = false;
				});
				
				$("body").keydown(function(e) { 
				
					if (HOME) { 
						
						initGame(true);
						
					} else { 				
						//if (!KEYDOWN) { 
							KEYDOWN = true;
							if (PACMAN_DEAD && !LOCK) { 
								erasePacman();
								resetPacman();
								drawPacman();
								
								eraseGhosts();
								resetGhosts();
								drawGhosts();
								moveGhosts();
								
								blinkSuperBubbles();
								
							} else if (e.keyCode >= 37 && e.keyCode <= 40 && !PAUSE && !PACMAN_DEAD && !LOCK) { 
								if ( e.keyCode === 39 ) { 
									movePacman(1);
								} else if ( e.keyCode === 40 ) { 
									movePacman(2);
								} else if ( e.keyCode === 37 ) { 
									movePacman(3);
								} else if ( e.keyCode === 38 ) { 
									movePacman(4);
								}
							} else if (e.keyCode === 68 && !PAUSE) { 
								/*if ( $("#canvas-paths").css("display") === "none" ) { 
									$("#canvas-paths").show();
								} else { 
									$("#canvas-paths").hide();
								}*/
							} else if (e.keyCode === 80 && !PACMAN_DEAD && !LOCK) { 
								if (PAUSE) { 
									resumeGame();
								} else { 
									pauseGame();
								}
							} else if (GAMEOVER) { 
								initHome();
							}
						//}
					}
				});
			});
		</script>
		<style>
			.pcm-body{
				width: 100%;
				height: 100vh;
			}
		</style>
		
		<div id="sound"></div>
	
		<div id="help">
			<h2>Help</h2>
			<table align="center" border="0" cellPadding="2" cellSpacing="0">
				<tbody>
					<tr><td>Arrow Left : </td><td>Move Left</td></tr>
					<tr><td>Arrow Right : </td><td>Move Right</td></tr>
					<tr><td>Arrow Down : </td><td>Move Down</td></tr>
					<tr><td>Arrow Up : </td><td>Move Up</td></tr>
					<tr><td colspan="2">&nbsp;</td></tr>
					<tr><td>P : </td><td>PAUSE</td></tr>
				</tbody>
			</table>
		</div>
	
		<div id="home">
			<h1>pac-man</h1>
			<h3>Minelab Oficial<br></h3>
			<canvas id="canvas-home-title-pacman"></canvas>
			<div id="presentation">
				<div id="presentation-titles">character &nbsp;/&nbsp; nickname</div>
				<canvas id="canvas-presentation-blinky"></canvas><div id="presentation-character-blinky">- shadow		"blinky"</div><div id="presentation-name-blinky"></div>
				<canvas id="canvas-presentation-pinky"></canvas><div id="presentation-character-pinky">- speedy		"pinky"</div><div id="presentation-name-pinky"></div>
				<canvas id="canvas-presentation-inky"></canvas><div id="presentation-character-inky">- bashful		"inky"</div><div id="presentation-name-inky"></div>
				<canvas id="canvas-presentation-clyde"></canvas><div id="presentation-character-clyde">- pokey		"clyde"</div><div id="presentation-name-clyde"></div>
			</div>
			<canvas id="trailer"></canvas>
			<div class="help-button">- help -</div>
			<a class="sound" href="javascript:void(0);" data-sound="on"><img src="/assets/img/sound-on.png" alt="" border="0"></a>
			<!-- <a class="github" target="_blank" href="https://github.com/luciopanepinto/pacman"><img src="/assets/img/github.png" alt="GitHub - Lucio PANEPINTO - Pac-Man"></a> -->
			<!-- <a class="putchu" target="_top" href="http://www.putchu.be"><img src="http://www.putchu.be/img/intro/player.png" height="95px" alt="Putchu">www.putchu.be</a> -->
		</div>
	
		<div id="panel">
			
			<!-- <a class="putchu" target="_top" href="http://www.putchu.be"><img src="http://www.putchu.be/img/intro/player.png" height="65px" alt="Putchu">www.putchu.be</a> -->
			
			
			<div id="board">
				<canvas id="canvas-board"></canvas>
				<canvas id="canvas-paths"></canvas>
				<canvas id="canvas-bubbles"></canvas>
				<canvas id="canvas-fruits"></canvas>
				<canvas id="canvas-pacman"></canvas>
				<canvas id="canvas-ghost-blinky"></canvas>
				<canvas id="canvas-ghost-pinky"></canvas>
				<canvas id="canvas-ghost-inky"></canvas>
				<canvas id="canvas-ghost-clyde"></canvas>
				<div id="control-up-big"></div>
				<div id="control-down-big"></div>
				<div id="control-left-big"></div>
				<div id="control-right-big"></div>
			</div>
			<div id="control">
				<div id="control-up"></div>
				<div id="control-up-second"></div>
				<div id="control-down"></div> 
				<div id="control-down-second"></div>
				<div id="control-left"></div>
				<div id="control-right"></div>
			</div>
			<canvas id="canvas-lifes"></canvas>
			<canvas id="canvas-level-fruits"></canvas>
			<div id="message"></div>
			
		</div>
	
		<canvas id="testeTouch"></canvas>
</div>
<script>
	window.addEventListener("keydown", function(e) {
        
        if([37, 38, 39, 40].indexOf(e.keyCode) > -1) {
            e.preventDefault();
        }
    });
	
	document.addEventListener('DOMContentLoaded',()=>{
		const tela = document.querySelector("#testeTouch");
		const context = tela.getContext('2d');
		tela.width = 854;
		tela.height = 794;
		document.querySelector('#testeTouch').style.width = window.innerWidth
		document.querySelector('#testeTouch').style.height = window.height
	})
	window.addEventListener('resize', function() {
		tela.width = window.innerWidth;
		tela.height = window.innerHeight;
    	console.log('A tela mudou de tamanho!');
	});

	//199 159 
	// 200 433
	//width: 854px;
  	//height: 794px;

	let mouseX = 0; 
	let mouseY = 0;
	let prevMouseX = 0;
	let prevMouseY = 0;
	let isMouseClicked = false;
	let canvas = document.getElementById("testeTouch");
	const context = canvas.getContext('2d');
	let linesArray = [];
	let indexInit = 0;
	let indexFinish = 0;
	

	function RenderingMouseLines(){		
		for (let i = 0; i < linesArray.length; i++) {
			context.strokeStyle = 'blue';
			context.beginPath();
			context.moveTo(linesArray[i].x, linesArray[i].y);
			context.lineTo(linesArray[i].pMousex, linesArray[i].pMouseY);
			context.stroke();
			context.lineWidth = 4;
			context.closePath();			
		}
		// Desenha a linha vermelha conectando o primeiro e o último ponto		
		// if (linesArray.length > 4) {
		// 	linesArray.shift();
		// 	linesArray.shift();
		// }
		
	}
	canvas.addEventListener('mousedown',(e)=>{		
		console.log("mouseDown")
		
		mouseX = e.clientX;
		mouseY = e.clientY;
		prevMouseX = mouseX;
		prevMouseY = mouseY;
		isMouseClicked = true;
		
		RenderingMouseLines();
	});
	canvas.addEventListener('mousemove',(e)=>{
		if (isMouseClicked) {
			prevMouseX = mouseX;
			prevMouseY = mouseY;
			mouseX = e.clientX;
			mouseY = e.clientY;
			linesArray.push({x: mouseX,y:mouseY,pMousex:prevMouseX,pMouseY:prevMouseY})
			RenderingMouseLines();
			
		}		

	});
	canvas.addEventListener('mouseup',()=>{		
		mouseX = 0;
		mouseY = 0;
		isMouseClicked = false;
		RenderingMouseLines()
		console.log("mouseup")
		
		console.log(linesArray[0].x + " " + linesArray[0].y)
		console.log(linesArray[linesArray.length - 1].pMousex + " " + linesArray[linesArray.length - 1].pMouseY)
		if (linesArray.length > 1) {
				console.log("desenhando linha vermelha")
				context.strokeStyle = 'transparent'; // Cor da linha vermelha
				context.beginPath();
				context.moveTo(linesArray[0].x, linesArray[0].y);
				context.lineTo(linesArray[linesArray.length - 1].pMousex, linesArray[linesArray.length - 1].pMouseY);
				context.stroke();
				context.closePath();
		}
		let startX = linesArray[0].x;
		let startY = linesArray[0].y;

		let endX = linesArray[linesArray.length - 1].pMousex;
		let endY = linesArray[linesArray.length - 1].pMouseY;

		let distanceX = endX - startX;
		let distanceY = endY - startY;

		let distance = Math.sqrt(distanceX * distanceX + distanceY * distanceY);

		console.log("Distância em X:", distanceX);
		console.log("Distância em Y:", distanceY);
		console.log("Distância Euclidiana:", distance);

		let lengthLineVertical = distance / 2;

		let lineVerticalInicialX = startX - distance;

		let lineVerticalFinalX = startX + distance;

		console.log("desenhando linha Vertical")
		context.strokeStyle = 'transparent'; // Cor da linha vermelha
		context.beginPath();
		context.moveTo(lineVerticalInicialX, linesArray[0].y);
		context.lineTo(lineVerticalFinalX, startY);
		context.stroke();
		context.closePath();

		let angleRad = Math.atan2(distanceY, distanceX) - Math.PI / 2;
		let angleDeg = angleRad * (180 / Math.PI);
		console.log("Ângulo em graus:", angleDeg);

		let direction = '';

		 if (angleDeg >= 0 && angleDeg < 45) {
			direction = 'baixo';
			movePacman(2)
		} else if (angleDeg >= 45 && angleDeg <= 90) {
			direction = 'esquerda';
			movePacman(3)
		}else if(angleDeg <= -0 && angleDeg > -45){
			direction = 'baixo';
			movePacman(2)
		}else if(angleDeg <= -45 && angleDeg > -90){
			direction = 'direita';
			movePacman(1)
		}else if(angleDeg <= -90 && angleDeg > -135){
			direction = 'direita';
			movePacman(1)
		}else if(angleDeg <= -135 && angleDeg > -180){
			direction = 'cima';
			movePacman(4)
		}else if(angleDeg <= -180 && angleDeg > -225){
			direction = 'cima';
			movePacman(4)
		}else if(angleDeg <= -225 && angleDeg > -270){
			direction = 'esquerda';
			movePacman(3)
		}
		console.log("Direção:", direction);
		linesArray = [];
		context.clearRect(0, 0, canvas.width, canvas.height);

	});
	canvas.addEventListener('mouseout',()=>{		
		mouseX = 0;
		mouseY = 0;
		linesArray = [];
		isMouseClicked = false;
		RenderingMouseLines()
		context.clearRect(0, 0, canvas.width, canvas.height);
		console.log("mouseout")
	});  

</script>

