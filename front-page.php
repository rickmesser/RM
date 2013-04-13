<?php get_header(); ?>
<div class='banner' id='intro'>
      <div class='container'>
        <div class='row'>
          <div class='span3 center-text'>
            <img class='face' src='<?php bloginfo('template_directory'); ?>/_/img/ma-face.jpg'>
          </div>
          
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
          <div class='span6'>
            <article class="post" id="post-<?php the_ID(); ?>">
              <?php the_content(); ?>
              <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
            </article>
          </div>
          <?php endwhile; endif; ?>
          <div class='span3' id='tejas'><span aria-hidden='true' data-icon='J' id='tt'></span></div>
        </div>
      </div>
    </div>
    <section role='main'>
      <div class='banner mint-bg'>
        <div class='container'>
          <div class='row'>
            <div class='span7'>
              <div class='carousel slide' id='mobileCarousel'>
                <div class='carousel-inner'>
                  <div class='item active'>
                    <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/mobile/iphone-st-welcome.png'>
                  </div>
                  <div class='item'>
                    <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/mobile/iphone-st-map-detail.png'>
                  </div>
                  <div class='item'>
                    <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/mobile/iphone-st-listed.png'>
                  </div>
                  <div class='item'>
                    <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/mobile/android-st-dashboard.png'>
                  </div>
                  <div class='item'>
                    <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/mobile/android-st-comments.png'>
                  </div>
                  <div class='item'>
                    <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/mobile/android-st-region.png'>
                  </div>
                </div>
                <!-- Mobile Carousel items -->
                <ol class='carousel-indicators'>
                  <li class='active' data-slide-to='0' data-target='#mobileCarousel'></li>
                  <li data-slide-to='1' data-target='#mobileCarousel'></li>
                  <li data-slide-to='2' data-target='#mobileCarousel'></li>
                  <li data-slide-to='3' data-target='#mobileCarousel'></li>
                  <li data-slide-to='4' data-target='#mobileCarousel'></li>
                  <li data-slide-to='5' data-target='#mobileCarousel'></li>
                </ol>
                <!-- Mobile Carousel nav -->
              </div>
            </div>
            <div class='span4 offset1'>
              <h3>My approach to</h3>
              <h1>Mobile</h1>
              <ul class='unstyled'>
                <li>Extensive UX planning</li>
                <li>Pixel-perfect design for all states</li>
                <li>Vector &amp; repeatable assets</li>
                <li>Photoshop Layer &amp; Type Styles</li>
                <li>PSD Layer Comps</li>
                <li>Work with developers before, during and after hand-off</li>
              </ul>
              <h3>Tools of Choice:</h3>
              <ul>
                <li>Photoshop</li>
                <li>Skala Preview</li>
                <li>Keynote for Wireframes</li>
                <li>GUI Assets from Teehan + Lax</li>
              </ul>
            </div>
          </div>
        </div>
        <footer class='summary'>
          <p>Favorite Apps: FourSquare, Vine, TimeHop, Path, Rdio, Instagram</p>
        </footer>
      </div>
      <div class='banner soft-gold-bg'>
        <div class='container'>
          <div class='row'>
            <div class='span7'>
              <div class='carousel slide' id='webCarousel'>
                <div class='carousel-inner'>
                  <div class='item active'>
                    <a href='http://donedapper.com/' target='_blank'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/web/dapper.jpg'>
                    </a>
                  </div>
                  <div class='item'>
                    <a href='http://scenetap.com/' target='_blank'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/web/scenetap.jpg'>
                    </a>
                  </div>
                  <div class='item'>
                    <a href='http://www.deerhillexpeditions.com/' target='_blank'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/web/dhe.jpg'>
                    </a>
                  </div>
                  <div class='item'>
                    <a href='http://fourelementslandscape.com/' target='_blank'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/web/fourElements.jpg'>
                    </a>
                  </div>
                  <div class='item'>
                    <a href='http://www.jkroofing.com/' target='_blank'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/web/jk.jpg'>
                    </a>
                  </div>
                  <div class='item'>
                    <a href='http://rickmesser.com/clients/scinema/2011/homepage1.html' target='_blank'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/web/scinema.jpg'>
                    </a>
                  </div>
                  <div class='item'>
                    <a href='http://www.tapalytics.us/' target='_blank'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/slides/web/tapalytics.jpg'>
                    </a>
                  </div>
                </div>
                <!-- Web Carousel Items -->
                <ol class='carousel-indicators'>
                  <li class='active' data-slide-to='0' data-target='#webCarousel'></li>
                  <li data-slide-to='1' data-target='#webCarousel'></li>
                  <li data-slide-to='2' data-target='#webCarousel'></li>
                  <li data-slide-to='3' data-target='#webCarousel'></li>
                  <li data-slide-to='4' data-target='#webCarousel'></li>
                  <li data-slide-to='5' data-target='#webCarousel'></li>
                  <li data-slide-to='6' data-target='#webCarousel'></li>
                </ol>
                <!-- Web Carousel nav -->
              </div>
            </div>
            <div class='span4 offset1'>
              <h3>My approach to</h3>
              <h1>Web</h1>
              <ul class='unstyled'>
                <li>Responsive, In-browser wireframes</li>
                <li>OOCSS</li>
                <li>Less, Haml, and CodeKit!</li>
                <li>Icon Fonts</li>
              </ul>
              <h3>
                Tools of Choice:
              </h3>
              <ul>
                <li>Sublime Text 2</li>
                <li>Photoshop</li>
                <li>Bootstrap</li>
                <li>GitHub</li>
                <li>IcoMoon</li>
              </ul>
            </div>
          </div>
        </div>
        <footer class='summary'>
          <p>Favorite Web Things: ShopTalk Show, SMACSS, CSS Hat, Chrome Inspector</p>
        </footer>
      </div>
      <div class='banner soft-blue-bg'>
        <div class='container'>
          <div class='row'>
            <div class='span7'>
              <div class='regridual-container' data-target='#modal-gallery' data-toggle='modal-gallery' id='gallery'>
                <div class='regridual-row'>
                  <div class='regridual-third-col'>
                    <a data-gallery='gallery' href='<?php bloginfo('template_directory'); ?>/_/img/branding/dapper-large.jpg' title='Dapper'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/branding/thumbs/dapper-thumb.jpg'>
                    </a>
                  </div>
                  <div class='regridual-third-col'>
                    <a data-gallery='gallery' href='<?php bloginfo('template_directory'); ?>/_/img/branding/shift-large.jpg' title='Shift'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/branding/thumbs/shift-thumb.jpg'>
                    </a>
                  </div>
                  <div class='regridual-third-col'>
                    <a data-gallery='gallery' href='<?php bloginfo('template_directory'); ?>/_/img/branding/trailMark-large.jpg' title='Trail Mark'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/branding/thumbs/trailMark-thumb.jpg'>
                    </a>
                  </div>
                </div>
                <div class='regridual-row'>
                  <div class='regridual-third-col'>
                    <a data-gallery='gallery' href='<?php bloginfo('template_directory'); ?>/_/img/branding/amc-large.jpg' title='Austin Motor Club'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/branding/thumbs/amc-thumb.jpg'>
                    </a>
                  </div>
                  <div class='regridual-third-col'>
                    <a data-gallery='gallery' href='<?php bloginfo('template_directory'); ?>/_/img/branding/sceneTap-large.jpg' title='SceneTap'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/branding/thumbs/sceneTap-thumb.jpg'>
                    </a>
                  </div>
                  <div class='regridual-third-col'>
                    <a data-gallery='gallery' href='<?php bloginfo('template_directory'); ?>/_/img/branding/stangAholics-large.jpg' title='Stang-Aholics'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/branding/thumbs/stangAholics-thumb.jpg'>
                    </a>
                  </div>
                </div>
                <div class='regridual-row'>
                  <div class='regridual-third-col'>
                    <a data-gallery='gallery' href='<?php bloginfo('template_directory'); ?>/_/img/branding/scinema-large.jpg' title='Scinema'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/branding/thumbs/scinema-thumb.jpg'>
                    </a>
                  </div>
                  <div class='regridual-third-col'>
                    <a data-gallery='gallery' href='<?php bloginfo('template_directory'); ?>/_/img/branding/rrs-large.jpg' title='Red Rocks Sports T-Shirts'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/branding/thumbs/rrs-thumb.jpg'>
                    </a>
                  </div>
                  <div class='regridual-third-col'>
                    <a data-gallery='gallery' href='<?php bloginfo('template_directory'); ?>/_/img/branding/americanCampusPoster-large.jpg' title='The American Campus Show Poster'>
                      <img src='<?php bloginfo('template_directory'); ?>/_/img/branding/thumbs/americanCampusPoster-thumb.jpg'>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class='span4 offset1'>
              <h3>My approach to</h3>
              <h1>Brands &amp; Such</h1>
              <ul class='unstyled'>
                <li>Establish Uses</li>
                <li>Design for 1-color applications</li>
                <li>Memorable &amp; Timeless Marks</li>
                <li>In-person presentations</li>
                <li>Environmental presentations</li>
                <li>Designed in a grid to break</li>
              </ul>
              <h3>Tools of Choice:</h3>
              <ul>
                <li>Pencil &amp; Paper</li>
                <li>Illustrator</li>
                <li>InDesign</li>
              </ul>
            </div>
          </div>
        </div>
        <footer class='summary'>
          <p>Brands that I personally use: Field Notes, Apple, Micron pens, Old Spice Pure Sport Deodorant </p>
        </footer>
      </div>
      <div class='banner red-bg'>
        <div class='container'>
          <div class='row'>
            <div class='span7'>
              <form action='https://rickmesser.wufoo.com/forms/z7x3p3/#public' autocomplete='off' class='wufoo topLabel page' enctype='multipart/form-data' id='form1' method='post' name='form1' novalidate=''>
                <header class='info' id='header'>
                  <h3>Inquiries</h3>
                </header>
                <div class='notranslate' id='foli1'>
                  <label class='desc' for='Field1' id='title3'>
                    And you are...?
                  </label>
                  <input class='input-block-level' name='Field1' placeholder='First Name' required='' size='8' tabindex='1' type='text' value=''>
                  <input class='input-block-level' name='Field2' placeholder='Last Name' required='' size='14' tabindex='2' type='text' value=''>
                </div>
                <div class='notranslate' id='foli3'>
                  <input class='input-block-level' maxlength='255' name='Field3' placeholder='Email' required='' spellcheck='false' tabindex='3' type='email' value=''>
                </div>
                <div class='notranslate' id='foli4'>
                  <input class='input-block-level' maxlength='255' name='Field4' onkeyup='' placeholder='Your Company Is...?' tabindex='4' type='text' value=''>
                </div>
                <div class='notranslate' id='foli5'>
                  <input class='input-block-level' maxlength='255' name='Field5' onkeyup='' placeholder='What should we talk about?' required='' tabindex='5' type='text' value=''>
                </div>
                <input class='btTxt submit btn btn-primary btn-block' id='saveForm' name='saveForm' type='submit' value='Submit'>
                <li class='hide'>
                  <label for='comment'>Do Not Fill This Out</label>
                  <textarea cols='1' id='comment' name='comment' rows='1'></textarea>
                  <input id='idstamp' name='idstamp' type='hidden' value='RWw3DfcmlbEHMpcetuaoLgcQuB/7Ssz2/ZTvhhVVtow='>
                </li>
              </form>
            </div>
            <div class='span4 offset1'>
              <h3>Please Do</h3>
              <h1>Call Me</h1>
              <p>You can also email, I just didn’t want to put “Contact” as the title of this section... That’s lame.</p>
              <p>I don’t even think my phone number is on this site actually&hellip;</p>
              <h3>Tools of Choice:</h3>
              <ul>
                <li>Twitter</li>
                <li>Coffee or Beer</li>
                <li>Lunch</li>
                <li>Send me an awesome rap video</li>
              </ul>
            </div>
          </div>
        </div>
        <footer class='summary'>
          <p>
            Call Me On:
            <a class='icon' href='https://twitter.com/rickmesser'><span aria-hidden='true' data-icon='T'></span></a>
            <a class='icon' href='http://www.rdio.com/people/rickmesser/'><span aria-hidden='true' data-icon='R'></span></a>
            <a class='icon' href='http://dribbble.com/rickmesser'><span aria-hidden='true' data-icon='D'></span></a>
          </p>
        </footer>
      </div>
    </section>
    <!-- modal-gallery is the modal dialog used for the image gallery -->
    <div class='modal modal-gallery hide fade' id='modal-gallery' tabindex='-1'>
      <div class='modal-header'>
        <a class='close' data-dismiss='modal'>&times;</a>
        <h3 class='modal-title'></h3>
      </div>
      <div class='modal-body'>
        <div class='modal-image'></div>
      </div>
    </div>

<?php get_footer(); ?>
