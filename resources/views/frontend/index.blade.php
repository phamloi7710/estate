@section('title')Trang Chủ - @stop
@section('description', isset($meta['description']) ? $meta['description'] : '')
@section('keyword', isset($meta['keyword']) ? $meta['keyword'] : '')
@section('url', url(''))
@section('image','s')
@extends('frontend.general.master')
@section('content')
@include('frontend.includes.slider')
<style>
    
.jssor_1{
    position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;
}
.loadding-slider{
    position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);
}
.loadding-spin-slider{
    margin-top:-19px;position:relative;top:50%;width:38px;height:38px;
}
.slider-frontend{
    position:absolute;top:-50px;left:30px;width:500px;height:40px;font-family:Oswald,sans-serif;font-size:32px;font-weight:200;line-height:1.2;text-align:center;background-color:rgb(174, 177, 177, 0.2); color: #fff;
}
.jssorl-item{
    cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;
}
</style>
<script type="text/javascript">
    /*!
Jssor Slider (MIT license)
*/
/* eslint-disable */
!function(i,h,m,f,d,k,e){new(function(){});var c={E:m.PI,m:m.max,j:m.min,Q:m.ceil,R:m.floor,H:m.abs,pb:m.sin,bc:m.cos,Id:m.tan,Zf:m.atan,fc:m.sqrt,v:m.pow,Md:m.random,$Round:m.round},g=i.$Jease$={$Swing:function(a){return-c.bc(a*c.E)/2+.5},$Linear:function(a){return a},$InQuad:function(a){return a*a},$OutQuad:function(a){return-a*(a-2)},$InOutQuad:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},$InCubic:function(a){return a*a*a},$OutCubic:function(a){return(a-=1)*a*a+1},$InOutCubic:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},$InQuart:function(a){return a*a*a*a},$OutQuart:function(a){return-((a-=1)*a*a*a-1)},$InOutQuart:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},$InQuint:function(a){return a*a*a*a*a},$OutQuint:function(a){return(a-=1)*a*a*a*a+1},$InOutQuint:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},$InSine:function(a){return 1-c.bc(c.E/2*a)},$OutSine:function(a){return c.pb(c.E/2*a)},$InOutSine:function(a){return-1/2*(c.bc(c.E*a)-1)},$InExpo:function(a){return a==0?0:c.v(2,10*(a-1))},$OutExpo:function(a){return a==1?1:-c.v(2,-10*a)+1},$InOutExpo:function(a){return a==0||a==1?a:(a*=2)<1?1/2*c.v(2,10*(a-1)):1/2*(-c.v(2,-10*--a)+2)},$InCirc:function(a){return-(c.fc(1-a*a)-1)},$OutCirc:function(a){return c.fc(1-(a-=1)*a)},$InOutCirc:function(a){return(a*=2)<1?-1/2*(c.fc(1-a*a)-1):1/2*(c.fc(1-(a-=2)*a)+1)},$InElastic:function(a){if(!a||a==1)return a;var b=.3,d=.075;return-(c.v(2,10*(a-=1))*c.pb((a-d)*2*c.E/b))},$OutElastic:function(a){if(!a||a==1)return a;var b=.3,d=.075;return c.v(2,-10*a)*c.pb((a-d)*2*c.E/b)+1},$InOutElastic:function(a){if(!a||a==1)return a;var b=.45,d=.1125;return(a*=2)<1?-.5*c.v(2,10*(a-=1))*c.pb((a-d)*2*c.E/b):c.v(2,-10*(a-=1))*c.pb((a-d)*2*c.E/b)*.5+1},$InBack:function(a){var b=1.70158;return a*a*((b+1)*a-b)},$OutBack:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},$InOutBack:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},$InBounce:function(a){return 1-g.$OutBounce(1-a)},$OutBounce:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},$InOutBounce:function(a){return a<1/2?g.$InBounce(a*2)*.5:g.$OutBounce(a*2-1)*.5+.5},$GoBack:function(a){return 1-c.H(2-1)},$InWave:function(a){return 1-c.bc(a*c.E*2)},$OutWave:function(a){return c.pb(a*c.E*2)},$OutJump:function(a){return 1-((a*=2)<1?(a=1-a)*a*a:(a-=1)*a*a)},$InJump:function(a){return(a*=2)<1?a*a*a:(a=2-a)*a*a},$Early:c.Q,$Late:c.R};var b=i.$Jssor$=new function(){var j=this,xb=/\S+/g,K=1,eb=2,hb=3,gb=4,kb=5,L,r=0,n=0,C=0,x=navigator,qb=x.appName,p=x.userAgent,q=parseFloat;function Gb(){if(!L){L={Hc:"ontouchstart"in i||"createTouch"in h};var a;if(x.pointerEnabled||(a=x.msPointerEnabled))L.ze=a?"msTouchAction":"touchAction"}return L}function u(g){if(!r){r=-1;if(qb=="Microsoft Internet Explorer"&&!!i.attachEvent&&!!i.ActiveXObject){var e=p.indexOf("MSIE");r=K;n=q(p.substring(e+5,p.indexOf(";",e)));/*@cc_on@*/}else if(qb=="Netscape"&&!!i.addEventListener){var d=p.indexOf("Firefox"),b=p.indexOf("Safari"),f=p.indexOf("Chrome"),c=p.indexOf("AppleWebKit");if(d>=0){r=eb;n=q(p.substring(d+8))}else if(b>=0){var h=p.substring(0,b).lastIndexOf("/");r=f>=0?gb:hb;n=q(p.substring(h+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(p);if(a){r=K;n=q(a[1])}}if(c>=0)C=q(p.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(p);if(a){r=kb;n=q(a[2])}}}return g==r}function v(){return u(K)}function fb(){return u(hb)}function jb(){return u(kb)}function bb(){return fb()&&C>534&&C<535}function H(){u();return C>537||n>42||r==K&&n>=11}function cb(a){var b,c;return function(g){if(!b){b=d;var f=a.substr(0,1).toUpperCase()+a.substr(1);l([a].concat(["WebKit","ms","Moz","O","webkit"]),function(h,d){var b=a;if(d)b=h+f;if(g.style[b]!=e)return c=b})}return c}}function ab(b){var a;return function(c){a=a||cb(b)(c)||b;return a}}var M=ab("transform");function pb(a){return{}.toString.call(a)}var mb={};l(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){mb["[object "+a+"]"]=a.toLowerCase()});function l(b,d){var a,c;if(pb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function G(a){return a==f?String(a):mb[pb(a)]||"object"}function nb(a){for(var b in a)return d}function D(a){try{return G(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function ub(b,a){setTimeout(b,a||0)}function lb(b,d,c){var a=!b||b=="inherit"?"":b;l(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a&&(c+=(!a.indexOf(" ")?"":" ")+a);return c}function rb(a,b){if(a===e)a=b;return a}j.Rc=Gb;j.be=v;j.eh=fb;j.Wg=H;cb("transform");j.hd=function(){return n};j.Sg=function(){u();return C};j.$Delay=ub;j.X=rb;j.Y=function(a,b){b.call(a);return A({},a)};function V(a){a.constructor===V.caller&&a.B&&a.B.apply(a,V.caller.arguments)}j.B=V;j.$GetElement=function(a){if(j.Tg(a))a=h.getElementById(a);return a};function t(a){return a||i.event}j.Yg=t;j.$EvtSrc=function(b){b=t(b);var a=b.target||b.srcElement||h;if(a.nodeType==3)a=j.rd(a);return a};j.Ee=function(a){a=t(a);return a.relatedTarget||a.toElement};j.he=function(a){a=t(a);return a.which||([0,1,3,0,2])[a.button]||a.charCode||a.keyCode};j.pd=function(a){a=t(a);return{x:a.clientX||0,y:a.clientY||0}};j.Vg=function(b,a){return b.x>=a.x&&b.x<=a.x+a.w&&b.y>=a.y&&b.y<=a.y+a.h};j.fe=function(c,e){var a=b.Zg(e),d=b.pd(c);return j.Vg(d,a)};function w(c,d,a){if(a!==e)c.style[d]=a==e?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&i.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,f);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function Y(b,c,a,d){if(a===e){a=q(w(b,c));isNaN(a)&&(a=f);return a}if(a==f)a="";else d&&(a+="px");w(b,c,a)}function m(c,a){var d=a?Y:w,b;if(a&4)b=ab(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Bb(a){return q(a.style.opacity||"1")}function Db(b,a){b.style.opacity=a==1||a==f?"":c.$Round(a*100)/100}var O={$Rotate:["rotate"],$RotateX:["rotateX"],$RotateY:["rotateY"],$SkewX:["skewX"],$SkewY:["skewY"]};if(!H())O=A(O,{$ScaleX:["scaleX",2],$ScaleY:["scaleY",2],$TranslateZ:["translateZ",1]});function N(c,a){var b="";if(a){if(v()&&n&&n<10){delete a.$RotateX;delete a.$RotateY;delete a.$TranslateZ}l(a,function(d,c){var a=O[c];if(a){var e=a[1]||0;if(P[c]!=d)b+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(H()){if(a.$TranslateX||a.$TranslateY||a.$TranslateZ!=e)b+=" translate3d("+(a.$TranslateX||0)+"px,"+(a.$TranslateY||0)+"px,"+(a.$TranslateZ||0)+"px)";if(a.$ScaleX==e)a.$ScaleX=1;if(a.$ScaleY==e)a.$ScaleY=1;if(a.$ScaleX!=1||a.$ScaleY!=1)b+=" scale3d("+a.$ScaleX+", "+a.$ScaleY+", 1)"}}c.style[M(c)]=b}j.ch=m("transformOrigin",4);j.bh=m("backfaceVisibility",4);j.kc=m("transformStyle",4);j.ah=m("perspective",6);j.yg=m("perspectiveOrigin",4);j.Vd=function(b,a){if(v()&&n<9)b.style.zoom=a==1?"":a;else{var c=M(b),f=a==1?"":"scale("+a+")",e=b.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=lb(e,[g],f);b.style[c]=d}};j.$AddEvent=function(a,c,d,b){a=j.$GetElement(a);if(a.addEventListener){c=="mousewheel"&&a.addEventListener("DOMMouseScroll",d,b);a.addEventListener(c,d,b)}else if(a.attachEvent){a.attachEvent("on"+c,d);b&&a.setCapture&&a.setCapture()}};j.$RemoveEvent=function(a,c,d,b){a=j.$GetElement(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};j.$CancelEvent=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=k};j.$StopEvent=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};j.T=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};j.zg=function(a,b){if(b==e)return a.textContent||a.innerText;var c=h.createTextNode(b);j.Qb(a);a.appendChild(c)};j.Zg=function(b){var a=b.getBoundingClientRect();return{x:a.left,y:a.top,w:a.right-a.left,h:a.bottom-a.top}};j.Cb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function ob(a,c,e,b){b=b||"u";for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(E(a,b)==c)return a;if(!e){var d=ob(a,c,e,b);if(d)return d}}}j.$FindChild=ob;function T(a,d,g,b){b=b||"u";var c=[];for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){E(a,b)==d&&c.push(a);if(!g){var e=T(a,d,g,b);if(e.length)c=c.concat(e)}}return c}j.rg=function(b,a){return b.getElementsByTagName(a)};j.lb=function(a,f,d,g){d=d||"u";var e;do{if(a.nodeType==1){var c;d&&(c=E(a,d));if(c&&c==rb(f,c)||g==a.tagName){e=a;break}}a=b.rd(a)}while(a&&a!=h.body);return e};j.qg=function(a){return X(["INPUT","TEXTAREA","SELECT"])[a.tagName]};function A(){var f=arguments,d,c,b,a,h=1&f[0],g=1+h;d=f[g-1]||{};for(;g<f.length;g++)if(c=f[g])for(b in c){a=c[b];if(a!==e){a=c[b];var i=d[b];d[b]=h&&(D(i)||D(a))?A(h,{},i,a):a}}return d}j.F=A;function W(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(D(a)&&D(b)){a=W(a,b);e=!nb(a)}!e&&(d[c]=a)}}return d}j.qe=function(a){return G(a)=="function"};j.te=function(a){return G(a)=="array"};j.Tg=function(a){return G(a)=="string"};j.uc=function(a){return!isNaN(q(a))&&isFinite(a)};j.c=l;j.Jd=D;function R(a){return h.createElement(a)}j.Rb=function(){return R("DIV")};j.vg=function(){return R("SPAN")};j.ug=function(){};function F(b,c,a){if(a==e)return b.getAttribute(c);b.setAttribute(c,a)}function E(a,b){return F(a,b)||F(a,"data-"+b)}j.n=F;j.db=E;j.q=function(d,b,c){var a=j.tg(E(d,b));if(isNaN(a))a=c;return a};function y(b,a){return F(b,"class",a)||""}function X(b){var a={};l(b,function(b){if(b!=e)a[b]=b});return a}function vb(b,a){return b.match(a||xb)}function Q(b,a){return X(vb(b||"",a))}j.Dd=X;j.Lg=vb;j.Kg=function(a){a&&(a=a.toLowerCase());return a};function Z(b,c){var a="";l(c,function(c){a&&(a+=b);a+=c});return a}function I(a,c,b){y(a,Z(" ",A(W(Q(y(a)),Q(c)),Q(b))))}j.ud=Z;j.rd=function(a){return a.parentNode};j.xb=function(a){j.zb(a,"none")};j.eb=function(a,b){j.zb(a,b?"none":"")};j.Ng=function(b,a){b.removeAttribute(a)};j.Pg=function(d,a){if(a)d.style.clip="rect("+c.$Round(a.$Top||a.N||0)+"px "+c.$Round(a.$Right)+"px "+c.$Round(a.$Bottom)+"px "+c.$Round(a.$Left||a.K||0)+"px)";else if(a!==e){var h=d.style.cssText,g=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],f=lb(h,g,"");b.xd(d,f)}};j.Og=function(b,a){if(a)b.style.backgroundColor="rgba("+c.$Round(a.Fd)+","+c.$Round(a.Ad)+","+c.$Round(a.Od)+","+a.$Opacity+")"};j.Db=function(){return+new Date};j.J=function(b,a){b.appendChild(a)};j.Gg=function(b,a){l(a,function(a){j.J(b,a)})};j.tb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};j.Fg=function(b,a,c){b.insertAdjacentHTML(a,c)};j.qb=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};j.Eg=function(a,b){l(a,function(a){j.qb(a,b)})};j.Qb=function(a){j.Eg(j.Cb(a,d),a)};function sb(){l([].slice.call(arguments,0),function(a){if(j.te(a))sb.apply(f,a);else a&&a.$Destroy()})}j.$Destroy=sb;j.fd=function(a,b){var c=j.rd(a);if(b&1){j.Z(a,(j.C(c)-j.C(a))/2);j.Pd(a,f)}if(b&2){j.V(a,(j.D(c)-j.D(a))/2);j.Ed(a,f)}};var S={$Top:f,$Right:f,$Bottom:f,$Left:f,I:f,G:f};j.Hg=function(a){var b=j.Rb();s(b,{Rd:"block",Ob:j.wb(a),$Top:0,$Left:0,I:0,G:0});var d=j.Nd(a,S);j.tb(b,a);j.J(b,a);var e=j.Nd(a,S),c={};l(d,function(b,a){if(b==e[a])c[a]=b});s(b,S);s(b,c);s(a,{$Top:0,$Left:0});return c};j.Jg=function(b,a){return parseInt(b,a||10)};j.tg=q;j.de=function(b,a){var c=h.body;while(a&&b!==a&&c!==a)a=a.parentNode;return b===a};function U(d,c,b){var a=d.cloneNode(!c);!b&&j.Ng(a,"id");return a}j.fb=U;j.Kb=function(e,f){var a=new Image;function b(e,d){j.$RemoveEvent(a,"load",b);j.$RemoveEvent(a,"abort",c);j.$RemoveEvent(a,"error",c);f&&f(a,d)}function c(a){b(a,d)}if(jb()&&n<11.6||!e)b(!e);else{j.$AddEvent(a,"load",b);j.$AddEvent(a,"abort",c);j.$AddEvent(a,"error",c);a.src=e}};j.Ig=function(e,a,d){var b=1;function c(c){b--;if(a&&c&&c.src==a.src)a=c;!b&&d&&d(a)}l(e,function(a){if(a.src){b++;j.Kb(a.src,c)}});c()};j.zd=function(a,g,i,h){if(h)a=U(a);var c=T(a,g);if(!c.length)c=b.rg(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=U(i);y(e,y(d));b.xd(e,d.style.cssText);b.tb(e,d);b.qb(d)}return a};function Eb(){var a=this;b.Y(a,o);var d,q="",s=["av","pv","ds","dn"],f=[],r,n=0,k=0,g=0;function m(){I(d,r,(f[g||k&2||k]||"")+" "+(f[n]||""));j.Fc(d,g?"none":"")}function c(){n=0;a.ab(i,"mouseup",c);a.ab(h,"mouseup",c);a.ab(h,"touchend",c);a.ab(h,"touchcancel",c);a.ab(i,"blur",c);m()}function p(b){if(g)j.$CancelEvent(b);else{n=4;m();a.a(i,"mouseup",c);a.a(h,"mouseup",c);a.a(h,"touchend",c);a.a(h,"touchcancel",c);a.a(i,"blur",c)}}a.Kd=function(a){if(a===e)return k;k=a&2||a&1;m()};a.$Enable=function(a){if(a===e)return!g;g=a?0:3;m()};a.B=function(e){a.$Elmt=d=j.$GetElement(e);F(d,"data-jssor-button","1");var c=b.Lg(y(d));if(c)q=c.shift();l(s,function(a){f.push(q+a)});r=Z(" ",f);f.unshift("");a.a(d,"mousedown",p);a.a(d,"touchstart",p)};b.B(a)}j.Bc=function(a){return new Eb(a)};j.O=w;m("backgroundColor");j.ic=m("overflow");j.Fc=m("pointerEvents");j.V=m("top",2);j.Pd=m("right",2);j.Ed=m("bottom",2);j.Z=m("left",2);j.C=m("width",2);j.D=m("height",2);m("marginLeft",2);m("marginTop",2);j.wb=m("position");j.zb=m("display");j.S=m("zIndex",1);j.cf=function(b,a,c){if(a!==e)Db(b,a,c);else return Bb(b)};j.xd=function(a,b){if(b!=e)a.style.cssText=b;else return a.style.cssText};j.lf=function(b,a){if(a===e){a=w(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}w(b,"backgroundImage",a?"url('"+a+"')":"")};var J;j.kf=J={$Opacity:j.cf,$Top:j.V,$Right:j.Pd,$Bottom:j.Ed,$Left:j.Z,I:j.C,G:j.D,Ob:j.wb,Rd:j.zb,$ZIndex:j.S};j.Nd=function(c,b){var a={};l(b,function(d,b){if(J[b])a[b]=J[b](c)});return a};function s(b,i){var a=H(),g=bb(),h=M(b);function d(l,a){a=a||{};var g=a.$TranslateZ||0,i=(a.$RotateX||0)%360,j=(a.$RotateY||0)%360,k=(a.$Rotate||0)%360,c=a.$ScaleX,d=a.$ScaleY,f=a.Mh;if(c==e)c=1;if(d==e)d=1;if(f==e)f=1;var b=new Ab(a.$TranslateX,a.$TranslateY,g);b.$Scale(c,d,f);b.Ue(a.$SkewX,a.$SkewY);b.$RotateX(i);b.$RotateY(j);b.Xe(k);b.$Move(a.K,a.N);l.style[h]=b.Ve()}s=function(c,b){b=b||{};var i=b.K,k=b.N,h;l(J,function(a,d){h=b[d];h!==e&&a(c,h)});j.Pg(c,b.$Clip);j.Og(c,b.Ab);if(!a){i!=e&&j.Z(c,(b.se||0)+i);k!=e&&j.V(c,(b.ve||0)+k)}if(b.We)if(g)ub(j.T(f,N,c,b));else if(a)d(c,b);else N(c,b)};j.U=s;s(b,i)}j.U=s;function Ab(j,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,o||0,1],i=c.pb,h=c.bc,l=c.Id;function g(a){return a*c.E/180}function m(b,c,f,g,i,l,n,o,q,t,u,w,y,A,C,F,a,d,e,h,j,k,m,p,r,s,v,x,z,B,D,E){return[b*a+c*j+f*r+g*z,b*d+c*k+f*s+g*B,b*e+c*m+f*v+g*D,b*h+c*p+f*x+g*E,i*a+l*j+n*r+o*z,i*d+l*k+n*s+o*B,i*e+l*m+n*v+o*D,i*h+l*p+n*x+o*E,q*a+t*j+u*r+w*z,q*d+t*k+u*s+w*B,q*e+t*m+u*v+w*D,q*h+t*p+u*x+w*E,y*a+A*j+C*r+F*z,y*d+A*k+C*s+F*B,y*e+A*m+C*v+F*D,y*h+A*p+C*x+F*E]}function e(c,a){return m.apply(f,(a||b).concat(c))}d.$Scale=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.$Move=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.$RotateX=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([1,0,0,0,0,d,f,0,0,-f,d,0,0,0,0,1])}};d.$RotateY=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,0,-f,0,0,1,0,0,f,0,d,0,0,0,0,1])}};d.Xe=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,f,0,0,-f,d,0,0,0,0,1,0,0,0,0,1])}};d.Ue=function(a,c){if(a||c){j=g(a);k=g(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.Ve=function(){return"matrix3d("+b.join(",")+")"}}var P={se:0,ve:0,K:0,N:0,$Zoom:1,$ScaleX:1,$ScaleY:1,$Rotate:0,$RotateX:0,$RotateY:0,$TranslateX:0,$TranslateY:0,$TranslateZ:0,$SkewX:0,$SkewY:0};j.Zc=function(c,d){var a=c||{};if(c)if(b.qe(c))a={X:a};else if(b.qe(c.$Clip))a.$Clip={X:c.$Clip};a.X=a.X||d;if(a.$Clip)a.$Clip.X=a.$Clip.X||d;if(a.Ab)a.Ab.X=a.Ab.X||d;return a};function tb(c,a){var b={};l(c,function(c,d){var f=c;if(a[d]!=e)if(j.uc(c))f=c+a[d];else f=tb(c,a[d]);b[d]=f});return b}j.Re=tb;j.Ae=function(o,j,s,t,D,E,p){var a=j;if(o){a={};for(var i in j){var F=E[i]||1,B=D[i]||[0,1],h=(s-B[0])/B[1];h=c.j(c.m(h,0),1);h=h*F;var y=c.R(h);if(h!=y)h-=y;var k=t.X||g.$Linear,m,G=o[i],r=j[i];if(b.uc(r)){k=t[i]||k;var C=k(h);m=G+r*C}else{m=A({rc:{}},o[i]);var z=t[i]||{};l(r.rc||r,function(d,a){k=z[a]||z.X||k;var c=k(h),b=d*c;m.rc[a]=b;m[a]+=b})}a[i]=m}var x=l(j,function(b,a){return P[a]!=e});x&&l(P,function(c,b){if(a[b]==e&&o[b]!==e)a[b]=o[b]});if(x){if(a.$Zoom)a.$ScaleX=a.$ScaleY=a.$Zoom;a.$OriginalWidth=p.$OriginalWidth;a.$OriginalHeight=p.$OriginalHeight;if(v()&&n>=11&&(j.K||j.N)&&s!=0&&s!=1)a.$Rotate=a.$Rotate||1e-8;a.We=d}}if(j.$Clip&&p.$Move){var q=a.$Clip.rc,w=(q.$Top||0)+(q.$Bottom||0),u=(q.$Left||0)+(q.$Right||0);a.$Left=(a.$Left||0)+u;a.$Top=(a.$Top||0)+w;a.$Clip.$Left-=u;a.$Clip.$Right-=u;a.$Clip.$Top-=w;a.$Clip.$Bottom-=w}if(a.$Clip&&!a.$Clip.$Top&&!a.$Clip.$Left&&!a.$Clip.N&&!a.$Clip.K&&a.$Clip.$Right==p.$OriginalWidth&&a.$Clip.$Bottom==p.$OriginalHeight)a.$Clip=f;return a}};function o(){var a=this,f,e=[],c=[];function k(a,b){e.push({Nb:a,Pb:b})}function j(a,c){b.c(e,function(b,d){b.Nb==a&&b.Pb===c&&e.splice(d,1)})}function h(){e=[]}function g(){b.c(c,function(a){b.$RemoveEvent(a.Wd,a.Nb,a.Pb,a.Xd)});c=[]}a.Nc=function(){return f};a.a=function(f,d,e,a){b.$AddEvent(f,d,e,a);c.push({Wd:f,Nb:d,Pb:e,Xd:a})};a.ab=function(f,d,e,a){b.c(c,function(g,h){if(g.Wd===f&&g.Nb==d&&g.Pb===e&&g.Xd==a){b.$RemoveEvent(f,d,e,a);c.splice(h,1)}})};a.Zd=g;a.$On=a.addEventListener=k;a.$Off=a.removeEventListener=j;a.k=function(a){var c=[].slice.call(arguments,1);b.c(e,function(b){b.Nb==a&&b.Pb.apply(i,c)})};a.$Destroy=function(){if(!f){f=d;g();h()}}}var l=function(C,F,h,m,T,O){C=C||0;var a=this,p,n,o,t,D=0,Q=1,M,N,L,E,B=0,j=0,r=0,A,l,f,g,s,z,v=[],y,I=k,J,H=k;function U(a){f+=a;g+=a;l+=a;j+=a;r+=a;B+=a}function x(C){var k=C;if(s)if(!z&&(k>=g||k<f)||z&&k>=f)k=((k-f)%s+s)%s+f;if(!A||t||j!=k){var i=c.j(k,g);i=c.m(i,f);if(h.$Reverse)i=g-i+f;if(!A||t||i!=r){if(O){var x=(i-l)/(F||1),o=b.Ae(T,O,x,M,L,N,h);if(y)b.c(o,function(b,a){y[a]&&y[a](m,b)});else b.U(m,o);var n;if(J){var p=i>f&&i<g;if(p!=H)n=H=p}if(!n&&o.$Opacity!=e){var q=o.$Opacity<.001;if(q!=I)n=I=q}if(n!=e){n&&b.Fc(m,"none");!n&&b.Fc(m,b.n(m,"data-events"))}}var w=r,u=r=i;b.c(v,function(b,c){var a=!A&&z||k<=j?v[v.length-c-1]:b;a.M(i-B)});j=k;A=d;a.md(w-l,u-l);a.Gb(w,u)}}}function G(a,b,d){b&&a.$Shift(g);if(!d){f=c.j(f,a.Dc()+B);g=c.m(g,a.nb()+B)}v.push(a)}var u=i.requestAnimationFrame||i.webkitRequestAnimationFrame||i.mozRequestAnimationFrame||i.msRequestAnimationFrame;if(b.eh()&&b.hd()<7||!u)u=function(a){b.$Delay(a,h.$Interval)};function P(){if(p){var d=b.Db(),e=c.j(d-D,h.le),a=j+e*o*Q;D=d;if(a*o>=n*o)a=n;x(a);if(!t&&a*o>=n*o)R(E);else u(P)}}function w(e,h,i){if(!p){p=d;t=i;E=h;e=c.m(e,f);e=c.j(e,g);n=e;o=n<j?-1:1;a.Oc();D=b.Db();u(P)}}function R(b){if(p){t=p=E=k;a.Kc();b&&b()}}a.$Play=function(a,b,c){w(a?j+a:g,b,c)};a.Gc=w;a.Le=function(a,b){w(g,a,b)};a.L=R;a.pe=function(){return j};a.ue=function(){return n};a.o=function(){return r};a.M=x;a.Je=function(){x(g,d)};a.$IsPlaying=function(){return p};a.je=function(a){Q=a};a.$Shift=U;a.ud=G;a.W=function(a,b){G(a,0,b)};a.od=function(a){G(a,1)};a.nd=function(a){g+=a};a.Dc=function(){return f};a.nb=function(){return g};a.Gb=a.Oc=a.Kc=a.md=b.ug;a.sd=b.Db();h=b.F({$Interval:16,le:50},h);m&&(J=b.n(m,"data-inactive"));s=h.lc;z=h.bf;y=h.mf;f=l=C;g=C+F;N=h.$Round||{};L=h.$During||{};M=b.Zc(h.$Easing)};var n={af:"data-scale",Eb:"data-autocenter",Lc:"data-nofreeze",ee:"data-nodrag"},q=new function(){var a=this;a.xc=function(c,a,e,d){(d||!b.n(c,a))&&b.n(c,a,e)};a.yc=function(a){var c=b.q(a,n.Eb);b.fd(a,c)}},s=i.$JssorSlideshowFormations$=new function(){var h=this,b=0,a=1,f=2,e=3,s=1,r=2,t=4,q=8,w=256,x=512,v=1024,u=2048,j=u+s,i=u+r,o=x+s,m=x+r,n=w+t,k=w+q,l=v+t,p=v+q;function y(a){return(a&r)==r}function z(a){return(a&t)==t}function g(b,a,c){c.push(a);b[a]=b[a]||[];b[a].push(c)}h.$FormationStraight=function(f){for(var d=f.$Cols,e=f.$Rows,s=f.$Assembly,t=f.sc,r=[],a=0,b=0,p=d-1,q=e-1,h=t-1,c,b=0;b<e;b++)for(a=0;a<d;a++){switch(s){case j:c=h-(a*e+(q-b));break;case l:c=h-(b*d+(p-a));break;case o:c=h-(a*e+b);case n:c=h-(b*d+a);break;case i:c=a*e+b;break;case k:c=b*d+(p-a);break;case m:c=a*e+(q-b);break;default:c=b*d+a}g(r,c,[b,a])}return r};h.$FormationSwirl=function(q){var x=q.$Cols,y=q.$Rows,B=q.$Assembly,w=q.sc,A=[],z=[],u=0,c=0,h=0,r=x-1,s=y-1,t,p,v=0;switch(B){case j:c=r;h=0;p=[f,a,e,b];break;case l:c=0;h=s;p=[b,e,a,f];break;case o:c=r;h=s;p=[e,a,f,b];break;case n:c=r;h=s;p=[a,e,b,f];break;case i:c=0;h=0;p=[f,b,e,a];break;case k:c=r;h=0;p=[a,f,b,e];break;case m:c=0;h=s;p=[e,b,f,a];break;default:c=0;h=0;p=[b,f,a,e]}u=0;while(u<w){t=h+","+c;if(c>=0&&c<x&&h>=0&&h<y&&!z[t]){z[t]=d;g(A,u++,[h,c])}else switch(p[v++%p.length]){case b:c--;break;case f:h--;break;case a:c++;break;case e:h++}switch(p[v%p.length]){case b:c++;break;case f:h++;break;case a:c--;break;case e:h--}}return A};h.$FormationZigZag=function(p){var w=p.$Cols,x=p.$Rows,z=p.$Assembly,v=p.sc,t=[],u=0,c=0,d=0,q=w-1,r=x-1,y,h,s=0;switch(z){case j:c=q;d=0;h=[f,a,e,a];break;case l:c=0;d=r;h=[b,e,a,e];break;case o:c=q;d=r;h=[e,a,f,a];break;case n:c=q;d=r;h=[a,e,b,e];break;case i:c=0;d=0;h=[f,b,e,b];break;case k:c=q;d=0;h=[a,f,b,f];break;case m:c=0;d=r;h=[e,b,f,b];break;default:c=0;d=0;h=[b,f,a,f]}u=0;while(u<v){y=d+","+c;if(c>=0&&c<w&&d>=0&&d<x&&typeof t[y]=="undefined"){g(t,u++,[d,c]);switch(h[s%h.length]){case b:c++;break;case f:d++;break;case a:c--;break;case e:d--}}else{switch(h[s++%h.length]){case b:c--;break;case f:d--;break;case a:c++;break;case e:d++}switch(h[s++%h.length]){case b:c++;break;case f:d++;break;case a:c--;break;case e:d--}}}return t};h.$FormationStraightStairs=function(q){var u=q.$Cols,v=q.$Rows,e=q.$Assembly,t=q.sc,r=[],s=0,c=0,d=0,f=u-1,h=v-1,x=t-1;switch(e){case j:case m:case o:case i:var a=0,b=0;break;case k:case l:case n:case p:var a=f,b=0;break;default:e=p;var a=f,b=0}c=a;d=b;while(s<t){if(z(e)||y(e))g(r,x-s++,[d,c]);else g(r,s++,[d,c]);switch(e){case j:case m:c--;d++;break;case o:case i:c++;d--;break;case k:case l:c--;d--;break;case p:case n:default:c++;d++}if(c<0||d<0||c>f||d>h){switch(e){case j:case m:a++;break;case k:case l:case o:case i:b++;break;case p:case n:default:a--}if(a<0||b<0||a>f||b>h){switch(e){case j:case m:a=f;b++;break;case o:case i:b=h;a++;break;case k:case l:b=h;a--;break;case p:case n:default:a=0;b++}if(b>h)b=h;else if(b<0)b=0;else if(a>f)a=f;else if(a<0)a=0}d=b;c=a}}return r};h.$FormationRectangle=function(f){var d=f.$Cols||1,e=f.$Rows||1,h=[],a,b,i;i=c.$Round(c.j(d/2,e/2))+1;for(a=0;a<d;a++)for(b=0;b<e;b++)g(h,i-c.j(a+1,b+1,d-a,e-b),[b,a]);return h};h.$FormationRandom=function(d){for(var e=[],a,b=0;b<d.$Rows;b++)for(a=0;a<d.$Cols;a++)g(e,c.Q(1e5*c.Md())%13,[b,a]);return e};h.$FormationCircle=function(d){for(var e=d.$Cols||1,f=d.$Rows||1,h=[],a,i=e/2-.5,j=f/2-.5,b=0;b<e;b++)for(a=0;a<f;a++)g(h,c.$Round(c.fc(c.v(b-i,2)+c.v(a-j,2))),[a,b]);return h};h.$FormationCross=function(d){for(var e=d.$Cols||1,f=d.$Rows||1,h=[],a,i=e/2-.5,j=f/2-.5,b=0;b<e;b++)for(a=0;a<f;a++)g(h,c.$Round(c.j(c.H(b-i),c.H(a-j))),[a,b]);return h};h.$FormationRectangleCross=function(f){for(var h=f.$Cols||1,i=f.$Rows||1,j=[],a,d=h/2-.5,e=i/2-.5,k=c.m(d,e)+1,b=0;b<h;b++)for(a=0;a<i;a++)g(j,c.$Round(k-c.m(d-c.H(b-d),e-c.H(a-e)))-1,[a,b]);return j}};i.$JssorSlideshowRunner$=function(m,r,p,u,z,A){var a=this,v,h,e,y=0,x=u.$TransitionsOrder,q,i=8;function t(a){if(a.$Top)a.N=a.$Top;if(a.$Left)a.K=a.$Left;b.c(a,function(a){b.Jd(a)&&t(a)})}function j(h,e,f){var a={$Interval:e,$Duration:1,$Delay:0,$Cols:1,$Rows:1,$Opacity:0,$Zoom:0,$Clip:0,$Move:k,$SlideOut:k,$Reverse:k,$Formation:s.$FormationRandom,$Assembly:1032,$ChessMode:{$Column:0,$Row:0},$Easing:g.$Linear,$Round:{},tc:[],$During:{}};b.F(a,h);if(a.$Rows==0)a.$Rows=c.$Round(a.$Cols*f);t(a);a.sc=a.$Cols*a.$Rows;a.$Easing=b.Zc(a.$Easing,g.$Linear);a.Te=c.Q(a.$Duration/a.$Interval);a.Se=function(c,b){c/=a.$Cols;b/=a.$Rows;var f=c+"x"+b;if(!a.tc[f]){a.tc[f]={I:c,G:b};for(var d=0;d<a.$Cols;d++)for(var e=0;e<a.$Rows;e++)a.tc[f][e+","+d]={$Top:e*b,$Right:d*c+c,$Bottom:e*b+b,$Left:d*c}}return a.tc[f]};if(a.$Brother){a.$Brother=j(a.$Brother,e,f);a.$SlideOut=d}return a}function n(z,i,a,v,n,l){var y=this,t,u={},h={},m=[],f,e,r,p=a.$ChessMode.$Column||0,q=a.$ChessMode.$Row||0,g=a.Se(n,l),o=B(a),C=o.length-1,s=a.$Duration+a.$Delay*C,w=v+s,j=a.$SlideOut,x;w+=50;function B(a){var b=a.$Formation(a);return a.$Reverse?b.reverse():b}y.Td=w;y.jc=function(d){d-=v;var e=d<s;if(e||x){x=e;if(!j)d=s-d;var f=c.Q(d/a.$Interval);b.c(h,function(a,e){var d=c.m(f,a.j);d=c.j(d,a.length-1);if(a.Sd!=d){if(!a.Sd&&!j)b.eb(m[e]);else d==a.m&&j&&b.xb(m[e]);a.Sd=d;b.U(m[e],a[d])}})}};i=b.fb(i);A(i,0,0);b.c(o,function(i,m){b.c(i,function(G){var I=G[0],H=G[1],v=I+","+H,o=k,s=k,x=k;if(p&&H%2){if(p&3)o=!o;if(p&12)s=!s;if(p&16)x=!x}if(q&&I%2){if(q&3)o=!o;if(q&12)s=!s;if(q&16)x=!x}a.$Top=a.$Top||a.$Clip&4;a.$Bottom=a.$Bottom||a.$Clip&8;a.$Left=a.$Left||a.$Clip&1;a.$Right=a.$Right||a.$Clip&2;var C=s?a.$Bottom:a.$Top,z=s?a.$Top:a.$Bottom,B=o?a.$Right:a.$Left,A=o?a.$Left:a.$Right;a.$Clip=C||z||B||A;r={};e={N:0,K:0,$Opacity:1,I:n,G:l};f=b.F({},e);t=b.F({},g[v]);if(a.$Opacity)e.$Opacity=2-a.$Opacity;if(a.$ZIndex){e.$ZIndex=a.$ZIndex;f.$ZIndex=0}var K=a.$Cols*a.$Rows>1||a.$Clip;if(a.$Zoom||a.$Rotate){var J=d;if(J){e.$Zoom=a.$Zoom?a.$Zoom-1:1;f.$Zoom=1;var N=a.$Rotate||0;e.$Rotate=N*360*(x?-1:1);f.$Rotate=0}}if(K){var i=t.rc={};if(a.$Clip){var w=a.$ScaleClip||1;if(C&&z){i.$Top=g.G/2*w;i.$Bottom=-i.$Top}else if(C)i.$Bottom=-g.G*w;else if(z)i.$Top=g.G*w;if(B&&A){i.$Left=g.I/2*w;i.$Right=-i.$Left}else if(B)i.$Right=-g.I*w;else if(A)i.$Left=g.I*w}r.$Clip=t;f.$Clip=g[v]}var L=o?1:-1,M=s?1:-1;if(a.x)e.K+=n*a.x*L;if(a.y)e.N+=l*a.y*M;b.c(e,function(a,c){if(b.uc(a))if(a!=f[c])r[c]=a-f[c]});u[v]=j?f:e;var D=a.Te,y=c.$Round(m*a.$Delay/a.$Interval);h[v]=new Array(y);h[v].j=y;h[v].m=y+D-1;for(var F=0;F<=D;F++){var E=b.Ae(f,r,F/D,a.$Easing,a.$During,a.$Round,{$Move:a.$Move,$OriginalWidth:n,$OriginalHeight:l});E.$ZIndex=E.$ZIndex||1;h[v].push(E)}})});o.reverse();b.c(o,function(a){b.c(a,function(c){var f=c[0],e=c[1],d=f+","+e,a=i;if(e||f)a=b.fb(i);b.U(a,u[d]);b.ic(a,"hidden");b.wb(a,"absolute");z.gf(a);m[d]=a;b.eb(a,!j)})})}function w(){var a=this,b=0;l.call(a,0,v);a.Gb=function(c,a){if(a-b>i){b=a;e&&e.jc(a);h&&h.jc(a)}};a.ld=q}a.Ge=function(){var a=0,b=u.$Transitions,d=b.length;if(x)a=y++%d;else a=c.R(c.Md()*d);b[a]&&(b[a].ec=a);return b[a]};a.He=function(x,y,k,l,b,t){a.yb();q=b;b=j(b,i,t);var g=l.Cd,f=k.Cd;g["no-image"]=!l.Qc;f["no-image"]=!k.Qc;var o=g,s=f,w=b,d=b.$Brother||j({},i,t);if(!b.$SlideOut){o=f;s=g}var u=d.$Shift||0;h=new n(m,s,d,c.m(u-d.$Interval,0),r,p);e=new n(m,o,w,c.m(d.$Interval-u,0),r,p);h.jc(0);e.jc(0);v=c.m(h.Td,e.Td);a.ec=x};a.yb=function(){m.yb();h=f;e=f};a.Me=function(){var a=f;if(e)a=new w;return a};if(z&&b.Sg()<537)i=16;o.call(a);l.call(a,-1e7,1e7)};var r={Ec:1};i.$JssorBulletNavigator$=function(){var a=this,E=b.Y(a,o),h,v,C,B,m,l=0,g,s,p,z,A,i,k,u,t,x,j;function y(a){j[a]&&j[a].Kd(a==l)}function w(b){a.k(r.Ec,b*s)}a.Wc=function(a){if(a!=m){var d=l,b=c.R(a/s);l=b;m=a;y(d);y(b)}};a.Xc=function(a){b.eb(h,a)};a.Yc=function(J){b.$Destroy(j);m=e;a.Zd();x=[];j=[];b.Qb(h);v=c.Q(J/s);l=0;var F=u+z,G=t+A,r=c.Q(v/p)-1;C=u+F*(!i?r:p-1);B=t+G*(i?r:p-1);b.C(h,C);b.D(h,B);for(var n=0;n<v;n++){var H=b.vg();b.zg(H,n+1);var o=b.zd(k,"numbertemplate",H,d);b.wb(o,"absolute");var E=n%(r+1),I=c.R(n/(r+1)),y=g.gc&&!i?r-E:E;b.Z(o,(!i?y:I)*F);b.V(o,(i?y:I)*G);b.J(h,o);x[n]=o;g.$ActionMode&1&&a.a(o,"click",b.T(f,w,n));g.$ActionMode&2&&a.a(o,"mouseenter",b.T(f,w,n));j[n]=b.Bc(o)}q.yc(h)};a.B=function(d,c){a.$Elmt=h=b.$GetElement(d);a.dd=g=b.F({$SpacingX:10,$SpacingY:10,$ActionMode:1},c);k=b.$FindChild(h,"prototype");u=b.C(k);t=b.D(k);b.qb(k,h);s=g.$Steps||1;p=g.$Rows||1;z=g.$SpacingX;A=g.$SpacingY;i=g.$Orientation&2;g.$AutoCenter&&q.xc(h,n.Eb,g.$AutoCenter)};a.$Destroy=function(){b.$Destroy(j,E)};b.B(a)};i.$JssorArrowNavigator$=function(){var a=this,v=b.Y(a,o),e,c,g,l,s,k,h,m,j,i;function p(b){a.k(r.Ec,b,d)}function u(a){b.eb(e,a);b.eb(c,a)}function t(){j.$Enable((g.$Loop||!l.hf(h))&&k>1);i.$Enable((g.$Loop||!l.ff(h))&&k>1)}a.Wc=function(c,a,b){h=a;!b&&t()};a.Xc=u;a.Yc=function(g){k=g;h=0;if(!s){a.a(e,"click",b.T(f,p,-m));a.a(c,"click",b.T(f,p,m));j=b.Bc(e);i=b.Bc(c);b.n(e,n.Lc,1);b.n(c,n.Lc,1);s=d}};a.B=function(f,d,h,i){a.dd=g=b.F({$Steps:1},h);e=f;c=d;if(g.gc){e=d;c=f}m=g.$Steps;l=i;if(g.$AutoCenter){q.xc(e,n.Eb,g.$AutoCenter);q.xc(c,n.Eb,g.$AutoCenter)}q.yc(e);q.yc(c)};a.$Destroy=function(){b.$Destroy(j,i,v)};b.B(a)};i.$JssorThumbnailNavigator$=function(){var i=this,E=b.Y(i,o),h,B,a,y,C,m,l=[],A,z,g,p,s,w,v,x,t,u;function D(){var c=this;b.Y(c,o);var h,e,n,l;function p(){n.Kd(m==h)}function j(e){if(e||!t.$LastDragSucceeded()){var c=g-h%g,a=t.ie((h+c)/g-1),b=a*g+g-c;if(a<0)b+=y%g;if(a>=C)b-=y%g;i.k(r.Ec,b,k,d)}}c.ne=p;c.B=function(g,i){c.ec=h=i;l=g.Ne||g.Qc||b.Rb();c.id=e=b.zd(u,"thumbnailtemplate",l,d);n=b.Bc(e);a.$ActionMode&1&&c.a(e,"click",b.T(f,j,0));a.$ActionMode&2&&c.a(e,"mouseenter",b.T(f,j,1))};b.B(c)}i.Wc=function(a,e,d){if(a!=m){var b=m;m=a;b!=-1&&l[b].ne();l[a]&&l[a].ne()}!d&&t.$PlayTo(t.ie(c.R(a/g)))};i.Xc=function(a){b.eb(h,a)};i.Yc=function(I,J){b.$Destroy(t,l);m=e;l=[];var K=b.fb(B);b.Qb(h);a.gc&&b.n(h,"dir","rtl");b.Gg(h,b.Cb(K));var i=b.$FindChild(h,"slides",d);y=I;C=c.Q(y/g);m=-1;var f=a.$Orientation&1,r=w+(w+p)*(g-1)*(1-f),o=v+(v+s)*(g-1)*f,E=(f?c.m:c.j)(A,r),u=(f?c.j:c.m)(z,o);x=c.Q((A-p)/(w+p)*f+(z-s)/(v+s)*(1-f));var G=r+(r+p)*(x-1)*f,F=o+(o+s)*(x-1)*(1-f);E=c.j(E,G);u=c.j(u,F);b.C(i,E);b.D(i,u);b.fd(i,3);var n=[];b.c(J,function(k,e){var h=new D(k,e),d=h.id,a=c.R(e/g),j=e%g;b.Z(d,(w+p)*j*(1-f));b.V(d,(v+s)*j*f);if(!n[a]){n[a]=b.Rb();b.J(i,n[a])}b.J(n[a],d);l.push(h)});var H=b.F({$AutoPlay:0,$NaviQuitDrag:k,$SlideWidth:r,$SlideHeight:o,$SlideSpacing:p*f+s*(1-f),$MinDragOffsetToSlide:12,$SlideDuration:200,$PauseOnHover:1,$Cols:x,$PlayOrientation:a.$Orientation,$DragOrientation:a.$NoDrag||a.$DisableDrag?0:a.$Orientation},a);t=new j(h,H);q.yc(h)};i.B=function(j,f,e){h=j;i.dd=a=b.F({$SpacingX:0,$SpacingY:0,$Orientation:1,$ActionMode:1},f);A=b.C(h);z=b.D(h);var c=b.$FindChild(h,"slides",d);u=b.$FindChild(c,"prototype");e=b.fb(e);b.tb(e,c);w=b.C(u);v=b.D(u);b.qb(u,c);b.wb(c,"absolute");b.ic(c,"hidden");g=a.$Rows||1;p=a.$SpacingX;s=a.$SpacingY;a.$AutoCenter&=a.$Orientation;a.$AutoCenter&&q.xc(h,n.Eb,a.$AutoCenter);B=b.fb(h)};i.$Destroy=function(){b.$Destroy(t,l,E)};b.B(i)};function p(e,d,c){var a=this;b.Y(a,o);l.call(a,0,c.$Idle);a.oc=0;a.Tc=c.$Idle}p.kd=21;p.vc=24;var t=i.$JssorCaptionSlideo$=function(){var a=this,hb=b.Y(a,o);l.call(a,0,0);var e,s,gb=[g.$Linear,g.$Swing,g.$InQuad,g.$OutQuad,g.$InOutQuad,g.$InCubic,g.$OutCubic,g.$InOutCubic,g.$InQuart,g.$OutQuart,g.$InOutQuart,g.$InQuint,g.$OutQuint,g.$InOutQuint,g.$InSine,g.$OutSine,g.$InOutSine,g.$InExpo,g.$OutExpo,g.$InOutExpo,g.$InCirc,g.$OutCirc,g.$InOutCirc,g.$InElastic,g.$OutElastic,g.$InOutElastic,g.$InBack,g.$OutBack,g.$InOutBack,g.$InBounce,g.$OutBounce,g.$InOutBounce,g.$Early,g.$Late],G={},J,C,x=new l(0,0),K=[],v=[],E,q=0;function M(d,c){var a={};b.c(d,function(d,f){var e=G[f];if(e){if(b.Jd(d))d=M(d,c||f=="e");else if(c)if(b.uc(d))d=gb[d];a[e]=d}});return a}function O(c,f){var e=[],d=b.q(c,"play");if(f&&d){var g=new t(c,s,{Qg:d});T.push(g);a.a(g,p.kd,Z);a.a(g,p.vc,U)}else b.c(b.Cb(c),function(a){e=e.concat(O(a,f+1))});if(!f&&(!j||j&16)||f&&(!d||!(d&16))){var h=J[b.q(c,"t")];h&&e.push({$Elmt:c,ld:h})}return e}function F(c,e){var a=K[c];if(a==f){a=K[c]={ub:c,Vc:[],wd:[]};var d=0;!b.c(v,function(a,b){d=b;return a.ub>c})&&d++;v.splice(d,0,a)}return a}function db(o,p,g){var a,e;if(C){var k=C[b.q(o,"c")];if(k){a=F(k.r,0);a.Mg=k.e||0}}b.c(p,function(h){var f=b.F(d,{},M(h)),i=b.Zc(f.$Easing);delete f.$Easing;if(f.$Left){f.K=f.$Left;i.K=i.$Left;delete f.$Left}if(f.$Top){f.N=f.$Top;i.N=i.$Top;delete f.$Top}var m={$Easing:i,$OriginalWidth:g.I,$OriginalHeight:g.G},j=new l(h.b,h.d,m,o,g,f);q=c.m(q,h.b+h.d);if(a){if(!e)e=new l(h.b,0);e.W(j)}else{var k=F(h.b,h.b+h.d);k.Vc.push(j)}if(f.Ab)g.Ab={Fd:0,Ad:0,Od:0,$Opacity:0};g=b.Re(g,f)});if(a&&e){e.Je();var h=e,j,i=e.Dc(),m=e.nb(),n=c.m(m,a.Mg);if(a.ub<m){if(a.ub>i){h=new l(i,a.ub-i);h.W(e,d)}else h=f;j=new l(a.ub,n-i,{lc:n-a.ub,bf:d});j.W(e,d)}h&&a.Vc.push(h);j&&a.wd.push(j)}return g}function cb(a){b.c(a,function(f){var a=f.$Elmt,e=b.C(a),d=b.D(a),c={$Left:b.Z(a),$Top:b.V(a),K:0,N:0,$Opacity:1,$ZIndex:b.S(a)||0,$Rotate:0,$RotateX:0,$RotateY:0,$ScaleX:1,$ScaleY:1,$TranslateX:0,$TranslateY:0,$TranslateZ:0,$SkewX:0,$SkewY:0,I:e,G:d,$Clip:{$Top:0,$Right:e,$Bottom:d,$Left:0}};c.se=c.$Left;c.ve=c.$Top;db(a,f.ld,c)})}function fb(f,e,g){var c=f.b-e;if(c){var b=new l(e,c);b.W(x,d);b.$Shift(g);a.W(b)}a.nd(f.d);return c}function eb(e){var c=x.Dc(),d=0;b.c(e,function(e,f){e=b.F({d:3e3},e);fb(e,c,d);c=e.b;d+=e.d;if(!f||e.t==2){a.oc=c;a.Tc=c+e.d}})}function B(i,d,e){var f=d.length;if(f>4)for(var j=c.Q(f/4),a=0;a<j;a++){var g=d.slice(a*4,c.j(a*4+4,f)),h=new l(g[0].ub,0);B(h,g,e);i.W(h)}else b.c(d,function(a){b.c(e?a.wd:a.Vc,function(a){e&&a.nd(q-a.nb());i.W(a)})})}var j,L,z=0,i,y,Q,P,A,T=[],N=[],r,D,m;function w(a){return a&2||a&4&&b.Rc().Hc}function ab(){if(!A){i&8&&a.a(h,"keydown",H);if(i&32){a.a(h,"mousedown",u);a.a(h,"touchstart",u)}A=d}}function Y(){a.ab(h,"keydown",H);a.ab(h,"mousedown",u);a.ab(h,"touchstart",u);A=k}function R(b){if(!r||b){r=d;a.L();b&&z&&a.M(0);a.je(1);a.Le();ab();a.k(p.kd,a)}}function n(){if(!D&&(r||a.o())){D=d;a.L();a.pe()>a.oc&&a.M(a.oc);a.je(Q||1);a.Gc(0)}}function V(){!m&&n()}function S(c){var b=c;if(c<0&&a.o())b=1;if(b!=z){z=b;L&&a.k(p.vc,a,z)}}function H(a){i&8&&b.he(a)==27&&n()}function X(a){if(m&&b.Ee(a)!==f){m=k;i&16&&b.$Delay(V,160)}}function u(a){i&32&&!b.de(e,b.$EvtSrc(a))&&n()}function W(a){if(!m){m=d;if(j&1)b.fe(a,e)&&R()}}function bb(h){var g=b.$EvtSrc(h),a=b.lb(g,f,f,"A"),c=a&&(b.qg(a)||a===e||b.de(e,a));if(r&&w(i))!c&&n();else if(w(j))!c&&R(d)}function Z(b){var c=b.Dg(),a=N[c];a!==b&&a&&a.sg();N[c]=b}function U(b,c){a.k(p.vc,b,c)}a.Dg=function(){return P||""};a.sg=n;a.Oc=function(){S(1)};a.Kc=function(){r=k;D=k;S(-1);!a.o()&&Y()};a.Gb=function(){!m&&y&&a.pe()>a.Tc&&n()};a.B=function(m,h,f){e=m;s=h;j=f.Qg;E=f.pg;J=s.$Transitions;C=s.$Controls;var l={$Top:"y",$Left:"x",$Bottom:"m",$Right:"t",$Rotate:"r",$RotateX:"rX",$RotateY:"rY",$ScaleX:"sX",$ScaleY:"sY",$TranslateX:"tX",$TranslateY:"tY",$TranslateZ:"tZ",$SkewX:"kX",$SkewY:"kY",$Opacity:"o",$Easing:"e",$ZIndex:"i",$Clip:"c",Ab:"bc",Fd:"re",Ad:"gr",Od:"bl"};b.c(l,function(b,a){G[b]=a});cb(O(e,0));B(x,v);if(j){a.W(x);E=d;y=b.q(e,"idle");i=b.q(e,"rollback");Q=b.q(e,"speed",1);P=b.db(e,"group");(w(j)||w(i))&&a.a(e,"click",bb);if((j&1||y)&&!b.Rc().Hc){a.a(e,"mouseenter",W);a.a(e,"mouseleave",X)}L=b.q(e,"pause")}var k=s.$Breaks||[],c=k[b.q(e,"b")]||[],g={b:q,d:c.length?0:f.$Idle||y||0};c=c.concat([g]);eb(c);a.nb();E&&a.nd(1e8);q=a.nb();B(a,v,d);a.M(-1);a.M(b.q(e,"initial")||0)};a.$Destroy=function(){b.$Destroy(hb,T);a.L();a.M(-1)};b.B(a)},j=i.$JssorSlider$=(i.module||{}).exports=function(){var a=this,Ec=b.Y(a,o),Nb="data-jssor-slider",ic="data-jssor-thumb",u,m,S,Cb,cb,jb,W,J,O,M,Zb,Bc,Fc=1,Ac=1,kc=1,rc=1,nc={},w,R,Lb,bc,Yb,wb,zb,yb,gb,E=[],Qb,s=-1,tc,q,I,H,P,nb,ob,F,N,kb,T,z,V,mb,Y=[],vc,xc,oc,t,vb,Hb,qb,eb,X,sc,Gb,Pb,Rb,G,Kb=0,bb=0,Q=Number.MAX_VALUE,K=Number.MIN_VALUE,C,lb,db,U=1,Wb=0,pb,A,Fb,Eb,L,Ab,Db,B,Z,rb,y,Bb,cc=b.Rc(),Ub=cc.Hc,x=[],D,hb,ab,Mb,hc,mc,ib;function Jb(){return!U&&X&12}function Gc(){return Wb||!U&&X&3}function Ib(){return!A&&!Jb()&&!y.$IsPlaying()}function Xc(){return!Gc()&&Ib()}function jc(){return z||S}function Oc(){return jc()&2?ob:nb}function lc(a,c,d){b.Z(a,c);b.V(a,d)}function Dc(c,b){var a=jc(),d=(nb*b+Kb)*(a&1),e=(ob*b+Kb)*(a&2)/2;lc(c,d,e)}function dc(b,f){if(A&&!(C&1)){var e=b,d;if(b<K){e=K;d=-1}if(b>Q){e=Q;d=1}if(d){var a=b-e;if(f){a=c.Zf(a)*2/c.E;a=c.v(a*d,1.6)}else{a=c.v(a*d,.625);a=c.Id(a*c.E/2)}b=e+a*d}}return b}function Qc(a){return dc(a,d)}function Lc(a){return dc(a)}function xb(a,b){if(!(C&1)){var c=a-Q+(b||0),d=K-a+(b||0);if(c>0&&c>d)a=Q;else if(d>0)a=K}return a}function yc(a){return!(C&1)&&a-K<.0001}function wc(a){return!(C&1)&&Q-a<.0001}function sb(a){return!(C&1)&&(a-K<.0001||Q-a<.0001)}function Sb(c,a,d){!ib&&b.c(Y,function(b){b.Wc(c,a,d)})}function ec(b){var a=b,d=sb(b);if(d)a=xb(a);else{b=v(b);a=b}a=c.R(a);a=c.m(a,0);return a}function gd(a){x[s];Qb=s;s=a;tc=x[s]}function Uc(){z=0;var b=B.o(),d=ec(b);Sb(d,b);if(sb(b)||b==c.R(b)){if(t&2&&(eb>0&&d==q-1||eb<0&&!d))t=0;gd(d);a.k(j.$EVT_PARK,s,Qb)}}function pc(a,b){if(q&&(!b||!y.$IsPlaying())){y.L();y.bd(a,a)}}function ub(a){if(q){a=v(a);a=xb(a);pc(a)}else Sb(0,0)}function ad(){var b=j.ae||0,a=lb;j.ae|=a;return V=a&~b}function Vc(){if(V){j.ae&=~lb;V=0}}function Xb(c){var a=b.Rb();b.U(a,gb);c&&b.ic(a,"hidden");return a}function v(b,a){a=a||q||1;return(b%a+a)%a}function fc(c,a,b){t&8&&(t=0);tb(c,Gb,a,b)}function Tb(){b.c(Y,function(a){a.Xc(a.dd.$ChanceToShow<=U)})}function Kc(c){if(!U&&(b.Ee(c)||!b.fe(c,u))){U=1;Tb();if(!A){X&12&&Hc();x[s]&&x[s].zc()}a.k(j.$EVT_MOUSE_LEAVE)}}function Jc(){if(U){U=0;Tb();A||!(X&12)||Ic()}a.k(j.$EVT_MOUSE_ENTER)}function Nc(){b.U(R,gb)}function Vb(b,a){tb(b,a,d)}function tb(g,h,l,p){if(q&&(!A||m.$NaviQuitDrag)&&!Jb()&&!isNaN(g)){var f=B.o(),a=g;if(l){a=f+g;if(C&2){if(yc(f)&&g<0)a=Q;if(wc(f)&&g>0)a=K}}if(!(C&1))if(p)a=v(a);else a=xb(a,.5);if(l&&!sb(a))a=c.$Round(a);var i=(a-f)%q;a=f+i;if(h==e)h=Gb;var b=c.H(i),j=0;if(b){if(b<1)b=c.v(b,.5);if(b>1){var o=Oc(),n=(S&1?zb:yb)/o;b=c.j(b,n*1.5)}j=h*b}ib=d;y.L();ib=k;y.bd(f,a,j)}}function Rc(e,h,o){var l=this,i={$Top:2,$Right:1,$Bottom:2,$Left:1},m={$Top:"top",$Right:"right",$Bottom:"bottom",$Left:"left"},g,a,f,j,k={};l.$Elmt=e;l.$ScaleSize=function(q,l,u){var p,s=q,r=l;if(!f){f=b.Hg(e);g=e.parentNode;j={$Scale:b.q(e,n.af,1),$AutoCenter:b.q(e,n.Eb)};b.c(m,function(c,a){k[a]=b.q(e,"data-scale-"+c,1)});a=e;if(h){a=b.fb(g,d);b.U(a,{$Top:0,$Left:0});b.J(a,e);b.J(g,a)}}if(o){p=c.m(q,l);if(h)if(u>=0&&u<1){var w=c.j(q,l);p=c.j(p/w,1/(1-u))*w}}else s=r=p=c.v(O<M?l:q,j.$Scale);var x=h?1.001:1,t=p*x;h&&(rc=t);b.Vd(a,t);b.C(g,f.I*s);b.D(g,f.G*r);var v=b.be()&&b.hd()<9?t:1,y=(s-v)*f.I/2,z=(r-v)*f.G/2;b.Z(a,y);b.V(a,z);b.c(f,function(d,a){if(i[a]&&d){var e=(i[a]&1)*c.v(q,k[a])*d+(i[a]&2)*c.v(l,k[a])*d/2;b.kf[a](g,e)}});b.fd(g,j.$AutoCenter)}}function ed(){var a=this;l.call(a,0,0,{lc:q});b.c(x,function(b){a.od(b);b.$Shift(G/F)})}function dd(){var a=this,b=Bb.$Elmt;l.call(a,-1,2,{$Easing:g.$Linear,mf:{Ob:Dc},lc:q,$Reverse:Hb},b,{Ob:1},{Ob:-2});a.id=b}function fd(){var b=this;l.call(b,-1e8,2e8);b.Gb=function(e,b){if(c.H(b-e)>1e-5){var g=b,f=b;if(c.R(b)!=b&&b>e&&(C&1||b>bb))f++;var h=ec(f);Sb(h,g,d);a.k(j.$EVT_POSITION_CHANGE,v(g),v(e),b,e)}}}function Tc(o,n){var b=this,g,i,e,c,h;l.call(b,-1e8,2e8,{le:100});b.Oc=function(){pb=d;a.k(j.$EVT_SWIPE_START,v(B.o()),Z.o())};b.Kc=function(){pb=k;c=k;a.k(j.$EVT_SWIPE_END,v(B.o()),Z.o());!A&&Uc()};b.Gb=function(f,b){var a=b;if(c)a=h;else if(e){var d=b/e;a=m.$SlideEasing(d)*(i-g)+g}a=Qc(a);Z.M(a)};b.bd=function(a,c,h,f){A=k;e=h||1;g=a;i=c;ib=d;Z.M(a);ib=k;b.M(0);b.Gc(e,f)};b.Rg=function(){c=d;c&&b.$Play(f,f,d)};b.Ug=function(a){h=a};Z=new fd;Z.W(o);Rb&&Z.W(n)}function Pc(){var c=this,a=Xb();b.S(a,0);c.$Elmt=a;c.gf=function(c){b.J(a,c);b.eb(a)};c.yb=function(){b.xb(a);b.Qb(a)}}function cd(w,h){var g=this,jb=b.Y(g,o),y,G=0,V,u,E,A,J,n,F=[],U,M,Q,i,r,z,S;l.call(g,-N,N+1,{lc:C&1?q:e,$Reverse:Hb});function K(){y&&y.$Destroy();Wb-=G;G=0;y=new cb.$Class(u,cb,{$Idle:b.q(u,"idle",sc),pg:!t});y.$On(p.vc,X)}function Y(){y.sd<cb.sd&&K()}function X(b,a){G+=a;Wb+=a;if(h==s)!G&&g.zc()}function P(p,s,o){if(!M){M=d;if(n&&o){var q=b.q(n,"data-expand",0)*2,f=o.width,e=o.height,l=f,i=e;if(f&&e){if(A){if(A&3&&(!(A&4)||f>I||e>H)){var m=k,r=I/H*e/f;if(A&1)m=r>1;else if(A&2)m=r<1;l=m?f*H/e:I;i=m?H:e*I/f}b.C(n,l);b.D(n,i);b.V(n,(H-i)/2);b.Z(n,(I-l)/2)}b.Vd(n,c.m((l+q)/l,(i+q)/i))}b.wb(n,"absolute")}a.k(j.$EVT_LOAD_END,h)}s.Yd(k);p&&p(g)}function W(f,b,c,e){if(e==z&&s==h&&t&&Ib()&&!g.Nc()){var a=v(f);D.He(a,h,b,g,c,H/I);b.dh();rb.$Shift(a-rb.Dc()-1);rb.M(a);pc(a,d)}}function ab(b){if(b==z&&s==h&&Ib()&&!g.Nc()){if(!i){var a=f;if(D)if(D.ec==h)a=D.Me();else D.yb();Y();i=new bd(w,h,a,y);i.og(r)}!i.$IsPlaying()&&i.Jc()}}function L(a,d,k){if(a==h){if(a!=d)x[d]&&x[d].Ce();else!k&&i&&i.Df();r&&r.$Enable();z=b.Db();g.Kb(b.T(f,ab,z))}else{var j=c.j(h,a),e=c.m(h,a),n=c.j(e-j,j+q-e),l=N+m.$LazyLoading-1;(!Q||n<=l)&&g.Kb()}}function bb(){if(s==h&&i){i.L();r&&r.$Quit();r&&r.$Disable();i.De()}}function hb(){s==h&&i&&i.L()}function Z(b){!db&&a.k(j.$EVT_CLICK,h,b)}g.Yd=function(a){if(S!=a){S=a;a&&b.J(w,J);!a&&b.qb(J)}};g.Kb=function(e,c){c=c||g;if(F.length&&!M){c.Yd(d);if(!U){U=d;a.k(j.$EVT_LOAD_START,h);b.c(F,function(a){if(!b.n(a,"src")){var c=b.db(a,"src")||b.db(a,"src2")||"";if(c){a.src=c;b.zb(a,b.n(a,"data-display"))}}})}b.Ig(F,n,b.T(f,P,e,c))}else P(e,c)};g.Gf=function(){if(Xc())if(q==1){g.Ce();L(h,h)}else{var a;if(D)a=D.Ge(q);if(a){z=b.Db();var c=h+eb,d=x[v(c)];return d.Kb(b.T(f,W,c,d,a,z),g)}else(C||!sb(B.o())||!sb(B.o()+eb))&&Vb(eb)}};g.zc=function(){L(h,h,d)};g.Ce=function(){r&&r.$Quit();r&&r.$Disable();g.re();i&&i.Kf();i=f;K()};g.dh=function(){b.xb(w)};g.re=function(){b.eb(w)};function T(a,j,e){if(b.n(a,Nb))return;if(e){if(!u){u=a;E=Xb(d);var c="background";b.O(E,c+"Color",b.O(u,c+"Color"));b.O(E,c+"Image",b.O(u,c+"Image"));b.O(u,c,f);b.tb(E,u)}b.n(a,"data-events",b.Fc(a));b.n(a,"data-display",b.zb(a));b.ch(a,b.db(a,"data-to"));b.bh(a,b.db(a,"data-bf"));e>1&&b.kc(a,b.n(a,"data-ts"));b.ah(a,b.q(a,"data-p"));b.yg(a,b.db(a,"po"));if(a.tagName=="IMG"){F.push(a);if(!b.n(a,"src")){Q=d;b.xb(a)}}var g=b.lf(a);if(g){var h=new Image;b.n(h,"src",g);F.push(h)}e&&b.S(a,(b.S(a)||0)+1)}var i=b.Cb(a);b.c(i,function(c){if(e<3&&!n)if(b.db(c,"u")=="image"){n=c;n.border=0;b.U(n,gb);b.U(a,gb);b.O(n,"maxWidth","10000px");b.J(E,n)}T(c,j,e+1)})}g.md=function(c,b){var a=N-b;Dc(V,a)};g.ec=h;T(w,d,0);A=b.q(u,"data-fillmode",m.$FillMode);var O=b.$FindChild(u,"thumb",d);if(O){g.Ne=b.fb(O);b.xb(O)}b.eb(w);J=b.fb(R);b.S(J,1e3);g.a(w,"click",Z);K(d);g.Qc=n;g.Cd=w;g.id=V=w;g.a(a,203,L);g.a(a,28,hb);g.a(a,24,bb);g.$Destroy=function(){b.$Destroy(jb,y,i)}}function bd(F,h,q,r){var c=this,E=b.Y(c,o),i=0,u=0,g,m,f,e,n,w,v,y=x[h];l.call(c,0,0);function B(){c.Jc()}function C(a){v=a;c.L();c.Jc()}function z(){}c.Jc=function(){if(!A&&!pb&&!v&&s==h&&!c.Nc()){var k=c.o();if(!k)if(g&&!n){n=d;c.De(d);a.k(j.$EVT_SLIDESHOW_START,h,u,i,u,g,e)}a.k(j.$EVT_STATE_CHANGE,h,k,i,m,f,e);if(!Jb()){var l;if(k==e)t&&b.$Delay(y.Gf,20);else{if(k==f)l=e;else if(!k)l=f;else l=c.ue();(k!=f||!Gc())&&c.Gc(l,B)}}}};c.Df=function(){f==e&&f==c.o()&&c.M(m)};c.Kf=function(){D&&D.ec==h&&D.yb();var b=c.o();b<e&&a.k(j.$EVT_STATE_CHANGE,h,-b-1,i,m,f,e)};c.De=function(a){q&&b.ic(T,a&&q.ld.$Outside?"":"hidden")};c.md=function(c,b){if(n&&b>=g){n=k;y.re();D.yb();a.k(j.$EVT_SLIDESHOW_END,h,g,i,u,g,e)}a.k(j.$EVT_PROGRESS_CHANGE,h,b,i,m,f,e)};c.og=function(a){if(a&&!w){w=a;a.$On($JssorPlayer$.jf,C)}};c.a(r,p.kd,z);q&&c.od(q);g=c.nb();c.od(r);m=g+r.oc;e=c.nb();f=t?g+r.Tc:e;c.$Destroy=function(){E.$Destroy();c.L()}}function qc(){Mb=pb;hc=y.ue();ab=B.o();hb=Lc(ab)}function Ic(){qc();if(A||Jb()){y.L();a.k(j.Jf)}}function Hc(f){if(Ib()){var b=B.o(),a=hb,e=0;if(f&&c.H(L)>=m.$MinDragOffsetToSlide){a=b;e=Db}a=c.Q(a);a=xb(a+e,.5);var d=c.H(a-b);if(d<1&&m.$SlideEasing!=g.$Linear)d=c.v(d,.5);if((!db||!f)&&Mb)y.Gc(hc);else if(b==a)tc.zc();else y.bd(b,a,d*Gb)}}function gc(a){!b.lb(b.$EvtSrc(a),e,n.ee)&&b.$CancelEvent(a)}function zc(b){Fb=k;A=d;Ic();if(!Mb)z=0;a.k(j.$EVT_DRAG_START,v(ab),ab,b)}function Zc(a){Cc(a,1)}function Cc(c,d){L=0;Ab=0;Db=0;kc=rc;if(d){var i=c.touches[0];Eb={x:i.clientX,y:i.clientY}}else Eb=b.pd(c);var f=b.$EvtSrc(c),g=b.lb(f,"1",ic);if((!g||g===u)&&!V&&(!d||c.touches.length==1)){mb=b.lb(f,e,n.ee)||!lb||!ad();a.a(h,d?"touchmove":"mousemove",ac);Fb=!mb&&b.lb(f,e,n.Lc);!Fb&&!mb&&zc(c,d)}}function ac(a){var e,f;a=b.Yg(a);if(a.type!="mousemove")if(a.touches.length==1){f=a.touches[0];e={x:f.clientX,y:f.clientY}}else fb();else e=b.pd(a);if(e){var i=e.x-Eb.x,j=e.y-Eb.y,g=c.H(i),h=c.H(j);if(z||g>1.5||h>1.5)if(Fb)zc(a,f);else{if(c.R(hb)!=hb)z=z||S&V;if((i||j)&&!z){if(V==3)if(h>g)z=2;else z=1;else z=V;if(Ub&&z==1&&h>g*2.4)mb=d}var l=i,k=nb;if(z==2){l=j;k=ob}(L-Ab)*qb<-1.5&&(Db=0);(L-Ab)*qb>1.5&&(Db=-1);Ab=L;L=l;mc=hb-L*qb/k/kc*m.$DragRatio;if(L&&z&&!mb){b.$CancelEvent(a);y.Rg(d);y.Ug(mc)}}}}function fb(){Vc();a.ab(h,"mousemove",ac);a.ab(h,"touchmove",ac);db=L;if(A){db&&t&8&&(t=0);y.L();A=k;var b=B.o();a.k(j.$EVT_DRAG_END,v(b),b,v(ab),ab);X&12&&qc();Hc(d)}}function Mc(c){var f=b.$EvtSrc(c),a=b.lb(f,"1",Nb);if(u===a)if(db){b.$StopEvent(c);a=b.lb(f,e,"data-jssor-button","A");a&&b.$CancelEvent(c)}else{t&4&&(t=0);a=b.lb(f,e,"data-jssor-click");if(a){b.$CancelEvent(c);hitValues=(b.n(a,"data-jssor-click")||"").split(":");var g=b.Jg(hitValues[1]);hitValues[0]=="to"&&tb(g-1);hitValues[0]=="next"&&tb(g,e,d)}}}a.$SlidesCount=function(){return E.length};a.$CurrentIndex=function(){return s};a.$CurrentPosition=function(){return B.o()};a.$AutoPlay=function(a){if(a==e)return t;if(a!=t){t=a;t&&x[s]&&x[s].zc()}};a.$IsDragging=function(){return A};a.$IsSliding=function(){return pb};a.$IsMouseOver=function(){return!U};a.$LastDragSucceeded=function(){return db};a.$OriginalWidth=function(){return O};a.$OriginalHeight=function(){return M};a.$ScaleHeight=function(b){if(b==e)return Bc||M;a.$ScaleSize(b/M*O,b)};a.$ScaleWidth=function(b){if(b==e)return Zb||O;a.$ScaleSize(b,b/O*M)};a.$ScaleSize=function(c,a,d){b.C(u,c);b.D(u,a);Fc=c/O;Ac=a/M;b.c(nc,function(a){a.$ScaleSize(Fc,Ac,d)});if(!Zb){b.tb(T,w);b.V(T,0);b.Z(T,0)}Zb=c;Bc=a};a.hf=yc;a.ff=wc;a.$PlayTo=tb;a.$GoTo=ub;a.$Next=function(){Vb(1)};a.$Prev=function(){Vb(-1)};a.$Pause=function(){t=0};a.$Play=function(){a.$AutoPlay(t||1)};a.$SetSlideshowTransitions=function(a){m.$SlideshowOptions.$Transitions=a};a.$SetCaptionTransitions=function(a){cb.$Transitions=a;cb.sd=b.Db()};a.ie=function(a){a=v(a);if(C&1){var d=G/F,b=v(B.o()),e=v(a-b+d),f=v(c.H(a-b));if(e>=N){if(f>q/2)if(a>b)a-=q;else a+=q}else if(a>b&&e<d)a-=q;else if(a<b&&e>d)a+=q}return a};function Yc(){cc.ze&&b.O(w,cc.ze,([f,"pan-y","pan-x","auto"])[lb]||"");a.a(u,"click",Mc,d);a.a(u,"mouseleave",Kc);a.a(u,"mouseenter",Jc);a.a(u,"mousedown",Cc);a.a(u,"touchstart",Zc);a.a(u,"dragstart",gc);a.a(u,"selectstart",gc);a.a(i,"mouseup",fb);a.a(h,"mouseup",fb);a.a(h,"touchend",fb);a.a(h,"touchcancel",fb);a.a(i,"blur",fb);m.$ArrowKeyNavigation&&a.a(h,"keydown",function(c){var a=b.he(c);if(a==37||a==39){t&8&&(t=0);fc(m.$ArrowKeyNavigation*(a-38)*qb,d)}})}function uc(g){Ec.Zd();E=[];x=[];var h=b.Cb(w),k=b.Dd(["DIV","A","LI"]);b.c(h,function(a){var c=a;if(k[a.tagName.toUpperCase()]&&!b.db(a,"u")&&b.zb(a)!="none"){var c=Xb(d);b.U(a,gb);b.tb(c,a);b.J(c,a);b.kc(c,"flat");b.kc(a,"preserve-3d");b.xb(c);E.push(c)}b.S(c,(b.S(c)||0)+1)});q=E.length;if(q){var a=S&1?zb:yb;Nc();G=m.$Align;if(G==e)G=(a-F+P)/2;kb=a/F;N=c.j(q,m.$Cols||q,c.Q(kb));C=N<q?m.$Loop:0;if(q*F-P<=a){kb=q-P/F;G=(a-F+P)/2;Kb=(a-F*q+P)/2}if(Cb){Pb=Cb.$Class;Rb=!G&&N==1&&q>1&&Pb&&(!b.be()||b.hd()>=9)}if(!(C&1)){bb=G/F;if(bb>q-1){bb=q-1;G=bb*F}K=bb;Q=K+q-kb-P/F}lb=(N>1||G?S:-1)&m.$DragOrientation;if(Rb)D=new Pb(Bb,I,H,Cb,Ub,lc);for(var f=0;f<E.length;f++){var i=E[f],j=new cd(i,f);x.push(j)}rb=new dd;B=new ed;y=new Tc(B,rb);Yc()}b.c(Y,function(a){a.Yc(q,x);g&&a.$On(r.Ec,fc)})}function Ob(a,d,g){b.te(a)&&(a=b.ud("",a));var c,f;if(q){if(d==e)d=q;f="beforebegin";c=E[d];if(!c){f="afterend";c=E[q-1]}}b.$Destroy(x);a&&b.Fg(c||w,f||"afterbegin",a);b.c(g,function(a){b.qb(a)});uc()}a.$AppendSlides=function(f,a){if(a==e)a=s+1;var d=E[s];Ob(f,a);var c=0;b.c(E,function(a,b){a==d&&(c=b)});ub(c)};a.$ReloadSlides=function(a){Ob(a,f,E);ub(0)};a.$RemoveSlides=function(e){var a=s,d=[];b.c(e,function(b){if(b<q&&b>=0){d.push(E[b]);b<s&&a--}});Ob(f,f,d);a=c.j(a,q-1);ub(a)};a.B=function(i,f){a.$Elmt=u=b.$GetElement(i);O=b.C(u);M=b.D(u);m=b.F({$FillMode:0,$LazyLoading:1,$ArrowKeyNavigation:1,$StartIndex:0,$AutoPlay:0,$Loop:1,$HWA:d,$NaviQuitDrag:d,$AutoPlaySteps:1,$AutoPlayInterval:3e3,$PauseOnHover:1,$SlideDuration:500,$SlideEasing:g.$OutQuad,$MinDragOffsetToSlide:20,$DragRatio:1,$SlideSpacing:0,$UISearchMode:1,$PlayOrientation:1,$DragOrientation:1},f);m.$HWA=m.$HWA&&b.Wg();if(m.$Idle!=e)m.$AutoPlayInterval=m.$Idle;if(m.$DisplayPieces!=e)m.$Cols=m.$DisplayPieces;if(m.$ParkingPosition!=e)m.$Align=m.$ParkingPosition;t=m.$AutoPlay&63;!m.$UISearchMode;eb=m.$AutoPlaySteps;X=m.$PauseOnHover;X&=Ub?10:5;sc=m.$AutoPlayInterval;Gb=m.$SlideDuration;S=m.$PlayOrientation&3;vb=b.Kg(b.n(u,"dir"))=="rtl";Hb=vb&&(S==1||m.$DragOrientation&1);qb=Hb?-1:1;Cb=m.$SlideshowOptions;cb=b.F({$Class:p},m.$CaptionSliderOptions);jb=m.$BulletNavigatorOptions;W=m.$ArrowNavigatorOptions;J=m.$ThumbnailNavigatorOptions;var c=b.Cb(u);b.c(c,function(a,d){var c=b.db(a,"u");if(c=="loading")R=a;else{if(c=="slides"){w=a;b.O(w,"margin",0);b.O(w,"padding",0);b.kc(w,"flat")}if(c=="navigator")Lb=a;if(c=="arrowleft")bc=a;if(c=="arrowright")Yb=a;if(c=="thumbnavigator")wb=a;if(a.tagName!="STYLE"&&a.tagName!="SCRIPT")nc[c||d]=new Rc(a,c=="slides",b.Dd(["slides","thumbnavigator"])[c])}});R&&b.qb(R);R=R||b.Rb(h);zb=b.C(w);yb=b.D(w);I=m.$SlideWidth||zb;H=m.$SlideHeight||yb;gb={I:I,G:H,$Top:0,$Left:0,Rd:"block",Ob:"absolute"};P=m.$SlideSpacing;nb=I+P;ob=H+P;F=S&1?nb:ob;Bb=new Pc;b.n(u,Nb,"1");b.S(w,b.S(w)||0);b.wb(w,"absolute");T=b.fb(w,d);b.O(T,"pointerEvents","none");b.tb(T,w);b.J(T,Bb.$Elmt);b.ic(w,"hidden");if(Lb&&jb){jb.gc=vb;vc=new jb.$Class(Lb,jb,O,M);Y.push(vc)}if(W&&bc&&Yb){W.gc=vb;W.$Loop=m.$Loop;xc=new W.$Class(bc,Yb,W,a);Y.push(xc)}if(wb&&J){J.$StartIndex=m.$StartIndex;J.$ArrowKeyNavigation=J.$ArrowKeyNavigation||0;J.gc=vb;oc=new J.$Class(wb,J,R);!J.$NoDrag&&b.n(wb,ic,"1");Y.push(oc)}uc(d);a.$ScaleSize(O,M);Tb();ub(v(m.$StartIndex));b.O(u,"visibility","visible")};a.$Destroy=function(){t=0;b.$Destroy(x,Y,Ec);b.Qb(u)};b.B(a)};j.$EVT_CLICK=21;j.$EVT_DRAG_START=22;j.$EVT_DRAG_END=23;j.$EVT_SWIPE_START=24;j.$EVT_SWIPE_END=25;j.$EVT_LOAD_START=26;j.$EVT_LOAD_END=27;j.Jf=28;j.$EVT_MOUSE_ENTER=31;j.$EVT_MOUSE_LEAVE=32;j.$EVT_POSITION_CHANGE=202;j.$EVT_PARK=203;j.$EVT_SLIDESHOW_START=206;j.$EVT_SLIDESHOW_END=207;j.$EVT_PROGRESS_CHANGE=208;j.$EVT_STATE_CHANGE=209}(window,document,Math,null,true,false)
</script>
<section id="banner" class="lib-section-1">
    <div id="jssor_1" class="jssor_1">
        <div data-u="loading" class="jssorl-009-spin loadding-slider">
            <img class="loadding-spin-slider" src="{{url('')}}/assets/frontend/img/spin.svg" />
        </div>
        <div class="jssorl-item" data-u="slides">
            @foreach($slider as $value)
            <a href="{{$value->url}}">
                <div data-b="0">
                    <img data-u="image" src="{{url('')}}{{$value->image}}">
                    <div class="slider-frontend" data-u="caption" data-t="7" style=""><b>{{$value->title}}</b></div>
                </div>
            </a>
            @endforeach
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
</section>
@if($dataTongQuanIndex)
<section class="lib-section-3">
    <div class="section_introduce">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="@if($duan){{route('getChiTietDuAnFrontend', ['url'=>$duan->url])}}@endif">
                            <span>
                            TỔNG QUAN
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="section_introduce___image">
                            <picture>
                                <source media="(min-width: 1200px)" srcset="{{url('')}}/@if($dataTongQuanIndex){{$dataTongQuanIndex['image']}}@endif">
                                <source media="(min-width: 992px) and (max-width: 1199px)" srcset="{{url('')}}/@if($dataTongQuanIndex){{$dataTongQuanIndex['image']}}@endif">
                                <source media="(min-width: 768px) and (max-width: 991px)" srcset="{{url('')}}/@if($dataTongQuanIndex){{$dataTongQuanIndex['image']}}@endif">
                                <source media="(min-width: 543px) and (max-width: 767px)" srcset="{{url('')}}/@if($dataTongQuanIndex){{$dataTongQuanIndex['image']}}@endif">
                                <source media="(min-width: 320px) and (max-width: 542px)" srcset="{{url('')}}/@if($dataTongQuanIndex){{$dataTongQuanIndex['image']}}@endif">
                                <img src="{{url('')}}/@if($dataTongQuanIndex){{$dataTongQuanIndex['image']}}@endif" class="img-responsive" alt="Lỗi Liquid: Value cannot be null.
                                    Parameter name: key">
                            </picture>
                        </div>
                        <div class="section_introduce___desc">
                            @if($dataTongQuanIndex){!!$dataTongQuanIndex['content']!!}@endif

                            <div class="libra-health___viewmore">
                                <a href="@if($duan){{route('getChiTietDuAnFrontend', ['url'=>$duan->url])}}@endif" title="Giới thiệu">
                                <span>Xem thêm</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if($dataViTriIndex)
<section class="lib-section-4">
    <div class="section_service">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="@if($duan){{route('getChiTietDuAnFrontend', ['url'=>$duan->url])}}@endif">
                            <span>
                            VỊ TRÍ  @if(isset($duan)){{$duan->title}}@endif
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-md-push-4 col-lg-8">
                                <div class="section_service___list">
                                    <img src="{{url('')}}/@if($dataViTriIndex){{$dataViTriIndex['image']}}@endif" alt="Title Here">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-md-pull-8 col-lg-4">
                                <div class="section_service___desc">
                                    @if($dataViTriIndex){!!$dataViTriIndex['content']!!}@endif
                                    <div class="libra-health___viewmore">
		                                <a href="@if($duan){{route('getChiTietDuAnFrontend', ['url'=>$duan->url])}}@endif" title="Giới thiệu">
		                                <span>Xem thêm</span>
		                                </a>
		                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if($dataTienIchIndex)
<section class="lib-section-5">
    <div class="section_news_slide">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="@if($duan){{route('getChiTietDuAnFrontend', ['url'=>$duan->url])}}@endif">
                            <span>
                            TIỆN ÍCH
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="section_service___list">
                                    <img src="{{url('')}}/@if($dataTienIchIndex){{$dataTienIchIndex['image']}}@endif" alt="Title Here">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="section_service___desc">
                                    @if($dataTienIchIndex){!!$dataTienIchIndex['content']!!}@endif
                                    <div class="libra-health___viewmore">
		                                <a href="@if($duan){{route('getChiTietDuAnFrontend', ['url'=>$duan->url])}}@endif" title="Giới thiệu">
		                                <span>Xem thêm</span>
		                                </a>
		                            </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if($dataThietKeIndex)
<section class="lib-section-4">
    <div class="section_service">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="@if($duan){{route('getChiTietDuAnFrontend', ['url'=>$duan->url])}}@endif">
                            <span>
                            THIẾT KẾ CỦA  @if(isset($duan)){{$duan->title}}@endif
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-md-push-4 col-lg-8">
                                <div class="section_service___list">
                                    <img src="{{url('')}}/@if($dataThietKeIndex){{$dataThietKeIndex['image']}}@endif" alt="Title Here">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-md-pull-8 col-lg-4">
                                <div class="section_service___desc">
                                    @if($dataThietKeIndex){!!$dataThietKeIndex['content']!!}@endif
                                    <div class="libra-health___viewmore">
		                                <a href="@if($duan){{route('getChiTietDuAnFrontend', ['url'=>$duan->url])}}@endif" title="Giới thiệu">
		                                <span>Xem thêm</span>
		                                </a>
		                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@if($imageDataIndex)
<section class="lib-section-9">
    <div class="section_product">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="@if($duan){{route('getChiTietDuAnFrontend', ['url'=>$duan->url])}}@endif">
                            <span>
                            THƯ VIỆN ẢNH
                            </span>
                            </a>
                        </h2>
                    </div>
                    <section class="portfolio" id="portfolio">
                        <div class="container-fluid">
                            
                            	@if($imageDataIndex)
                            	@foreach($imageDataIndex as $imageIndex)
                            	<div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12" style="padding-top: 20px;">
                                    <div class="gallery_product filter">
                                        <a class="fancybox" rel="ligthbox" href="{{$imageIndex['image']}}">
                                            <img class="img-responsive" alt="" src="{{$imageIndex['image']}}">
                                            <div class='img-info'>
                                                <h3>{{$imageIndex['title']}}</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!-- <section class="lib-section-6">
    <div class="section_service">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="javascript:;">
                            <span>
                            8 ĐIỀU KHÁC BIỆT
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section_service___list">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="THIẾT KẾ KHÔNG GIAN THÔNG MINH">
                                                <i class="fas fa-home" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="THIẾT KẾ KHÔNG GIAN THÔNG MINH">
                                                    <span>THIẾT KẾ KHÔNG GIAN THÔNG MINH</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="TRANG BỊ NỘI THẤT THÔNG MINH">
                                                <i class="fas fa-bed" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="TRANG BỊ NỘI THẤT THÔNG MINH">
                                                    <span>TRANG BỊ NỘI THẤT THÔNG MINH</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="HỆ THỐNG BÁO CHỖ ĐẬU XE TỰ ĐỘNG">
                                                <i class="fas fa-car" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="HỆ THỐNG BÁO CHỖ ĐẬU XE TỰ ĐỘNG">
                                                    <span>HỆ THỐNG BÁO CHỖ ĐẬU XE TỰ ĐỘNG</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="HỆ THỐNG ĐIỆN CẢM BIẾN">
                                                <i class="fas fa-hand-pointer" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="HỆ THỐNG ĐIỆN CẢM BIẾN">
                                                    <span>HỆ THỐNG ĐIỆN CẢM BIẾN</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="QUẢN LÝ KHU CĂN HỘ SMARTCITY">
                                                <i class="fas fa-cogs" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="QUẢN LÝ KHU CĂN HỘ SMARTCITY">
                                                    <span>QUẢN LÝ KHU CĂN HỘ SMARTCITY</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="CÔNG NGHỆ NĂNG LƯỢNG SẠCH">
                                                <i class="fas fa-solar-panel" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="CÔNG NGHỆ NĂNG LƯỢNG SẠCH">
                                                    <span>CÔNG NGHỆ NĂNG LƯỢNG SẠCH</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="KẾT NỐI DÂN CƯ BẰNG PHẦN MỀM">
                                                <i class="fas fa-users" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="KẾT NỐI DÂN CƯ BẰNG PHẦN MỀM">
                                                    <span>KẾT NỐI DÂN CƯ BẰNG PHẦN MỀM</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 section_service___item">
                                            <div class="item">
                                                <a class="section_service___image" href="javascript:;" title="MỞ KHÓA CỦA BẰNG VÂN TAY">
                                                <i class="fas fa-fingerprint" style="font-size: 9em; color: #2A7F49"></i>
                                                </a>
                                                <h3 class="section_service___name product-name">
                                                    <a href="javascript:;" title="MỞ KHÓA CỦA BẰNG VÂN TAY">
                                                    <span>MỞ KHÓA CỦA BẰNG VÂN TAY</span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<style>
    .gallery-title{
    font-size: 36px;
    color: #3F6184;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.filter-button{
    font-size: 18px;
    border: 2px solid #3F6184;
    padding:5px 10px;
    text-align: center;
    color: #3F6184;
    margin-bottom: 30px;
    background:transparent;
}
.filter-button:hover,
.filter-button:focus,
.filter-button.active{
    color: #ffffff;
    background-color:#3F6184;
    outline:none;
}
.gallery_product{
    margin: 0px;
    padding:0;
    position:relative;
}
.gallery_product .img-info{
    position: absolute;
    background: rgba(0,0,0,0.5);
    left: 0;
    right: 0;
    bottom: 0;
    padding: 20px;
    overflow:hidden;
    color:#fff;
    top:0;
    display:none;
       -webkit-transition: 2s;
    transition: 2s;
}

.gallery_product:hover .img-info{
    display:block;
   -webkit-transition: 2s;
    transition: 2s;
}
.img-info h3{
    color: #fff;
}
/*  end gallery */
</style>
<script>
    /*  gallery */
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }

                if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
            }
                $(this).addClass("active");
            });
});
/*  end gallery */

$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
  
</script>

<section class="lib-section-9">
    <div class="section_news_slide">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="#">
                            <span>
                            Đối Tác Chiến Lược
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="section_product_type_3 owl-theme owl-carousel nav-enable nav-left-right" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="1" data-margin="30" data-nav="true" data-loop="true" data-autoplay="true">
                        	@foreach($doitac as $value)
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                        <img style="height: 120px" class="img-responsive" src="{{url('')}}/{{$value['image']}}" data-lazyload="{{url('')}}/{{$value['image']}}" alt="">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lib-section-9">
    <div class="section_product">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="module-header">
                        <h2 class="module-title libra-health___title-index">
                            <a href="javascript:;">
                            <span>
                            Tin Tức Cập Nhật
                            </span>
                            </a>
                        </h2>
                    </div>
                    <div class="module-content">
                        <div class="section_product_type_3 owl-theme owl-carousel nav-enable nav-left-right" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xxs-items="2" data-margin="30" data-nav="true">
                        	@foreach($news as $tintuc)
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-thumbnail">
                                    	<a href="{{route('getChiTietTinTucFrontend', ['slug'=>$tintuc->slug])}}">
                                    		<img class="img-responsive" src="{{url('')}}{{$tintuc->image}}" data-lazyload="{{url('')}}{{$tintuc->image}}" alt="{{$tintuc->title}}">
                                    	</a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name">
                                            <a href="{{route('getChiTietTinTucFrontend', ['slug'=>$tintuc->slug])}}" title="{{$tintuc->title}}">{{$tintuc->title}}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
