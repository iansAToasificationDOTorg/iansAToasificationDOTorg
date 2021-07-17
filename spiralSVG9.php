<!DOCTYPE html>
<html data-fpn="/* filePathName: spiralfarming/spiralSVG9.php */">
<head data-dnt="/* Uploaded: 20:31:48,  Sun 7 Feb 2021 */">
<title>spiral SVG 7</title>
<meta charset="utf-8">
<meta http-equiv="x-dns-prefetch-control" content="off">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="channel" content="channel:content:to:define!">
<style>
body {
 position:fixed;font-family: Arial, Helvetica, sans-serif;
 margin:0;
}
#svg{
  position:fixed;
  top:0;left:0;
  margin:0;padding:0;
  background:#ddd;
}
text{text-decoration:underline;}

#infob{position:fixed;left:10px;top:1020px;}
#sdi{
 position:fixed;
font-size:60px;
left:10px;bottom:60px;
-webkit-user-select:none;
}
#sdd{
 position:fixed;
font-size:60px;
right:10px;bottom:60px;
-webkit-user-select:none;
}
#mgi{
 position:fixed;
font-size:60px;
left:10px;bottom:160px;
-webkit-user-select:none;
}
#mgd{
 position:fixed;
font-size:60px;
right:10px;bottom:160px;
-webkit-user-select:none;
}
#v{
display:none;inline-block;
position:fixed;left:10px;top:1030px;
overflow:scroll;
-webkit-user-select:text;
}

</style>
</head>
<body>
<svg id=svg onclick=p++;><g id=g>
  <path id="fr" fill="none" stroke="#f005" stroke-width="9"/>
  <path id="rr" fill="none" stroke="#f005" stroke-width="9"/>
</g></svg>
<b id=infob onclick=Xtop.location.reload();>info</b>
<div id=v></div>
<b id=sdi onclick=sd+=1;rmsf();>sd++</b>
<b id=sdd onclick=sd-=1;rmsf();>sd--</b>
<b id=mgi onclick=mg+=0.1;rmsf();>mg++</b>
<b id=mgd onclick=mg-=0.1;rmsf();>mg--</b>
<b id=rSet>rSet</b>
<script>
function gE(i){return document.getElementById(i);}
function gS(i){return gE(i).style;}
var s=0,r=0,os=0,or=0,ds=0,dr=0,ms=0,mr=0;
var ot=0,ol=0,dt=0,dl=0,mt=0,ml=0;p='';
var sd=-13,mg=8;
function rmsf(){
 gE('fr').setAttribute('d','');
 msf('fr',480,13,50,sd,mg);
gE('infob').innerText='sd='+sd+'\nmg='+mg;
}
function msf(pth,c,si,ei,sd,mg){with(Math){
  let i,m,x,y,f=2;
  i=si;
 m=sd+mg*i;
  x=(c+m*sin(-i)).toFixed(f);
  y=(c+m*cos(-i)).toFixed(f);
  sf='M'+x+' '+y+' C ';
  for(i=si;i<ei;i+=0.01){
    m=sd+mg*i;
    x=(c+m*sin(-i)).toFixed(f);
    y=(c+m*cos(-i)).toFixed(f);
    sf+=x+' '+y+', ';}}
  sf=sf.replace(/,\s*$/, "");
  gE(pth).setAttribute('d',sf);
  sf='M'+c+' 0 L'+c+' '+(2.3*c)+' M0 '+c+' L'+(2.3*c)+' '+c+
       'M0 0 L'+(2.3*c)+' '+(2.3*c)+' M0 '+(2*c)+' L'+(2*c)+' 0';
  gE('rr').setAttribute('d',sf);
}

//msf('fa',300,5,10);

function unitArea(cx,cy,b,l,d,sc,n){
  let a,x,y,f=0,p='';
  let nl=-(8+n.toString.length);
  let hb=parseFloat((b/2).toFixed(1));
  let hl=parseFloat((l/2).toFixed(1));
with(Math){
  a=d-PI/4;
  x=(cx+b*sin(a)).toFixed(f); y=(cy+b*cos(a)).toFixed(f);
  a=((45-a*(180/PI)).toFixed(0))%360;
  p='<text font-size=11 x='+nl+' y=4 '+
       'transform="translate('+x+','+y+') rotate('+a+')">'+n+'</text>'+
       '<path id=p'+n+' stroke=#000 fill='+sc+' '+
       'transform="translate('+x+','+y+') rotate('+a+')" '+
       'd="M-'+hl+' -'+hb+' H'+hl+' V'+hb+' H-'+hl+' Z"/>';
  }
  gE('g').innerHTML+=p;
}

function mkIcon(){
try{
  let i,st,x,y,cx,cy,s,o,a,no,n=0,ac,b,l,c,cd;
  let al=-16;
  s=1000;
  st=gS('svg');
  st.width=s+'px';
  st.height=s+'px';
 let segments = 2010;
 let radiusScale=8;
 let radius=1;
let  cityForEveryNthDot = 13;
let  angle=(Math.PI/2);
 cx=(s/2)-20;
 cy=(s/2)-12;
 cy=(s/2)-20;
 ac=4.0
 b=20;
 l=50;
 cd=90;
 no=3;

msf('fr',480,11,63.68,-13,8);

//for( i=2; i< 2*segments+300; i++) {
for( i=4; i<3500; i++) {
     radius=Math.sqrt( i)*radiusScale;
     angle+=Math.asin(ac/radius);
     if(i%cityForEveryNthDot!=0) continue;
     x=Math.cos( angle)*radius;
     y=Math.sin( angle)*radius;
     n++;
     al++;
     c=(n%2>0)?'#47a5':'#8ae5';
     if(n>16)
           unitArea(cx+x,cy+y,b,l,-angle,c,al);
   }
   al=540;
 a=0;
angle = Math.PI/2;
//for( i=o; i<segments-00; i++) {
for( i=120;i<3840; i++) {
     radius=Math.sqrt( i)*radiusScale;
     angle+=Math.asin(ac/radius);
     if(i%cityForEveryNthDot!=0) continue;
     x=Math.cos( angle-a)*radius;
     y=Math.sin( angle-a)*radius;
     al--;
     n++;
     c=(n%2>0)?'#6e85':'#9fb5';
     if(n>283)
     unitArea(cx+x,cy+y,b,l,-angle,c,al);
   }
s='<text font-size=22 x=16 y=32>Guide to Spiral Farming '+
     '</text>';
s+='<text font-size=18 x=8 y=45 dy=0>'+
    '<tspan x=8 dy=18>with One Decare Paddocks</tspan>'+
    '<tspan x=8 dy=18>Area of each Paddock is</tspan>'+
    '<tspan x=8 dy=18>'+b+' metres x '+l+' metres</tspan>'+
    '<tspan x=8 dy=18>'+(b*l)+' square metres</tspan>'+
    '</text>';
gE('g').innerHTML+=s;
s =new XMLSerializer().serializeToString(gE("svg"));
gE('v').innerText=s;
}catch(e){alert(e.message);}
}
mkIcon();
//msf('fr',480,11,63.68,-13,8);



function clearm(){
  let x=525;
  while(x>-1){try{
     co=(x%2>0)?'#5d85':'#afb5';
     ci=(x%2>0)?'#47a5':'#8ae5';
     gS('p'+x).fill=x>253?co:ci;
     x--;
    }catch(e){x--;};}
}

function mobile(p,f){try{gS('p'+((p))).fill=f;}catch(e){}}

p=1480;
m=525;
cd=88;
setInterval(function(){
 // return;
  p++;
  clearm();
  //mobile(((p+m+5)%7),'#000');
  mobile(((p+cd)%m)+4,'red');
  mobile(1+((p+(cd*2))%m),'green');
  mobile(((p+(cd*3))%m)-5,'blue');
  mobile(1+((p+(cd*4))%m),'magenta');
  mobile(((p+cd)%m),'yellow');
  mobile(1+((p+(cd*2))%m)-4,'yellow');
  mobile(((p+(cd*3))%m)-9,'yellow');
  mobile(1+((p+(cd*4))%m)-4,'yellow');
},500);
</script>
</body>
</html>
















