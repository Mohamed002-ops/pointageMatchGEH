<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/matchme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>match play</title>
    <script src="mai"></script>
</head>
<body class="body">
    <h1 class="h1">BIENVENU DANS <u style="text-decoration: underline rgb(52, 52, 121);">MATCHME</u></h1>
    <button class="boutgame">Noter</button>
    <button class="bouthide">Cacher le score</button>
    <button class="boutshow">Afficher le score</button>



    <form action="../PHP/resultat.php" method="post">
        
        <div class="match">
            <!-- <p class="label">Calculer ici le score de votre match</p> -->
            <div class="team">
                <div class="teamname">
                <div class="team1"><?php echo $_POST['teamAname'];?></div> <span id="tAn" class="tAn">0</span>
                </div>
                <div class="player">
                    <div class="playername"><div class="pl">
                        <select name="" id="">
                            <option value=""><?php echo $_POST['playerA1'];?>(C)</option>
                            <option value=""><?php echo $_POST['playerA2'];?></option>
                            <option value=""><?php echo $_POST['playerA3'];?></option>
                            <option value=""><?php echo $_POST['playerA4'];?></option>
                            <option value=""><?php echo $_POST['playerA5'];?></option>
                            <option value=""><?php echo $_POST['playerA6'];?></option>
                            <option value=""><?php echo $_POST['playerA7'];?></option>
                            <option value=""><?php echo $_POST['playerA8'];?></option>
                        </select>
                    </div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeA1(nA1,tA, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeA1(nA1,tA, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeA1(nA1,tA, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeA1(nA1,tA, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeA1(nA1,tA, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeA1(nA1,tA, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeA1(nA1,tA, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeA1(nA1,tA, -40)"></div>
                        </div><span class="points" id="npA1">0</span>
                    </div>
                    <div class="playername"><div class="pl">
                    <select name="" id="">
                            <option value=""><?php echo $_POST['playerA1'];?></option>
                            <option value=""><?php echo $_POST['playerA2'];?></option>
                            <option value=""><?php echo $_POST['playerA3'];?></option>
                            <option value=""><?php echo $_POST['playerA4'];?></option>
                            <option value=""><?php echo $_POST['playerA5'];?></option>
                            <option value=""><?php echo $_POST['playerA6'];?></option>
                            <option value=""><?php echo $_POST['playerA7'];?></option>
                            <option value=""><?php echo $_POST['playerA8'];?></option>
                        </select>
                    </div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeA2(nA2,tA, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeA2(nA2,tA, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeA2(nA2,tA, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeA2(nA2,tA, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeA2(nA2,tA, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeA2(nA2,tA, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeA2(nA2,tA, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeA2(nA2,tA, -40)"></div>
                        </div><span class="points" id="npA2">0</span>
                    </div>
                    <div class="playername"><div class="pl">
                    <select name="" id="">
                            <option value=""><?php echo $_POST['playerA1'];?></option>
                            <option value=""><?php echo $_POST['playerA2'];?></option>
                            <option value=""><?php echo $_POST['playerA3'];?></option>
                            <option value=""><?php echo $_POST['playerA4'];?></option>
                            <option value=""><?php echo $_POST['playerA5'];?></option>
                            <option value=""><?php echo $_POST['playerA6'];?></option>
                            <option value=""><?php echo $_POST['playerA7'];?></option>
                            <option value=""><?php echo $_POST['playerA8'];?></option>
                        </select>
                    </div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeA3(nA3,tA, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeA3(nA3,tA, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeA3(nA3,tA, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeA3(nA3,tA, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeA3(nA3,tA, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeA3(nA3,tA, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeA3(nA3,tA, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeA3(nA3,tA, -40)"></div>
                        </div><span class="points" id="npA3">0</span>
                    </div>
                    <div class="playername"><div class="pl">
                    <select name="" id="">
                            <option value=""><?php echo $_POST['playerA1'];?></option>
                            <option value=""><?php echo $_POST['playerA2'];?></option>
                            <option value=""><?php echo $_POST['playerA3'];?></option>
                            <option value=""><?php echo $_POST['playerA4'];?></option>
                            <option value=""><?php echo $_POST['playerA5'];?></option>
                            <option value=""><?php echo $_POST['playerA6'];?></option>
                            <option value=""><?php echo $_POST['playerA7'];?></option>
                            <option value=""><?php echo $_POST['playerA8'];?></option>
                        </select>
                    </div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeA4(nA4,tA, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeA4(nA4,tA, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeA4(nA4,tA, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeA4(nA4,tA, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeA4(nA4,tA, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeA4(nA4,tA, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeA4(nA4,tA, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeA4(nA4,tA, -40)"></div>
                        </div><span class="points" id="npA4">0</span>
                    </div>
                    <!-- <div class="playername"><div class="pl">playerA5</div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeA5(nA5,tA, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeA5(nA5,tA, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeA5(nA5,tA, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeA5(nA5,tA, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeA5(nA5,tA, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeA5(nA5,tA, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeA5(nA5,tA, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeA5(nA5,tA, -40)"></div>
                        </div>
                    </div><span class="points" id="npA5">0</span>
                    <div class="playername"><div class="pl">playerA6</div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeA6(nA6,tA, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeA6(nA6,tA, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeA6(nA6,tA, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeA6(nA6,tA, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeA6(nA6,tA, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeA6(nA6,tA, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeA6(nA6,tA, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeA6(nA6,tA, -40)"></div>
                        </div>
                    </div><span class="points" id="npA6">0</span> -->
                </div>
            </div>
            <div class="team">
                <div class="teamname">
                <div class="team2"><?php echo $_POST['teamBname'];?></div> <span id="tBn" class="tBn">0</span>
                </div>
                <div class="player">
                    <div class="playername"><div class="pl">
                        <select name="" id="">
                            <option value=""><?php echo $_POST['playerB1'];?>(C)</option>
                            <option value=""><?php echo $_POST['playerB2'];?></option>
                            <option value=""><?php echo $_POST['playerB3'];?></option>
                            <option value=""><?php echo $_POST['playerB4'];?></option>
                            <option value=""><?php echo $_POST['playerB5'];?></option>
                            <option value=""><?php echo $_POST['playerB6'];?></option>
                            <option value=""><?php echo $_POST['playerB7'];?></option>
                            <option value=""><?php echo $_POST['playerB8'];?></option>
                        </select>
                    </div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeB1(nB1,tB, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeB1(nB1,tB, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeB1(nB1,tB, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeB1(nB1,tB, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeB1(nB1,tB, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeB1(nB1,tB, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeB1(nB1,tB, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeB1(nB1,tB, -40)"></div>
                        </div><span class="points" id="npB1">0</span>
                    </div>
                    <div class="playername"><div class="pl">
                    <select name="" id="">
                            <option value=""><?php echo $_POST['playerB1'];?></option>
                            <option value=""><?php echo $_POST['playerB2'];?></option>
                            <option value=""><?php echo $_POST['playerB3'];?></option>
                            <option value=""><?php echo $_POST['playerB4'];?></option>
                            <option value=""><?php echo $_POST['playerB5'];?></option>
                            <option value=""><?php echo $_POST['playerB6'];?></option>
                            <option value=""><?php echo $_POST['playerB7'];?></option>
                            <option value=""><?php echo $_POST['playerB8'];?></option>
                        </select>
                    </div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeB2(nB2,tB, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeB2(nB2,tB, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeB2(nB2,tB, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeB2(nB2,tB, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeB2(nB2,tB, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeB2(nB2,tB, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeB2(nB2,tB, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeB2(nB2,tB, -40)"></div>
                        </div><span class="points" id="npB2">0</span>
                    </div>
                    <div class="playername"><div class="pl">
                    <select name="" id="">
                            <option value=""><?php echo $_POST['playerB1'];?></option>
                            <option value=""><?php echo $_POST['playerB2'];?></option>
                            <option value=""><?php echo $_POST['playerB3'];?></option>
                            <option value=""><?php echo $_POST['playerB4'];?></option>
                            <option value=""><?php echo $_POST['playerB5'];?></option>
                            <option value=""><?php echo $_POST['playerB6'];?></option>
                            <option value=""><?php echo $_POST['playerB7'];?></option>
                            <option value=""><?php echo $_POST['playerB8'];?></option>
                        </select>
                    </div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeB3(nB3,tB, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeB3(nB3,tB, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeB3(nB3,tB, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeB3(nB3,tB, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeB3(nB3,tB, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeB3(nB3,tB, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeB3(nB3,tB, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeB3(nB3,tB, -40)"></div>
                        </div><span class="points" id="npB3">0</span>
                    </div>
                    <div class="playername"><div class="pl">
                    <select name="" id="">
                            <option value=""><?php echo $_POST['playerB1'];?></option>
                            <option value=""><?php echo $_POST['playerB2'];?></option>
                            <option value=""><?php echo $_POST['playerB3'];?></option>
                            <option value=""><?php echo $_POST['playerB4'];?></option>
                            <option value=""><?php echo $_POST['playerB5'];?></option>
                            <option value=""><?php echo $_POST['playerB6'];?></option>
                            <option value=""><?php echo $_POST['playerB7'];?></option>
                            <option value=""><?php echo $_POST['playerB8'];?></option>
                        </select>
                    </div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeB4(nB4,tB, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeB4(nB4,tB, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeB4(nB4,tB, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeB4(nB4,tB, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeB4(nB4,tB, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeB4(nB4,tB, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeB4(nB4,tB, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeB4(nB4,tB, -40)"></div>
                        </div><span class="points" id="npB4">0</span>
                    </div>
                    <!-- <div class="playername"><div class="pl">playerB5</div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeB5(nB5,tB, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeB5(nB5,tB, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeB5(nB5,tB, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeB5(nB5,tB, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeB5(nB5,tB, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeB5(nB5,tB, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeB5(nB5,tB, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeB5(nB5,tB, -40)"></div>
                        </div>
                    </div><span class="points" id="npB5">0</span>
                    <div class="playername"><div class="pl">playerB6</div>
                        <div class="teamnotem">
                            <div class="markm"><input type="button" id="bp+10A1" value="+10" onclick="changeB6(nB6,tB, 10)"></div>
                            <div class="markm"><input type="button" id="bp+20A1" value="+20" onclick="changeB6(nB6,tB, 20)"></div>
                            <div class="markm"><input type="button" id="bp+30A1" value="+30" onclick="changeB6(nB6,tB, 30)"></div>
                            <div class="markm"><input type="button" id="bp+40A1" value="+40" onclick="changeB6(nB6,tB, 40)"></div>
                            <div class="markm"><input type="button" id="bp-10A1" value="-10" onclick="changeB6(nB6,tB, -10)"></div>
                            <div class="markm"><input type="button" id="bp-20A1" value="-20" onclick="changeB6(nB6,tB, -20)"></div>
                            <div class="markm"><input type="button" id="bp-30A1" value="-30" onclick="changeB6(nB6,tB, -30)"></div>
                            <div class="markm"><input type="button" id="bp-40A1" value="-40" onclick="changeB6(nB6,tB, -40)"></div>
                        </div>
                    </div><span class="points" id="npB6">0</span> -->
                </div>
            </div>
            </div>
            </div>
    
        </div>
    </form>

<!-- --------------------------------------------------------------------------------------------------------------------------- -->
    <div class="note">
        <div class="teamnote">
            <div class="mark"><input type="button" id="TA1+10" value="+10" onclick="changeCA(tA, 10)"></div>
            <div class="mark"><input type="button" id="TA1+20" value="+20" onclick="changeCA(tA, 20)"></div>
            <div class="mark"><input type="button" id="TA1+30" value="+30" onclick="changeCA(tA, 30)"></div>
            <div class="mark"><input type="button" id="TA1+40" value="+40" onclick="changeCA(tA, 40)"></div>
            <div class="mark"><input type="button" id="TA1-10" value="-10" onclick="changeCA(tA, -10)"></div>
            <div class="mark"><input type="button" id="TA1-20" value="-20" onclick="changeCA(tA, -20)"></div>
            <div class="mark"><input type="button" id="TA1-30" value="-30" onclick="changeCA(tA, -30)"></div>
            <div class="mark"><input type="button" id="TA1-40" value="-40" onclick="changeCA(tA, -40)"></div>
        </div>
        <div class="teamnote">
            <div class="mark"><input type="button" id="TB1+10" value="+10" onclick="changeCB(tB, 10)"></div>
            <div class="mark"><input type="button" id="TB1+20" value="+20" onclick="changeCB(tB, 20)"></div>
            <div class="mark"><input type="button" id="TB1+30" value="+30" onclick="changeCB(tB, 30)"></div>
            <div class="mark"><input type="button" id="TB1+40" value="+40" onclick="changeCB(tB, 40)"></div>
            <div class="mark"><input type="button" id="TB1-10" value="-10" onclick="changeCB(tB, -10)"></div>
            <div class="mark"><input type="button" id="TB1-20" value="-20" onclick="changeCB(tB, -20)"></div>
            <div class="mark"><input type="button" id="TB1-30" value="-30" onclick="changeCB(tB, -30)"></div>
            <div class="mark"><input type="button" id="TB1-40" value="-40" onclick="changeCB(tB, -40)"></div>
        </div>
    </div>
    <!-- ======================================================================================================================= -->
    <script src="../JS/main.js"></script>
</body>
</html>

