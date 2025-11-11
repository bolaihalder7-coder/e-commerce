
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Smart Gadget</title>
  <!-- Bootstrap CSS  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  nav{
    background-color: rgb(230, 105, 232);
    color: rgb(57, 76, 95);
  }

</style>
<body>
<nav class="navbar fixed-top navbar-expand-lg " style="height:85px; font-size: 20px;">
  <div class="container-fluid">
    <h4><a class="navbar-brand" href="#">My Webpage </a></h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <h4><a class="nav-link active" aria-current="page" href="#">Home</a></h4>
        </li>
        <h4><li class="nav-item">
          <a class="nav-link" href="#">Features</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="#">Pricing</a></h4>
        </li>
        <h4><li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul></h4>
        </li>
      </ul>
    </div>
    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search" action="search.php" method="GET">
    <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search" required/>
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

  </div>
</nav>
  </div>
</nav> <br><br><br><br>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <h2 style="text-align: center;">Smart Gadget</h2>
      <img src="Screenshot 2025-09-17 171452 (1).png" class="d-block w-40" alt="pic1">
    </div>
    <div class="carousel-item">
      <h2 style="text-align: center;">Smart Gadget</h2>
      <img src="Screenshot 2025-09-17 173141 (1).png" class="d-block w-40" alt="pic2">
    </div>
    <div class="carousel-item">
      <h2 style="text-align: center;">Smart Gadget</h2>
      <img src="Smart-Watch-Catagory-Banner-9529 (1) (1).jpeg" class="d-block w-40" alt="pic2">
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">privase</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


 <div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        
        <img src="laptop9 (1).jpg" alt="pic" style="width: 300px;">
        <h5 class="card-title">Dell</h5>
        <p class="card-text">Processor: AMD Ryzen 5 7520U (2.8 GHz up to 4.3 GHz)</p>
        <p class="card-text">RAM: 8GB LDDR5 5500MT/s, Storage: 512GB SSD</p>
        <p class="card-text">Display: 15.6" FHD (1920x1080), 250 nits, 45% NTSC</p>
        <p class="card-text">Product Prize : BDT 96,000 tk</p>
        <a href="sell.php" class="btn btn-primary">Buy Now</a>
        <a href="products.php" class="btn btn-primary">Add to card</a>
      </div>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <h5 class="card-title"></h5>
  <img src="lap10.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lenevo</h5>
    <p class="card-text">Processor: Intel Celeron N4500 2C, 2T, 4MB L3 Cache, Up to 2.8 GHz </p>
    <p class="card-text">RAM: 8GB DDR4, Storage: 256GB PCIe NMe M.2 SSD</p>
    <p class="card-text">Display: 14" FHD (1920 x 1080) 250nits</p>
    <p class="card-text">Product Prize : BDT 90,000 tk </p>
    <a href="sell.php" class="btn btn-primary">Buy Now</a>
    <a href="products.php" class="btn btn-primary">Add to card</a>
  </div>
</div>
  <div class="card" style="width: 18rem;">
  <img src="download (1).jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">HP</h5>
    <p class="card-text">Processor: AMD Ryzen 3 7320U (4 MB Cache, 2.4 GHz up to 4.1 GHz10 cores)</p>
    <p class="card-text">RAM: 8GB LDDR5 5500MHz, Storage: 512GB SSD</p>
    <p class="card-text">Display: 15.6" FHD (1920x1080) Anti Glare</p>
    <p class="card-text">Product Prize : BDT 60,000 tk</p>
    <a href="sell.php" class="btn btn-primary">Buy Now</a>
    <a href="products.php" class="btn btn-primary">Add to card</a>
  </div>
</div>
  
    <div class="card" style="width: 18rem;">
  <img src="laptop5.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Macbook</h5>
    <p class="card-text">Processor: Intel Core i5-1335U (up to 4.6 GHz, 12 MB L3 cache10 cores)</p>
    <p class="card-text">RAM: 8 GB DDR4 3200MHz, Storage: 512GB PCIe SSD</p>
    <p class="card-text">Display: 14" FHD (1920 x 1080) IPS</p>
    <p class="card-text">Product Prize : BDT 1,20,000 tk</p>
    <a href="sell.php" class="btn btn-primary">Buy Now</a>
    <a href="products.php" class="btn btn-primary">Add to card</a>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <img src="phone8.webp" alt="pic" style="width: 300px;">
        <h4 class="card-title">iPhone 15 Pro Max</h4>
        <p class="card-text">OS :	iOS 17, upgradable to iOS 17.4</p>
        <p class="card-text">Memory:	256GB | 512GB | 1TB</p>
        <p class="card-text">Product Prize : BDT 1,45,500 tk</p>
        <a href="sell.php" class="btn btn-primary">Buy Now</a>
        <a href="products.php" class="btn btn-primary">Add to card</a>
      </div>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="phone5.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">iPhone 15 Pro</h4>
    <p class="card-text">OS:	iOS 17, upgradable to iOS 17.4</p>
    <p class="card-text">Memory:	128GB    256GB | 512GB | 1TB</p>
    <p class="card-text">Product Prize : BDT 1,45,500 tk</p>
    <a href="sell.php" class="btn btn-primary">Buy Now</a>
    <a href="products.php" class="btn btn-primary">Add to card</a>
  </div>
</div>
  <div class="card" style="width: 18rem;">
  <img src="phone6.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">iPhone 14 Pro</h4>
    <p class="card-text">OS:iOS 15,upgradable to iOS  17.4 </p>
    <p class="card-text">Memory:128GB 512GB 6GB RAM |1TB 6GB RAM</p>
    <p class="card-text">Product Prize : BDT 1,20,000 tk</p>
    <a href="sell.php" class="btn btn-primary">Buy Now</a>
    <a href="products.php" class="btn btn-primary">Add to card</a>
  </div>
</div>
    <div class="card" style="width: 18rem;">
  <img src="phone7.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-title">iPhone 16 Pro Max</h4>
    <p class="card-text">OS:	iOS 18, upgradable to iOS 18.5</p>
    <p class="card-text">Memory Ram	256GB, 512GB, 1TB</p>
    <p class="card-text">Product Prize : BDT 1,52,000 tk</p>
    <a href="sell.php" class="btn btn-primary">Buy Now</a>
    <a href="products.php" class="btn btn-primary">Add to card</a>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <img src="smart 6.webp" alt="pic" style="width: 300px;">
        <h5 class="card-title">Smart Watch</h5>
        <p class="card-text">Amazfit Pop 3R BT Calling Smart Watch </p>
        <p class="card-text">Product Prize : BDT 1,500 tk</p>
        <a href="sell.php" class="btn btn-primary">Buy Now</a>
        <a href="products.php" class="btn btn-primary">Add to card</a>
      </div>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="smart10.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> Smart Watch</h5>
    <p class="card-text">Smart Watch Stainless Steel Straps for Samsung</p>
    <p class="card-text">Product Prize : BDT 2,000 tk</p>
    <a href="sell.php" class="btn btn-primary">Buy Now</a>
    <a href="products.php" class="btn btn-primary">Add to card</a>
  </div>
</div>
  <div class="card" style="width: 18rem;">
  <img src="smart7.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Smart Watch</h5>
    <p class="card-text">Smart Watch Metal Strap for Galaxy Watch Ultra</p>
    <p class="card-text">Product Prize : BDT 1,800 tk</p>
    <a href="sell.php" class="btn btn-primary">Buy Now</a>
    <a href="products.php" class="btn btn-primary">Add to card</a>
  </div>
</div>
    <div class="card" style="width: 18rem;">
  <img src="smart8.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Smart Watch</h5>
    <p class="card-text">Smart Watch Strap - New Nike Sport Band</p>
    <p class="card-text">Product Prize : BDT 1,500 tk</p>
    <a href="sell.php" class="btn btn-primary">Buy Now</a>
    <a href="products.php" class="btn btn-primary">Add to card</a>
  </div>
</div>
      </div>
    </div>
  </div>
</div>

  <div class="container my-5">
    <h2 class="text-center mb-4">Contact: Bolai Halder</h2>
   
  <footer class="py-4">
    <div class="container text-center">
      <p class="mb-0">&copy; Smart Gadget's Store. All Time Service.</p>
      <p>Developed by <a href="#">Bolai Halder</a></p>
    </div>
  </footer>

<footer style="text-align: center; font-size: 30px; background-color: black; color: azure;">

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>