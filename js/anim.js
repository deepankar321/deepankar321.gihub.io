
var a=document,
b=a.body.appendChild(a.createElement("canvas")),
c=b.getContext("2d"),
d=0,
e=b.width=innerWidth,
f=b.height=innerHeight,
g=Math,
h=g.cos,
j=g.sin,
k=g.PI;
setInterval(function(){
b.width=b.width;
d+=0.1;for(i=1E4;i--;)
r=(e+f)/2*(h((d+i)*(0.05+0.2*(j(d/1E5)/k)))/k),
c.fillRect(j(i)*r+e/2,h(i)*r+f/2,1.5,1.5)},16);
