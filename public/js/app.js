var boxes = document.querySelectorAll('.individualResponse');


    boxes.forEach(box => {
        setTimeout(e=>{
            box.classList.toggle('onLoad');
        },50)
    });

    boxes.forEach(box => {
        box.addEventListener("click", e=> {
            box.classList.toggle('onClick')
        })
    })

setInterval((e) => {
    document.body.classList.toggle('background');
}, 10000);