var str=document.createElement('em');
str.textContent='1234';
str.setAttribute('class','blue');

document.querySelector('.title').appendChild(str);

document.getElementById('send').onclick=function(){
  var str=document.getElementById('content').value;
  document.getElementById('main').innerHTML=str;
}

