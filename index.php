<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('inc/metatag.php'); ?>
  <?php include('inc/loadstyle.php'); ?>

  <!-- css for page -->
  <link rel="stylesheet" type="text/css" href="assets/css/home.css<?= $modify ?>">
</head>

<body class="global-container">

  <div class="bg-gradient" data-aos="fade-zoom-in" data-aos-duration="2000">
    <div class="gradient-wrapper">
      <picture>
        <img src="assets/img/background/bg-header-gradient.png" alt="bg-header-gradient" class="lazy">
      </picture>
    </div>
  </div>



  <!-- header : start -->
  <?php include('inc/header.php'); ?>
  <!-- header : start -->

  <!-- main : start -->
  <main class="layout-body">

    <div class="sc-introduce" id="about">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-auto">
            <div class="content">
              <h1 class="title"><span>I’m</span> Ohm Atthawee</h1>
              <p class="desc">
                A front-end engineer and UI/UX designer helping startups turn their visions into a digital reality.
                I specialize in designing and building modern mobile and web-based apps.
              </p>
              <div class="action">
                <a href="#" class="btn btn-primary">See my resume</a>
                <a href="#" class="btn btn-secondary">Get in touch</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="thumbnail">
              <img src="./assets/img/static/no-image-profile.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sc-work" id="work">
      <div class="container">
        <div class="whead">
          <div class="row">
            <div class="col">
              <h2 class="title">Work</h2>
            </div>
            <div class="col-auto">
              <a href="#" class="btn btn-primary">See All</a>
            </div>
          </div>
        </div>
      </div>
      <div class="area-work">
        <div class="swiper -top">
          <div class="swiper-wrapper">
            <?php for ($i = 1; $i <= 20; $i++) { ?>
              <div class="swiper-slide">
                <a href="#" class="card link">
                  <div class="thumbnail">
                    <img src="assets/img/upload/moo-deng.png" alt="moo-deng" class="lazy">
                  </div>
                  <p class="title">Lorem Ipsum is simply dummy text.</p>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="swiper -bottom">
          <div class="swiper-wrapper">
            <?php for ($i = 1; $i <= 20; $i++) { ?>
              <div class="swiper-slide">
                <a href="#" class="card link">
                  <div class="thumbnail">
                    <img src="assets/img/upload/moo-deng.png" alt="moo-deng" class="lazy">
                  </div>
                  <p class="title">Lorem Ipsum.</p>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <div class="sc-contact" id="contact">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            <div class="whead">
              <h2 class="title">Let’s work together</h2>
              <p class="desc">
                Want to discuss an opportunity to create something great? I’m ready when you are.
              </p>
            </div>
          </div>
          <div class="col-auto">
            <a href="#" class="btn btn-primary">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.93367 12L3.08987 5.73239C2.60867 4.09667 4.14094 2.58539 5.75514 3.10362C10.2067 4.53274 14.4553 6.53713 18.3948 9.06662C19.5259 9.79292 21 10.4417 21 12C21 13.5583 19.5259 14.2071 18.3948 14.9334C14.4553 17.4629 10.2067 19.4673 5.75514 20.8964C4.14094 21.4146 2.60867 19.9033 3.08987 18.2676L4.93367 12ZM4.93367 12H9.83493" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              Get in touch
            </a>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- main : end -->

  <!-- footer : start -->
  <?php include('inc/footer.php'); ?>
  <!-- footer : end -->

  <?php include('inc/loadscript.php'); ?>
</body>

</html>