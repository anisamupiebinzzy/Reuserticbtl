<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan UI Web Reuserticbtl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    /* halaman 1 */
    
    .image2{
        width: 389px;
        height: 285.933px;
        flex-shrink: 0;
        background: url(image1), lightgray 50% / cover no-repeat;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25), 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
        }
    .image3{
      width: 594.553px;
      height: 386.58px;
      transform: rotate(-0.104deg);
      flex-shrink: 0;
      background: url(<image3>), lightgray 50% / cover no-repeat;
      margin-top: px;
      margin-left: px;
      margin-right: px;
      margin-bottom: px;

    }
    #services {
    background-color: #FFFFFF;
    padding: 40px 0;
}
/* SERVICE */
.service {
    text-align: center;
    margin: 20px;
}
.service img {
    width: 100%;
    max-width: 200px;
    height: auto;
}
.service h3 {
    margin: 10px 0;
    lex-shrink: 0; 
    color: #000; 
    font-family: Encode Sans Expanded; 
    font-size: 25px; 
    font-style: normal; 
    font-weight: 600;
    line-height: normal;
}
.service p {
    color: #777;
}
/* GAMBAR */
    .image4{
      width: 250px;
      height: 250px;
      flex-shrink: 0;
      border-radius: 20px;
      background: url(<image4>), lightgray 50% / cover no-repeat;
      margin-top: -390px;
      margin-left: px;
      margin-right: px;
      margin-bottom: px;
    }
    .image5{
      width: 250px;
      height: 250px;
      flex-shrink: 0;
      border-radius: 20px;
      background: url(<image5>), lightgray 50% / cover no-repeat;
      margin-top: -400px;
      margin-left: 213px;
      margin-right: 1049px;
      margin-bottom: 800px;
    }
/* ROLE/PERAN */
.peran {
    text-align: center;
    margin: 20px;
}

.peran img {
  width: 250px;
      height: 250px;
      flex-shrink: 0;
      background: url(<customer>), lightgray 50% / cover no-repeat;
      margin-top: -550px;
      margin-bottom: 99px;
}

/* ANGGOTA TEAM */
#team {
    background-color: #f4f4f4;
    padding: 40px 0;
}

.team-member {
    text-align: center;
    margin: 20px;
}

.team-member img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
}

.team-member h3 {
    margin: 10px 0;
}

.team-member p {
    color: #777;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-white bg-white color="#">
        <div class="container-fluid">
           <!-- Logo -->
           <a class="navbar-brand" href="#">
                <img src="{{ asset('image/reuserlogo.png') }}" alt="Logo" height="70">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" style="display: flex; flex-grow: 0; justify-content: flex-end; align-items: flex-end;" id="mynavbar">
            <ul class="navbar-nav me-auto ">


              <li class="nav-item">

            <tr> </tr>
                <a class="nav-link" href="javascript:void(0)">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Role</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">About</a>
              </li>
              <li class="nav-item">
                <a href="/signup"class="nav-link" href="javascript:void(0)">Sign Up</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    <!-- HALAMAN 1 -->
    <section>
    <div class="banner w-100 vh-100 d-flex justify-content-center">
            <div class="container ">
                <div class="row">
                    <H1 style="height: 128.435px; flex-shrink: 0; color: #395144; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25); font-family: Kanit; font-size: 100px; font-style: normal; font-weight: 700; line-height: normal;">REUSERTICBTL</H1>
                    <p style="width: 401px; height: 330px; flex-shrink: 0; color: #FFF; font-family: Encode Sans Expanded; font-size: 25px; font-style: normal; font-weight: 500; line-height: normal;">Berbagai cara REUSERTICBTL membantu di kehidupan anda dalam memanfaatkan limbah plastik dan kaca sehari-hari yang anda hasilkan. Menciptakan sebuah mahakarya yang indah. Jadilah manusia yang sadar terhadap bumi akan sampah-sampah yang tidak dapat terurai.</p>
                </div>
            </div>
    </div>
    <br></br>
    <br></br>
    <br></br>
</section>
    <!-- HALAMAN 2 -->
    <section>
            <div class="container">
                <div class="row">
                    <p style="width: 377px; color: #000; font-family: Encode Sans Expanded; font-size: 25px; font-style: normal; font-weight: 600; line-height: normal;">Mulailah mengumpulkan limbah sampah plastikmu sendiri!</p>
                </div>
</div>
            <div class="container">
                 <img src="{{ asset('image/image2.jpeg') }}" class="image2">
                 <img src="{{ asset('image/image3.jpeg') }}" class="image3">
</div>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
</section>
<section id="services">
        <div class="container">
            <h2 style="width: 912px; height: 128.435px; flex-shrink: 0; color: #395144; text-align: align-left; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25); font-family: Kanit; font-size: 100px; font-style: normal; font-weight: 700; line-height: normal;">OUR SERVICE</h2>

            <div class="service">
                <img src="{{ asset('image/membeli.jpg') }}" alt="Service 1">
                <h3>Pengen belanja macam-macam kerajinan?</h3>
                <p>Temukan dan beli kerajinan hasil karya sang pengrajin</p>
            </div>

            <div class="service">
                <img src="{{ asset('image/uang.jpg') }}" alt="Service 2">
                <h3>Pengen untung?</h3>
                <p>Dapatkan keuntungan dengan menukar sampah plastik yang ada di rumahmu</p>
            </div>

            <div class="service">
                <img src="{{ asset('image/pekerjaan.jpg') }}" alt="Service 2">
                <h3>Pengen jadi distributor/pengrajin</h3>
                <p>Ciptakan lapang pekerjaanmu disini!</p>
            </div>

            <!-- Add more services as needed -->

        </div>
    </section>

    <section>
            <div class="container">
                <h1 class="" style="width: 864px; height: 199.992px; flex-shrink: 0; margin-top: 150px; margin-left: 463px; margin-right: 185px; margin-bottom: 0px; color: #395144; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25); font-family: Kanit; font-size: 100px; font-style: normal; font-weight: 700; line-height: normal;">CIPTAKAN PERAN</h1 class="h1">
                <br></br>
                <br></br>
                <p style="width: 450px; height: 141px; flex-shrink: 0; margin-left: 650px; margin-right: 300px; color: #000; text-align: right; font-family: Encode Sans Expanded; font-size: 25px; font-style: normal; font-weight: 600;line-height: normal;">Mari berperan menjadi pahlawan di berbagai peran yang ada. Pilih peran anda sesuai dengan kemampuan anda!</p>
                <img src="{{ asset('image/image4.png') }}" class="image4">
                <img src="{{ asset('image/image5.jpg') }}" class="image5">

                <h1 style="width: 980px; height: 128.88px; flex-shrink: 0;  margin-top: -680px;
      margin-left: 92px;
      margin-right: 100px;
      margin-bottom: 0px; color: #4E6C50; text-align: center; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25); font-family: Kanit; font-size: 95px; font-style: normal; font-weight: 700; line-height: normal;">Mau Sebagai Apa?</h1> 

          <div class="row px-5" style="justify-content:space-between;">
            <div class="col-md-4" style="text-align:center;">
              <div><img src="{{ asset('image/customer.png') }}" class="customer" width="250px" height="250px"></div>
              <div style="margin: 10px 0; lex-shrink: 0; color: #000; font-family: Encode Sans Expanded; font-size: 25px; font-style: normal; font-weight: 600; line-height: normal;"class="px-auto">Customer</div>
            </div>
            <div style="margin: 10px 0; lex-shrink: 0; color: #000; font-family: Encode Sans Expanded; font-size: 25px; font-style: normal; font-weight: 600; line-height: normal;" class="col-md-4" style="text-align:center;">
            <img src="{{ asset('image/distributor.png') }}" class="distributor" width="250px" height="250px">
              <div class="px-auto">Distributor</div>
            </div>
            <div style="margin: 10px 0;
lex-shrink: 0; 
    color: #000; 
    font-family: Encode Sans Expanded; 
    font-size: 25px; 
    font-style: normal; 
    font-weight: 600;
    line-height: normal; "class="col-md-4" style="text-align:center;">
            <img src="{{ asset('image/pengrajin.png') }}" class="pengrajin" width="250px" height="250px">
              <div class="px-auto">Pengrajin</div>
            </div>
          </div>


            </div>
<!-- <br></br>
<br></br>
<br></br> -->

        <div class="container">
            
</div>
        <div class="container">
          
        </div> 
</div>
</section>
            <!-- Social Proof Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">What Our Customers Say</h2>
        
        <!-- Testimonial 1 -->
        <div class="card mb-3">
            <div class="card-body">
                <blockquote class="blockquote">
                    <p>Reuserticbtl has transformed the way I think about waste management. Great initiative!</p>
                    <footer class="blockquote-footer">John Doe</footer>
                </blockquote>
            </div>
        </div>
  </div>
  <section id="team">
        <div class="container">
            <h2>Our Team Husterad Website</h2>

            <div class="team-member">
                <img src="{{ asset('image/anisa.jpeg') }}" alt="Team Member 1">
                <h3>Anisa Zahra Mufidah</h3>
                <p>Sysadmin</p>
            </div>

            <div class="team-member">
                <img src="{{ asset('image/celine.jpg') }}" alt="Team Member 2">
                <h3>Mareta Marcelina</h3>
                <p>Husler</p>
            </div>
            
            <div class="team-member">
                <img src="{{ asset('image/putri.jpeg') }}" alt="Team Member 3">
                <h3>Putri Kartika</h3>
                <p>Hipster</p>
            </div>

            <!-- Add more team members as needed -->

        </div>
    </section>
</body>
</html>










