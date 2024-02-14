<html>   
  <body> 
   <footer class="page-footer footer-bottom">
      <div class="container">
        <div class="row">
            <div class="col s3">
              <a href="#" class="brand-logo2"></a>
            </div>
            <div class="col s5">
              <p class="footer-text">Система мониторинга<br /> и визуализации<br />экологии города</p>
			  <br /><br /><br />
			  <a href="https://eco-monitor.kz/confidential-politics/">Политика конфиденциальности</a>
            </div>
            <div class="col s4">
              <?php
                wp_nav_menu(array(
                    'menu' => 'main',
                    'menu_class' => 'hhh'
                ));
                ?>
            </div>
		</div>
		  <div class="row">
			  <div class="col s5 offset-s3">
				  <span class="copyright">© <?php echo date("Y"); ?> Eco-monitor</span>
			  </div>
		  </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elemsParallax = document.querySelectorAll('.parallax');
            M.Parallax.init(elemsParallax);

            var elemsModal = document.querySelectorAll('.modal');
            M.Modal.init(elemsModal, {});

            var elemsScrollspy = document.querySelectorAll('.scrollspy');
            M.ScrollSpy.init(elemsScrollspy, {});

            var mb = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(mb,{})
			
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);
        });
        
		let scrollpos = window.scrollY
        const window_height = window.innerHeight - 30;
        const nav_add_class = () => document.body.classList.add('nav-bg-white');
        const nav_remove_class = () => document.body.classList.remove("nav-bg-white")

        if (window.location.pathname == '/') {
          nav_remove_class()
          window.addEventListener('scroll', function() { 
            scrollpos = window.scrollY;
            if (scrollpos >= window_height) { nav_add_class() }
            else { nav_remove_class() }
          })
        }
    </script>
</body>
</html>
