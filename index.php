<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Mike Swisnandya</title>
    <meta name="description" content="Photography Portfolios">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Inter.css">
    <link rel="stylesheet" href="assets/css/Articles-Badges.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="icon" href="assets/img/logoonlymikecomputer-01.png" type="image/x-icon">
</head>

<?php
$notify = '';
$notifyClass = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!empty($email) && !empty($name) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $notify = 'Email anda salah. Silahkan masukkan alamat email dengan benar!';
            $notifyClass = 'errordiv';
        } else {
            $toEmail = 'info@gungmichael.my.id';
            $emailSubject = 'Pesan dari '.$name;
            $htmlContent = '<h2>via Form Kontak Website</h2>
                            <h4>Nama</h4><p>'.$name.'</p>
                            <h4>Email</h4><p>'.$email.'</p>
                            <h4>Message</h4><p>'.$message.'</p>';

            $headers = "Mike Studios Mailing System 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $headers.= 'From: ' .$name.'<'.$email.'>'."\r\n";

            if (mail($toEmail, $emailSubject, $htmlContent,$headers)) {
                $notify = 'Pesan anda terkirim dengan Sukses!';
                $notifyClass = 'succdiv';
            } else {
                $notify = 'Maaf! Pesan anda Gagal Terkirim, coba lagi!';
                $notifyClass = 'errordiv';
            }
        }
    } else {
        $notify = 'Harap mengisi semua field data';
        $notifyClass = 'errordiv';
    }
}
?>

<body style="/*background: url(&quot;design.jpg&quot;);*/background-position: 0 -60px;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/">
                </span><span>Mike Swisnandya</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="competences.php">Competences</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacts">Contacts</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-primary-gradient pt-5">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <p class="fw-bold text-success mb-2">Create more Innovation</p>
                        <h1 class="fw-bold">All Activity on One Pages</h1>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="position-relative" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-15%, 35%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.8" src="assets/img/products/3_1.jpg"></div>
                        <div style="position: relative;flex: 0 0 45%;transform: translate3d(-5%, 20%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.4" src="assets/img/products/2_1.jpg"></div>
                        <div style="position: relative;flex: 0 0 60%;transform: translate3d(0, 0%, 0);"><img class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.25" src="assets/img/products/1_1.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container py-4 py-xl-5">
            <h1 class="mb-5 text-center mx-auto">About Me</h1>
            <div class="row mb-5">
                <div class="col-6 col-xxl-5 offset-xxl-1 text-center"><img class="rounded img-fluid d-block align-items-xxl-center" sizes="80%" src="assets/img/me.jpg"></div>
                <div class="col-md-6 col-xl-6 text-center mx-auto">
                    <p class="fs-5 w-lg-50"><span style="color: rgb(138, 138, 138);">I Gusti Agung Michael Swisnandya is a student who is enthusiastic about photography and videography. Since the age of four years he has known technology from his father, ranging from computer equipment to the current device that he learned self-taught because at that time IT teachers were still not many. Everything can not be separated because of a very high desire to explore something new and suitable for him. Therefore, all his efforts are never in vain because of his persistence what he wants he can achieve even though the way to achieve it is not as easy as others think.</span><br><br></p>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="col-md-2 col-xl-6 text-center mx-auto mb-5">
                    <p class="fw-bold text-success mb-2">Experiences</p>
                    <h3 class="fw-bold">What is My Experiences?</h3>
                </div>
    <div class="row mb-2">
      <div class="col-md-6">
        <h3 class="fw-bold">Job & Internship Experience</h3>
        <div class="container">
    <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
          Founder · Mike Computer
        </a>
      </div>
      <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            <h5 class="card-title">Founder</h5>
            <p>Mike Computer · Self Employment</p>
            <small class="text-muted">Jan 2022 - Present</small><br>
            <small class="text-muted">Singaraja, Bali, Indonesia · On Site</small>
          </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
        Freelance · Balipuspanews.com
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            <h5 class="card-title">Freelance Videographer</h5>
            <p>Balipuspanews.com · Freelancer</p>
            <small class="text-muted">Oct 2020 - Jan 2021 · 4 mos</small><br>
            <small class="text-muted">Gianyar, Bali, Indonesia · Hybrid</small>
          </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
        Internship · Gusde Photography
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            <h5 class="card-title">Video Editor Internship</h5>
            <p>Gusde Photography · Internship</p>
            <small class="text-muted">Jan 2020 - 2023 · 3 mos</small><br>
            <small class="text-muted">Denpasar, Bali, Indonesia · On Site</small>
          </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseFour">
        Internship · Tribun Bali
        </a>
      </div>
      <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
        <div class="card-body">
            <h5 class="card-title">Graphic Design Internship</h5>
            <p>Tribun Bali · Internship</p>
            <small class="text-muted">Oct 2019 - Dec 2019 · 3 mos</small><br>
            <small class="text-muted">Gianyar, Bali, Indonesia · On Site</small>
        </div>
      </div>
    </div>
  </div>
</div>

      </div>
      <div class="col-md-6">
    <div class="row">
      <div class="col-md-6">
        <h3 class="fw-bold">Technical Skills</h3>
        <small>Photography</small>
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">92%</div>
        </div>
        <small>Videography</small>
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
        </div>
        <small>Graphic Design</small>
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
      </div>
      <div class="col-md-6">
        <h3 class="fw-bold">Soft Skills</h3>
        <small>Communication</small>
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
        </div>
        <small>Problem Solving</small>
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
        </div>
        <small>Teamworks</small>
        <div class="progress mb-2">
          <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
        </div>
      </div>
    </div>
      </div>
      <div class="row gy-4">
        <div class="col-md-6">
          <h3 class="fw-bold">Education</h3>
          <div class="container">
    <div id="accordion1">
    <div class="card">
      <div class="card-header">
        <a class="btn" data-bs-toggle="collapse" href="#collapseSt">
        Bachelor · Universitas Pendidikan Ganesha
        </a>
      </div>
      <div id="collapseSt" class="collapse" data-bs-parent="#accordion1">
      <div class="card-body">
            <h5 class="card-title">Informatics Education</h5>
            <p>Students · Bachelor Programme</p>
            <small class="text-muted">Jul 2021 - Present</small><br>
            <small class="text-muted">GPA 3,86</small><br>
            <small class="text-muted">Singaraja, Bali, Indonesia</small>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseNd">
        High School · SMK Negeri 1 Denpasar
      </a>
      </div>
      <div id="collapseNd" class="collapse" data-bs-parent="#accordion1">
      <div class="card-body">
            <h5 class="card-title">Multimedia</h5>
            <p>Graduate · Vocational High School</p>
            <small class="text-muted">Jul 2018 - Jun 2021</small><br>
            <small class="text-muted">Denpasar, Bali, Indonesia</small>
          </div>
      </div>
    </div>
  </div>
</div>
        </div>


        <div class="col-md-6">
          <h3 class="fw-bold">Volunteer Experience</h3>
          <ul>
            <li>TBA</li>
            <li>TBA</li>
            <li>TBA</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

        <div class="container bg-primary-gradient py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Competence</p>
                    <h3 class="fw-bold">What can I do?</h3>
                </div>
            </div>
            <div class="py-5 p-lg-5">
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-camera-fill">
                                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"></path>
                                    </svg></div>
                                <h5 class="fw-bold card-title">Photographer</h5>
                                <p class="text-muted card-text mb-4">I have been in the field of photography for the last 6 years, many portfolios that I have produced during this time.</p><button class="btn btn-primary shadow" sr type="button"><a href="https://www.instagram.com/gungmichael">Learn more</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-camera-video-fill">
                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z"></path>
                                    </svg></div>
                                <h5 class="fw-bold card-title">Videographer</h5>
                                <p class="text-muted card-text mb-4">It's just a hobby, but often accepts videography offers when asked by clients.</p><button class="btn btn-primary shadow" type="button"><a href="https://www.youtube.com/watch?v=XZLFUHNPJu8&list=PL6PZBIekQVMtTyKaDTtIEbImmvphon6Cp">Learn more</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pc-display">
                                        <path fill-rule="evenodd" d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"></path>
                                    </svg></div>
                                <h5 class="fw-bold card-title">PC Repairer</h5>
                                <p class="text-muted card-text mb-4">I really like tinkering with computers, I've dealt with various problems, either hardware problems or software problems.</p><button class="btn btn-primary shadow" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon" style="top: 1rem;right: 1rem;position: absolute;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-card-image">
                                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"></path>
                                    </svg></div>
                                <h5 class="fw-bold card-title">Graphic Designer</h5>
                                <p class="text-muted card-text mb-4">My taste in design prioritizes layout composition accompanied by aesthetics in order to give an impression to the reader.</p><button class="btn btn-primary shadow" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="photo-gallery py-4 py-xl-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>Gallery</h2>
                    </div>
                </div>
                <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">
                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="assets/img/yeyo4.jpg"></a></div>
                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="assets/img/products/1_1.jpg"></a></div>
                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="assets/img/products/yeyo.jpg"></a></div>
                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="assets/img/products/crehaprojects.jpg"></a></div>
                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="assets/img/products/yeyo3.jpg"></a></div>
                    <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="assets/img/products/yeyo2.jpg"></a></div>
                </div>
            </div>
        </section>
    </section>
    <section></section>
    <section></section>
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2" id="contacts">Contacts</p>
                    <h2 class="fw-bold">How you can reach us</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" action="<?php $_SERVER['PHP_SELF']?>" method="post">
                            <?php if (!empty($notify)) { ?>
                                <p class="notify <?php echo !empty($notifyClass)?$notifyClass:''; ?><?php echo $notify; ?>"></p>
                            <?php } ?>
                            <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Name"></div>
                            <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="Email"></div>
                            <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea></div>
                            <div><button class="btn btn-primary shadow d-block w-100" id="submit" type="submit">Send </button></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4 d-flex justify-content-center justify-content-xl-start">
                    <div class="d-flex flex-wrap flex-md-column justify-content-md-start align-items-md-start h-100">
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Phone</h6>
                                <p class="text-muted mb-0">+628xxxxxxxxxxx</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">E-mail</h6>
                                <a href="mailto:info@gungmichael.my.id" target="_parent" class="text-muted mb-0">info@gungmichael.my.id</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-circle bs-icon-primary shadow d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon bs-icon-md"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                                    <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282z"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="fw-bold mb-0">Location</h6>
                                <p class="text-muted mb-0">Singaraja, Bali</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-primary-gradient">
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6 fw-bold">Services</h3>
                    <ul class="list-unstyled">
                        <li><a href="#contacts">Contacts</a></li>
                        <li><a href="http://www.google.com/policies/privacy">Privacy Policy</a></li>
                        <li><a href="sitemap.xml">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="fs-6 fw-bold">Other Sites</h3>
                    <ul class="list-unstyled">
                        <li><a href="https://blog.gungmichael.my.id/">Blog</a></li>
                        <li><a href="https://repair.gungmichael.my.id/">Mike Computer</a></li>
                        <li><a href="https://jokiby.gungmichael.my.id/">Joki by Gung Michael</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 offset-xl-2 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                    <div class="fw-bold d-flex align-items-center mb-2">
                            </svg></span><span>Mike Swisnandya</span></div>
                    <p class="text-muted copyright">Make everything better</p>
                </div>
            </div>
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Mike Swisnandya</p>
                <ul class="list-inline mb-0">
                    <a class="list-inline-item" href="https://www.facebook.com/gungmichael" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg></a>
                    <a class="list-inline-item" href="https://www.twitter.com/mikeswisnandya" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg></a>
                    <a class="list-inline-item" href="https://www.instagram.com/gungmichael" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg></a>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
</body>

</html>

