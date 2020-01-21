var list=document.querySelector('.list');
var area=document.getElementById('areaId');
var country=[{
  farmer: '查理',
  place:'汕头市'
},
{
  farmer:'阿升',
  place: '广州市'
},
{
 farmer:'阿明', 
 place: '升平区'
}]
var len=country.length;
console.log(len);
function updateList(e){
  var select=e.target.value;
  alert(select);
  for (let index = 0; index < country.length; index++) {
    if(select==country[index].place)

   {
     str=country[index].farmer;
     console.log(country[index].farmer)}; 
  }
  list.innerHTML=str;
}


var body=document.body;

function goRocket(e){
  console.log(e.keyCode);
  switch(e.keyCode){
    case 49:
      document.querySelector('.rocket-1').style.bottom='2000px';
      break;
    case 50:
      document.querySelector('.rocket-2').style.bottom='2000px';
      break;
    case 51:
      document.querySelector('.rocket-3').style.bottom='2000px';
      break;

  }
}

body.addEventListener('keydown',goRocket,false);


