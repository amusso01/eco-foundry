export default function backToNav(button , nav) {

    button.addEventListener('click', ()=>{
        nav.scrollIntoView({behavior: "smooth", block: "center", inline: "center"});
    })

   

}
