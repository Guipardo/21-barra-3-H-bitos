<!Doctype html>
<html>
    <head>
        <title>Projetão da Porra de Macaco!</title>
        <meta charset="utf-8">
        
        <?php
            include "phpComCanvas.php";
        
            //variaveis
            $nomeUsuario = returnNomeUsuario();
            $pontuacao = returnPontuacaoUsuario();
            $barraHabito = returnBarraHabito();
            
            getLembrete($barraHabito[0]);
        
            /*
            686 à 691 -> botoes html que devem usar php
            
            527/530 -> começa codigo para ler array php contendo objetos com os parametros de cada habito;
            
            a partir da linha 532 -> variavel de pontuaçao. 
            */
            
        ?>
        
        <script type="text/javascript">
            window.onload = function(){
                var canvas = document.getElementById("LookAtMyCrazyDrawing");
                var context = canvas.getContext("2d");
                canvas.width = (window.innerWidth);
                canvas.height =(window.innerHeight);
                canvas.style.display = 'block';
                canvas.style.position = 'absolute';
                canvas.style.top ='0';
                canvas.style.left = '0';
                canvas.style.backgroundColor = "rgba(201,241,253,214)";
                canvas.style.background = "linear-gradient(white, rgba(118,220,250,173))";
                canvas.style.zIndex = "-2";
                
                var canvas2 = document.getElementById("abaUser");
                var context2 = canvas2.getContext("2d");
                canvas2.width = 200;
                canvas2.height = 120;
                canvas2.style.display = 'block';
                canvas2.style.position = 'absolute';
                canvas2.style.left = "1060px";//1110px
                canvas2.style.top = "182px";//182px
                canvas2.style.backgroundColor = "white";
                canvas2.style.border = "3px solid";
                canvas2.style.cursor = "pointer";
                canvas2.style.zIndex = "-3";
                
                context2.beginPath();
                context2.moveTo(0,75);
                context2.lineTo(200, 75);
                context2.stroke();
                context2.closePath();
                
                context2.beginPath();
                context2.font = "20px Arial";
                context2.fillStyle = "black";
                context2.fillText("Configurações da conta ", 10, 45,185);
                context2.fillText("Sair", 10, 105,185);
                context2.fill();
                context2.closePath();
                
                
                
                var canvas3 = document.getElementById("setLef");
                var ctxL = canvas3.getContext("2d");
                canvas3.width = 230;
                canvas3.height = 100;
                canvas3.style.display = 'block';
                canvas3.style.position = 'absolute';
                canvas3.style.left = "160px";//1110px
                canvas3.style.top = "532px";//182px
                canvas3.style.backgroundColor = "rgba(255,255,255, 0)";
                canvas3.style.border = "0px solid";
                canvas3.style.cursor = "pointer";
                canvas3.style.zIndex = "-1";
                
                
                ctxL.beginPath();
                ctxL.fillStyle = "white";
                ctxL.strokeStyle = "black";
                ctxL.moveTo(82, 32);
                ctxL.lineTo(215, 32);
                ctxL.lineTo(215, 67);
                ctxL.lineTo(82, 67);
                ctxL.lineTo(82, 85);
                ctxL.lineTo(15, 50);
                ctxL.lineTo(82, 15);
                ctxL.lineTo(82, 32);
                
                ctxL.lineWidth = 5;
                ctxL.stroke();
                ctxL.fill();

                ctxL.closePath();
                
                var canvas4 = document.getElementById("setRig");
                var ctxR = canvas4.getContext("2d");
                canvas4.width = 230;
                canvas4.height = 100;
                canvas4.style.display = 'block';
                canvas4.style.position = 'absolute';
                canvas4.style.left = "960px";//1110px
                canvas4.style.top = "532px";//182px
                canvas4.style.backgroundColor = "rgba(255,255,255, 0)";
                canvas4.style.border = "0px solid";
                canvas4.style.cursor = "pointer";
                canvas4.style.zIndex = "-1";
                
                
                ctxR.beginPath();
                ctxR.fillStyle = "white";
                ctxR.strokeStyle = "black";
                
                ctxR.moveTo(148, 67);
                ctxR.lineTo(148, 85);
                ctxR.lineTo(215, 50);
                ctxR.lineTo(148, 15);
                ctxR.lineTo(148, 32);
                ctxR.lineTo(15, 32);
                ctxR.lineTo(15, 67);
                ctxR.lineTo(148, 67);
                
                ctxR.lineWidth = 5;
                ctxR.stroke();
                ctxR.fill();

                ctxR.closePath();
                
                
                
                
                var css = document.createElement("STYLE");
                var botoesUp = document.createTextNode("#Novo, #Editar, #Apagar, #DefLembr, #setaB, #setaCircle { background-color: rgba(20,101,245,125); color: white; font-family: Arial; text-align: center; font-size: 20px; display: block; border: 2px solid rgba(20,11,205,125); border-radius: 12px; cursor: pointer; position: absolute; top: 130px; box-shadow: 0px 0px 10px black;} button:active {background-color: rgba(10,84,222,125); color: white; transform: translateY(4px);} button:hover{ background-color: rgba(10,84,222,125);}");
                css.appendChild(botoesUp);
                document.head.appendChild(css);
                
                var novo = document.getElementById("Novo");
                novo.style.left = "105px";
                
                var edit = document.getElementById("Editar");
                edit.style.left = "370px";
                
                var apgr = document.getElementById("Apagar");
                apgr.style.left = "640px";
                
                var defL = document.getElementById("DefLembr");
                defL.style.left = "100px";
                defL.style.top = "50px";
                
                var setaB = document.getElementById("setaB");
                setaB.style.boxShadow = "0px 0px 0px";
                setaB.style.border = "0px solid";
                setaB.style.left = "1050px";
                setaB.style.top = "100px";
                
                var controlAba = true;
                
                var setaVesga = document.getElementById("setaVesga");
                
                setaB.onclick = function(){
                    if(controlAba){
                        canvas2.style.zIndex = "-1";
                        setaVesga.src = "setaBlueClick.png";
                        var inversion = setaVesga.height;
                        setaVesga.height = setaVesga.width;
                        setaVesga.width = inversion;
                                        
                        canvas2.addEventListener("mousemove", function(){posMouse(1060, 182, 1260, 302)});

                        controlAba = false;
                    }
                    else{
                        canvas2.style.zIndex = "-3";
                        setaVesga.src = "setaBlue.png";
                        inversion = setaVesga.height;
                        setaVesga.height = setaVesga.width;
                        setaVesga.width = inversion;
                        controlAba = true;
                    }
                }
                
                
                
                var setaC = document.getElementById("setaCircle");
                setaC.style.backgroundColor = "rgba(201,241,253,214)";
                setaC.style.boxShadow = "0px 0px 0px";
                setaC.style.border = "0px solid";
                setaC.style.left = "1070px";
                setaC.style.top = "280px";
                setaC.style.zIndex = "-2";
                
               /*setaC.onclick = function(){
                   listaHabitos[numHabito].reset();
                   listaHabitos[numHabito].graficoHabito();
               }*/
               
               /*setaC.addEventListener("click", function(){
                   alert("jlkjljhlhlh");
                   listaHabitos[numHabito].reset();
                   listaHabitos[numHabito].graficoHabito();
               });*/
               var resposa = innerWidth/2;
                resposa-=(1345/2);
                //alert(resposa);
                
                /////////////////////////////////
                context.beginPath();
                context.moveTo(25,5);
                context.quadraticCurveTo(resposa,5, resposa, 35); //borda superior esquerda da barra superior
                context.lineWidth = 2;
            
                context.lineTo(resposa,152);
                
                //context.moveTo(05,152);
                context.quadraticCurveTo(resposa, 182, 25, 182); //borda inferior esquerda da barra superior
                
                context.lineTo(1330, 182);//linha horizontal inferior da barra superior
               
                context.quadraticCurveTo((resposa+1345), 182, (resposa+1345), 152);// borda inferior direita da barra superior
            
                context.lineTo((resposa+1345), 35);
            
                context.quadraticCurveTo((resposa+1345), 05, 1330, 05);// borda superior direita da barra superior
            
                context.lineTo(25,05);
            
                context.stroke();
                
                context.shadowBlur = 20;
                context.shadowColor = "black";
                
                
                context.fillStyle = 'rgba(20,101,245,125)';
                context.fill();
                
                context.closePath();
                
                
                context.beginPath();
                context.font = "bold 50px Arial"; 
                context.fillStyle = "white";
                context.fillText('Habit creator', 650, 70);// faz texto da barra superior
                context.fill();
                context.closePath();
                
                context.beginPath();
                context.moveTo(1008, 05);
                context.lineTo(1008, 182);
                context.stroke();
                context.closePath();
                
                context.beginPath();
                
                context.shadowBlur = 0;
                
                context.font = "300 80px Arial"; 
                context.fillStyle = "rgba(252, 199, 59, 146)";
                context.fillText('+', 50, 170);// faz sinal de + dentro da barra superior
                context.fill();
                context.closePath();
               
                var img=document.createElement('img'); // icone de lapis
                img.src='lapisYellow.png';
                img.onload = function(){
                    context.mozImageSmoothingEnabled = false;
                    context.drawImage(img,315,115,50,50);
                }
                
                var img2=document.createElement('img'); // icone de remover
                img2.src='lixoYellow.png';
                img2.onload = function(){
                    context.mozImageSmoothingEnabled = false;
                    context.drawImage(img2,590,120,40,45);
                }
                function write(pxAndFont, color, string, x, y){ //função de escrita
                    context.beginPath();
                    context.font = pxAndFont;
                    context.fillStyle = color;
                    context.fillText(string, x, y); 
                    context.fill();
                    context.closePath();
                }
                
                
                var img3=document.createElement('img'); // icone de relogio
                img3.src='relogioYellow.png';
                img3.onload = function(){
                    context.mozImageSmoothingEnabled = false;
                    context.drawImage(img3,50,40,42, 42);
                }
                
                
                var img4=document.createElement('img'); // icone de sol
                img4.src='sunBlue.png';
                img4.onload = function(){
                    context.mozImageSmoothingEnabled = false;
                    context.drawImage(img4,805,120,56,50);
                }
                
                var img5=document.createElement('img'); // icone de lua
                img5.src='moonBlue.png';
                img5.onload = function(){
                    context.mozImageSmoothingEnabled = false;
                    context.drawImage(img5,910,120,50,50);
                }
                
                write("30px Arial", "white", "Bem vindo(a)", 1050, 55);
                
                var img6=document.createElement('img'); // icone de foto
                img6.src='lucie_Projetão.jpg';
                img6.onload = function(){
                    context.mozImageSmoothingEnabled = false;
                    context.drawImage(img6,600,510,100,133);
                }
                
                
                
                var name = document.getElementById("nameUser");
                name.innerHTML = "<?php echo $nomeUsuario?>";
                name.style.position = "absolute";
                name.style.color = "white";
                name.style.fontFamily = "Arial";
                name.style.fontSize = "40px";
                name.style.left = "1115px";
                name.style.top ="105px";
                //////////////////////////////////////////////////
                
                
                
                function habito(pxFont, color, strg, xFont, yFont, ciclo, cpX1, cpY1,largura, altura){
                    
                    this.pxFont = pxFont;
                    this.color = color;
                    this.strg = strg;
                    this.xFont = xFont;
                    this.yFont = yFont;
                    
                    this.cpX1 = cpX1;
                    this.cpY1 = cpY1;
                    
                    this.largura = largura;
                    this.altura = altura;
                    
                    var xH1 = cpX1+20;
                    var yH1 = cpY1;
                    var xV1 = cpX1;
                    var yV1 = cpY1 + 30;
                    
                     
                    var cpX2 = cpX1;
                    var cpY2 = cpY1 + altura;
                        
                    var xH2 = cpX2+20;
                    var yH2 = cpY2;
                    var xV2 = cpX2;
                    var yV2 = cpY2 - 30;
                    
                     
                    var cpX3 = cpX1 + largura;
                    var cpY3 = cpY1;
                        
                    var xH3 = cpX3 - 20;
                    var yH3 = cpY3;
                    var xV3 = cpX3;
                    var yV3 = cpY3 + 30;
                    
                    
                                         
                    var cpX4 = cpX1 + largura;
                    var cpY4 = cpY1 + altura;
                        
                    var xH4 = cpX4 - 20;
                    var yH4 = cpY4;
                    var xV4 = cpX4;
                    var yV4 = cpY4 - 30;
                    
                    
                    var listaDias = [];
                    
                    for(i=0; i<21; i++){
                        if(i%2 == 0){
                            listaDias.push("red");
                        }
                        else{
                            listaDias.push("green");
                        }
                        
                    }
                    
                    
                    
                    this.mostraCiclo = function(){
                        write(pxFont, color, ("Ciclo "+ciclo), xFont+750, yFont-15);
                        
                        
                    }
                    
                    this.retanguloHabito = function(){
                        context.beginPath();
                        //context.clearRect(xFont, yFont-50, 168, 50);
                        
                        context.shadowBlur = 0;
                        context.shadowColor = "rgba(201,241,253,214)";
                        
                        context.closePath();
                        write(pxFont, color, "Hábito", xFont, yFont-15);
                        
                        context.beginPath();
                        context.moveTo(xH1,yH1);
                        context.quadraticCurveTo(cpX1,cpY1, xV1, yV1); //lapis faz borda superior esquerda
                        
                        context.lineWidth = 4; // grossura da linha
                        context.strokeStyle = 'rgba(27, 157, 183, 99)'; // cor da linha
                        context.fillStyle = 'white';   // cor do interior
                       
                        context.lineTo(xV2, yV2); // lapis desenha linha da lateral direita
                        
                        context.quadraticCurveTo(cpX2,cpY2, xH2,yH2); //lapis desenha borda inferior esquerda
                        
                        context.lineTo(xH4, yH4); // lapis desenha linha inferior
                        
                        context.quadraticCurveTo(cpX4,cpY4, xV4, yV4); //lapis desenha borda inferior direita
                        
                        context.lineTo(xV3, yV3); // lapis desenhs linha lateral direita
                      
                        context.quadraticCurveTo(cpX3,cpY3, xH3, yH3); // lapis desenha borda superior direita
                      
                        
                        context.lineTo(xH1, yH1); //lapis termina desenhando linha superior
                        
                        context.fill();
                        context.stroke();
                        context.closePath();
                    }
                    
                    
                    this.graficoHabito = function(){
                        context.beginPath();
                        //context.clearRect(xFont, yFont-50, 168, 50);
                        
                        context.shadowBlur = 0;
                        context.shadowColor = "rgba(201,241,253,214)";
                        
                        context.closePath();
                        
                        context.beginPath();
                        context.moveTo(xH1,yH1);
                        context.quadraticCurveTo(cpX1,cpY1, xV1, yV1); //lapis faz borda superior esquerda
                        
                        context.lineWidth = 4; // grossura da linha
                        context.strokeStyle = 'rgba(27, 157, 183, 99)'; // cor da linha
                        context.fillStyle = 'white';   // cor do interior
                       
                        context.lineTo(xV2, yV2); // lapis desenha linha da lateral direita
                        
                        context.quadraticCurveTo(cpX2,cpY2, xH2,yH2); //lapis desenha borda inferior esquerda
                        
                        context.lineTo(xH4, yH4); // lapis desenha linha inferior
                        
                        context.quadraticCurveTo(cpX4,cpY4, xV4, yV4); //lapis desenha borda inferior direita
                        
                        context.lineTo(xV3, yV3); // lapis desenhs linha lateral direita
                      
                        context.quadraticCurveTo(cpX3,cpY3, xH3, yH3); // lapis desenha borda superior direita
                      
                        
                        context.lineTo(xH1, yH1); //lapis termina desenhando linha superior
                        
                        context.fill();
                        context.stroke();
                        context.closePath();
                        
                        
                        
                        context.beginPath();
                        var xQuadrado = xH1;
                        var yQuadrado = yV1+22;
                        for(i=0; i<21; i++){
                            context.fillStyle = listaDias[i];
                            context.fillRect(xQuadrado, yQuadrado,43,40);
                            context.fill();
                            xQuadrado+=43;
                        }
                        context.closePath();
                        
                        
            
                        context.beginPath();
                        context.lineWidth = 2;
                        context.strokeStyle = "black";
                        var xQuadrado = xH1;
                        var yQuadrado = yV1+22;
                        var numPos = xH1+5;
                        var num = 1
                        for(i=0; i<21; i++){
                            context.strokeRect(xQuadrado, yQuadrado,43,40);
                            context.stroke();
                            xQuadrado+=43;
                            if(i<9){
                                write("bolder 20px Arial", color,("0"+num), numPos, yV2);
                            }
                            else{
                                write("bolder 20px Arial", color, num, numPos, yV2);
                            }
                            num++
                            numPos+=43;
                        }
                        context.closePath();
                        
                        write("bolder 20px Arial", color, "Ler mais livros       Dia Atual: 14       Lembrete: 14:00       Categoria: Leitura       Dificuldade: Fácil", xH1-5, yV1);//7espaços entre os blocos de informaçao na string.
                    
                    }
                    
                    
                    
                    this.reset = function(){
                        
                        for(i=0; i<21; i++){
                            listaDias[i]=("white");
                        }
                    }
                }
                
                var ler = new habito("25px Arial","black", "Ler mais livros", 235, 330, 1, 200, 350, 950, 150);
                //ler.retanguloHabito();
                //ler.mostraCiclo();
                //ler.graficoHabito();
                
                var teste = new habito("25px Arial", "red", "Busty Buffy", 235, 330, 2, 200, 350, 950, 150);
                
                var listaHabitos = new Array();
                listaHabitos.push(teste);
                listaHabitos.push(ler);
                
                var numHabito = 0;
                listaHabitos[numHabito].retanguloHabito();
                listaHabitos[numHabito].mostraCiclo();
                listaHabitos[numHabito].graficoHabito();
                
                canvas4.onclick = function(){
                    if(numHabito<(listaHabitos.length-1)){
                        context.clearRect(100, 280, 1100, 400);
                        numHabito+=1;
                        listaHabitos[numHabito].retanguloHabito();
                        listaHabitos[numHabito].mostraCiclo();
                        listaHabitos[numHabito].graficoHabito();
                        }
                    
                    

                }
                
                canvas3.onclick = function(){
                    if(numHabito>0){
                        numHabito-=1;
                        context.clearRect(100, 280, 1100, 400);
                        listaHabitos[numHabito].retanguloHabito();
                        listaHabitos[numHabito].mostraCiclo();
                        listaHabitos[numHabito].graficoHabito();
                    }
                    
                    
                    
                }
                
                
                setaC.addEventListener("click", function(){
                   listaHabitos[numHabito].reset();
                   listaHabitos[numHabito].graficoHabito();
               });
                
                
                          
                function posMouse(x1, y1, x2, y2){
                    var mouseX = event.pageX;
                    var mouseY = event.pageY;
                    //condiçao alterada para fora do padrao, para poder invocar o else quando o mouse se aproxima da borda do canvas2
                    if (((mouseX-7)>=x1) && ((mouseX+7)<=x2) &&  ((mouseY-7)>=y1) && ((mouseY+7)<=y2)){
                        
                        if((mouseY+5)>=257){
                            
                            context2.beginPath();
                            
                            context2.clearRect(0, 0, 200, 75);
                            context2.font = "20px Arial";
                            context2.globalAlpha = 1.0;
                            context2.fillStyle = "black";
                            context2.fillText("Configurações da conta ", 10, 45,185);
                            
                            context2.clearRect(0, 75, 200, 45);
                            context2.globalAlpha = 0.5;
                            context2.fillStyle = "gray";
                            context2.fillRect(0, 75, 200, 45);
                            context2.fill();
                            context2.font = "20px Arial";
                            context2.globalAlpha = 1.0;
                            context2.fillStyle = "white";
                            context2.fillText("Sair", 10, 105,185);
                            context2.fill();
                            context2.closePath();
                        }
                        else{
                            
                            
                            context2.beginPath();
                            
                            context2.clearRect(0, 75, 200, 45);
                            context2.font = "20px Arial";
                            context2.globalAlpha = 1.0;
                            context2.fillStyle = "black";
                            context2.fillText("Sair", 10, 105,185);
                            
                            context2.clearRect(0, 0, 200, 75);
                            context2.globalAlpha = 0.5;
                            context2.fillStyle = "gray";
                            context2.fillRect(0, 0, 200, 75);
                            context2.fill();
                            context2.font = "20px Arial";
                            context2.globalAlpha = 1.0;
                            context2.fillStyle = "white";
                            context2.fillText("Configurações da conta ", 10, 45,185);
                            context2.fill();
                            context2.closePath();
                        
                        }
                        
                    }
                    
                    else{
                        //alert("sdlfjlsfjslfj");
                        
                        context2.beginPath();
                        context2.clearRect(0, 0, 200, 120);
                        context2.globalAlpha = 1.0;
                        context2.moveTo(0,75);
                        context2.lineTo(200, 75);
                        context2.stroke();
                        context2.closePath();
                
                        context2.beginPath();
                        context2.font = "20px Arial";
                        context2.fillStyle = "black";
                        context2.fillText("Configurações da conta ", 10, 45,185);
                        context2.fillText("Sair", 10, 105,185);
                        context2.fill();
                        context2.closePath();
                    }
                }
                
                
                function clickSeta(x1, y1, x2, y2,controle){
                    var mouseX = event.pageX;
                    var mouseY = event.pageY;
                    
                    if (((mouseX+10)>=x1) && ((mouseX-10)<=x2) &&  ((mouseY+10)>=y1) && ((mouseY-10)<=y2)){
                        
                        if(controle=0){
                            alert("teste");
                            controle = 1;
                        }
                        else{
                            alert("morango");
                            controle = 0;
                        }
                        
                    }
                    
                }
                
                
                // Tambem funciona canvas.addEventListener("mousemove", function(){posMouse(30, 280, 900, 430)});
                //canvas.onmousemove = function(){posMouse(30, 280, 900, 430)}
                //canvas.addEventListener("onclick", function(){clickSeta(30, 280, 900, 430,var controle = 0)});
            }
        </script>
        


    </head>
    <body>
        
        <canvas id="LookAtMyCrazyDrawing" ></canvas>
        <button id="Novo">Novo</button>
        <button id="Editar">Editar</button>
        <button id="Apagar">Apagar</button>
        <button id="DefLembr">Definir lembrete</button>
        <button id="setaB"><img src="setaBlue.png" height="50" width="45" id="setaVesga"></button>
        <button id="setaCircle"><img src="setaBlueCircle.png" height="50" width="45"></button>
        <a id="nameUser"></a>
        <canvas id="abaUser"></canvas>
        <canvas id="setRig"></canvas>
        <canvas id="setLef"></canvas>
        
    </body>
</html>