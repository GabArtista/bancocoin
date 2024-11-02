<!DOCTYPE html>
<html lang="pt-Br">
<head>
<!----------------------------------------------------------------------------------------------------------- Google Analitycs Tag -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121647007-2"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());
				
				gtag('config', 'UA-121647007-2');
			</script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:image" content="https://pacman-e281c.firebaseapp.com/img/preview.png">
	<meta property="og:url" content="https://pacman-e281c.firebaseapp.com/">
	<meta property="og:description" content="Pac-Man game written in HTML5 + CSS3 + jQuery with Canvas. This WebApp is a Responsive Web Design (RWD) website.">
	<meta property="og:title" content="Minelab Oficial - Pac-Man">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="description" content="Pac-Man game written in HTML5 + CSS3 + jQuery with Canvas. This WebApp is a Responsive Web Design (RWD) website." />
	<meta name="keywords" content="pacman, pac-man, pac-man online, pacman online, online, online games, games, free, puzzle, Minelab Oficial, html, html5, css, css3, javascript, jquery, rwd, responsive, responsive web design, responsive web, web design, canvas, draw" />
	<link rel="stylesheet" type="text/css" href="/assets/css/pacmancopy.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/pacManUpdate.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/pacman-homecopy.css" />
	<script type="text/javascript" src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/jquery-buzz.js"></script>
	<script type="text/javascript" src="/assets/js/gamec.js"></script>
	<script type="text/javascript" src="/assets/js/toolsc.js"></script>
	<script type="text/javascript" src="/assets/js/boardc.js"></script>
	<script type="text/javascript" src="/assets/js/pathsc.js"></script>
	<script type="text/javascript" src="/assets/js/bubblesc.js"></script>
	<script type="text/javascript" src="/assets/js/fruitsc.js"></script>
	<script type="text/javascript" src="/assets/js/pacmanc.js"></script>
	<script type="text/javascript" src="/assets/js/ghostsc.js"></script>
	<script type="text/javascript" src="/assets/js/homec.js"></script>
	<script type="text/javascript" src="/assets/js/soundc.js"></script>
	<script type="text/javascript" src="/assets/js/gameResourcec.js" defer></script>
	<title>Jogo do Pac-Man</title>

</head>
<body>
<script type="text/javascript">
	atOptions = {
		'key' : '19ebcc5dae86e968ff391059fb3cd326',
		'format' : 'iframe',
		'height' : 50,
		'width' : 320,
		'params' : {}
	};
</script>
<script type="text/javascript" src="//www.topcreativeformat.com/19ebcc5dae86e968ff391059fb3cd326/invoke.js"></script>
	<a class="sound" href="javascript:void(0);" data-sound="on"><img src="/assets/img/sound-on.png" alt="" border="0"></a>
	<div class="gameInformation">
		<canvas class="esconder" id="tittleGame">InfoGame</canvas>
		<h3 	class="userName" id="username">{{$reference->username}}</h3>
		<div class="scoreGame">
			<div class="pontuationGame" id="score">
				<h2 class="textStandard">1 Up</h2>
				<span class="textStandard" id="pontuacaoUsuario">00</span>
			</div>
			<div class="pontuationGame" id="highscore">
				<h2 class="textStandard">High Score</h2>
				<span class="textStandard">00</span>
			</div>
			<div class="autoFalante">
				<audio controls id="speakCharacterAudio1">
					<source id="speakCharacter1" src="/assets/images/pacDoidao.mp3" type="audio/mp3">
				</audio>
				<audio controls id="speakCharacterAudio2">
					<source id="speakCharacter2" src="/assets/images/amarelinhoDoidao.mp3" type="audio/mp3">
				</audio>
				<audio controls id="speakCharacterAudio3">
					<source id="speakCharacter3" src="/assets/images/amarelinhoVaza.mp3" type="audio/mp3">
				</audio>
				<audio controls id="speakCharacterAudio4">
					<source id="speakCharacter4" src="/assets/images/temUmaPastilha.mp3" type="audio/mp3">
				</audio>
				<audio controls id="speakCharacterAudio5">
					<source id="speakCharacter5" src="/assets/images/yourParents.mp3" type="audio/mp3">
				</audio>
				</audio>
				<audio controls id="speakCharacterAudio6">
					<source id="speakCharacter5" src="/assets/images/youAreDeadPac.mp3" type="audio/mp3">
				</audio>
				<audio controls id="speakCharacterAudio7">
					<source id="speakCharacter5" src="/assets/images/estouEncrencado.mp3" type="audio/mp3">
				</audio>
				<audio controls id="speakCharacterAudio8">
					<source id="speakCharacter5" src="/assets/images/endGameWin.mp3" type="audio/mp3">
				</audio>
				</audio>
				<audio controls id="speakCharacterAudio9">
					<source id="speakCharacter5" src="/assets/images/dontEatWe.mp3" type="audio/mp3">
				</audio>
				<audio controls loop id="speakCharacterAudio10">
					<source id="speakCharacter5" src="/assets/images/pacManEffect.mp3" type="audio/mp3">
				</audio>
			</div>
		</div>
	</div>
	<section class="gameContent" id="panel">
		<div class="leftGame">
			<div class="lifeGame">
				<canvas class="componnentsLifeGame" id="canvas-lifes"></canvas>
				<canvas class="componnentsFruitGame" id="canvas-level-fruits"></canvas>
			</div>
			<div class="gameStart" id="home">
				<canvas class="presentationName" id="canvas-home-title-pacman">NOME DINAMICO</canvas>
				<div class="characterPresentation" id="presentation">
					<div class="gamerBox" id="presentation-titles">character &nbsp;/&nbsp; nickname</div>
					<div class="characterBox">
						<canvas class="ghostCharacter" id="canvas-presentation-blinky"></canvas>
						<div class="nameGhost" id="presentation-character-blinky">- Shadow		"Blinky"</div>
						<div class="nameGhostDynamic" id="presentation-name-blinky"></div>
					</div>
					<div class="characterBox">
						<canvas class="ghostCharacter" id="canvas-presentation-pinky"></canvas>
						<div class="nameGhost" id="presentation-character-pinky">- Speedy		"Pinky"</div>
						<div class="nameGhostDynamic" id="presentation-name-pinky"></div>
					</div>
					<div class="characterBox">
						<canvas class="ghostCharacter" id="canvas-presentation-inky"></canvas>
						<div class="nameGhost" id="presentation-character-inky">- Bashful		"Inky"</div>
						<div class="nameGhostDynamic" id="presentation-name-inky"></div>
					</div>
					<div class="characterBox">
						<canvas class="ghostCharacter" id="canvas-presentation-clyde"></canvas>
						<div class="nameGhost" id="presentation-character-clyde">- Pokey		"Clyde"</div>
						<div class="nameGhostDynamic" id="presentation-name-clyde"></div>
					</div>
					<canvas class="trailerSreen" id="trailer"></canvas>
				</div>
			</div>
			<div class="gameCanvas" id="board">
				<canvas class="canvasScreen" id="canvas-board"></canvas>
				<canvas class="canvasScreen" id="canvas-paths"></canvas>
				<canvas class="canvasScreen" id="canvas-bubbles"></canvas>
				<canvas class="canvasScreen" id="canvas-fruits"></canvas>
				<canvas class="canvasScreen" id="canvas-pacman"></canvas>
				<canvas class="canvasScreen" id="canvas-ghost-blinky"></canvas>
				<canvas class="canvasScreen" id="canvas-ghost-pinky"></canvas>
				<canvas class="canvasScreen" id="canvas-ghost-inky"></canvas>
				<canvas class="canvasScreen" id="canvas-ghost-clyde"></canvas>
				<canvas class="canvasScreen interactiveCanvas" id="testeTouch"></canvas>

				<div id="control">
					<div id="control-up"></div>
					<div id="control-up-second"></div>
					<div id="control-down"></div> 
					<div id="control-down-second"></div>
					<div id="control-left"></div>
					<div id="control-right"></div>
				</div>
			</div>
			<div class="messagemGameBox" id="message"></div>
		</div>
		<div class="helpMe" id="help">
			<h1 class="titlePresentation">pac-man</h1>
			<h3 class="creatorPresentation">Minelab Oficial<br></h3>
			<h2 class="textStandard">Help</h2>
			<table class="tableMove">
				<tbody>
					<tr>
						<td class="tableTextLeft">Arrow Left :</td>
						<td class="tableTextRight">Move Left</td>
					</tr>
					<tr>
						<td class="tableTextLeft">Arrow Right :</td>
						<td class="tableTextRight">Move Right</td>
					</tr>
					<tr>
						<td class="tableTextLeft">Arrow Down :</td>
						<td class="tableTextRight">Move Down</td>
					</tr>
					<tr>
						<td class="tableTextLeft">Arrow Up :</td>
						<td class="tableTextRight">Move Up</td>
					</tr>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td class="tableTextLeft">P :</td>
						<td class="tableTextRight">PAUSE</td>
					</tr>
				</tbody>
				
			</table>
		</div>
	</section>
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    let audFundo = document.getElementById('speakCharacterAudio10');
    audFundo.volume = 0.1;
	document.body.addEventListener("touchstart", function() {
		audFundo.play();
    });
    document.body.addEventListener("click", function() {
        audFundo.play();
    });
    document.body.addEventListener("keydown", function() {
        audFundo.play();
    });
});

USERNAME = document.querySelector("#username").innerHTML;


		
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
				
				// HELP_TIMER = setInterval('blinkHelp()', HELP_DELAY);
				
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


				$("body").mousedown(function() {
					handleMouseEvent();
				});


				$("body").on("touchstart", function() {
					handleTouchEvent();
				});

				
				function handleMouseEvent() {
					if (HOME) { 
						initGame(true);
					} else { 
						handleOtherActions();
					}
				}

				function handleTouchEvent() {
					if (HOME) { 
						initGame(true);
					} else { 
						handleOtherActions();
					}
				}

				function handleOtherActions() {
					if (PACMAN_DEAD && !LOCK) { 
						erasePacman();
						resetPacman();
						drawPacman();
						eraseGhosts();
						resetGhosts();
						drawGhosts();
						moveGhosts();
						blinkSuperBubbles();
						

					} else if (!PAUSE && !PACMAN_DEAD && !LOCK) { 


					} else if (PAUSE && !PACMAN_DEAD && !LOCK) { 
						resumeGame();
					} else if (GAMEOVER) { 
						initHome();
					}
				}

				
				$("body").keydown(function(e) { 
	
					if (HOME) { 
						
						initGame(true);
						playAudioAtScore(0, 9);
						
					} else if (!KEYDOWN) { 
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


			document.addEventListener('DOMContentLoaded', () => {
				const tela = document.getElementById("testeTouch");
				const context = tela.getContext('2d');

				const board = document.getElementById('board');
				let calcBoard = [];

				function calcMedBoard() {
					calcBoard = [board.offsetWidth * 1, board.offsetHeight * 1];
				}

				calcMedBoard();

				tela.width = calcBoard[0];
				tela.height = calcBoard[1];

				window.addEventListener('resize', function() {
					calcMedBoard();
					tela.width = calcBoard[0];
					tela.height = calcBoard[1];
					console.log('A tela mudou de tamanho!');
				});
			});

// --------------------------------------------------------------------------------------------------

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

	function drawLines(context, linesArray) {
		for (let i = 0; i < linesArray.length; i++) {
			context.strokeStyle = 'white';
			context.beginPath();
			context.moveTo(linesArray[i].x, linesArray[i].y);
			context.lineTo(linesArray[i].pTouchX, linesArray[i].pTouchY);
			context.stroke();
			context.lineWidth = 4;
			context.closePath();
		}
	}

	function calculateAngleAndDirection(distanceX, distanceY) {
		let angleRad = Math.atan2(distanceY, distanceX) - Math.PI / 2;
		let angleDeg = angleRad * (180 / Math.PI);
		let direction = '';

		if(PACMAN_DEAD == false){
			
			if (angleDeg >= 0 && angleDeg < 45) {
				direction = 'baixo';
				movePacman(2);
			} else if (angleDeg >= 45 && angleDeg <= 90) {
				direction = 'esquerda';
				movePacman(3);
			} else if (angleDeg <= -0 && angleDeg > -45) {
				direction = 'baixo';
				movePacman(2);
			} else if (angleDeg <= -45 && angleDeg > -90) {
				direction = 'direita';
				movePacman(1);
			} else if (angleDeg <= -90 && angleDeg > -135) {
				direction = 'direita';
				movePacman(1);
			} else if (angleDeg <= -135 && angleDeg > -180) {
				direction = 'cima';
				movePacman(4);
			} else if (angleDeg <= -180 && angleDeg > -225) {
				direction = 'cima';
				movePacman(4);
			} else if (angleDeg <= -225 && angleDeg > -270) {
				direction = 'esquerda';
				movePacman(3);
			}
		}


		console.log("Direção:", direction);
	}



	function RenderingMouseLines(){		
		for (let i = 0; i < linesArray.length; i++) {
			context.strokeStyle = 'white';
			context.beginPath();
			context.moveTo(linesArray[i].x, linesArray[i].y);
			context.lineTo(linesArray[i].pMousex, linesArray[i].pMouseY);
			context.stroke();
			context.lineWidth = 4;
			context.closePath();			
		}

		
	}

	canvas.addEventListener('mousedown', (e) => {		
		let rect = canvas.getBoundingClientRect();
		mouseX = e.clientX - rect.left;
		mouseY = e.clientY - rect.top;
		prevMouseX = mouseX;
		prevMouseY = mouseY;
		isMouseClicked = true;
		RenderingMouseLines();
	});

	canvas.addEventListener('mousemove', (e) => {
		if (isMouseClicked) {
			let rect = canvas.getBoundingClientRect();
			prevMouseX = mouseX;
			prevMouseY = mouseY;
			mouseX = e.clientX - rect.left;
			mouseY = e.clientY - rect.top;
			linesArray.push({ x: mouseX, y: mouseY, pMousex: prevMouseX, pMouseY: prevMouseY });
			RenderingMouseLines();
		}
	});

	canvas.addEventListener('mouseup',()=>{		
		mouseX = 0;
		mouseY = 0;
		isMouseClicked = false;
		RenderingMouseLines()
		console.log("mouseup")
		
		
		if (linesArray.length > 1) {
				console.log("desenhando linha vermelha")
				context.strokeStyle = 'transparent';
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
		context.strokeStyle = 'transparent'; 
		context.beginPath();
		context.moveTo(lineVerticalInicialX, linesArray[0].y);
		context.lineTo(lineVerticalFinalX, startY);
		context.stroke();
		context.closePath();

		let angleRad = Math.atan2(distanceY, distanceX) - Math.PI / 2;
		let angleDeg = angleRad * (180 / Math.PI);
		console.log("Ângulo em graus:", angleDeg);

		if(PACMAN_DEAD == false){
			
			if (angleDeg >= 0 && angleDeg < 45) {
				direction = 'baixo';
				movePacman(2);
			} else if (angleDeg >= 45 && angleDeg <= 90) {
				direction = 'esquerda';
				movePacman(3);
			} else if (angleDeg <= -0 && angleDeg > -45) {
				direction = 'baixo';
				movePacman(2);
			} else if (angleDeg <= -45 && angleDeg > -90) {
				direction = 'direita';
				movePacman(1);
			} else if (angleDeg <= -90 && angleDeg > -135) {
				direction = 'direita';
				movePacman(1);
			} else if (angleDeg <= -135 && angleDeg > -180) {
				direction = 'cima';
				movePacman(4);
			} else if (angleDeg <= -180 && angleDeg > -225) {
				direction = 'cima';
				movePacman(4);
			} else if (angleDeg <= -225 && angleDeg > -270) {
				direction = 'esquerda';
				movePacman(3);
			}
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

//-------------------------------------------------------------------------------------------------------------- 


let touchStartX = 0;
let touchStartY = 0;
let touchEndX = 0;
let touchEndY = 0;
let isTouching = false;

function RenderingTouchLines(){      
    for (let i = 0; i < linesArray.length; i++) {
        context.strokeStyle = 'white';
        context.beginPath();
        context.moveTo(linesArray[i].x, linesArray[i].y);
        context.lineTo(linesArray[i].pTouchX, linesArray[i].pTouchY);
        context.stroke();
        context.lineWidth = 4;
        context.closePath();            
    }
}

canvas.addEventListener('touchstart', (e) => {       
    let rect = canvas.getBoundingClientRect();
    touchStartX = e.touches[0].clientX - rect.left;
    touchStartY = e.touches[0].clientY - rect.top;
    isTouching = true;
});

canvas.addEventListener('touchmove', (e) => {
    e.preventDefault();
    if (isTouching) {
        let rect = canvas.getBoundingClientRect();
        let touchX = e.touches[0].clientX - rect.left;
        let touchY = e.touches[0].clientY - rect.top;
		touchEndX = e.touches[0].clientX - rect.left;
        touchEndY = e.touches[0].clientY - rect.top;
		let distanceX = touchEndX - touchStartX;
        let distanceY = touchEndY - touchStartY;
        
        linesArray.push({ x: touchX, y: touchY, pTouchX: touchStartX, pTouchY: touchStartY });
		calculateAngleAndDirection(distanceX, distanceY);

        touchStartX = touchX;
        touchStartY = touchY;

        context.clearRect(0, 0, canvas.width, canvas.height);

        RenderingTouchLines();
    }       
});



canvas.addEventListener('touchend', () => {       
    mouseX = 0;
    mouseY = 0;
    isTouching = false;
    linesArray = [];
    context.clearRect(0, 0, canvas.width, canvas.height); 
    console.log("touchend");
});

canvas.addEventListener('touchcancel', () => {     
    mouseX = 0;
    mouseY = 0;
    isTouching = false;
    RenderingTouchLines();
    console.log("touchcancel");
});

canvas.addEventListener('touchleave', () => {      
    mouseX = 0;
    mouseY = 0;
    isTouching = false;
    RenderingTouchLines();
    console.log("touchleave");
    
});


</script>
</html>