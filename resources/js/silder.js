const image =document.getElementById("image");
const imageList =[
    "images/a1.jpg",
    "images/a2.jpg",
];
let index = 0;
setInterval(()=>{
index++;
if(imageList.length ==index){
 index = 0;
 image.setAttribute("src",imageList[index]);
}
},50000);
