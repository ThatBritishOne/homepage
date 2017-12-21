<?php
$page_title = 'Contact Us';
?>
<? include 'header.php'; ?>
<div class="page-wrapper">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <ol class="breadcrumb m-b-10">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active"><?= $page_title ?></li>
              </ol>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="card card-shadow contact">
                  <div class="card-body">
                      <h3 class="text-white">Discord</h3>
                      <p class="text-white">Connect with other customers and staff, get advice, and get support.</p>
                      <a href="#" class="btn btn-success">Join</a>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card card-shadow contact">
                  <div class="card-body">
                      <h3 class="text-white">Submit a Ticket</h3>
                      <p class="text-white">Got an issue? Use our ticket system and we'll get back to you shortly!</p>
                      <a href="#" class="btn btn-success">Go</a>
                  </div>
              </div>
          </div>
        </div>
      </div>
  <div class="contact1">
      <div class="row">
          <div class="container">
              <div class="spacer">
                  <div class="row m-0">
                      <div class="col-lg-8">
                          <div class="contact-box p-r-40">
                              <h4 class="title">Quick Contact</h4>
                              <form data-aos="fade-left" data-aos-duration="1200">
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="form-group m-t-15">
                                              <input class="form-control" type="text" placeholder="name">
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="form-group m-t-15">
                                              <input class="form-control" type="text" placeholder="email">
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <div class="form-group m-t-15">
                                              <textarea class="form-control" rows="3" placeholder="message"></textarea>
                                          </div>
                                      </div>
                                      <div class="col-lg-12">
                                          <button type="submit" class="btn btn-success-gradiant m-t-20 btn-arrow"><span> SUBMIT <i class="ti-arrow-right"></i></span></button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="detail-box p-40 bg-info" data-aos="fade-right" data-aos-duration="1200">
                              <h2 class="text-white">Revolve Hosting</h2>
                              <p class="text-white m-t-30 op-8">Support : support@revolve.host
                                  <br> General : contact@revolve.host</p>
                              <p class="text-white op-8">P.O. Box 420
                                  <br> City, State ZIP</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
<? include 'footer.php'; ?>
