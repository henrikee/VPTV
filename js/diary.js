document.getElementById("diaryBtn").addEventListener('click',function() {
    document.querySelector('.markingPopup').style.display ='flex';  
});

document.getElementById("healthFormBtn").addEventListener('click',function() {
    document.querySelector('.markingPopup2').style.display ='flex';  
});

document.getElementById("brg").addEventListener('click', function(){
    document.querySelectorAll(".btn").style.display = "none";
});
