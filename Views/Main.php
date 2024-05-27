<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Vue Navigation Drawer</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<template id="vuenavbar">
  <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" 
            type="button" 
            data-toggle="collapse"
            data-target="#navbarContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="brand-icon hidden-md-down" v-on:click="toggleNavDrawer">
      <i class="ion-social-codepen-outline"></i>
    </a>
    <a class="navbar-brand">Brand</a>
    <div class="collapse navbar-collapse" id="navbarContent">
      <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-orange my-2 my-sm-0" type="submit"><i class="ion-search"></i> Search</button>
      </form>
      <ul class="nav hidden-sm-up">
        <li class="nav-item active">
          <a class="nav-link"><i class="ion-clipboard"></i> Charts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"> <i class="ion-map"></i> Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"> <i class="ion-ios-settings-strong"></i> Settings</a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<template id="navdrawer">
  <div id="navdrawer-container" v-bind:class="open ? 'nav-open' : 'nav-closed'">
    <transition name="left-nav">
      <div id="vue-navdrawer" v-show="open" class="hidden-md-down">
        <slot name="drawer-content"></slot>
       </div>
    </transition>
    <div id="vue-navcontent">
      <slot name="main-content"></slot>
    </div>
  </div>
</template>

<div id="example">
  <vue-navbar></vue-navbar>
  <nav-drawer v-bind:open="open">
    <div slot="drawer-content">
      <ul class="nav flex-column">
        <li class="nav-item active">
          <a class="nav-link">
            <i class="ion-clipboard"></i> Charts
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link">
            <i class="ion-map"></i> Location
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link">
            <i class="ion-ios-settings-strong"></i> Settings
          </a>
        </li>
      </ul>
    </div>
    <div slot="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col" v-for="item in items">
            <div class="card">
              <div class="card-block">
                <p><i :class="item"></i></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav-drawer>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script><script  src="./script.js"></script>

</body>
</html>
