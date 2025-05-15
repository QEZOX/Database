      <div class="row bg-light " > <!-- top newsbar & search -->
        <div class="col-md-8 mt-2"   >
          <div id="lastContent" class="mt-2" >
            <span id="typed" ></span>
          </div>
        </div>
        <div class="col-md-4 mt-2"  >
          <form class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="برای جستجو عبارتی را بنویسید">
            <div class="input-group-append">
              <button class="btn btn-success" type="submit"><i class='fas fa-1x fa-search' ></i> جستجو  </button>
            </div>
          </form>
        </div>
      </div><!-- end top newsbar & search -->
      
      <div id="typed-strings">
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
        <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
      </div>
      <script src="../lib/js/typed.min.js" ></script>
      <script>
        var typed = new Typed('#typed', {
          stringsElement: '#typed-strings',
          typeSpeed: 50,
          loop:true,
        });
      </script>