const $=(q,t)=>{if(!t)t=document;const e=t.querySelectorAll(q);
    return e.length==1?e[0]:!e.length?undefined:[...e]}
const getRand = (a,b) => Math.floor(Math.random() * (b - a + 1) + a);
const isEmpty=o=>Object.keys(o).length==0;const sleep=s=>new Promise(r=>setTimeout(r,s));
const clearString=string=>string.normalize("NFD").replace(/[\u0300-\u036f]/g,"").toLowerCase()
const ETP=EventTarget.prototype;ETP.on=ETP.addEventListener;ETP.forEach=function(f){f(this)}
ETP.length = 1;  Array.prototype.on  = function(ev, f) { this.forEach(e => e.on(ev, f)) };
const $new=j=>{if(!j)j={};const e=document.createElement(j.tag?j.tag:'div');delete j.tag;
    for(const k in j){if(e[k]!==undefined)e[k]=j[k];else e.setAttribute(k,j[k])}return e}
const loadCSS=path=>document.head.appendChild($new({tag:'link',rel:'stylesheet',href:path}))