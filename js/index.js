const navLinks = document.querySelectorAll('.nav-link');


// active classes

navLinks.forEach((link)=>{
    link.addEventListener('click',()=>{
        navLinks.forEach((link)=>{
            link.classList.remove('active');
            // console.log(link);
           
        })
        link.classList.add('active');       
    })
})


