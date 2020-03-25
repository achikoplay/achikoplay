<script>
  var Js = {
  load: function (src,type, callback) {
      var script = document.createElement("link"),loaded;
      if (type == "css") {
          script.setAttribute("rel", "stylesheet");
          script.setAttribute("type", "text/css");
          script.setAttribute("href", src)
      } else {
          script = document.createElement("script"),loaded;
          script.setAttribute("src", src)
      }
      if (callback) {
          script.onreadystatechange = script.onload = function () {
              if (!loaded) {
                  callback()
              }
              loaded = !0
          }
      }
      if(type == "css"){
          document
          .getElementsByTagName("head")[0]
          .prepend(script);
        }else{
          document
          .body
          .appendChild(script);
        }
    }
  }

  const initLoad = () =>{
    Js.load('https://fonts.googleapis.com/icon?family=Material+Icons','css', function(){
      Js.load('https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700&display=swap','css', function(){
        Js.load('<?php echo url('asset/fontawesome/css/all.min.css?v=pro')?>','css', function(){
            Js.load('<?php echo url('asset/css/select2.min.css?v=4')?>','css');
            Js.load('<?php echo url('asset/croppie/croppie.css?v='.time())?>','css');
            Js.load('<?php echo url('asset/gijgo/css/gijgo.min.css');?>','css');
            Js.load('<?php echo url('asset/slick/slick-theme.css')?>','css');
            Js.load('<?php echo url('asset/slick/slick.css')?>','css', function(){
              document.body.classList.remove('invisible');

              let toggle = document.getElementById('header__togglemenu');
              toggle.addEventListener('click', function(){
                document.body.classList.toggle("showmenu");
              });

              let hassubmenumobile = document.querySelectorAll('.wrapmenumobile__mainmenu--hassubmenu');
              for (var i = 0; i < hassubmenumobile.length; i++) {
                  hassubmenumobile[i].addEventListener('click', function(e) {
                    console.log(e.target.parentElement);
                    let $parent = e.target.parentElement;
                    $parent.classList.toggle("openmenu");
                    e.preventDefault();
                  });
              }
            });
        });
      });
    });
  }
  if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', initLoad);
  }
</script>
