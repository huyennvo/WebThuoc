function increaseAmount(){
    let number = document.getElementById('number').value;
    number++;
    document.getElementById('number').value = number;
}

function decreaseAmount(){
    let number = document.getElementById('number').value;
    if(number > 1) number--;
    document.getElementById('number').value = number;
}

let imgSelect1 = document.getElementsByClassName('drug-img1')[0];
let imgSelect2 = document.getElementsByClassName('drug-img2')[0];
let imgSelect3 = document.getElementsByClassName('drug-img3')[0];
let imgSelect4 = document.getElementsByClassName('drug-img4')[0];
var bigImg = document.querySelector('.bigImg');

imgSelect1.onmouseover = function(){
    bigImg.src = "../imgs/product-detail/00018464-ngam-ho-bach-bo-mom-and-baby-tat-thanh-5x4-7543-5cc1_large.webp";
    
}
imgSelect2.onmouseover = function(){
    bigImg.src = "../imgs/product-detail/00018464-ngam-ho-bach-bo-mom-and-baby-tat-thanh-5x4-5696-5cc1_large.webp";
}
imgSelect3.onmouseover = function(){
    bigImg.src = "../imgs/product-detail/00018464-ngam-ho-bach-bo-mom-and-baby-tat-thanh-5x4-1568181715.webp";
}
imgSelect4.onmouseover = function(){
    bigImg.src = "../imgs/product-detail/00018464-ngam-ho-bach-bo-mom-and-baby-tat-thanh-5x4-3342-5d78_large.webp";
}

