const slider = document.getElementById(slid_1);
const slider = document.getElementById(slid_2);

if (slider){
    new Glid( slider1,{
        type:'carousel',
        StartAt:0,
       autoPlay:3000,
        hoverpause:true,
        perView:1,
        AnimationDuration:800,
        AnimationTimingFunc:'linear',
    }).mount();
}
if (slider){
    new Glid( slider2,{
        type:'carousel',
        StartAt:0,
        hoverpause:true,
        perView:4,
        AnimationDuration:800,
        AnimationTimingFunc:'cubic-bezier(.165..840..44..1)',
        breakPoints:{
            1200:{
                perView:3,
            },
            768:{
                perView:2,
            },
        },
    }).mount();
}