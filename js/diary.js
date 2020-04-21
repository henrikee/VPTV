document.getElementById("diaryBtn").addEventListener('click',function() {
    document.querySelector('.markingPopup').style.display ='flex';  
});

document.getElementById("healthFormBtn").addEventListener('click',function() {
    document.querySelector('.markingPopup2').style.display ='flex';  
});

document.getElementById("buttonOpenHealthInfo").addEventListener('click',function(){
    document.querySelector(".hdata").style.display ="none";
});