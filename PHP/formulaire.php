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
        <header>
        <nav>
            <div class="logo"><a href="../index.html"><svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="3000px" height="100%" viewBox="0 150 600.000000 200.000000"
                preserveAspectRatio="xMidYMid meet">
               
               <g transform="translate(0.000000,500.000000) scale(0.100000,-0.100000)"
               fill="#0f6ca7" stroke="none">
               <path d="M2070 4471 c-64 -20 -133 -77 -180 -150 -15 -22 -22 -23 -130 -25
               -101 -1 -122 -4 -172 -28 -106 -49 -185 -142 -214 -250 -19 -71 -17 -122 6
               -188 11 -30 19 -62 20 -71 0 -23 -40 -56 -80 -64 -55 -11 -129 -56 -170 -103
               -73 -82 -89 -190 -45 -297 39 -95 34 -110 -53 -154 -97 -49 -168 -141 -179
               -230 -9 -78 12 -134 79 -215 61 -72 61 -73 41 -141 -4 -15 4 -11 35 17 49 44
               88 66 162 89 49 15 58 22 90 75 75 125 227 201 378 192 63 -4 79 -9 94 -28 24
               -30 23 -75 -3 -101 -19 -19 -29 -21 -86 -15 -77 8 -125 -4 -190 -47 -38 -25
               -55 -47 -85 -106 -20 -41 -41 -78 -45 -82 -4 -4 -41 -15 -82 -23 -90 -19 -142
               -52 -181 -113 -38 -59 -47 -104 -27 -134 9 -13 19 -42 23 -64 23 -134 135
               -231 278 -242 123 -9 140 -31 111 -140 -52 -193 65 -362 263 -380 81 -7 106
               -19 131 -64 l22 -39 -25 0 c-25 0 -26 -2 -26 -70 l0 -70 50 0 50 0 0 -220 0
               -220 75 0 75 0 0 220 0 220 60 0 c50 0 60 3 60 18 0 11 16 23 45 35 64 27 128
               88 156 149 l24 53 0 400 c-1 377 -2 405 -23 488 -12 49 -31 104 -42 122 -29
               48 -85 94 -148 123 -48 21 -64 24 -140 20 -68 -3 -98 -10 -137 -30 -61 -31
               -132 -98 -150 -140 -13 -31 -12 -31 36 -55 103 -52 179 -161 179 -258 0 -27
               -4 -55 -8 -61 -21 -32 -88 -38 -112 -9 -5 6 -14 36 -20 64 -18 96 -74 145
               -165 145 -89 0 -156 -58 -169 -148 -4 -24 -16 -52 -27 -62 -28 -25 -78 -23
               -101 5 -63 78 48 280 179 327 44 16 52 23 62 55 16 53 86 153 134 193 84 68
               215 116 313 116 58 0 162 -24 207 -46 18 -9 56 -34 85 -55 l52 -40 0 487 c0
               463 -1 486 -17 472 -34 -30 -129 -76 -197 -97 -87 -27 -180 -27 -275 -1 -175
               49 -260 131 -203 199 26 32 61 29 128 -12 169 -102 364 -81 496 55 69 71 73
               90 73 338 -1 241 -4 256 -73 332 -53 59 -121 88 -202 87 -36 0 -76 -4 -90 -8z
               m-30 -3061 l0 -89 58 -3 c56 -3 57 -3 60 -35 l3 -32 -58 -3 -58 -3 -3 -217 -2
               -218 -35 0 -35 0 -2 218 -3 217 -53 3 -53 3 3 32 c3 31 5 32 56 35 l52 3 0 90
               0 89 35 0 35 0 0 -90z"/>
               <path d="M2763 4464 c-55 -20 -123 -81 -155 -140 -45 -84 -49 -134 -42 -589 7
               -466 8 -471 77 -543 115 -120 297 -131 449 -25 34 23 98 105 98 125 0 4 -21
               19 -48 32 -52 26 -130 104 -157 156 -9 18 -20 59 -22 90 -5 49 -3 60 16 79 26
               26 75 27 100 2 10 -10 21 -38 25 -62 9 -63 39 -107 89 -129 54 -25 108 -25
               156 0 54 27 76 59 90 130 13 63 28 80 73 80 75 0 92 -89 37 -198 -35 -72 -90
               -122 -165 -153 -30 -13 -54 -28 -54 -34 0 -30 -65 -138 -112 -184 -102 -103
               -215 -146 -362 -139 -76 3 -102 9 -159 36 -38 17 -81 41 -97 52 -15 11 -31 20
               -34 20 -8 0 -8 -238 1 -528 l6 -234 31 5 c17 2 70 12 118 23 73 15 97 17 152
               7 179 -31 312 -156 355 -336 8 -34 22 -57 47 -79 50 -44 84 -108 91 -171 12
               -119 -50 -193 -117 -139 -20 16 -22 27 -21 86 2 79 -16 118 -65 141 -64 30
               -113 12 -168 -65 -29 -41 -41 -50 -66 -50 -70 0 -91 74 -41 152 39 62 126 118
               182 118 24 0 24 11 -1 59 -46 91 -143 151 -245 151 -33 0 -93 -9 -134 -20 -41
               -11 -85 -20 -98 -20 l-23 0 0 -352 c1 -311 3 -359 18 -404 l18 -52 -59 -5
               c-80 -7 -163 -50 -204 -105 -91 -120 -79 -307 24 -407 59 -57 96 -70 203 -70
               85 0 100 3 140 27 55 32 82 60 108 113 43 86 44 85 -47 85 -70 0 -80 -2 -86
               -20 -12 -37 -63 -70 -109 -70 -112 0 -180 124 -126 230 48 94 193 100 230 10
               12 -30 13 -30 92 -30 88 0 86 -4 53 76 l-13 31 57 6 c31 3 64 8 73 12 16 7 18
               -10 20 -232 l3 -238 73 -3 72 -3 0 178 c0 202 9 231 76 259 45 19 84 11 115
               -22 23 -25 24 -33 29 -217 l5 -192 73 -3 72 -3 0 194 c0 206 -5 236 -49 298
               -35 51 -78 77 -144 91 -56 12 -72 10 -159 -19 -25 -8 -24 37 1 68 18 23 26 24
               129 24 106 1 112 2 185 38 181 90 257 270 191 456 -17 46 -17 50 -1 75 10 14
               23 26 30 26 8 0 36 7 65 15 119 36 212 157 212 276 0 40 -8 79 -26 123 -36 87
               -30 108 45 145 79 40 112 70 145 131 61 112 44 225 -50 330 -56 63 -60 74 -44
               128 l9 33 -41 -36 c-44 -41 -151 -95 -185 -95 -16 0 -34 -19 -68 -71 -77 -115
               -189 -184 -321 -196 -114 -11 -174 16 -174 77 0 17 9 39 20 50 17 17 32 19
               107 18 80 -2 93 0 142 27 61 34 90 67 126 148 27 63 36 68 129 86 75 14 129
               49 166 108 38 59 47 104 27 134 -9 13 -19 42 -23 64 -26 144 -129 230 -292
               245 -115 10 -129 30 -97 136 8 27 15 74 15 105 0 145 -145 279 -305 279 -51 0
               -56 2 -82 37 -55 74 -119 130 -168 147 -60 20 -175 20 -232 0z m317 -3083 c4
               -118 7 -132 19 -117 42 50 154 72 224 43 51 -22 103 -87 116 -146 6 -29 11
               -119 11 -201 l0 -150 -40 0 -40 0 0 162 c0 142 -2 167 -20 204 -44 91 -164
               100 -240 19 -24 -26 -25 -30 -28 -206 l-3 -179 -40 0 -39 0 0 356 0 355 38 -3
               37 -3 5 -134z m-427 -72 c59 -16 147 -105 147 -149 0 -5 -17 -10 -38 -10 -31
               0 -41 5 -56 31 -40 67 -136 90 -216 49 -151 -77 -113 -330 54 -355 61 -10 109
               8 149 56 28 32 40 39 71 39 34 0 37 -2 31 -22 -33 -109 -188 -175 -312 -134
               -57 19 -124 82 -148 138 -20 49 -20 167 0 215 52 124 179 181 318 142z"/>
               <path d="M272 1143 l3 -368 72 -3 73 -3 2 242 3 241 103 -131 c57 -72 105
               -131 107 -131 2 0 50 59 107 132 l103 132 3 -242 2 -242 70 0 70 0 0 370 0
               370 -72 0 -73 -1 -95 -130 c-52 -72 -100 -135 -106 -140 -9 -7 -42 29 -119
               130 l-107 141 -74 0 -74 0 2 -367z m238 187 c62 -83 117 -153 121 -156 5 -2
               61 65 125 151 l116 155 44 0 44 0 0 -335 0 -335 -40 0 -40 0 -2 271 -3 271
               -115 -148 c-63 -81 -119 -148 -125 -148 -5 0 -62 66 -125 146 l-115 146 -3
               -269 -2 -269 -40 0 -40 0 0 335 0 335 43 0 44 0 113 -150z"/>
               <path d="M3539 1456 c-3 -3 -2 -601 1 -658 0 -5 16 -8 35 -8 l35 0 0 277 0
               276 123 -156 c67 -86 124 -156 127 -156 3 -1 59 69 125 154 l120 156 3 -276 2
               -275 35 0 35 0 0 336 0 335 -42 -3 c-42 -3 -44 -4 -154 -153 -62 -82 -116
               -151 -122 -153 -5 -1 -62 67 -126 153 -114 153 -117 155 -154 155 -21 0 -41
               -2 -43 -4z"/>
               <path d="M1348 1350 c-129 -33 -216 -164 -206 -309 8 -110 64 -202 151 -248
               46 -24 181 -30 229 -10 31 13 37 13 42 1 4 -10 24 -14 76 -14 l70 0 0 290 0
               290 -75 0 c-58 0 -75 -3 -75 -14 0 -13 -4 -13 -29 0 -37 18 -136 26 -183 14z
               m165 -44 c18 -7 43 -26 57 -41 l25 -27 5 39 c5 36 7 38 40 38 l35 0 3 -252 2
               -253 -40 0 c-39 0 -40 1 -40 36 l0 36 -35 -31 c-43 -38 -104 -55 -171 -48 -87
               9 -159 61 -195 142 -28 61 -26 176 5 241 25 55 83 109 131 123 47 14 142 12
               178 -3z"/>
               <path d="M1360 1239 c-97 -39 -135 -180 -77 -284 63 -112 235 -109 295 5 20
               38 23 57 20 116 -3 60 -8 77 -32 108 -16 21 -44 44 -62 52 -38 16 -107 17
               -144 3z m150 -48 c14 -10 33 -38 44 -63 28 -67 16 -130 -34 -180 -33 -33 -43
               -38 -86 -38 -60 0 -108 31 -129 83 -37 93 0 192 81 217 38 12 93 3 124 -19z"/>
               <path d="M4351 1287 c-96 -37 -155 -129 -155 -242 -1 -111 45 -189 139 -238
               59 -30 164 -30 227 1 42 21 108 91 108 114 0 4 -18 8 -40 8 -31 0 -43 -5 -55
               -24 -32 -49 -133 -70 -198 -42 -51 22 -107 93 -107 137 0 5 86 9 210 9 l210 0
               0 38 c0 95 -53 187 -133 229 -41 21 -161 27 -206 10z m180 -80 c39 -26 79 -81
               79 -108 0 -18 -11 -19 -170 -19 -129 0 -170 3 -170 13 1 25 47 92 79 114 47
               32 135 32 182 0z"/>
               </g>
               </svg>
               </a></div>
            <div class="link">
                <a class="gamematch" href="../index.html"><p>Jouer un Match</p></a>
                <a href="../HTML/contact.html"><p>Contacts</p></a>
                <a href="../HTML/apropos.html"><p>A propos</p></a>
            </div>
        </nav>
    </header>
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

