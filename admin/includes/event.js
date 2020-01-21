// var el=document.querySelector('.btn');
// el.onclick=function(event){
//   console.log(event);
//   // alert("hello");
// }
// el.addEventListener('click',function(){
//   alert('hello2'); 
// },false);
// el.addEventListener('click',,false)

var el=document.querySelector('.header');
el.addEventListener('click',function(e){
  console.log(e.target.nodeName);
},false);
var elOn=document.querySelector('.btnOn');
elOn.onclick=function(){
  alert('on-1');
}
elOn.onclick=function(){
  alert('q');
}
var elAdd=document.querySelector('.btnAdd');
elAdd.addEventListener('click',function(){
  alert('hello');
},false)
elAdd.addEventListener('click',function(){
  alert('您好');
},false)

var el=document.querySelector('.box');
el.addEventListener('click',function(e){
  e.stopPropagation();
  alert('box');
  console.log('box');
},false);

// false从外向内
// true从内向外
//false (事件汽泡)
// true(事件捕捉)
var elBody=document.querySelector('.body');
elBody.addEventListener('click',function(e){
  alert('你没有点到box');
  console.log('body');
},false);

var el=document.querySelector('.link');
el.addEventListener('click',function(e){
  e.preventDefault();
})