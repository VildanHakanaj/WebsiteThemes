<?php 
  require_once('../private/init.php');

  $title = "Home";

  include('../private/shared/header.php');
?>
        <div class="container">
        <!-- Main Content -->
        <div class="row grey lighten-4 mtb-100">
          <div class="col s12 m6">
            <div class="card">
              <div class="card-image">
                <img src="https://images.unsplash.com/photo-1481740586420-804cc4418700?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1600&h=900&fit=crop&ixid=eyJhcHBfaWQiOjF9&s=bd359c1805bd252c27e92cd4b1b3b951">
                <span class="card-title">Live Life And Dont Worry</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">edit</i></a>
              </div>
              <div class="card-content">
                <ul class="collection">
                  <li class="collection-item"><div>Friends<a href="#!" class="secondary-content"><span class="blue badge white-text">12</span></a></div></li>
                  <li class="collection-item"><div>Lists<a href="#!" class="secondary-content"><span class="red badge white-text">6</span></a></div></li>
                  <li class="collection-item"><div>Total wish<a href="#!" class="secondary-content"><span class="teal badge white-text">30</span></a></div></li>
                </ul>
              </div>
            </div>
          </div> 
          <div class="col s12 m6">
            <ul class="collection">
              <li class="collection-item"><div>Shopping List<span class="badge teal lighten-1 white-text">12 Items</span></div></li>
              <li class="collection-item"><div>Christmas List<span class="badge teal lighten-1 white-text">3 Items</span></div></li>
              <li class="collection-item"><div>Wedding List<span class="badge teal lighten-1 white-text">7 Items</span></div></li>
            </ul>
            <ul class="collection with-header">
              <li class="collection-header"><h4>Shopping List</h4></li>
              <li class="collection-item">
                <div>
                   <a href="wishDetails.html" class="black-text">Iphone x</a>
                   <a href="deleteWish.php?id=4" class="secondary-content"><i class="material-icons">delete</i></a>
                   <a href="editWish.php?id=3" class="secondary-content"><i class="material-icons">edit</i></a>
                </div>
              </li>
              <li class="collection-item">
                <div>
                   <a href="wishDetails.html" class="black-text">Asus Rog 1070</a>
                   <a href="deleteWish.php?id=4" class="secondary-content"><i class="material-icons">delete</i></a>
                   <a href="editWish.php?id=3" class="secondary-content"><i class="material-icons">edit</i></a>
                </div>
              </li>
              <li class="collection-item">
                <div>
                   <a href="wishDetails.html" class="black-text">Ps4</a> 
                   <a href="deleteWish.php?id=4" class="secondary-content"><i class="material-icons">delete</i></a>
                   <a href="editWish.php?id=3" class="secondary-content"><i class="material-icons">edit</i></a>
                </div>
              </li>
              <li class="collection-item">
                <div>
                   <a href="wishDetails.htlm" class="black-text">Sound System</a>
                   <a href="deleteWish.php?id=4" class="secondary-content"><i class="material-icons">delete</i></a>
                   <a href="editWish.php?id=3" class="secondary-content"><i class="material-icons">edit</i></a>
                </div>
              </li>
            </ul>
          </div> 
        </div> <!--First Row-->
      </div>
        <!-- End of main content -->
        <?php include('../private/shared/footer.php');?>