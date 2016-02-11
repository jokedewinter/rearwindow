<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="description" content="Rearwindow : An experiment with a hero image area with clickable areas to show different features/things.">

    <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/screen.css">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/using-animation.css">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/using-target.css">

    <title>Rearwindow</title>
  </head>

  <body>

    <!-- HEADER -->
    <header class="page__header">
      <div class="wrapper">
        <h1>Rear Window</h1>
        <p class="description">Experimenting with CSS to create a hero image panel using clickable areas and animation</p>
      </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="page__content">
      <div class="wrapper">

        <section class="project">
          <header class="project__header">
            <h2>Using CSS animations</h2>
            <p>A set of keyframe animations running on their own. Not at all responsive. Only really acceptable on full width view.</p>
          </header>

          <div class="project__demo">
            <?php
          	// The SVG sprite
          	include_once(dirname(__FILE__) . '/svg/svg-defs.svg');
          	?>
            <section class="v2_rearwindow">
        			<ul class="v2_rearwindow__areas">
        				<li class="v2_purple">
        					<span class="text">Behind the tree</span>
        					<span class="box"></span>
        					<svg class="connect"><use xlink:href="#line" /></svg>
        				</li>
        				<li class="v2_brown">
        					<span class="text">The side view</span>
        					<span class="box"></span>
        					<svg class="connect"><use xlink:href="#line" /></svg>
        				</li>
        				<li class="v2_blue">
        					<span class="text">Upstairs / Downstairs</span>
        					<span class="box"></span>
        					<svg class="connect"><use xlink:href="#line" /></svg>
        				</li>
        				<li class="v2_red">
        					<span class="text">Stacked rooms</span>
        					<span class="box"></span>
        					<svg class="connect"><use xlink:href="#line" /></svg>
        				</li>
        				<li class="v2_orange">
        					<span class="text">Roof terraces</span>
        					<span class="box"></span>
        					<svg class="connect"><use xlink:href="#line" /></svg>
        				</li>
        				<li class="v2_grey">
        					<span class="text">The tower block</span>
        					<span class="box"></span>
        					<svg class="connect"><use xlink:href="#line" /></svg>
        				</li>
        				<li class="v2_mint">
        					<span class="text">The best apartment</span>
        					<span class="box"></span>
        					<svg class="connect"><use xlink:href="#line" /></svg>
        				</li>
        			</ul>
        		</section>
          </div>

          <footer class="project__footer">
          </footer>
        </section>

        <section class="project">
          <header class="project__header">
            <h2>Using :target</h2>
            <p>An experiment with a hero image area with clickable areas to show different features/things.</p>
          </header>

          <div class="project__demo">
            <section class="v1_rearwindow">
              <ul class="v1_rearwindow__areas">
                <li id="v1_purple">Behind the tree</li>
                <li id="v1_brown">The side view</li>
                <li id="v1_blue">Upstairs/Downstairs</li>
                <li id="v1_green">The courtyard</li>
                <li id="v1_red">Stacked rooms</li>
                <li id="v1_orange">Roof terraces</li>
                <li id="v1_grey">The tower block</li>
                <li id="v1_mint">The best apartment</li>
                <li id="v1_yellow">Snakes and ladders</li>
              </ul>

              <div class="v1_rearwindow__images">
                <a class="v1_purple" href="#purple"></a>
                <a class="v1_brown" href="#brown"></a>
                <a class="v1_blue" href="#blue"></a>
                <a class="v1_green" href="#green"></a>
                <a class="v1_red" href="#red"></a>
                <a class="v1_orange" href="#orange"></a>
                <a class="v1_grey" href="#grey"></a>
                <a class="v1_mint" href="#mint"></a>
                <a class="v1_yellow" href="#yellow"></a>

                <img class="v1_rearwindow__images-courtyard" src="assets/courtyard.png" alt="">
              </div>
            </section>
          </div>

          <footer class="project__footer">
            <p>An experiment with a hero image block with clickable areas. Each area shows some information on click.</p>
            <ul>
              <li>CSS only, using :target to show the information.</li>
              <li>Narrow viewports shows buttons for each piece of information.</li>
            </ul>
            <h3>To do:</h3>
            <ul>
              <li>Improve the narrow viewport experience. Maybe turn it into a flick through card type of thing.</li>
              <li>Add some JavaScript to enhance the click experience on wider viewports. Or maybe some CSS transitions. </li>
            </ul>
          </footer>
        </section>

      </div>
    </main>

    <!-- FOOTER  -->
    <footer class="page__footer">
      <div class="wrapper">
        <p><a id="forkme_banner" href="https://github.com/jokedewinter/rearwindow">View on GitHub</a></p>
        <p class="copyright">Rearwindow maintained by <a href="https://github.com/jokedewinter">jokedewinter</a></p>
        <p>Published with <a href="https://pages.github.com">GitHub Pages</a></p>
      </div>
    </footer>

  </body>
</html>
