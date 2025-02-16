const Match = document.querySelector('.match')
const Note = document.querySelector('.note')
const Bout = document.querySelector('.boutgame')
const Bouthide = document.querySelector('.bouthide')
const Boutshow = document.querySelector('.boutshow')
const END = document.querySelector('.end')
const H1 = document.querySelector('.h1')
const Body = document.querySelector('.body')
const TAn = document.querySelector('.tAn')
const TBn = document.querySelector('.tBn')

Bout.onclick = function(){
    Match.classList.replace('match' ,'matchb')
    Note.classList.replace('note', 'noteb')
    H1.classList.toggle('h1b')
    Bout.classList.toggle('boutgameb')
    Bouthide.classList.replace('bouthide', 'bouthideb')
    END.classList.replace('end', 'endb')
}


Bouthide.onclick = function(){
    TAn.classList.replace('tAn' ,'tAnb')
    TBn.classList.replace('tBn' ,'tBnb')
    Bouthide.classList.replace('bouthideb', 'bouthide')
    Boutshow.classList.replace('boutshow', 'boutshowb')
}

Boutshow.onclick = function(){
    TAn.classList.replace('tAnb','tAn')
    TBn.classList.replace('tBnb', 'tBn')
    Bouthide.classList.replace('bouthide', 'bouthideb')
    Boutshow.classList.replace('boutshowb','boutshow')
}









var nA1= document.getElementById("npA1"), totA1=0;;   
var nA2= document.getElementById("npA2"), totA2=0;
var nA3= document.getElementById("npA3"), totA3=0;
var nA4= document.getElementById("npA4"), totA4=0;
var nA5= document.getElementById("npA5"), totA5=0;
var nA6= document.getElementById("npA6"), totA6=0;
var nB1= document.getElementById("npB1"), totB1=0;
var nB2= document.getElementById("npB2"), totB2=0;
var nB3= document.getElementById("npB3"), totB3=0;
var nB4= document.getElementById("npB4"), totB4=0;
var nB5= document.getElementById("npB5"), totB5=0;
var nB6= document.getElementById("npB6"), totB6=0;

var tA = document.getElementById("tAn"), TA=0;
var tB = document.getElementById("tBn"), TB=0;



//les fonctions A
function changeA1(p,t, i){
    totA1+=i;
    TA+= i;
    p.textContent=totA1;
    t.textContent=TA;
}
function changeA2(p,t, i){
    totA2+=i;
    TA+= i;
    p.textContent=totA2;
    t.textContent=TA;
}
function changeA3(p,t, i){
    totA3+=i;
    TA+= i;
    p.textContent=totA3;
    t.textContent=TA;
}
function changeA4(p,t, i){
    totA4+=i;
    TA+= i;
    p.textContent=totA4;
    t.textContent=TA;
}
function changeA5(p,t, i){
    totA5+=i;
    TA+= i;
    p.textContent=totA5;
    t.textContent=TA;
}
function changeA6(p,t, i){
    totA6+=i;
    TA+= i;
    p.textContent=totA6;
    t.textContent=TA;
}
function changeCA(t, i){
    TA+= i;
    t.textContent=TA;
}
///lles fonction B

function changeB1(p,t, i){
    totB1+=i;
    TB+= i;
    p.textContent=totB1;
    t.textContent=TB;
}
function changeB2(p,t, i){
    totB2+=i;
    TB+= i;
    p.textContent=totB2;
    t.textContent=TB;
}
function changeB3(p,t, i){
    totB3+=i;
    TB+= i;
    p.textContent=totB3;
    t.textContent=TB;
}
function changeB4(p,t, i){
    totB4+=i;
    TB+= i;
    p.textContent=totB4;
    t.textContent=TB;
}
function changeB5(p,t, i){
    totB5+=i;
    TB+= i;
    p.textContent=totB5;
    t.textContent=TB;
}
function changeB6(p,t, i){
    totB6+=i;
    TB+= i;
    p.textContent=totB6;
    t.textContent=TB;
}
function changeCB(t, i){
    TB+= i;
    t.textContent=TB;
}
