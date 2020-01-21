// var billFull=1200;
// var isVIP=false;
// TODO 请问你在写什么
// var el=document.querySelectorAll('.titleClass ');
// console.log(el);
// el[0].textContent='123';
// el[1].textContent='1234';
// el=document.getElementById('titleId')

// el.textContent='1234';
// el.value='guotong';
// var el=document.querySelector('.titleClass a ');
// el.setAttribute('href','http://www.baidu.com');
// var el3=document.querySelector('.titleClass a').getAttribute('href');
// console.log(el3);
// var el4=document.querySelector('.titleClass a').textContent;
// console.log(el4);
// var el5=document.querySelector('.titleClass a').innerHTML;
// console.log(el5);
// var el2=document.querySelector('.str');
// // console.log(el2);
// el2.setAttribute('id','strId');


// var el6=document.getElementById('main');
// el6.innerHTML='<h1 class="blue">1234</h1>';
// var el7=document.querySelector('.list');
// el7.innerHTML='<li>1234</li>';

var farms=[{
  farmer:'阿升',
  dogs:['阿明','阿狗'],
},{
  farmer:'小丽',
  dogs:['皮皮'],
}];

var el=document.querySelector('.list');
var farmLen=farms.length;
for(var i=0;i<farmLen;i++){
 var str=document.createElement('li'); 
 str.textContent=farms[i].farmer;
 el.appendChild(str);
//  console.log(farms[i].farmer);
}
// var el=document.querySelector('.list');
// var farmLen=farms.length;
// var str='';
// for (let index = 0; index < farmLen; index++) {
//   var content='<li>'+farms[index].farmer+'</li>';
//   str+=content;
//   // el.innerHTML= content;
//   console.log(str);
// }
// // console.log(farmLen);
// el.innerHTML=str;

