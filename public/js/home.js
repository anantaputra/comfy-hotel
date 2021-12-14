document.getElementById('login-btn').addEventListener("click", function(){
    document.querySelector('.popup-login').style.display = "block"
})
document.getElementById('close-login-btn').addEventListener("click", function(){
    document.querySelector('.popup-login').style.display = "none"
})
document.getElementById('register-btn').addEventListener("click", function(){
    document.querySelector('.popup-login').style.display = "none"
    document.querySelector('.popup-signup').style.display = "block"
})
document.getElementById('close-register-btn').addEventListener("click", function(){
    document.querySelector('.popup-signup').style.display = "none"
})
var show = false
document.getElementById('show').addEventListener("click",function(){
    if(show){
        document.getElementById('password').setAttribute("type", "password")
        show = false
    } else {
        document.getElementById('password').setAttribute("type", "text")
        show = true
    }
})

document.getElementById('show-register').addEventListener("click",function(){
    if(show){
        document.getElementById('password-register').setAttribute("type", "password")
        document.getElementById('confirmpassword').setAttribute("type", "password")
        show = false
    } else {
        document.getElementById('password-register').setAttribute("type", "text")
        document.getElementById('confirmpassword').setAttribute("type", "text")
        show = true
    }
})

var loc = false 
var locationBox = document.getElementById('location')
locationBox.style.display = "none"

function lokasi(){
    if(loc){
        locationBox.style.display = "none"
        loc = false
    } else {
        locationBox.style.display = "block"
        loc = true
    }
}