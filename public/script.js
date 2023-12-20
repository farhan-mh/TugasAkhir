// nav
// footer
        // nav
        var label = document.getElementById("label1");
        var label2 = document.getElementById("label2");
        
        
        function klikLabel1() {
        
            label1.style.transform = 'translateY(50px)';
            label2.style.transform = 'translateY(0)';
            label1.style.opacity = '0';
            label2.style.opacity = '1';
            label1.style.transition = 'all .5s';
            label2.style.transition = 'all .5s';
            label1.style.transitionDelay = '.3s';
        
        }
        function klikLabel2() {
        
            label1.style.transform = 'translateY(0)';
            label2.style.transform = 'translateY(-50px)';
            label2.style.opacity = '0';
            label1.style.opacity = '1';
            label1.style.transition = 'all .5s';
            label2.style.transition = 'all .5s';
            label2.style.transitionDelay = '.3s'
        }
        window.onscroll = function () { myFunction() };
        
        function myFunction() {
            if (document.documentElement.scrollTop > 20) {  /*   || ?   */
                document.querySelector("nav").className = "actv";
                document.getElementById("myP").classList.remove('actv-footer');
            } else {
                document.querySelector("nav").className = "";
                document.getElementById("myP").classList.add('actv-footer');
            }
        }
        function scrollKeatas(){
            window.scrollTo({
              top:0,
              behavior: "smooth"
            })
          }
