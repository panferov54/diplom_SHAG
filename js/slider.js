function slider() {
document.querySelector('.slider').addEventListener('mousemove', (event)=>{
    let x= event.offsetX;
    document.querySelector('.slider-after').style.width= x + 'px';
    });
};
slider();
// document.querySelector('#image-comparison').addEventListener('touchmove', (event)=>{
//     let x= event.offsetX;
//     document.querySelector('.image-comparison__before').style.width= x + 'px';
// });
// };
// slider();