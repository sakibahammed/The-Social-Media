document.getElementById('login-btn').addEventListener('click',function(){
    const email = document.getElementById('email').value
    const password = document.getElementById('password').value


    if(!email && !password){
        alert('Please enter a valid email and Password')
       
    }
   
    else{
        window.location.href = 'index.html'
    }
})