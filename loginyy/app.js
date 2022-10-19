let m =setInterval(img,3000)
var images=[];

images[0]="https://i02.appmifile.com/971_operator_in/05/10/2021/e979ce79722b581c8f2c7c37b607fff6.jpg";
images[1]="https://i02.appmifile.com/395_operator_in/01/02/2022/89c7d2292f1bafd3b403439df9bd874f.jpg";
images[2]="https://i02.appmifile.com/8_operator_in/01/02/2022/e9853b271494b6f3e9d73ff0cbd65aa6.jpg";
images[3]="https://i02.appmifile.com/842_operator_in/01/02/2022/1353c99ab0e8da2ce9f620b5819995c8.jpg";
images[5]="https://i02.appmifile.com/57_operator_in/01/02/2022/eb24c958c37f58076921f5b94637a4d3.jpg";
images[4]="https://i02.appmifile.com/629_operator_in/01/02/2022/50f678d4f9eab8235ecc51ca730e9eac.jpg";
var i=0;
function img(){
    document.slide.src=images[i];
 

    if(i<images.length-1){
        i++;
    }
    else{
        i=0;
    }
    
   
}

window.onload=img;











































